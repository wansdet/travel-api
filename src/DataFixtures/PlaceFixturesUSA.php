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

class PlaceFixturesUSA extends Fixture implements DependentFixtureInterface, FixtureGroupInterface
{
    use DataFixturesTrait;

    private array $places = [
        [
            'placeName' => 'New York City',
            'slug' => 'new-york-city',
            'countryRegion' => 'New York State',
            'countryCode' => 'US',
            'briefDescription' => 'New York City, often referred to as the "Big Apple," is a bustling metropolis renowned for its iconic landmarks, diverse culture, and vibrant energy. It offers visitors a plethora of attractions, including the Statue of Liberty, Times Square, Central Park, and world-class museums and theaters.',
            'longDescription' => '',
            'bestTimeToVisit' => '',
            'thingsToDo' => '',
            'accommodation' => '',
            'food' => '',
            'tags' => 'City that never sleeps, Broadway, Times Square, Central Park, Statue of Liberty, Museums, Shopping, Skyscrapers, Culinary Delights, Cultural Melting Pot',
            'imageTags' => 'Statue of Liberty, Times Square, Central Park, Empire State Building, Brooklyn Bridge, Broadway, Metropolitan Museum of Art, Museum of Modern Art, 9/11 Memorial & Museum, One World Observatory, Fifth Avenue, SoHo, Little Italy, Chinatown, Greenwich Village, New York-style pizza, bagel with cream cheese',
            'ranking' => 1,
            'worldRanking' => 1,
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Los Angeles',
            'slug' => 'los-angeles',
            'countryRegion' => 'California',
            'countryCode' => 'US',
            'briefDescription' => 'Los Angeles is a bustling city that offers a blend of entertainment, natural beauty, and cultural experiences. From the iconic Hollywood sign and glamorous Walk of Fame to the sun-kissed beaches of Santa Monica and the vibrant street art of Downtown, there\'s something for everyone in the City of Angels.',
            'longDescription' => '',
            'bestTimeToVisit' => '',
            'thingsToDo' => '',
            'accommodation' => '',
            'food' => '',
            'tags' => 'Los Angeles, California, Hollywood, beaches, entertainment, cultural scene, Griffith Observatory, Venice Beach, Universal Studios, Disneyland, Rodeo Drive, Getty Center, Pacific Coast Highway.',
            'imageTags' => 'Hollywood sign, Venice Beach Boardwalk, Griffith Observatory, Universal Studios Hollywood, Hollywood Walk of Fame, Santa Monica Pier, Downtown Los Angeles skyline, Rodeo Drive, Getty Center, Hollywood Hills, Disneyland Resort, Pacific Coast Highway, Beverly Hills, Los Angeles beaches, Arts District.',
            'ranking' => 2,
            'worldRanking' => 2,
            'sortOrder' => 2,
        ],
        [
            'placeName' => 'San Francisco',
            'slug' => 'san-francisco',
            'countryRegion' => 'California',
            'countryCode' => 'US',
            'briefDescription' => 'San Francisco captivates visitors with its stunning Golden Gate Bridge, charming cable cars, and diverse neighborhoods, making it a must-visit destination.',
            'longDescription' => '',
            'bestTimeToVisit' => '',
            'thingsToDo' => '',
            'accommodation' => '',
            'food' => '',
            'tags' => 'San Francisco, California, Golden Gate Bridge, cable cars, Alcatraz Island, Chinatown, Fisherman\'s Wharf, Golden Gate Park, Union Square, Mission District',
            'imageTags' => 'Golden Gate Bridge, Cable Cars, Alcatraz Island, Fisherman\'s Wharf, Lombard Street, Chinatown, Golden Gate Park, Palace of Fine Arts, Painted Ladies, Union Square, Coit Tower, San Francisco Bay, Mission District, Baker Beach, de Young Museum',
            'ranking' => 3,
            'worldRanking' => 3,
            'sortOrder' => 3,
        ],
        [
            'placeName' => 'Grand Canyon',
            'slug' => 'grand-canyon',
            'countryRegion' => 'Arizona',
            'countryCode' => 'US',
            'briefDescription' => 'The Grand Canyon mesmerizes visitors with its vast expanse, towering cliffs, and awe-inspiring views, offering an unforgettable experience in nature.',
            'longDescription' => '',
            'bestTimeToVisit' => '',
            'thingsToDo' => '',
            'accommodation' => '',
            'food' => '',
            'tags' => 'Grand Canyon, Arizona, natural wonder, Colorado River, hiking, viewpoints, rim, geology, outdoor activities, scenic beauty',
            'imageTags' => 'Grand Canyon, Colorado River, South Rim, North Rim, Bright Angel Trail, Desert View Watchtower, Colorado River Rafting, Grand Canyon Village, Horseshoe Bend, Havasu Falls, Antelope Canyon, Sunset at the Grand Canyon, Mule Ride, Skywalk, Phantom Ranch',
            'ranking' => 4,
            'worldRanking' => 4,
            'sortOrder' => 4,
        ],
        [
            'placeName' => 'Yellowstone National Park',
            'slug' => 'yellowstone-national-park',
            'countryRegion' => 'Wyoming',
            'countryCode' => 'US',
            'briefDescription' => 'Yellowstone National Park, America\'s first national park, captivates visitors with its geothermal wonders, breathtaking landscapes, and abundant wildlife.',
            'longDescription' => '',
            'bestTimeToVisit' => '',
            'thingsToDo' => '',
            'accommodation' => '',
            'food' => '',
            'tags' => 'Yellowstone National Park, geothermal features, wildlife, hiking, scenic drives, waterfalls, camping, boating, Old Faithful, Grand Prismatic Spring',
            'imageTags' => 'Old Faithful, Grand Prismatic Spring, Yellowstone Lake, Mammoth Hot Springs, Lower Falls, Lamar Valley, Grand Canyon of the Yellowstone, Norris Geyser Basin, Wildlife, Yellowstone Caldera, Tower-Roosevelt, Hayden Valley, Artist Point, Fishing in Yellowstone, Camping in Yellowstone',
            'ranking' => 5,
            'worldRanking' => 5,
            'sortOrder' => 5,
        ],
        [
            'placeName' => 'New Orleans',
            'slug' => 'new-orleans',
            'countryRegion' => 'Louisiana',
            'countryCode' => 'US',
            'briefDescription' => 'New Orleans, known as the "Big Easy," entices visitors with its vibrant music scene, rich cultural heritage, and flavorful cuisine.',
            'longDescription' => '',
            'bestTimeToVisit' => '',
            'thingsToDo' => '',
            'accommodation' => '',
            'food' => '',
            'tags' => 'New Orleans, French Quarter, Jazz, Creole Cuisine, Mardi Gras, Historic Architecture, Mississippi River, Music, Culture, Festivals',
            'imageTags' => 'French Quarter, Jackson Square, St. Louis Cathedral, Bourbon Street, Mississippi Riverfront, Garden District, Mardi Gras Parade, Jazz Band, Creole Cuisine, Street Performers, Steamboat Cruise, National WWII Museum, Swamp Tour, City Park, Beignets',
            'ranking' => 6,
            'worldRanking' => 6,
            'sortOrder' => 6,
        ],
        [
            'placeName' => 'Miami',
            'slug' => 'miami',
            'countryRegion' => 'Florida',
            'countryCode' => 'US',
            'briefDescription' => 'Miami, the vibrant coastal city in Florida, lures visitors with its stunning beaches, diverse culture, and vibrant nightlife.',
            'longDescription' => '',
            'bestTimeToVisit' => '',
            'thingsToDo' => '',
            'accommodation' => '',
            'food' => '',
            'tags' => 'Miami, South Beach, Art Deco, Beaches, Cuban Culture, Nightlife, Shopping, Street Art, Water Sports, Cuisine',
            'imageTags' => 'South Beach, Art Deco District, Wynwood Walls, Little Havana, Biscayne Bay, Ocean Drive, Miami Skyline, Miami Seaquarium, Everglades National Park, Bal Harbour Shops, Aventura Mall, Cuban Sandwich, Beachfront Resorts, Nightlife, Water Sports',
            'ranking' => 7,
            'worldRanking' => 7,
            'sortOrder' => 7,
        ],
        [
            'placeName' => 'Las Vegas',
            'slug' => 'las-vegas',
            'countryRegion' => 'Nevada',
            'countryCode' => 'US',
            'briefDescription' => 'Las Vegas, the entertainment capital of the world, entices visitors with its iconic casinos, dazzling shows, and vibrant nightlife.',
            'longDescription' => '',
            'bestTimeToVisit' => '',
            'thingsToDo' => '',
            'accommodation' => '',
            'food' => '',
            'tags' => 'Las Vegas, Entertainment, Casinos, Shows, Nightlife, Luxury, Shopping, Dining, Gambling, Attractions',
            'imageTags' => 'Las Vegas Strip, Bellagio Fountains, Caesars Palace, Fremont Street Experience, High Roller Observation Wheel, The Venetian, Luxor Pyramid, Eiffel Tower Replica, Slot Machines, Showgirls, Cirque du Soleil, Neon Lights, Grand Canyon Helicopter Tour, Nightclubs, Fine Dining',
            'ranking' => 8,
            'worldRanking' => 8,
            'sortOrder' => 8,
        ],
        [
            'placeName' => 'Chicago',
            'slug' => 'chicago',
            'countryRegion' => 'Illinois',
            'countryCode' => 'US',
            'briefDescription' => 'Chicago, the vibrant metropolis located on Lake Michigan, is famous for its iconic architecture, world-class museums, and thriving arts and culture scene.',
            'longDescription' => '',
            'bestTimeToVisit' => '',
            'thingsToDo' => '',
            'accommodation' => '',
            'food' => '',
            'tags' => 'Chicago, Architecture, Art, Culture, Museums, Skyline, Lake Michigan, Food, Sports, Festivals, Shopping',
            'imageTags' => 'Chicago Skyline, Cloud Gate, Art Institute of Chicago, Millennium Park, Navy Pier, Wrigley Field, Magnificent Mile, Chicago River, Deep-Dish Pizza, Chicago-style Hot Dog, Cultural Festivals, Lakefront Trail, Museum Campus, Willis Tower, Chicago Theatre, Sports.',
            'ranking' => 9,
            'worldRanking' => 9,
            'sortOrder' => 9,
        ],
        [
            'placeName' => 'Washington DC',
            'slug' => 'washington',
            'countryRegion' => 'District of Columbia',
            'countryCode' => 'US',
            'briefDescription' => 'Washington, D.C., the capital of the United States, is a city rich in history and political significance. It is home to iconic landmarks, world-class museums, and vibrant neighborhoods',
            'longDescription' => '',
            'bestTimeToVisit' => '',
            'thingsToDo' => '',
            'accommodation' => '',
            'food' => '',
            'tags' => 'Washington DC, Capital, Politics, History, Monuments, Museums, Government, Landmarks, National Mall, Smithsonian, Culture, Diversity, Food, Cherry Blossoms, Potomac River, Neighborhoods',
            'imageTags' => 'White House, Capitol Building, Lincoln Memorial, Washington Monument, National Mall, Smithsonian Institution, Jefferson Memorial, Cherry Blossoms, Potomac River, Georgetown, Adams Morgan, Dupont Circle, U Street, Monuments, Museums, Government',
            'ranking' => 10,
            'worldRanking' => 10,
            'sortOrder' => 10,
        ],
        [
            'placeName' => 'Boston',
            'slug' => 'boston',
            'countryRegion' => 'Massachusetts',
            'countryCode' => 'US',
            'briefDescription' => 'Boston, the capital of Massachusetts, is a vibrant city with a rich history and a blend of old-world charm and modernity. Known for its prestigious universities, iconic landmarks, and cultural institutions, Boston offers visitors a glimpse into American history and a lively urban experience.',
            'longDescription' => '',
            'bestTimeToVisit' => '',
            'thingsToDo' => '',
            'accommodation' => '',
            'food' => '',
            'tags' => 'Boston, Massachusetts, History, Culture, Landmarks, Freedom Trail, Harvard University, MIT, Beacon Hill, Back Bay, Charles River, Museums, Seafood, North End, Chinatown, Public Garden',
            'imageTags' => 'Freedom Trail, Harvard University, Fenway Park, Beacon Hill, Boston Common, New England Aquarium, Faneuil Hall, Museum of Fine Arts, Boston Harbor, Charles River, Boston Public Library, Back Bay, Quincy Market, Fenway-Kenmore, North End',
            'ranking' => 11,
            'worldRanking' => 11,
            'sortOrder' => 11,
        ],
        [
            'placeName' => 'Hawaii',
            'slug' => 'hawaii',
            'countryRegion' => 'Hawaii',
            'countryCode' => 'US',
            'briefDescription' => 'Hawaii, a tropical paradise in the middle of the Pacific Ocean, captivates visitors with its stunning beaches, lush landscapes, and vibrant culture. From its volcanic wonders to its vibrant marine life, Hawaii offers a unique and unforgettable vacation experience.',
            'longDescription' => '',
            'bestTimeToVisit' => '',
            'thingsToDo' => '',
            'accommodation' => '',
            'food' => '',
            'tags' => 'Hawaii, Pacific Ocean, Beaches, Volcanoes, Nature, Culture, Polynesian, Hula, Waterfalls, Snorkeling, Surfing, Luau, Pearl Harbor, Scenic Drives, Helicopter Tours.',
            'imageTags' => 'Waikiki Beach, Hawaii Volcanoes National Park, Hanauma Bay, Na Pali Coast, Pearl Harbor, Road to Hana, Waimea Falls, Diamond Head, Polynesian Cultural Center, Haleakala National Park, Kona Coast, Mauna Kea, Waikiki Skyline, Tropical Rainforest, Sunset over the Pacific Ocean.',
            'ranking' => 12,
            'worldRanking' => 12,
            'sortOrder' => 12,
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
