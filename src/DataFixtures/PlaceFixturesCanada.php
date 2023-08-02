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

class PlaceFixturesCanada extends Fixture implements DependentFixtureInterface, FixtureGroupInterface
{
    use DataFixturesTrait;

    private array $places = [
        [
            'placeName' => 'Vancouver',
            'slug' => 'vancouver',
            'countryRegion' => 'British Columbia',
            'countryCode' => 'CA',
            'briefDescription' => 'Vancouver, located on the west coast of Canada, is a bustling metropolitan city surrounded by stunning natural beauty. It offers a perfect blend of urban attractions and outdoor adventures, with a vibrant arts and culture scene, diverse neighborhoods, and breathtaking landscapes.',
            'longDescription' => '',
            'bestTimeToVisit' => '',
            'thingsToDo' => '',
            'accommodation' => '',
            'food' => '',
            'tags' => 'Nature, urban, multicultural, outdoor activities, museums, parks, waterfront, mountains, food, shopping, cultural diversity.',
            'imageTags' => 'Stanley Park, Gastown, Capilano Suspension Bridge, Granville Island, English Bay, Vancouver Lookout, Museum of Anthropology, Chinatown, Yaletown, Whistler, North Shore Mountains, Coal Harbour, Robson Street, Commercial Drive, Vancouver Aquarium.',
            'ranking' => 1,
            'worldRanking' => 1,
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Banff National Park',
            'slug' => 'banff-national-park',
            'countryRegion' => 'Alberta',
            'countryCode' => 'CA',
            'briefDescription' => 'Banff National Park, located in the Canadian Rockies of Alberta, is a breathtaking natural paradise renowned for its majestic mountains, turquoise lakes, and abundant wildlife. It offers unparalleled opportunities for outdoor adventures and awe-inspiring scenic beauty.',
            'longDescription' => '',
            'bestTimeToVisit' => '',
            'thingsToDo' => '',
            'accommodation' => '',
            'food' => '',
            'tags' => 'Banff National Park, Canadian Rockies, nature, outdoor activities, wildlife, hiking, lakes, mountains, skiing, hot springs, scenic drives, cultural heritage, luxury accommodation, mid-range accommodation, budget accommodation.',
            'imageTags' => 'Lake Louise, Moraine Lake, Sulphur Mountain, Bow River, Icefields Parkway, Banff Upper Hot Springs, Wildlife, Skiing, Hiking, Canoeing, Banff Gondola, Downtown Banff, Banff Park Museum, Helicopter Tours, Restaurants.',
            'ranking' => 2,
            'worldRanking' => 2,
            'sortOrder' => 2,
        ],
        [
            'placeName' => 'Quebec City',
            'slug' => 'quebec-city',
            'countryRegion' => 'Quebec',
            'countryCode' => 'CA',
            'briefDescription' => 'Quebec City is a captivating blend of old-world charm and modern vibrancy. With its historic architecture, cobbled streets, and rich cultural heritage, it offers a unique and immersive experience for visitors.',
            'longDescription' => '',
            'bestTimeToVisit' => '',
            'thingsToDo' => '',
            'accommodation' => '',
            'food' => '',
            'tags' => 'Quebec City, Old Quebec, historic architecture, French heritage, cultural heritage, Château Frontenac, Quartier Petit-Champlain, Winter Carnival, St. Lawrence River, culinary scene, museums, Citadel, Place Royale, Promenade Samuel-De Champlain, Notre-Dame de Québec Basilica-Cathedral',
            'imageTags' => 'Château Frontenac, Quartier Petit-Champlain, Place Royale, Citadel, Old Quebec streets, Winter Carnival, St. Lawrence River, Promenade Samuel-De Champlain, Notre-Dame de Québec Basilica-Cathedral, Museums, Culinary Delights, City Walls, Festivals, Scenic Views, Historic Architecture',
            'ranking' => 3,
            'worldRanking' => 3,
            'sortOrder' => 3,
        ],
        [
            'placeName' => 'Niagara Falls',
            'slug' => 'niagara-falls',
            'countryRegion' => 'Ontario',
            'countryCode' => 'CA',
            'briefDescription' => 'Niagara Falls is a majestic natural wonder that captivates visitors with its powerful cascades of water. With its awe-inspiring beauty and thrilling attractions, it offers an unforgettable experience for all who visit.',
            'longDescription' => '',
            'bestTimeToVisit' => '',
            'thingsToDo' => '',
            'accommodation' => '',
            'food' => '',
            'tags' => 'Niagara Falls, natural wonder, Horseshoe Falls, American Falls, Bridal Veil Falls, boat tour, observation deck, Clifton Hill, Niagara Parkway, Skylon Tower, Journey Behind the Falls, winter activities, botanical gardens, luxury accommodation, mid-range accommodation, budget accommodation',
            'imageTags' => 'Niagara Falls, Maid of the Mist, Skylon Tower, Journey Behind the Falls, Niagara Parkway, Clifton Hill, Niagara Glen, Butterfly Conservatory, Floral Gardens, Zipline, Aerial Adventure, Icewine, Hiking Trails, Gorge, Helicopter Tour.',
            'ranking' => 4,
            'worldRanking' => 4,
            'sortOrder' => 4,
        ],
        [
            'placeName' => 'Peggy\'s Cove',
            'slug' => 'peggys-cove',
            'countryRegion' => 'Nova Scotia',
            'countryCode' => 'CA',
            'briefDescription' => 'Peggy\'s Cove is a picturesque coastal village in Nova Scotia, Canada, known for its iconic lighthouse, rugged granite rocks, and stunning ocean views. It is a charming destination that captures the hearts of visitors with its scenic beauty and maritime charm.',
            'longDescription' => '',
            'bestTimeToVisit' => '',
            'thingsToDo' => '',
            'accommodation' => '',
            'food' => '',
            'tags' => 'Peggy\'s Cove, Nova Scotia, coastal village, lighthouse, rugged landscape, fishing community, scenic beauty, ocean views, local artisans, maritime culture, seafood, rocky coastline, outdoor beauty.',
            'imageTags' => 'Peggy\'s Cove Lighthouse, Granite Rocks, Fishing Village, Coastal Landscape, Sunset, Fishing Boats, Peggy\'s Cove Trail, Fresh Seafood, Artisan Crafts, Maritime Culture, Ocean Views, Rocky Shoreline, Peggy\'s Cove Museum, Boat Tour, Traditional Music Performance',
            'ranking' => 5,
            'worldRanking' => 5,
            'sortOrder' => 5,
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
