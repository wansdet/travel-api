<?php

declare(strict_types=1);

namespace App\DataFixtures;

use App\Factory\CountryFactory;
use App\Factory\PlaceFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class PlaceFixtures extends Fixture implements DependentFixtureInterface
{
    private array $places = [
        /*
        [
            'placeName' => '',
            'slug' => '',
            'countryRegion' => '',
            'countryCode' => '',
            'briefDescription' => '',
            'longDescription' => '',
            'travelInformation' => '',
            'bestTimeToVisit' => '',
            'thingsToDo' => '',
            'accommodation' => '',
            'food' => '',
            'tags' => '',
            'imageTags' => '',
            'ranking' => 1,
            'worldRanking' => 1,
            'sortOrder' => 1,
        ],
        [
            'placeName' => '',
            'slug' => '',
            'countryRegion' => '',
            'countryCode' => '',
            'briefDescription' => '',
            'longDescription' => '',
            'travelInformation' => '',
            'bestTimeToVisit' => '',
            'thingsToDo' => '',
            'accommodation' => '',
            'food' => '',
            'tags' => '',
            'imageTags' => '',
            'ranking' => 2,
            'worldRanking' => 2,
            'sortOrder' => 2,
        ],
        [
            'placeName' => '',
            'slug' => '',
            'countryRegion' => '',
            'countryCode' => '',
            'briefDescription' => '',
            'longDescription' => '',
            'travelInformation' => '',
            'bestTimeToVisit' => '',
            'thingsToDo' => '',
            'accommodation' => '',
            'food' => '',
            'tags' => '',
            'imageTags' => '',
            'ranking' => 3,
            'worldRanking' => 3,
            'sortOrder' => 3,
        ],
        [
            'placeName' => '',
            'slug' => '',
            'countryRegion' => '',
            'countryCode' => '',
            'briefDescription' => '',
            'longDescription' => '',
            'travelInformation' => '',
            'bestTimeToVisit' => '',
            'thingsToDo' => '',
            'accommodation' => '',
            'food' => '',
            'tags' => '',
            'imageTags' => '',
            'ranking' => 4,
            'worldRanking' => 4,
            'sortOrder' => 4,
        ],
        [
            'placeName' => '',
            'slug' => '',
            'countryRegion' => '',
            'countryCode' => '',
            'briefDescription' => '',
            'longDescription' => '',
            'travelInformation' => '',
            'bestTimeToVisit' => '',
            'thingsToDo' => '',
            'accommodation' => '',
            'food' => '',
            'tags' => '',
            'imageTags' => '',
            'ranking' => 5,
            'worldRanking' => 5,
            'sortOrder' => 5,
        ],
        [
            'placeName' => '',
            'slug' => '',
            'countryRegion' => '',
            'countryCode' => '',
            'briefDescription' => '',
            'longDescription' => '',
            'travelInformation' => '',
            'bestTimeToVisit' => '',
            'thingsToDo' => '',
            'accommodation' => '',
            'food' => '',
            'tags' => '',
            'imageTags' => '',
            'ranking' => 6,
            'worldRanking' => 6,
            'sortOrder' => 6,
        ],
        [
            'placeName' => '',
            'slug' => '',
            'countryRegion' => '',
            'countryCode' => '',
            'briefDescription' => '',
            'longDescription' => '',
            'travelInformation' => '',
            'bestTimeToVisit' => '',
            'thingsToDo' => '',
            'accommodation' => '',
            'food' => '',
            'tags' => '',
            'imageTags' => '',
            'ranking' => 7,
            'worldRanking' => 7,
            'sortOrder' => 7,
        ],
        [
            'placeName' => '',
            'slug' => '',
            'countryRegion' => '',
            'countryCode' => '',
            'briefDescription' => '',
            'longDescription' => '',
            'travelInformation' => '',
            'bestTimeToVisit' => '',
            'thingsToDo' => '',
            'accommodation' => '',
            'food' => '',
            'tags' => '',
            'imageTags' => '',
            'ranking' => 8,
            'worldRanking' => 8,
            'sortOrder' => 8,
        ],
        [
            'placeName' => '',
            'slug' => '',
            'countryRegion' => '',
            'countryCode' => '',
            'briefDescription' => '',
            'longDescription' => '',
            'travelInformation' => '',
            'bestTimeToVisit' => '',
            'thingsToDo' => '',
            'accommodation' => '',
            'food' => '',
            'tags' => '',
            'imageTags' => '',
            'ranking' => 9,
            'worldRanking' => 9,
            'sortOrder' => 9
        ],
        [
            'placeName' => '',
            'slug' => '',
            'countryRegion' => '',
            'countryCode' => '',
            'briefDescription' => '',
            'longDescription' => '',
            'travelInformation' => '',
            'bestTimeToVisit' => '',
            'thingsToDo' => '',
            'accommodation' => '',
            'food' => '',
            'tags' => '',
            'imageTags' => '',
            'ranking' => 10,
            'worldRanking' => 10,
            'sortOrder' => 10,
        ],
         */
    ];

    public function getDependencies(): array
    {
        return [
            CountryFixtures::class,
        ];
    }

    public function load(ObjectManager $manager): void
    {
        $placeIndex = 1;

        PlaceFactory::createSequence(
            function () use (&$placeIndex) {
                foreach ($this->places as $place) {
                    yield [
                        'placeName' => $place['placeName'],
                        'slug' => $place['slug'],
                        'countryRegion' => $place['countryRegion'],
                        'briefDescription' => $place['briefDescription'],
                        'longDescription' => $place['longDescription'],
                        'travelInformation' => $place['travelInformation'],
                        'bestTimeToVisit' => $place['bestTimeToVisit'],
                        'thingsToDo' => $place['thingsToDo'],
                        'accommodation' => $place['accommodation'],
                        'food' => $place['food'],
                        'tags' => explode(', ', $place['tags']),
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
