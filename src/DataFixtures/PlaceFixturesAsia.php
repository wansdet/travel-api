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

class PlaceFixturesAsia extends Fixture implements DependentFixtureInterface, FixtureGroupInterface
{
    use DataFixturesTrait;

    private array $places = [
        [
            'placeName' => 'Tokyo',
            'slug' => 'tokyo',
            'countryRegion' => 'Japan',
            'countryCode' => 'JP',
            'briefDescription' => 'Experience the vibrant metropolis of Tokyo, blending modernity and tradition with its bustling streets, high-tech innovations, and historic temples.',
        ],
        [
            'placeName' => 'Bali',
            'slug' => 'bali',
            'countryRegion' => 'Indonesia',
            'countryCode' => 'ID',
            'briefDescription' => 'Escape to Bali\'s paradise, boasting stunning beaches, lush rice terraces, and a rich cultural heritage that entices travelers from around the world.',
        ],
        [
            'placeName' => 'Kyoto',
            'slug' => 'kyoto',
            'countryRegion' => 'Japan',
            'countryCode' => 'JP',
            'briefDescription' => 'Discover the captivating beauty of Kyoto, Japan, with its traditional wooden houses, enchanting temples, and exquisite gardens.',
        ],
        [
            'placeName' => 'Seoul',
            'slug' => 'seoul',
            'countryRegion' => 'South Korea',
            'countryCode' => 'KR',
            'briefDescription' => 'Experience the perfect blend of ancient traditions and modernity in Seoul. Explore vibrant neighborhoods, palaces, and indulge in delicious street food.',
        ],
        [
            'placeName' => 'Singapore',
            'slug' => 'singapore',
            'countryRegion' => 'Singapore',
            'countryCode' => 'SG',
            'briefDescription' => 'Discover a cosmopolitan paradise with futuristic architecture, lush gardens, vibrant street markets, and a fusion of diverse cultures creating a dynamic travel experience.',
        ],
        [
            'placeName' => 'Bangkok',
            'slug' => 'bangkok',
            'countryRegion' => 'Thailand',
            'countryCode' => 'TH',
            'briefDescription' => 'Immerse in a sensory journey of bustling street markets, ornate temples, spicy street food, and a vibrant nightlife in this captivating city of contrasts.',
        ],
        [
            'placeName' => 'Hong Kong',
            'slug' => 'hong-kong',
            'countryRegion' => 'Hong Kong',
            'countryCode' => 'HK',
            'briefDescription' => 'A bustling metropolis blending East and West, offering an enchanting skyline, vibrant street markets, iconic Victoria Harbour, and a rich cultural tapestry to explore.',
        ],
        [
            'placeName' => 'Beijing',
            'slug' => 'beijing',
            'countryRegion' => 'China',
            'countryCode' => 'CN',
            'briefDescription' => 'Unravel the ancient wonders of Beijing, from the majestic Great Wall to the Forbidden City, and savor traditional cuisine in this historical and vibrant capital city.',
        ],
        [
            'placeName' => 'Kuala Lumpur',
            'slug' => 'kuala-lumpur',
            'countryRegion' => 'Malaysia',
            'countryCode' => 'MY',
            'briefDescription' => 'Experience a dynamic cityscape with towering skyscrapers, bustling markets, cultural diversity, and delectable cuisine, making it an enticing destination for travelers from around the globe.',
        ],
        [
            'placeName' => 'Mumbai',
            'slug' => 'mumbai',
            'countryRegion' => 'India',
            'countryCode' => 'IN',
            'briefDescription' => 'Embrace the city of dreams with its bustling energy, historic landmarks, diverse culture, and coastal charm, offering a vibrant mix of tradition and modernity.',
        ],
        [
            'placeName' => 'Phuket',
            'slug' => 'phuket',
            'countryRegion' => 'Thailand',
            'countryCode' => 'TH',
            'briefDescription' => 'Indulge in paradise with pristine beaches, crystal-clear waters, vibrant nightlife, and a plethora of water activities, making Phuket a tropical haven for beach lovers.',
        ],
        [
            'placeName' => 'Hanoi',
            'slug' => 'hanoi',
            'countryRegion' => 'Vietnam',
            'countryCode' => 'VN',
            'briefDescription' => 'Indulge in paradise with pristine beaches, crystal-clear waters, vibrant nightlife, and a plethora of water activities, making Phuket a tropical haven for beach lovers.',
        ],
        [
            'placeName' => 'Shanghai',
            'slug' => 'shanghai',
            'countryRegion' => 'China',
            'countryCode' => 'CN',
            'briefDescription' => 'Unleash the modernity and heritage of Shanghai with its iconic skyline, historic Bund, ancient temples, and vibrant urban life, making it an intriguing global city.',
        ],
        [
            'placeName' => 'Jaipur',
            'slug' => 'jaipur',
            'countryRegion' => 'India',
            'countryCode' => 'IN',
            'briefDescription' => 'Experience the royal heritage of the Pink City, with majestic palaces, vibrant bazaars, and stunning architecture, immersing visitors in the rich history of Rajasthan.',
        ],
        [
            'placeName' => 'Istanbul',
            'slug' => 'istanbul',
            'countryRegion' => 'Turkey',
            'countryCode' => 'TR',
            'briefDescription' => 'Embrace the magic of East meets West in Istanbul, where ancient mosques, grand bazaars, and breathtaking palaces collide, offering a journey through history and culture.',
        ],
        [
            'placeName' => 'Kathmandu',
            'slug' => 'kathmandu',
            'countryRegion' => 'Nepal',
            'countryCode' => 'NP',
            'briefDescription' => 'Immerse in the mystical charm of Kathmandu\'s ancient temples, stupas, and vibrant streets, set against the breathtaking backdrop of the Himalayas, making it a spiritual and cultural gem.',
        ],
        [
            'placeName' => 'Osaka',
            'slug' => 'osaka',
            'countryRegion' => 'Japan',
            'countryCode' => 'JP',
            'briefDescription' => 'Delight in Osaka\'s gastronomic wonders, vibrant street culture, historical landmarks, and the enchanting Osaka Castle, offering a lively and unforgettable experience in Japan\'s kitchen.',
        ],
        [
            'placeName' => 'Chiang Mai',
            'slug' => 'chiang-mai',
            'countryRegion' => 'Thailand',
            'countryCode' => 'TH',
            'briefDescription' => 'Discover the cultural heart of Thailand in Chiang Mai, with its ornate temples, lush mountains, lively night markets, and a warm and welcoming atmosphere.',
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
