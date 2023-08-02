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

class PlaceFixturesAfrica extends Fixture implements DependentFixtureInterface, FixtureGroupInterface
{
    use DataFixturesTrait;

    private array $places = [
        [
            'placeName' => 'Okavango Delta',
            'slug' => 'okavango-delta',
            'countryRegion' => 'Botswana',
            'countryCode' => 'BW',
            'briefDescription' => 'The Okavango Delta is a vast inland river delta in northern Botswana. It\'s known for its sprawling grassy plains, which flood seasonally, becoming a lush animal habitat. The Moremi Game Reserve occupies the east and central areas of the region. Here, dugout canoes are used to navigate past hippos, elephants and crocodiles. On dry land, wildlife includes lions, leopards, giraffes and rhinos.',
        ],
        [
            'placeName' => 'Maasai Mara National Reserve',
            'slug' => 'maasai-mara-national-reserve',
            'countryRegion' => 'Kenya',
            'countryCode' => 'KE',
            'briefDescription' => 'The Maasai Mara National Reserve is a large game reserve in Narok County, Kenya, contiguous with the Serengeti National Park in Mara Region, Tanzania. It is named in honor of the Maasai people, the ancestral inhabitants of the area, who migrated to the area from the Nile Basin.',
        ],
        [
            'placeName' => 'Marrakech',
            'slug' => 'marrakech',
            'countryRegion' => 'Morocco',
            'countryCode' => 'MA',
            'briefDescription' => 'Marrakesh, a former imperial city in western Morocco, is a major economic center and home to mosques, palaces and gardens. The medina is a densely packed, walled medieval city dating to the Berber Empire, with mazelike alleys where thriving souks sell traditional textiles, pottery and jewelry. A symbol of the city, and visible for miles, is the Moorish minaret of 12th-century Koutoubia Mosque.',
        ],
        [
            'placeName' => 'Sahara Desert',
            'slug' => 'sahara-desert',
            'countryRegion' => 'Morocco',
            'countryCode' => 'MA',
            'briefDescription' => 'Embark on a desert adventure in the vast Sahara, riding camels, camping under starry skies, and witnessing the majestic dunes at sunrise and sunset.',
        ],
        [
            'placeName' => 'Port Louis',
            'slug' => 'port-louis',
            'countryRegion' => 'Mauritius',
            'countryCode' => 'MU',
            'briefDescription' => 'Port Louis is the capital city of Mauritius, in the Indian Ocean. It\'s known for its French colonial architecture and the 19th-century Champ de Mars horse-racing track. The Caudan Waterfront is a lively dining and shopping precinct. Nearby, vendors sell local produce and handicrafts at the huge Central Market. The Blue Penny Museum focuses on the island\'s colonial and maritime history, along with its culture.',
        ],
        [
            'placeName' => 'Malé',
            'slug' => 'male',
            'countryRegion' => 'Maldives',
            'countryCode' => 'MV',
            'briefDescription' => 'Malé is the densely populated capital of the Maldives, an island nation in the Indian Ocean. It\'s known for its mosques and colorful buildings. The Islamic Centre (Masjid-al-Sultan Muhammad Thakurufaanu Al Auzam) features a mosque, a library and a distinct',
        ],
        [
            'placeName' => 'Praslin',
            'slug' => 'praslin',
            'countryRegion' => 'Seychelles',
            'countryCode' => 'SC',
            'briefDescription' => 'Praslin Island is a tropical paradise known for its breathtaking beaches, lush jungles, and the UNESCO-listed Vallée de Mai, home to rare Coco de Mer palms. Ideal for nature lovers and beach enthusiasts.',
        ],
        [
            'placeName' => 'Tunis',
            'slug' => 'tunis',
            'countryRegion' => 'Tunisia',
            'countryCode' => 'TN',
            'briefDescription' => 'Explore the vibrant capital city with its ancient medina, Carthage ruins, and the Bardo Museum, offering a blend of history, culture, and culinary delights.',
        ],
        [
            'placeName' => 'Sidi Bou Said',
            'slug' => 'sidi-bou-said',
            'countryRegion' => 'Tunisia',
            'countryCode' => 'TN',
            'briefDescription' => 'Wander through the picturesque blue and white streets of Sidi Bou Said, a charming coastal town with stunning sea views and artistic flair.',
        ],
        [
            'placeName' => 'Serengeti National Park',
            'slug' => 'serengeti-national-park',
            'countryRegion' => 'Tanzania',
            'countryCode' => 'TZ',
            'briefDescription' => 'Witness the iconic Great Migration, spot the Big Five, and experience an unparalleled safari adventure in the vast plains of the Serengeti.',
        ],
        [
            'placeName' => 'Zanzibar',
            'slug' => 'zanzibar',
            'countryRegion' => 'Tanzania',
            'countryCode' => 'TZ',
            'briefDescription' => 'Relax on the idyllic beaches, explore Stone Town\'s rich history, and immerse in the vibrant culture and spices of Zanzibar.',
        ],
        [
            'placeName' => 'Mount Kilimanjaro,',
            'slug' => 'mount-kilimanjaro',
            'countryRegion' => 'Tanzania',
            'countryCode' => 'TZ',
            'briefDescription' => 'Conquer Africa\'s highest peak, Mount Kilimanjaro, and embark on a challenging yet rewarding trek through diverse ecosystems to reach the summit.',
        ],
        [
            'placeName' => 'Cape Town',
            'slug' => 'cape-town',
            'countryRegion' => 'South Africa',
            'countryCode' => 'ZA',
            'briefDescription' => 'Discover the vibrant city of Cape Town, nestled between Table Mountain and the sea, offering a blend of natural beauty, diverse culture, and top-notch cuisine.',
        ],
        [
            'placeName' => 'Kruger National Park',
            'slug' => 'kruger-national-park',
            'countryRegion' => 'South Africa',
            'countryCode' => 'ZA',
            'briefDescription' => 'Embark on a thrilling safari adventure in Kruger National Park, renowned for its incredible wildlife diversity and exceptional game-viewing opportunities.',
        ],
        [
            'placeName' => 'Victoria Falls',
            'slug' => 'victoria-falls',
            'countryRegion' => 'Zimbabwe',
            'countryCode' => 'ZW',
            'briefDescription' => 'Witness the awe-inspiring Victoria Falls, one of the world\'s largest waterfalls, and enjoy thrilling activities such as bungee jumping and white-water rafting.',
        ],
        [
            'placeName' => 'South Luangwa National Park',
            'slug' => 'south-luangwa-national-park',
            'countryRegion' => 'Zambia',
            'countryCode' => 'ZM',
            'briefDescription' => 'Embark on an unforgettable safari experience in South Luangwa National Park, known for its diverse wildlife, including leopards, elephants, and lions.',
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
