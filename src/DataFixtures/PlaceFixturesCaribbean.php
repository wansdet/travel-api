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

class PlaceFixturesCaribbean extends Fixture implements DependentFixtureInterface, FixtureGroupInterface
{
    use DataFixturesTrait;

    private array $places = [
        [
            'placeName' => 'Aruba',
            'slug' => 'aruba',
            'countryRegion' => 'Caribbean',
            'countryCode' => 'AW',
            'briefDescription' => 'A Caribbean paradise with pristine beaches, turquoise waters, and a sunny climate year-round. Enjoy water sports, explore Arikok National Park, and indulge in vibrant local culture.',
        ],
        [
            'placeName' => 'Barbados',
            'slug' => 'barbados',
            'countryRegion' => 'Caribbean',
            'countryCode' => 'BB',
            'briefDescription' => 'A tropical gem with white-sand beaches, crystal-clear waters, and friendly locals. Immerse in Bajan culture, visit historic sites, and savor delicious Caribbean cuisine.',
        ],
        [
            'placeName' => 'Bahamas',
            'slug' => 'bahamas',
            'countryRegion' => 'Caribbean',
            'countryCode' => 'BS',
            'briefDescription' => 'A stunning archipelago with turquoise waters, sandy beaches, and vibrant marine life. Experience island hopping, water sports, and the charm of Nassau\'s colonial heritage.',
        ],
        [
            'placeName' => 'Jamaica',
            'slug' => 'jamaica',
            'countryRegion' => 'Caribbean',
            'countryCode' => 'JM',
            'briefDescription' => 'A captivating Caribbean island with reggae beats, lush rainforests, and pristine beaches. Explore Dunn\'s River Falls, enjoy jerk cuisine, and experience the warm hospitality of the locals.',
        ],
        [
            'placeName' => 'Dominican Republic',
            'slug' => 'dominican-republic',
            'countryRegion' => 'Caribbean',
            'countryCode' => 'DO',
            'briefDescription' => 'A tropical paradise with idyllic beaches, lush landscapes, and vibrant culture. Discover historic Santo Domingo, explore Punta Cana\'s resorts, and embrace the rhythms of merengue and bachata.',
        ],
        [
            'placeName' => 'Puerto Rico',
            'slug' => 'puerto-rico',
            'countryRegion' => 'Caribbean',
            'countryCode' => 'PR',
            'briefDescription' => 'An enchanting island with a rich blend of history, culture, and natural beauty. Explore Old San Juan\'s cobblestone streets, relax on stunning beaches, and enjoy the vibrant nightlife.',
        ],
        [
            'placeName' => 'Havana',
            'slug' => 'havana',
            'countryRegion' => 'Caribbean',
            'countryCode' => 'CU',
            'briefDescription' => 'Dive into the vibrant capital city, Havana, with its colorful architecture, classic cars, and lively salsa rhythms, offering a captivating blend of history and charm.',
        ],
        [
            'placeName' => 'Varadero',
            'slug' => 'varadero',
            'countryRegion' => 'Caribbean',
            'countryCode' => 'CU',
            'briefDescription' => 'Relax on the white-sand beaches of Varadero, known for its turquoise waters, all-inclusive resorts, and water sports, creating a perfect tropical escape.',
        ],
        [
            'placeName' => 'Viñales Valle',
            'slug' => 'viñales-valle',
            'countryRegion' => 'Caribbean',
            'countryCode' => 'CU',
            'briefDescription' => 'Explore the picturesque Viñales Valley, a UNESCO World Heritage site, with its stunning landscapes, tobacco farms, and limestone mogotes, offering a serene and rural retreat.',
        ],
        [
            'placeName' => 'Antigua and Barbuda',
            'slug' => 'antigua-and-barbuda',
            'countryRegion' => 'Caribbean',
            'countryCode' => 'AG',
            'briefDescription' => 'Embrace paradise on two islands—Antigua with its pristine beaches, water sports, and historic sites, and Barbuda, an untouched gem with pink sand beaches and wildlife sanctuaries.',
        ],
        [
            'placeName' => 'Turks and Caicos Islands',
            'slug' => 'turks-and-caicos-islands',
            'countryRegion' => 'Caribbean',
            'countryCode' => 'TC',
            'briefDescription' => 'Experience a tropical paradise with turquoise waters, coral reefs, and luxury resorts. Enjoy world-class diving, pristine beaches, and the vibrant Grace Bay in Providenciales.',
        ],
        [
            'placeName' => 'Cayman Islands',
            'slug' => 'cayman-islands',
            'countryRegion' => 'Caribbean',
            'countryCode' => 'KY',
            'briefDescription' => 'Discover a Caribbean jewel with world-class diving, breathtaking beaches, and the famous Seven Mile Beach. Explore Stingray City and indulge in delectable seafood.',
        ],
        [
            'placeName' => 'Trinidad and Tobago',
            'slug' => 'trinidad-and-tobago',
            'countryRegion' => 'Caribbean',
            'countryCode' => 'TT',
            'briefDescription' => 'Experience a vibrant blend of cultures, festivals, and lively calypso music in Trinidad, while Tobago offers serene beaches, diving, and lush rainforests for nature enthusiasts.',
        ],
        [
            'placeName' => 'Grenada',
            'slug' => 'grenada',
            'countryRegion' => 'Caribbean',
            'countryCode' => 'GD',
            'briefDescription' => 'Known as the "Spice Isle," Grenada captivates with its fragrant nutmeg and cinnamon plantations, beautiful beaches, and the picturesque capital, St. George\'s, with its colorful houses.',
        ],
        [
            'placeName' => 'Saint Kitts and Nevis',
            'slug' => 'saint-kitts-and-nevis',
            'countryRegion' => 'Caribbean',
            'countryCode' => 'KN',
            'briefDescription' => 'Explore the charms of these twin islands with lush rainforests, historic landmarks like Brimstone Hill Fortress, and golden beaches perfect for relaxation and adventure.',
        ],
        [
            'placeName' => 'Saint Vincent and the Grenadines',
            'slug' => 'saint-vincent-and-the-grenadines',
            'countryRegion' => 'Caribbean',
            'countryCode' => 'VC',
            'briefDescription' => 'Explore the charms of these twin islands with lush rainforests, historic landmarks like Brimstone Hill Fortress, and golden beaches perfect for relaxation and adventure.',
        ],
        [
            'placeName' => 'Martinique',
            'slug' => 'martinique',
            'countryRegion' => 'Caribbean',
            'countryCode' => 'MQ',
            'briefDescription' => 'Discover a tropical paradise with volcanic landscapes, secluded coves, and crystal-clear waters ideal for sailing and snorkeling, offering a serene escape in the Caribbean.',
        ],
        [
            'placeName' => 'Bermuda',
            'slug' => 'bermuda',
            'countryRegion' => 'Caribbean',
            'countryCode' => 'BM',
            'briefDescription' => 'A stunning island with pink-sand beaches, turquoise waters, and British charm. Explore historic landmarks, indulge in water activities, and experience the island\'s unique blend of cultures.',
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
