<?php

declare(strict_types=1);

namespace App\Tests\EventSubscriber;

use ApiPlatform\Symfony\EventListener\EventPriorities;
use App\Entity\AuthoredEntityInterface;
use App\Entity\Region;
use App\Entity\User;
use App\EventSubscriber\AuthoredEntitySubscriber;
use App\Repository\UserRepository;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Event\ViewEvent;
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;

/**
 * @internal
 *
 * @coversNothing
 */
final class AuthoredEntitySubscriberTest extends TestCase
{
    private AuthoredEntitySubscriber $subscriber;

    private TokenStorageInterface $tokenStorage;

    private UserRepository $userRepository;

    protected function setUp(): void
    {
        $this->userRepository = $this->createMock(UserRepository::class);
        $this->tokenStorage = $this->createMock(TokenStorageInterface::class);

        $this->subscriber = new AuthoredEntitySubscriber($this->userRepository, $this->tokenStorage);
    }

    public function testGetSubscribedEvents()
    {
        $subscribedEvents = AuthoredEntitySubscriber::getSubscribedEvents();

        self::assertArrayHasKey(KernelEvents::VIEW, $subscribedEvents);
        self::assertEquals(['setAuthor', EventPriorities::PRE_WRITE], $subscribedEvents[KernelEvents::VIEW]);
    }

    public function testSetAuthorWithAuthoredEntityAndNonPostOrPutRequest()
    {
        $entity = $this->createMock(AuthoredEntityInterface::class);

        $event = new ViewEvent(
            $this->createMock(HttpKernelInterface::class),
            new Request(),
            1,
            $entity
        );

        $event->setControllerResult($entity);

        $this->subscriber->setAuthor($event);

        // Expect no calls to the TokenStorageInterface or UserRepository
        $this->tokenStorage->expects(self::never())->method('getToken')->willReturn(null);
        $this->userRepository->expects(self::never())->method('findOneBy');
    }

    public function testSetAuthorWithNonAuthoredEntity()
    {
        $entity = new \stdClass();

        $event = new ViewEvent(
            $this->createMock(HttpKernelInterface::class),
            new Request(),
            1,
            $entity
        );

        $event->setControllerResult($entity);

        $this->subscriber->setAuthor($event);

        // Expect no calls to the TokenStorageInterface or UserRepository
        $this->tokenStorage->expects(self::never())->method('getToken')->willReturn(null);
        $this->userRepository->expects(self::never())->method('findOneBy');
    }

    public function testSetAuthorWithValidPostRequest()
    {
        // Create mock entities
        $user = new User();
        $user->setFirstName('Test');
        $user->setLastName('User');
        $entry = new Region();

        // Set up userRepository mock to return the user entity
        $this->userRepository
            ->expects(self::once())
            ->method('findOneBy')
            ->with(['email' => 'test@example.com'])
            ->willReturn($user);

        // Set up tokenStorage mock to return a valid token
        $token = $this->createMock(TokenInterface::class);
        $token->expects(self::once())->method('getUserIdentifier')->willReturn('test@example.com');
        $this->tokenStorage->expects(self::once())->method('getToken')->willReturn($token);

        // Set up ViewEvent mock with POST request and GuestbookEntry entity
        $request = new Request([], [], [], [], [], ['REQUEST_METHOD' => 'POST'], '{"region_code": "TEST_REGION_CODE", "name": "Test Region", "description": "Test description"}');
        $event = new ViewEvent(
            $this->createMock(HttpKernelInterface::class),
            $request,
            HttpKernelInterface::MAIN_REQUEST,
            $entry
        );

        // Call setAuthor method on AuthoredEntitySubscriber
        $this->subscriber->setAuthor($event);

        // Assert that the user is set as the author of the entity
        self::assertSame($user->getName(), $entry->getCreatedBy());
    }

    public function testSetAuthorWithValidPutRequest()
    {
        // Create mock entities
        $user = new User();
        $user->setFirstName('Test');
        $user->setLastName('User');
        $entry = new Region();

        // Set up userRepository mock to return the user entity
        $this->userRepository
            ->expects(self::once())
            ->method('findOneBy')
            ->with(['email' => 'test@example.com'])
            ->willReturn($user);

        // Set up tokenStorage mock to return a valid token
        $token = $this->createMock(TokenInterface::class);
        $token->expects(self::once())->method('getUserIdentifier')->willReturn('test@example.com');
        $this->tokenStorage->expects(self::once())->method('getToken')->willReturn($token);

        // Set up ViewEvent mock with PUT request and Region entity
        $requestData = [
            'region_code' => 'TEST_REGION_CODE',
            'name' => 'Updated Region',
            'description' => 'Updated description',
        ];

        $existingRegion = new Region();
        $existingRegion->setRegionName('Old Region Name');
        $existingRegion->setCreatedBy('Previous Author');
        $existingRegion->setUpdatedAt(new \DateTimeImmutable());

        $request = new Request([], [], [], [], [], ['REQUEST_METHOD' => 'PUT'], json_encode($requestData));
        $event = new ViewEvent(
            $this->createMock(HttpKernelInterface::class),
            $request,
            HttpKernelInterface::MAIN_REQUEST,
            $existingRegion
        );

        // Call setAuthor method on AuthoredEntitySubscriber
        $this->subscriber->setAuthor($event);

        // Assert that the user is set as the author of the entity
        self::assertSame('Test User', $existingRegion->getUpdatedBy());
        self::assertNotNull($existingRegion->getUpdatedAt());
    }

    public function testSetAuthorWithValidRequestAndNoToken(): void
    {
        $entity = $this->createMock(Region::class);

        $userRepository = $this->createMock(UserRepository::class);
        $userRepository->expects(self::never())->method('findOneBy');

        $this->tokenStorage->expects(self::once())->method('getToken')->willReturn(null);

        $request = new Request([], [], [], [], [], ['REQUEST_METHOD' => 'POST']);
        $event = new ViewEvent(
            $this->createMock(HttpKernelInterface::class),
            $request,
            1,
            $entity
        );

        $subscriber = new AuthoredEntitySubscriber($userRepository, $this->tokenStorage);
        $subscriber->setAuthor($event);

        // Expect no calls to the TokenStorageInterface or UserRepository
        $this->tokenStorage->expects(self::never())->method('getToken')->willReturn(null);
        $this->userRepository->expects(self::never())->method('findOneBy');
    }
}
