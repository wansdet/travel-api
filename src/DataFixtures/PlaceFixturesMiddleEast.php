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

class PlaceFixturesMiddleEast extends Fixture implements DependentFixtureInterface, FixtureGroupInterface
{
    use DataFixturesTrait;

    private array $places = [
        [
            'placeName' => 'Bahrain',
            'slug' => 'bahrain',
            'countryRegion' => 'Middle East',
            'countryCode' => 'BH',
            'briefDescription' => 'Explore the Kingdom of Bahrain, an island nation with a rich history, modern architecture, bustling souks, and a vibrant cultural scene, offering a blend of tradition and progress.',
        ],
        [
            'placeName' => 'Cairo',
            'slug' => 'cairo',
            'countryRegion' => 'Middle East',
            'countryCode' => 'EG',
            'briefDescription' => 'Discover the iconic pyramids of Giza, explore the Egyptian Museum, and experience the bustling energy of Cairo, Egypt\'s vibrant capital city.',
        ],
        [
            'placeName' => 'Luxor',
            'slug' => 'luxor',
            'countryRegion' => 'Middle East',
            'countryCode' => 'EG',
            'briefDescription' => 'Unravel the ancient treasures of Luxor\'s archaeological sites, including the Karnak and Luxor Temples, and the Valley of the Kings, showcasing Egypt\'s captivating history.',
        ],
        [
            'placeName' => 'Aswan',
            'slug' => 'aswan',
            'countryRegion' => 'Middle East',
            'countryCode' => 'EG',
            'briefDescription' => 'Sail the Nile River in Aswan, visit the majestic Philae Temple, and experience the serene ambiance of Elephantine Island, offering a tranquil oasis in Egypt\'s southernmost city.',
        ],
        [
            'placeName' => 'Jordan',
            'slug' => 'jordan',
            'countryRegion' => 'Middle East',
            'countryCode' => 'JO',
            'briefDescription' => 'Step into history and wonder with Petra\'s ancient city carved into rose-red cliffs, explore the vast desert of Wadi Rum, and float in the mineral-rich Dead Sea.',
        ],
        [
            'placeName' => 'Kuwait',
            'slug' => 'kuwait',
            'countryRegion' => 'Middle East',
            'countryCode' => 'KW',
            'briefDescription' => 'Embrace Kuwait\'s modern skyline, visit the iconic Kuwait Towers, explore the vibrant Souq Al-Mubarakiya, and experience the rich cultural heritage of this Gulf country.',
        ],
        [
            'placeName' => 'Lebanon',
            'slug' => 'lebanon',
            'countryRegion' => 'Middle East',
            'countryCode' => 'LB',
            'briefDescription' => 'Experience the diverse beauty of Lebanon, from historic sites like Baalbek and Byblos to the stunning coastal city of Beirut, offering a blend of culture, history, and natural landscapes.',
        ],
        [
            'placeName' => 'Oman',
            'slug' => 'oman',
            'countryRegion' => 'Middle East',
            'countryCode' => 'OM',
            'briefDescription' => 'Discover the Arabian Peninsula\'s hidden gem with its ancient forts, stunning wadis, majestic mountains, and pristine beaches, offering a captivating blend of tradition and natural beauty.',
        ],
        [
            'placeName' => 'Qatar',
            'slug' => 'qatar',
            'countryRegion' => 'Middle East',
            'countryCode' => 'QA',
            'briefDescription' => 'Experience the modernity of Doha\'s skyline, immerse in traditional souqs, explore the Museum of Islamic Art, and enjoy the desert dunes and coastal delights of this Gulf nation.',
        ],
        [
            'placeName' => 'Saudi Arabia',
            'slug' => 'saudi-arabia',
            'countryRegion' => 'Middle East',
            'countryCode' => 'SA',
            'briefDescription' => 'Uncover the rich heritage of Saudi Arabia with the historical city of Makkah, the ancient Nabatean city of Al-Ula, and futuristic Riyadh\'s modern charm, offering a blend of tradition and progress.',
        ],
        [
            'placeName' => 'United Arab Emirates',
            'slug' => 'united-arab-emirates',
            'countryRegion' => 'Middle East',
            'countryCode' => 'AE',
            'briefDescription' => 'Embrace the dynamic UAE with Dubai\'s iconic skyscrapers, Abu Dhabi\'s cultural treasures, Sharjah\'s art and heritage, and the serene beaches of Fujairah and Ras Al Khaimah.',
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
