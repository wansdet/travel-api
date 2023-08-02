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

class PlaceFixturesCentralAmerica extends Fixture implements DependentFixtureInterface, FixtureGroupInterface
{
    use DataFixturesTrait;

    private array $places = [
        [
            'placeName' => 'Belize',
            'slug' => 'belize',
            'countryRegion' => 'Central America',
            'countryCode' => 'BZ',
            'briefDescription' => 'Embrace a diverse Caribbean experience with lush rainforests, ancient Mayan ruins, and the Belize Barrier Reef—the second-largest in the world—offering exceptional snorkeling and diving opportunities.',
        ],
        [
            'placeName' => 'Costa Rica',
            'slug' => 'costa-rica',
            'countryRegion' => 'Central America',
            'countryCode' => 'CR',
            'briefDescription' => 'A nature lover\'s paradise with rich biodiversity, lush rainforests, active volcanoes, and beautiful beaches. Enjoy eco-adventures, wildlife spotting, and immerse in the Pura Vida lifestyle.',
        ],
        [
            'placeName' => 'Guatemala',
            'slug' => 'guatemala',
            'countryRegion' => 'Central America',
            'countryCode' => 'GT',
            'briefDescription' => 'Immerse in Mayan culture with ancient ruins like Tikal, explore colonial cities like Antigua, and experience diverse landscapes with volcanoes, jungles, and picturesque lakes.',
        ],
        [
            'placeName' => 'Honduras',
            'slug' => 'honduras',
            'countryRegion' => 'Central America',
            'countryCode' => 'HN',
            'briefDescription' => 'Discover a hidden gem in Central America with ancient Mayan ruins at Copán, breathtaking Caribbean beaches in Roatán, and lush rainforests in La Mosquitia.',
        ],
        [
            'placeName' => 'Nicaragua',
            'slug' => 'nicaragua',
            'countryRegion' => 'Central America',
            'countryCode' => 'NI',
            'briefDescription' => 'Experience the beauty of Nicaragua with its stunning volcanoes, colonial cities like Granada, pristine beaches along the Pacific and Caribbean coasts, and diverse wildlife in lush rainforests.',
        ],
        [
            'placeName' => 'Panama',
            'slug' => 'panama',
            'countryRegion' => 'Central America',
            'countryCode' => 'PA',
            'briefDescription' => 'Unveil the wonders of Panama with the engineering marvel of the Panama Canal, explore historic Casco Viejo, and enjoy diverse nature in Bocas del Toro and San Blas Islands.',
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
