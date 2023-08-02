<?php

declare(strict_types=1);

namespace App\DataFixtures;

use App\Entity\User;
use App\Factory\UserFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class UserFixtures extends Fixture implements DependentFixtureInterface, FixtureGroupInterface
{
    public function getDependencies(): array
    {
        return [
            CountryFixtures::class,
        ];
    }

    public static function getGroups(): array
    {
        return ['place', 'place_image', 'all'];
    }

    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();
        $faker->seed(1234);
        $beginDays = 1095; // 3 years

        // Create internal users
        UserFactory::createSequence(
            [
                [
                    'email' => 'admin@example.com',
                    'password' => 'Guestbook123',
                    'firstName' => 'Jane',
                    'lastName' => 'Admin',
                    'middleName' => 'Elizabeth',
                    'sex' => User::SEX_FEMALE,
                    'roles' => [User::ROLE_ADMIN],
                    'status' => User::USER_STATUS_ACTIVE,
                    'createdAt' => $faker->dateTimeInInterval('-' . $beginDays . ' days', '+ 1 day'),
                    'createdBy' => 'SYSTEM',
                ],
                [
                    'email' => 'editor@example.com',
                    'firstName' => 'Lizzie',
                    'lastName' => 'Editor',
                    'middleName' => 'Jane',
                    'sex' => User::SEX_FEMALE,
                    'roles' => [User::ROLE_EDITOR],
                    'status' => User::USER_STATUS_ACTIVE,
                    'createdAt' => $faker->dateTimeInInterval('-' . ($beginDays - 1) . ' days', '+ 1 day'),
                    'createdBy' => 'SYSTEM',
                ],
                [
                    'email' => 'moderator@example.com',
                    'firstName' => 'Kelly',
                    'lastName' => 'Moderator',
                    'middleName' => 'Anne',
                    'sex' => User::SEX_FEMALE,
                    'roles' => [User::ROLE_MODERATOR],
                    'status' => User::USER_STATUS_ACTIVE,
                    'createdAt' => $faker->dateTimeInInterval('-' . ($beginDays - 2) . ' days', '+ 1 day'),
                    'createdBy' => 'SYSTEM',
                ],
            ]
        );
    }
}
