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

class PlaceFixturesFrance extends Fixture implements DependentFixtureInterface, FixtureGroupInterface
{
    use DataFixturesTrait;

    private array $places = [
        [
            'placeName' => 'Paris',
            'slug' => 'france-paris',
            'countryRegion' => 'Île-de-France',
            'countryCode' => 'FR',
            'briefDescription' => 'The capital city of France, known for its iconic landmarks such as the Eiffel Tower, Louvre Museum, Notre-Dame Cathedral, and the Champs-Élysées.',
            'longDescription' => '',
            'bestTimeToVisit' => '',
            'thingsToDo' => '',
            'accommodation' => '',
            'food' => '',
            'tags' => 'Paris, France, City of Light, City of Love, Eiffel Tower, Louvre Museum, Seine River, Notre-Dame Cathedral, Montmartre, Champs-Élysées, French cuisine, Art, History, Fashion, Architecture, Culture, Romance, Food, Wine, Shopping, Museums, Gardens, Landmarks, UNESCO World Heritage Site,',
            'imagesTags' => 'Eiffel Tower, Louvre Museum, Notre-Dame Cathedral, Champs-Élysées',
            'ranking' => 1,
            'worldRanking' => 1,
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'French Riviera',
            'slug' => 'france-french-riviera',
            'countryRegion' => 'Provence-Alpes-Côte d\'Azur',
            'countryCode' => 'FR',
            'briefDescription' => 'A glamorous coastal region on the Mediterranean, featuring cities like Nice, Cannes, and Saint-Tropez, known for their beautiful beaches, luxury resorts, and vibrant nightlife.',
            'longDescription' => '',
            'bestTimeToVisit' => '',
            'thingsToDo' => '',
            'accommodation' => '',
            'food' => '',
            'tags' => 'French Riviera, Côte d\'Azur, Nice, Cannes, Monaco, Saint-Tropez, beaches, luxury resorts, Mediterranean, glamour, art, nightlife, coastal paths, hilltop villages, Provence, Palais des Festivals, Lerins Islands, Promenade des Anglais, socca, Salade Niçoise.',
            'imageTags' => 'Nice, Cannes, Monaco, Saint-Tropez, Côte d\'Azur,',
            'ranking' => 2,
            'worldRanking' => 2,
            'sortOrder' => 2,
        ],
        [
            'placeName' => 'Mont Saint-Michel',
            'slug' => 'france-mont-saint-michel',
            'countryRegion' => 'Normandy',
            'countryCode' => 'FR',
            'briefDescription' => 'A stunning medieval abbey located on a rocky island in Normandy, known for its picturesque architecture and surrounding bay, which experiences dramatic tides.',
            'longDescription' => '',
            'bestTimeToVisit' => '',
            'thingsToDo' => '',
            'accommodation' => '',
            'food' => '',
            'tags' => 'Mont Saint-Michel, Normandy, France, Abbey, Medieval, Architecture, Tides, Pilgrimage, History, Island, Landmark, Gothic, Ramparts, Cloisters, Refectory, Abbey Church, Museums, Causeway, Bay, Horse-drawn Carriage, Nature, Biodiversity, Festivals, Concerts, Light Shows, Omelettes, Crêpes.',
            'imageTags' => 'Mont Saint-Michel, Cloisters, Abbey Church, Horse-drawn Carriage',
            'ranking' => 3,
            'worldRanking' => 3,
            'sortOrder' => 3,
        ],
        [
            'placeName' => 'Bordeaux',
            'slug' => 'france-bordeaux',
            'countryRegion' => 'Nouvelle-Aquitaine',
            'countryCode' => 'FR',
            'briefDescription' => 'A renowned wine-producing region in southwestern France, offering wine tours, vineyard visits, and the chance to sample some of the finest wines in the world.',
            'longDescription' => '',
            'bestTimeToVisit' => '',
            'thingsToDo' => '',
            'accommodation' => '',
            'food' => '',
            'tags' => 'Bordeaux, Nouvelle-Aquitaine, Wine, Vineyards, UNESCO, Architecture, Gastronomy, Museums, Châteaux, France.',
            'imageTags' => 'Wine, Vineyards, Architecture, Garonne River, Historic City',
            'ranking' => 4,
            'worldRanking' => 4,
            'sortOrder' => 4,
        ],
        [
            'placeName' => 'Provence',
            'slug' => 'france-provence',
            'countryRegion' => 'Provence-Alpes-Côte d\'Azur',
            'countryCode' => 'FR',
            'briefDescription' => 'A region known for its scenic landscapes, charming villages, lavender fields, and historic cities such as Avignon and Aix-en-Provence.',
            'longDescription' => '',
            'bestTimeToVisit' => '',
            'thingsToDo' => '',
            'accommodation' => '',
            'food' => '',
            'tags' => 'Provence, France, French Riviera, Lavender Fields, Mediterranean, Hilltop Villages, Roman Ruins, Cuisines, Markets, Art, Wine, Natural Beauty',
            'ranking' => 5,
            'worldRanking' => 5,
            'sortOrder' => 5,
        ],
        [
            'placeName' => 'Loire Valley',
            'slug' => 'loire-valley',
            'countryRegion' => 'France',
            'countryCode' => 'FR',
            'briefDescription' => 'An enchanting region famous for its fairytale-like châteaux (castles), including Château de Chambord and Château de Chenonceau, surrounded by beautiful countryside.',
            'longDescription' => '',
            'bestTimeToVisit' => '',
            'thingsToDo' => '',
            'accommodation' => '',
            'food' => '',
            'tags' => 'Loire Valley, France, Châteaux, Vineyards, Gardens, Cycling, History, Cuisine, UNESCO, Scenic Beauty, Wine',
            'imageTags' => 'Loire Valley, Châteaux, Vineyards',
            'ranking' => 6,
            'worldRanking' => 6,
            'sortOrder' => 6,
        ],
        [
            'placeName' => 'Normandy',
            'slug' => 'normandy',
            'countryRegion' => 'France',
            'countryCode' => 'FR',
            'briefDescription' => 'A historically significant region, known for the D-Day landing beaches, the city of Rouen with its impressive Gothic cathedral, and the picturesque port town of Honfleur.',
            'longDescription' => '',
            'bestTimeToVisit' => '',
            'thingsToDo' => '',
            'accommodation' => '',
            'food' => '',
            'tags' => 'Normandy, D-Day, Mont Saint-Michel, History, Beaches, Cider, Cheese, Coastal Towns, Gothic Architecture, Countryside',
            'imageTags' => 'Normandy, D-Day, Mont Saint-Michel, Coastal Towns, Gothic Architecture, Countryside',
            'ranking' => 7,
            'worldRanking' => 7,
            'sortOrder' => 7,
        ],
        [
            'placeName' => 'French Alps',
            'slug' => 'french-alps',
            'countryRegion' => 'France',
            'countryCode' => 'FR',
            'briefDescription' => 'A popular destination for outdoor enthusiasts, offering breathtaking mountain scenery, world-class ski resorts like Chamonix and Courchevel, and opportunities for hiking, biking, and mountaineering.',
            'longDescription' => '',
            'bestTimeToVisit' => '',
            'thingsToDo' => '',
            'accommodation' => '',
            'food' => '',
            'tags' => 'rench Alps, Skiing, Mountains, Outdoor Activities, Alpine Villages, Hiking, Scenic Drives, Mont Blanc, Savoyard Cuisine, Nature, Adventure, Chamonix',
            'imageTags' => 'Skiing, Mountains, Outdoor Activities, Alpine Villages, Mont Blanc, Savoyard Cuisine',
            'ranking' => 8,
            'worldRanking' => 8,
            'sortOrder' => 8,
        ],
        [
            'placeName' => 'Corsica',
            'slug' => 'corsica',
            'countryRegion' => 'France',
            'countryCode' => 'FR',
            'briefDescription' => 'A stunning island in the Mediterranean Sea, known for its rugged mountains, crystal-clear turquoise waters, and charming coastal towns like Bonifacio and Porto-Vecchio.',
            'longDescription' => '',
            'bestTimeToVisit' => '',
            'thingsToDo' => '',
            'accommodation' => '',
            'food' => '',
            'tags' => 'Corsica, Mediterranean, Beaches, Hiking, History, Culture, Cuisine, Mountains, Scenic Beauty, Nature, Outdoor Activities, UNESCO World Heritage Sites, Festivals, Music, Architecture, Villages, Towns, Cities, Food, Wine, Restaurants, Hotels, Accommodation, Travel, Tourism, Europe, France',
            'imageTags' => 'Corsica, Mediterranean, Beaches, Mountains, Scenic Beauty, Villages',
            'ranking' => 9,
            'worldRanking' => 9,
            'sortOrder' => 9,
        ],
        [
            'placeName' => 'Alsace',
            'slug' => 'alsace',
            'countryRegion' => 'France',
            'countryCode' => 'FR',
            'briefDescription' => 'A region with a unique blend of French and German influences, featuring charming villages like Colmar and Strasbourg, known for their half-timbered houses, beautiful architecture, and delicious cuisine.',
            'longDescription' => '',
            'bestTimeToVisit' => '',
            'thingsToDo' => '',
            'accommodation' => '',
            'food' => '',
            'tags' => 'Alsace, France, Wine, Half-timbered Houses, Strasbourg, Colmar, Vineyards, Cuisine, Castles, Christmas Markets, Museums, Architecture, History, Culture, Nature, Food, Wine Tasting, Hiking, Cycling, Scenic Drives, Romantic, Family-friendly, Luxury, Michelin-starred Restaurants, Boutique Hotels, Historic Hotels, Spa Hotels,',
            'imageTags' => ' Wine, Half-timbered Houses, Strasbourg, Vineyards, Wine Tasting, Scenic Drives',
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
