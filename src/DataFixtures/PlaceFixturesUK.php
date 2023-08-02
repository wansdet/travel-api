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

class PlaceFixturesUK extends Fixture implements DependentFixtureInterface, FixtureGroupInterface
{
    use DataFixturesTrait;

    private array $places = [
        [
            'placeName' => 'London',
            'slug' => 'london',
            'countryRegion' => 'London, England',
            'countryCode' => 'GB',
            'briefDescription' => ' The vibrant capital city of the United Kingdom, known for iconic landmarks such as Buckingham Palace, the Tower of London, the British Museum, and vibrant neighborhoods like Covent Garden and Camden Town.',
            'longDescription' => '',
            'bestTimeToVisit' => '',
            'thingsToDo' => '',
            'accommodation' => '',
            'food' => '',
            'tags' => 'London, United Kingdom, capital city, history, landmarks, museums, art, culture, theaters, markets, Buckingham Palace, Tower of London, British Museum, Hyde Park, River Thames, West End, accommodation, food, travel.',
            'imageTags' => 'London skyline, British Museum, Tower Bridge, Covent Garden, Thames River.',
            'ranking' => 1,
            'worldRanking' => 1,
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Edinburgh',
            'slug' => 'edinburgh',
            'countryRegion' => 'Edinburgh, Scotland',
            'countryCode' => 'GB',
            'briefDescription' => 'The historic capital city of Scotland, famous for its stunning castle, the Royal Mile, and the annual Edinburgh Festival.',
            'longDescription' => '',
            'bestTimeToVisit' => '',
            'thingsToDo' => '',
            'accommodation' => '',
            'food' => '',
            'tags' => 'Edinburgh, Scotland, historic, culture, festivals, castles, Royal Mile, Arthur\'s Seat, museums, culinary, accommodation, travel.',
            'imageTags' => 'Edinburgh Castle, Royal Mile, Arthur\'s Seat, Festival Fringe, Old Town.',
            'ranking' => 2,
            'worldRanking' => 2,
            'sortOrder' => 2,
        ],
        [
            'placeName' => 'Lake District',
            'slug' => 'lake-district',
            'countryRegion' => 'Cumbria, England',
            'countryCode' => 'GB',
            'briefDescription' => 'A scenic region known for its breathtaking lakes, mountains, and charming villages, providing ample opportunities for outdoor activities and relaxation.',
            'longDescription' => '',
            'bestTimeToVisit' => '',
            'thingsToDo' => '',
            'accommodation' => '',
            'food' => '',
            'tags' => 'Lake District National Park, nature, hiking, lakes, mountains, outdoor activities, scenic drives, historic sites, picturesque villages, wildlife.',
            'imageTags' => 'Lake Windermere, Scafell Pike, Grasmere, Ullswater, Ambleside.',
            'ranking' => 3,
            'worldRanking' => 3,
            'sortOrder' => 3,
        ],
        [
            'placeName' => 'Stonehenge',
            'slug' => 'stonehenge',
            'countryRegion' => 'Wiltshire, England',
            'countryCode' => 'GB',
            'briefDescription' => 'A prehistoric monument consisting of massive stone circles, known for its mysterious origins and stunning landscape.',
            'longDescription' => '',
            'bestTimeToVisit' => '',
            'thingsToDo' => '',
            'accommodation' => '',
            'food' => '',
            'tags' => 'Stonehenge, prehistoric monument, ancient history, archaeology, Wiltshire, Salisbury, Avebury, solstice, Neolithic, standing stones.',
            'imageTags' => 'Stonehenge, prehistoric monument, ancient stones, Salisbury Plain, Neolithic.',
            'ranking' => 4,
            'worldRanking' => 4,
            'sortOrder' => 4,
        ],
        [
            'placeName' => 'Bath',
            'slug' => 'bath',
            'countryRegion' => 'Somerset, England',
            'countryCode' => 'GB',
            'briefDescription' => 'A beautiful city in southwest England, celebrated for its Roman Baths, Georgian architecture, and the iconic Bath Abbey.',
            'longDescription' => '',
            'bestTimeToVisit' => '',
            'thingsToDo' => '',
            'accommodation' => '',
            'food' => '',
            'tags' => 'Bath, Roman Baths, Georgian architecture, hot springs, history, spa, culture, Jane Austen, museums, River Avon.',
            'imageTags' => 'Bath Abbey, Roman Baths, Pulteney Bridge, Georgian architecture, Royal Crescent.',
            'ranking' => 5,
            'worldRanking' => 5,
            'sortOrder' => 5,
        ],
        [
            'placeName' => 'York',
            'slug' => 'york',
            'countryRegion' => 'Yorkshire, England',
            'countryCode' => 'GB',
            'briefDescription' => 'A historic city in northeast England, featuring ancient city walls, the magnificent York Minster, and the charming Shambles street.',
            'longDescription' => '',
            'bestTimeToVisit' => '',
            'thingsToDo' => '',
            'accommodation' => '',
            'food' => '',
            'tags' => 'York, history, Gothic architecture, medieval, city walls, York Minster, Viking, museums, The Shambles, River Ouse.',
            'imageTags' => 'York Minster, The Shambles, city walls, medieval architecture, River Ouse.',
            'ranking' => 6,
            'worldRanking' => 6,
            'sortOrder' => 6,
        ],
        [
            'placeName' => 'Cambridge',
            'slug' => 'cambridge',
            'countryRegion' => 'Cambridgeshire, England',
            'countryCode' => 'GB',
            'briefDescription' => 'Home to the prestigious University of Cambridge, this city in eastern England boasts stunning architecture, tranquil river views, and the famous King\'s College Chapel.',
            'longDescription' => '',
            'bestTimeToVisit' => '',
            'thingsToDo' => '',
            'accommodation' => '',
            'food' => '', 'tags' => 'Cambridge, University of Cambridge, colleges, King\'s College Chapel, punting, River Cam, museums, botanical gardens, cycling, history.',
            'imageTags' => 'Cambridge University, King\'s College Chapel, punting on the River Cam, Bridge of Sighs, Fitzwilliam Museum.',
            'ranking' => 7,
            'worldRanking' => 7,
            'sortOrder' => 7,
        ],
        [
            'placeName' => 'Liverpool',
            'slug' => 'liverpool',
            'countryRegion' => 'Merseyside, England',
            'countryCode' => 'GB',
            'briefDescription' => 'The vibrant birthplace of The Beatles, Liverpool offers a rich musical heritage, stunning waterfront, and cultural attractions such as the Tate Liverpool and the Museum of Liverpool.',
            'longDescription' => '',
            'bestTimeToVisit' => '',
            'thingsToDo' => '',
            'accommodation' => '',
            'food' => '',
            'tags' => 'Liverpool, maritime heritage, music, The Beatles, waterfront, Albert Dock, cultural attractions, nightlife, historic buildings.',
            'imageTags' => 'Liverpool waterfront, Liver Building, The Beatles, Albert Dock, Liverpool Cathedral.',
            'ranking' => 8,
            'worldRanking' => 8,
            'sortOrder' => 8,
        ],
        [
            'placeName' => 'Oxford',
            'slug' => 'oxford',
            'countryRegion' => 'Oxfordshire, England',
            'countryCode' => 'GB',
            'briefDescription' => 'Another renowned university city, Oxford is known for its prestigious colleges, the Bodleian Library, and the splendid Radcliffe Camera.',
            'longDescription' => '',
            'bestTimeToVisit' => '',
            'thingsToDo' => '',
            'accommodation' => '',
            'food' => '',
            'tags' => 'Oxford, university city, Oxford University, colleges, academic, architecture, history, cultural attractions, museums, dining, gardens, punting, covered market',
            'imageTags' => 'Oxford University, Radcliffe Camera, Bridge of Sighs, Christ Church College, Ashmolean Museum',
            'ranking' => 9,
            'worldRanking' => 9,
            'sortOrder' => 9,
        ],
        [
            'placeName' => 'Stratford-upon-Avon',
            'slug' => 'stratford-upon-avon',
            'countryRegion' => 'Warwickshire, England',
            'countryCode' => 'GB',
            'briefDescription' => 'The birthplace of William Shakespeare, this charming town in Warwickshire attracts visitors with its Tudor architecture, the Royal Shakespeare Theatre, and the beautiful River Avon.',
            'longDescription' => '',
            'bestTimeToVisit' => '',
            'thingsToDo' => '',
            'accommodation' => '',
            'food' => '',
            'tags' => 'Stratford-upon-Avon, William Shakespeare, birthplace, theater, history, heritage, River Avon, Anne Hathaway\'s Cottage, Royal Shakespeare Theatre, Tudor architecture, gardens, literature, Warwickshire',
            'imageTags' => 'Shakespeare\'s Birthplace, Royal Shakespeare Theatre, Anne Hathaway\'s Cottage, River Avon, Tudor architecture',
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
