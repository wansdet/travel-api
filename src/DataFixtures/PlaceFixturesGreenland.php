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

class PlaceFixturesGreenland extends Fixture implements DependentFixtureInterface, FixtureGroupInterface
{
    use DataFixturesTrait;

    private array $places = [
        [
            'placeName' => 'Ilulissat Icefjord',
            'slug' => 'ilulissat-icefjord',
            'countryRegion' => 'Greenland',
            'countryCode' => 'GL',
            'briefDescription' => 'Ilulissat Icefjord is a stunning UNESCO World Heritage site in Greenland, known for its awe-inspiring icebergs. Witness the spectacle of massive ice formations breaking off from the glacier and floating in the fjord, creating a breathtaking natural display.',
            'longDescription' => '',
            'bestTimeToVisit' => '',
            'thingsToDo' => '',
            'accommodation' => '',
            'food' => '',
            'tags' => 'Ilulissat Icefjord, Greenland, Arctic, icebergs, glacier, UNESCO World Heritage, boat tours, hiking, helicopter tours, Inuit culture, wildlife, photography, dogsledding',
            'imageTags' => 'Ilulissat Icefjord, Sermeq Kujalleq glacier, icebergs, boat tours, hiking trails, aerial view, wildlife, Inuit culture, midnight sun, kayaking, dogsledding, Arctic landscapes, scenic beauty, Greenlandic cuisine, adventure',
            'ranking' => 1,
            'worldRanking' => 1,
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Nuuk',
            'slug' => 'nuuk',
            'countryRegion' => 'Greenland',
            'countryCode' => 'GL',
            'briefDescription' => 'Nuuk, the capital city of Greenland, is a vibrant and culturally rich destination. Explore the fusion of modern amenities and traditional Inuit culture, visit museums, enjoy outdoor activities, and experience the beauty of the Arctic landscapes.',
            'longDescription' => '',
            'bestTimeToVisit' => '',
            'thingsToDo' => '',
            'accommodation' => '',
            'food' => '',
            'tags' => 'Nuuk, Greenland, Arctic, Inuit culture, nature, fjords, hiking, boat tours, museums, art, wildlife, traditional cuisine, modern city, historic sites, scenic beauty.',
            'imageTags' => 'Nuuk cityscape, Nuuk Fjord, National Museum of Greenland, Nuuk Art Museum, Mount Quassussuaq, Old Harbor, helicopter tour, Nuuk Waterfront, traditional Greenlandic cuisine, Nuuk Cathedral, Qornok Island, wildlife observation, Arctic landscapes, vibrant city life, cultural festivals.',
            'ranking' => 2,
            'worldRanking' => 2,
            'sortOrder' => 2,
        ],
        [
            'placeName' => 'Disko Island',
            'slug' => 'disko-island',
            'countryRegion' => 'Greenland',
            'countryCode' => 'GL',
            'briefDescription' => 'Disko Island, located off the west coast of Greenland, is a scenic and remote destination known for its stunning landscapes, icebergs, and opportunities for wildlife sightings. Explore the rugged beauty of the island, witness the majestic ice formations, and immerse yourself in the tranquility of the Arctic wilderness.',
            'longDescription' => '',
            'bestTimeToVisit' => '',
            'thingsToDo' => '',
            'accommodation' => '',
            'food' => '',
            'tags' => 'Disko Island, Greenland, Arctic, icebergs, wildlife, glaciers, hiking, boat tours, Inuit culture, Qeqertarsuaq, nature, photography, camping, midnight sun, Arctic flora and fauna',
            'imageTags' => 'Disko Island landscapes, icebergs, Eqip Sermia Glacier, Qeqertarsuaq town, wildlife sightings, boat tours, hiking trails, midnight sun, Inuit culture, camping, Arctic flowers, Arctic fauna, coastal views, stunning sunsets, local cuisine',
            'ranking' => 3,
            'worldRanking' => 3,
            'sortOrder' => 3,
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

        $placeIndex = 1;

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
