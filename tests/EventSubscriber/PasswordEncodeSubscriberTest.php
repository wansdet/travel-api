<?php

declare(strict_types=1);

namespace App\Tests\EventSubscriber;

use ApiPlatform\Symfony\EventListener\EventPriorities;
use App\Entity\User;
use App\EventSubscriber\PasswordEncodeSubscriber;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Event\ViewEvent;
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

/**
 * @internal
 *
 * @coversNothing
 */
final class PasswordEncodeSubscriberTest extends TestCase
{
    private UserPasswordHasherInterface $passwordEncoder;

    private PasswordEncodeSubscriber $subscriber;

    protected function setUp(): void
    {
        $this->passwordEncoder = $this->createMock(UserPasswordHasherInterface::class);
        $this->subscriber = new PasswordEncodeSubscriber($this->passwordEncoder);
    }

    public function testEncodePasswordDoesNotModifyNonUserEntities(): void
    {
        $nonUserEntity = new \stdClass();

        $event = new ViewEvent(
            $this->createMock(HttpKernelInterface::class),
            $this->createMock(Request::class),
            0,
            $nonUserEntity
        );

        $this->passwordEncoder
            ->expects(self::never())
            ->method('hashPassword');

        $this->subscriber->encodePassword($event);
    }

    public function testEncodePasswordDoesNotModifyUserOnNonPostRequest(): void
    {
        $user = new User();
        $user->setPassword('password');

        $event = new ViewEvent(
            $this->createMock(HttpKernelInterface::class),
            $this->createMock(Request::class),
            0,
            $user
        );

        $this->passwordEncoder
            ->expects(self::never())
            ->method('hashPassword');

        $this->subscriber->encodePassword($event);

        self::assertSame('password', $user->getPassword());
    }

    public function testEncodePasswordModifiesUserOnPostRequest(): void
    {
        $user = new User();
        $user->setPassword('password');

        $request = new Request([], [], [], [], [], ['REQUEST_METHOD' => 'POST']);

        $event = new ViewEvent(
            $this->createMock(HttpKernelInterface::class),
            $request,
            0,
            $user
        );

        $this->passwordEncoder
            ->expects(self::once())
            ->method('hashPassword')
            ->with($user, 'password')
            ->willReturn('hashed_password');

        $this->subscriber->encodePassword($event);

        self::assertSame('hashed_password', $user->getPassword());
    }

    public function testGetSubscribedEventsReturnsExpectedEvents(): void
    {
        $expectedEvents = [
            'kernel.view' => ['encodePassword', EventPriorities::PRE_WRITE],
        ];

        self::assertSame($expectedEvents, PasswordEncodeSubscriber::getSubscribedEvents());
    }
}
