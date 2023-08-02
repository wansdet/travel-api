<?php

declare(strict_types=1);

namespace App\DataFixtures;

use App\Factory\CountryFactory;
use App\Factory\PlaceFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class PlaceFixturesAntartica extends Fixture implements DependentFixtureInterface, FixtureGroupInterface
{
    use DataFixturesTrait;

    private array $places = [
        [
            'placeName' => 'Bouvet Island',
            'slug' => 'bouvet-island',
            'countryRegion' => 'Bouvet Island',
            'countryCode' => 'BV',
            'briefDescription' => 'Remote and uninhabited, Bouvet Island is an isolated and icy wilderness in the Southern Ocean, making it one of the most challenging destinations for adventurers and polar enthusiasts.',
        ],
        [
            'placeName' => 'French Southern Territories',
            'slug' => 'french-southern-territories',
            'countryRegion' => 'French Southern Territories',
            'countryCode' => 'TF',
            'briefDescription' => 'Comprising several remote and uninhabited islands in the southern Indian Ocean, this French territory offers untouched nature, wildlife, and stunning landscapes for intrepid travelers and scientists.',
        ],
        [
            'placeName' => 'South Georgia and the South Sandwich Islands',
            'slug' => 'south-georgia-and-the-south-sandwich-islands',
            'countryRegion' => 'South Georgia and the South Sandwich Islands',
            'countryCode' => 'GS',
            'briefDescription' => 'A remote and icy British overseas territory in the Southern Ocean, known for its dramatic landscapes, abundant wildlife, and historical whaling stations.',
        ],
    ];

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

        $placeIndex = 1000;

        PlaceFactory::createSequence(
            function () use (&$placeIndex, &$faker) {
                foreach ($this->places as $place) {
                    yield [
                        'placeName' => $place['placeName'],
                        'slug' => $place['slug'],
                        'countryRegion' => $place['countryRegion'],
                        'briefDescription' => $place['briefDescription'],
                        'longDescription' => $this->generateParagraphs(),
                        'travelInformation' => $faker->paragraphs(3, true),
                        'bestTimeToVisit' => $faker->paragraphs(3, true),
                        'thingsToDo' => $faker->paragraphs(7, true),
                        'accommodation' => $faker->paragraphs(3, true),
                        'food' => $faker->paragraphs(3, true),
                        'tags' => $faker->words(10),
                        'ranking' => $placeIndex,
                        'worldRanking' => $placeIndex,
                        'sortOrder' => $placeIndex,
                        'createdBy' => 'SYSTEM',
                        'country' => CountryFactory::find(['countryCode' => $place['countryCode']]),
                    ];
                    ++$placeIndex;
                }
            }
        );
    }
}
