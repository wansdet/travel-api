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

class PlaceFixturesItaly extends Fixture implements DependentFixtureInterface, FixtureGroupInterface
{
    use DataFixturesTrait;

    private array $places = [
        [
            'placeName' => 'Rome',
            'slug' => 'rome',
            'countryRegion' => 'Lazio',
            'countryCode' => 'IT',
            'briefDescription' => 'The Eternal City is renowned for its ancient ruins, such as the Colosseum and Roman Forum, as well as iconic landmarks like St. Peter\'s Basilica and the Vatican Museums.',
            'longDescription' => '',
            'bestTimeToVisit' => '',
            'thingsToDo' => '',
            'accommodation' => '',
            'food' => '',
            'tags' => 'Rome, Italy, Colosseum, Vatican City, Roman Forum, Trevi Fountain, Pantheon, Spanish Steps, Piazza Navona, Vatican Museums, Ancient Rome, Italian cuisine, Gelato, Trastevere, Roman architecture',
            'imageTags' => 'Colosseum, Vatican City, Roman Forum, Trevi Fountain, Pantheon',
            'ranking' => 1,
            'worldRanking' => 1,
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Florence',
            'slug' => 'florence',
            'countryRegion' => 'Tuscany',
            'countryCode' => 'IT',
            'briefDescription' => 'Known as the birthplace of the Renaissance, Florence boasts architectural masterpieces like the Duomo and Uffizi Gallery, along with its charming streets and the famous Ponte Vecchio.',
            'longDescription' => '',
            'bestTimeToVisit' => '',
            'thingsToDo' => '',
            'accommodation' => '',
            'food' => '',
            'tags' => 'Florence, Renaissance, art, architecture, Duomo, Uffizi Gallery, Ponte Vecchio, Tuscan cuisine, museums, history, Tuscany, Italian culture',
            'imageTags' => 'Florence, Duomo, Ponte Vecchio, Uffizi Gallery, Renaissance',
            'ranking' => 2,
            'worldRanking' => 2,
            'sortOrder' => 2,
        ],
        [
            'placeName' => 'Venice',
            'slug' => 'venice',
            'countryRegion' => 'Veneto',
            'countryCode' => 'IT',
            'briefDescription' => 'With its picturesque canals and romantic ambiance, Venice captivates visitors with attractions like St. Mark\'s Square, the Doge\'s Palace, and taking a gondola ride along the Grand Canal.',
            'longDescription' => '',
            'bestTimeToVisit' => '',
            'thingsToDo' => '',
            'accommodation' => '',
            'food' => '',
            'tags' => 'Venice, canals, St. Mark\'s Square, gondolas, Grand Canal, Venetian Gothic architecture, art, Murano, Burano, Rialto Bridge, mask-making, Peggy Guggenheim Collection, Venetian cuisine, romantic',
            'imageTags' => 'Venice, gondolas, St. Mark\'s Square, canals, Rialto Bridge',
            'ranking' => 3,
            'worldRanking' => 3,
            'sortOrder' => 3,
        ],
        [
            'placeName' => 'Milan',
            'slug' => 'milan',
            'countryRegion' => 'Lombardy',
            'countryCode' => 'IT',
            'briefDescription' => 'A vibrant metropolis, Milan is renowned as a global fashion and design capital. Highlights include the magnificent Duomo, Leonardo da Vinci\'s Last Supper, and the high-end shopping district of Via Montenapoleone.',
            'longDescription' => '',
            'bestTimeToVisit' => '',
            'thingsToDo' => '',
            'accommodation' => '',
            'food' => '',
            'tags' => 'Milan, fashion, art, architecture, shopping, Duomo di Milano, Italian cuisine, nightlife, design, cultural',
            'imageTags' => 'Milan, Duomo di Milano, fashion, Navigli canals, art',
            'ranking' => 4,
            'worldRanking' => 4,
            'sortOrder' => 4,
        ],
        [
            'placeName' => 'Amalfi Coast',
            'slug' => 'amalfi-coast',
            'countryRegion' => 'Campania',
            'countryCode' => 'IT',
            'briefDescription' => 'This stunning coastal stretch in southern Italy offers breathtaking views, colorful cliffside towns like Positano and Amalfi, and the opportunity to explore the historic ruins of Pompeii and Herculaneum.',
            'longDescription' => '',
            'bestTimeToVisit' => '',
            'thingsToDo' => '',
            'accommodation' => '',
            'food' => '',
            'tags' => 'Amalfi Coast, Positano, Amalfi, Ravello, coastal beauty, Mediterranean, UNESCO World Heritage Site, cliffs, Italian cuisine, scenic drives',
            'imageTags' => 'Amalfi Coast, Positano, turquoise waters, cliffside villages, panoramic views.',
            'ranking' => 5,
            'worldRanking' => 5,
            'sortOrder' => 5,
        ],
        [
            'placeName' => 'Tuscany',
            'slug' => 'tuscany',
            'countryRegion' => 'Tuscany',
            'countryCode' => 'IT',
            'briefDescription' => 'Famous for its rolling hills, vineyards, and medieval towns, Tuscany is an idyllic region. Florence, Siena, and the beautiful countryside are must-visit destinations for art, wine, and culture lovers.',
            'longDescription' => '',
            'bestTimeToVisit' => '',
            'thingsToDo' => '',
            'accommodation' => '',
            'food' => '',
            'tags' => 'Tuscany, Florence, Siena, Pisa, Tuscan countryside, Chianti wine, Renaissance art, medieval towns, Italian cuisine, scenic landscapes',
            'imageTags' => 'Tuscany, Florence, vineyards, rolling hills, medieval towns',
            'ranking' => 6,
            'worldRanking' => 6,
            'sortOrder' => 6,
        ],
        [
            'placeName' => 'Cinque Terre',
            'slug' => 'cinque-terre',
            'countryRegion' => 'Liguria',
            'countryCode' => 'IT',
            'briefDescription' => 'Situated along the rugged Ligurian coastline, the five colorful fishing villages of Cinque Terre (Riomaggiore, Manarola, Corniglia, Vernazza, and Monterosso) are a UNESCO World Heritage site and a hiker\'s paradise.',
            'longDescription' => '',
            'bestTimeToVisit' => '',
            'thingsToDo' => '',
            'accommodation' => '',
            'food' => '',
            'tags' => 'Cinque Terre, Italian Riviera, coastal villages, hiking trails, Ligurian cuisine, colorful houses, seaside beauty, UNESCO World Heritage, Mediterranean charm, scenic views',
            'imageTags' => 'Cinque Terre, coastal villages, hiking trails, colorful houses, Ligurian Sea',
            'ranking' => 7,
            'worldRanking' => 7,
            'sortOrder' => 7,
        ],
        [
            'placeName' => 'Naples',
            'slug' => 'naples',
            'countryRegion' => 'Campania',
            'countryCode' => 'IT',
            'briefDescription' => 'As the gateway to Pompeii and Mount Vesuvius, Naples offers a rich cultural heritage with its historic center, delicious Neapolitan pizza, and world-class archaeological museums.',
            'longDescription' => '',
            'bestTimeToVisit' => '',
            'thingsToDo' => '',
            'accommodation' => '',
            'food' => '',
            'tags' => 'Naples, Campania, Southern Italy, historic center, UNESCO World Heritage, pizza, archaeology, Mount Vesuvius, Italian cuisine, vibrant city.',
            'imageTags' => 'Naples, historic center, pizza, Mount Vesuvius, Italian cuisine',
            'ranking' => 8,
            'worldRanking' => 8,
            'sortOrder' => 8,
        ],
        [
            'placeName' => 'Sicily',
            'slug' => 'sicily',
            'countryRegion' => 'Sicily',
            'countryCode' => 'IT',
            'briefDescription' => ' Italy\'s largest island, Sicily, is a melting pot of cultures and landscapes. From the ancient ruins of Agrigento and Syracuse to the stunning beaches of Taormina and the majestic Mount Etna, it has something for everyone.',
            'longDescription' => '',
            'bestTimeToVisit' => '',
            'thingsToDo' => '',
            'accommodation' => '',
            'food' => '',
            'tags' => 'Sicily, Mediterranean, Italian islands, history, culture, ancient ruins, beaches, volcanoes, cuisine, architecture',
            'imageTags' => 'Sicily, Greek ruins, Mount Etna, coastal towns, Sicilian cuisine',
            'ranking' => 9,
            'worldRanking' => 9,
            'sortOrder' => 9,
        ],
        [
            'placeName' => 'Sardinia',
            'slug' => 'sardinia',
            'countryRegion' => 'Sardinia',
            'countryCode' => 'IT',
            'briefDescription' => 'With its crystal-clear waters and pristine beaches, Sardinia is a paradise for sun-seekers and water sports enthusiasts. The island also boasts ancient nuraghe settlements and picturesque coastal towns like Alghero and Cagliari.',
            'longDescription' => '',
            'bestTimeToVisit' => '',
            'thingsToDo' => '',
            'accommodation' => '',
            'food' => '',
            'tags' => 'Amalfi Coast, Italy, coastal beauty, UNESCO World Heritage, cliffside villages, Mediterranean, scenic drives, beaches, Italian cuisine, history',
            'imageTags' => 'Amalfi Coast, Positano, colorful cliffside villages, azure sea, scenic drives',
            'ranking' => 10,
            'worldRanking' => 10,
            'sortOrder' => 10,
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

        $placeIndex = 2;

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
