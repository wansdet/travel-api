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

class PlaceFixturesSpain extends Fixture implements DependentFixtureInterface, FixtureGroupInterface
{
    use DataFixturesTrait;

    private array $places = [
        [
            'placeName' => 'Barcelona',
            'slug' => 'barcelona',
            'countryRegion' => 'Catalonia',
            'countryCode' => 'ES',
            'briefDescription' => 'Known for its unique architecture, vibrant culture, and stunning beaches, Barcelona offers visitors a mix of historical sites, such as the Sagrada Familia and Park Güell, along with a lively nightlife and delicious cuisine.',
            'longDescription' => '',
            'bestTimeToVisit' => '',
            'thingsToDo' => '',
            'accommodation' => '',
            'food' => '',
            'tags' => 'Barcelona, Catalonia, Gaudí, Sagrada Familia, Gothic Quarter, La Rambla, Park Güell, Mediterranean Sea, Modernism, Football, Beaches, Catalan Cuisine, Picasso, Tapas, Vibrant',
            'imageTags' => 'Sagrada Familia, Park Güell, Gothic Quarter, La Rambla, Mediterranean Sea',
            'ranking' => 1,
            'worldRanking' => 1,
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Madrid',
            'slug' => 'madrid',
            'countryRegion' => 'Madrid',
            'countryCode' => 'ES',
            'briefDescription' => 'Spain\'s capital city, Madrid, is a bustling metropolis with world-class museums like the Prado Museum, beautiful parks like Retiro Park, and a rich history seen in its royal palaces and plazas, such as the Plaza Mayor.',
            'longDescription' => '',
            'bestTimeToVisit' => '',
            'thingsToDo' => '',
            'accommodation' => '',
            'food' => '',
            'tags' => 'Madrid, Spain, Royal Palace, Prado Museum, Retiro Park, Plaza Mayor, Puerta del Sol, Art, Culture, Flamenco, Tapas, Architecture, Nightlife',
            'imageTags' => 'Royal Palace, Puerta del Sol, Prado Museum, Retiro Park, Tapas',
            'ranking' => 2,
            'worldRanking' => 2,
            'sortOrder' => 2,
        ],
        [
            'placeName' => 'Seville',
            'slug' => 'seville',
            'countryRegion' => 'Andalusia',
            'countryCode' => 'ES',
            'briefDescription' => 'Home to the majestic Alhambra palace and the charming Albaicín neighborhood, Granada offers a fascinating blend of Islamic and Christian influences. The city\'s breathtaking views of the Sierra Nevada Mountains are an added bonus.',
            'longDescription' => '',
            'bestTimeToVisit' => '',
            'thingsToDo' => '',
            'accommodation' => '',
            'food' => '',
            'tags' => 'Seville, Andalusia, Cathedral, Royal Alcázar, Flamenco, Triana, Plaza de España, Barrio Santa Cruz, Tapas, Culture, History, Gardens, Guadalquivir River, Metropol Paraso',
            'imageTags' => 'Cathedral, Flamenco, Royal Alcázar, Plaza de España, Triana',
            'ranking' => 3,
            'worldRanking' => 3,
            'sortOrder' => 3,
        ],
        [
            'placeName' => 'Granada',
            'slug' => 'granada',
            'countryRegion' => 'Andalusia',
            'countryCode' => 'ES',
            'briefDescription' => 'Home to the majestic Alhambra palace and the charming Albaicín neighborhood, Granada offers a fascinating blend of Islamic and Christian influences. The city\'s breathtaking views of the Sierra Nevada Mountains are an added bonus.',
            'longDescription' => '',
            'bestTimeToVisit' => '',
            'thingsToDo' => '',
            'accommodation' => '',
            'food' => '',
            'tags' => 'Granada, Alhambra, Albaicín, Sacromonte, Moorish, Flamenco, Tapas, Cathedral, Sierra Nevada, History, Culture, Gardens, Mountains',
            'imageTags' => 'Alhambra, Albaicín, Sacromonte, Moorish, Tapas',
            'ranking' => 4,
            'worldRanking' => 4,
            'sortOrder' => 4,
        ],

        [
            'placeName' => 'Valencia',
            'slug' => 'valencia',
            'countryRegion' => 'Valencia',
            'countryCode' => 'ES',
            'briefDescription' => 'Renowned for its futuristic City of Arts and Sciences, Valencia boasts a mix of modern and historic attractions. Visitors can explore the lively Central Market, stroll through the Turia Gardens, and relax on the beautiful beaches.',
            'longDescription' => '',
            'bestTimeToVisit' => '',
            'thingsToDo' => '',
            'accommodation' => '',
            'food' => '',
            'tags' => 'Valencia, City of Arts and Sciences, Beaches, Paella, Turia Riverbed Park, Historic Center, Fallas Festival, Central Market, Silk Exchange, Modern Architecture, Mediterranean Sea, Culture, Cuisine',
            'imageTags' => 'City of Arts and Sciences, Beaches, Paella, Turia Riverbed Park, Fallas Festival',
            'ranking' => 5,
            'worldRanking' => 5,
            'sortOrder' => 5,
        ],
        [
            'placeName' => 'San Sebastián',
            'slug' => 'san-sebastian',
            'countryRegion' => 'Basque Country',
            'countryCode' => 'ES',
            'briefDescription' => 'Located in the Basque Country, San Sebastián is known for its picturesque bay, Playa de la Concha, and its world-renowned culinary scene. The city\'s old town, Parte Vieja, is a maze of narrow streets filled with pintxos bars.',
            'longDescription' => '',
            'bestTimeToVisit' => '',
            'thingsToDo' => '',
            'accommodation' => '',
            'food' => '',
            'tags' => 'San Sebastián, Basque Country, La Concha Beach, Pintxos, Parte Vieja, Culture, Michelin-starred Restaurants, Scenic Views, History, Beaches, Festivals, Culinary Delights',
            'imageTags' => 'La Concha Beach, Pintxos, Basque Cuisine, Parte Vieja, Scenic Views',
            'ranking' => 6,
            'worldRanking' => 6,
            'sortOrder' => 6,
        ],
        [
            'placeName' => 'Cordoba',
            'slug' => 'cordoba',
            'countryRegion' => 'Andalusia',
            'countryCode' => 'ES',
            'briefDescription' => 'With its iconic Mezquita (Great Mosque), Cordoba offers a glimpse into its Moorish past. The narrow streets of the Jewish Quarter, or Judería, and the colorful flower-filled patios are other highlights of this historic city.',
            'longDescription' => '',
            'bestTimeToVisit' => '',
            'thingsToDo' => '',
            'accommodation' => '',
            'food' => '',
            'tags' => 'Córdoba, Mezquita, Judería, Islamic Architecture, Roman Bridge, Alcázar de los Reyes Cristianos, Patios, Flamenco, Andalusian Cuisine, Festivals, History, Culture',
            'imageTags' => 'Mezquita, Patios, Judería, Roman Bridge, Alcázar',
            'ranking' => 7,
            'worldRanking' => 7,
            'sortOrder' => 7,
        ],
        [
            'placeName' => 'Malaga',
            'slug' => 'malaga',
            'countryRegion' => 'Andalusia',
            'countryCode' => 'ES',
            'briefDescription' => 'Besides being a gateway to the Costa del Sol\'s beautiful beaches, Malaga is also the birthplace of Pablo Picasso. Visitors can explore the Picasso Museum, the Alcazaba fortress, and enjoy the city\'s vibrant atmosphere.',
            'longDescription' => '',
            'bestTimeToVisit' => '',
            'thingsToDo' => '',
            'accommodation' => '',
            'food' => '',
            'tags' => 'Malaga, Costa del Sol, Picasso, Alcazaba, Beaches, Culture, Gastronomy, History, Art, Andalusia',
            'imageTags' => 'Beaches, Alcazaba, Picasso, Tapas, Mediterranea',
            'ranking' => 8,
            'worldRanking' => 8,
            'sortOrder' => 8,
        ],
        [
            'placeName' => 'Bilbao',
            'slug' => 'bilbao',
            'countryRegion' => 'Basque Country',
            'countryCode' => 'ES',
            'briefDescription' => 'Home to the Guggenheim Museum Bilbao, a masterpiece of modern architecture, Bilbao has transformed itself into a vibrant cultural hub. The city also offers a charming old town, excellent cuisine, and a lively waterfront.',
            'longDescription' => '',
            'bestTimeToVisit' => '',
            'thingsToDo' => '',
            'accommodation' => '',
            'food' => '',
            'tags' => 'Bilbao, Basque Country, Guggenheim Museum, Casco Viejo, Pintxos, Architecture, Culture, Gastronomy, Contemporary Art, Urban',
            'imageTags' => 'Guggenheim Museum, Casco Viejo, River Nervion, Pintxos, Modern Architecture',
            'ranking' => 9,
            'worldRanking' => 9,
            'sortOrder' => 9,
        ],
        [
            'placeName' => 'Toledo',
            'slug' => 'toledo',
            'countryRegion' => 'Castile-La Mancha',
            'countryCode' => 'ES',
            'briefDescription' => 'Located just outside of Madrid, Toledo is known as the "City of Three Cultures" due to its historical coexistence of Christians, Muslims, and Jews. The city\'s medieval architecture, including the stunning Toledo Cathedral, attracts visitors from around the world.',
            'longDescription' => '',
            'bestTimeToVisit' => '',
            'thingsToDo' => '',
            'accommodation' => '',
            'food' => '',
            'tags' => 'Toledo, City of Three Cultures, UNESCO World Heritage, Toledo Cathedral, El Greco, Jewish Quarter, Alcázar of Toledo, Tagus River, Roman Ruins, Sword-making',
            'imageTags' => 'Toledo Cathedral, Alcázar of Toledo, Jewish Quarter, El Greco, City Walls',
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
