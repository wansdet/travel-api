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
use Symfony\Component\Uid\Uuid;

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
        return ['country', 'place', 'place_image', 'all'];
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
                    'email' => 'admin1@example.com',
                    'firstName' => 'Jane',
                    'lastName' => 'Richards',
                    'middleName' => 'Elizabeth',
                    'sex' => User::SEX_FEMALE,
                    'roles' => [User::ROLE_ADMIN],
                    'status' => User::USER_STATUS_ACTIVE,
                    'createdAt' => $faker->dateTimeInInterval('-'.$beginDays.' days', '+ 1 day'),
                    'createdBy' => 'SYSTEM',
                    'userId' => Uuid::fromString('607093b1-e702-4618-8ac9-52cf52afc9fb'),
                ],
                [
                    'email' => 'admin2@example.com',
                    'firstName' => 'David',
                    'lastName' => 'Williams',
                    'middleName' => '',
                    'sex' => User::SEX_MALE,
                    'roles' => [User::ROLE_ADMIN],
                    'status' => User::USER_STATUS_ACTIVE,
                    'createdAt' => $faker->dateTimeInInterval('-'.$beginDays.' days', '+ 1 day'),
                    'createdBy' => 'SYSTEM',
                    'userId' => Uuid::fromString('f878ec83-5956-46c5-8678-16688378738e'),
                ],
                [
                    'email' => 'editor1@example.com',
                    'firstName' => 'Lizzie',
                    'lastName' => 'Jones',
                    'middleName' => '',
                    'sex' => User::SEX_FEMALE,
                    'roles' => [User::ROLE_EDITOR],
                    'status' => User::USER_STATUS_ACTIVE,
                    'createdAt' => $faker->dateTimeInInterval('-'.($beginDays - 1).' days', '+ 1 day'),
                    'createdBy' => 'SYSTEM',
                    'userId' => Uuid::fromString('0c9bda34-4a8a-4364-9f4c-0578dbad85e8'),
                ],
                [
                    'email' => 'editor2@example.com',
                    'firstName' => 'Kevin',
                    'lastName' => 'McDonald',
                    'middleName' => 'John',
                    'sex' => User::SEX_MALE,
                    'roles' => [User::ROLE_EDITOR],
                    'status' => User::USER_STATUS_ACTIVE,
                    'createdAt' => $faker->dateTimeInInterval('-'.($beginDays - 1).' days', '+ 1 day'),
                    'createdBy' => 'SYSTEM',
                    'userId' => Uuid::fromString('28b2915e-d054-46d4-bc0b-b674eebfad30'),
                ],
                [
                    'email' => 'moderator1@example.com',
                    'firstName' => 'Kelly',
                    'lastName' => 'Stephens',
                    'middleName' => 'Anne',
                    'sex' => User::SEX_FEMALE,
                    'roles' => [User::ROLE_MODERATOR],
                    'status' => User::USER_STATUS_ACTIVE,
                    'createdAt' => $faker->dateTimeInInterval('-'.($beginDays - 2).' days', '+ 1 day'),
                    'createdBy' => 'SYSTEM',
                    'userId' => Uuid::fromString('98e2d981-dfb5-4258-a14f-e2bc9260345f'),
                ],
                [
                    'email' => 'moderator2@example.com',
                    'firstName' => 'Richard',
                    'lastName' => 'Harris',
                    'middleName' => '',
                    'sex' => User::SEX_MALE,
                    'roles' => [User::ROLE_MODERATOR],
                    'status' => User::USER_STATUS_ACTIVE,
                    'createdAt' => $faker->dateTimeInInterval('-'.($beginDays - 2).' days', '+ 1 day'),
                    'createdBy' => 'SYSTEM',
                    'userId' => Uuid::fromString('b0c7840e-b12e-4798-8ba2-6e2debf648b8'),
                ],
                [
                    'email' => 'user1@example.com',
                    'firstName' => 'Mary',
                    'lastName' => 'Smith',
                    'middleName' => 'Jane',
                    'sex' => User::SEX_FEMALE,
                    'roles' => [User::ROLE_USER],
                    'status' => User::USER_STATUS_ACTIVE,
                    'createdAt' => $faker->dateTimeInInterval('-'.($beginDays - 10).' days', '+ 1 day'),
                    'createdBy' => 'SYSTEM',
                    'userId' => Uuid::fromString('0b9cc91f-c6e1-45cc-a3ce-a4bf4c8b84b7'),
                ],
                [
                    'email' => 'user2@example.net',
                    'firstName' => 'John',
                    'lastName' => 'Richards',
                    'middleName' => 'Henry',
                    'sex' => User::SEX_MALE,
                    'status' => User::USER_STATUS_ACTIVE,
                    'createdAt' => $faker->dateTimeInInterval('-'.($beginDays - 11).' days', '+ 1 day'),
                    'createdBy' => 'SYSTEM',
                    'userId' => Uuid::fromString('cb980fc0-92fc-48c3-9a8c-06006be3131d'),
                ],
                [
                    'email' => 'user.3@example.org',
                    'firstName' => 'Catherine',
                    'lastName' => 'Jones',
                    'middleName' => 'Elena',
                    'sex' => User::SEX_FEMALE,
                    'roles' => [User::ROLE_USER],
                    'status' => User::USER_STATUS_PENDING,
                    'createdAt' => $faker->dateTimeInInterval('-'.($beginDays - 12).' days', '+ 1 day'),
                    'createdBy' => 'SYSTEM',
                    'userId' => Uuid::fromString('520bd486-00fe-4248-9275-74901ec1c325'),
                ],
                [
                    'email' => 'user.4@example.com',
                    'firstName' => 'Christopher',
                    'lastName' => 'Parry',
                    'middleName' => '',
                    'sex' => User::SEX_MALE,
                    'status' => User::USER_STATUS_ON_HOLD,
                    'createdAt' => $faker->dateTimeInInterval('-'.($beginDays - 13).' days', '+ 1 day'),
                    'createdBy' => 'SYSTEM',
                    'userId' => Uuid::fromString('df8c44a0-fcef-470c-9d9e-978345264a93'),
                ],
                [
                    'email' => 'user.5@example.net',
                    'firstName' => 'Theresa',
                    'lastName' => 'McDonald',
                    'middleName' => '',
                    'sex' => User::SEX_FEMALE,
                    'roles' => [User::ROLE_USER],
                    'status' => User::USER_STATUS_SUSPENDED,
                    'createdAt' => $faker->dateTimeInInterval('-'.($beginDays - 14).' days', '+ 1 day'),
                    'createdBy' => 'SYSTEM',
                    'userId' => Uuid::fromString('12d4a5a3-701c-4a91-a61a-87c20c42bd61'),
                ],
                [
                    'email' => 'user.6@example.com',
                    'firstName' => 'Nicholas',
                    'lastName' => 'Morris',
                    'middleName' => 'Kevin',
                    'sex' => User::SEX_MALE,
                    'status' => User::USER_STATUS_ACTIVE,
                    'createdAt' => $faker->dateTimeInInterval('-'.($beginDays - 15).' days', '+ 1 day'),
                    'createdBy' => 'SYSTEM',
                    'userId' => Uuid::fromString('718e62a2-5f85-4da5-9524-61df1aa989a7'),
                ],
            ]
        );

        $testUsersBeginDays = $beginDays - 30;
        $totalOtherUsers = 50;
        $otherUsersBeginDays = $testUsersBeginDays - $totalOtherUsers;

        // Create other users
        UserFactory::createSequence(
            static function () use ($faker, $otherUsersBeginDays, $totalOtherUsers) {
                foreach (range(7, $totalOtherUsers) as $i) {
                    $sexSelect = $faker->randomElement(['male', 'female']);

                    if ('male' === $sexSelect) {
                        $firstName = $faker->firstNameMale();
                        $sex = User::SEX_MALE;
                    } else {
                        $firstName = $faker->firstNameFemale();
                        $sex = User::SEX_FEMALE;
                    }

                    $lastName = $faker->lastName();
                    $email = strtolower('user.'.$i.'@'.$faker->safeEmailDomain());

                    yield [
                        'email' => $email,
                        'firstName' => $firstName,
                        'lastName' => $lastName,
                        'middleName' => '',
                        'sex' => $sex,
                        'roles' => ['ROLE_USER'],
                        'status' => User::USER_STATUS_ACTIVE,
                        'createdAt' => $faker->dateTimeInInterval(
                            '-'.($otherUsersBeginDays - $i).' days',
                            '+ 1 day'
                        ),
                        'createdBy' => 'SYSTEM',
                    ];
                }
            }
        );
    }
}
