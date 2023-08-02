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

class PlaceFixturesMexico extends Fixture implements DependentFixtureInterface, FixtureGroupInterface
{
    use DataFixturesTrait;

    private array $places = [
        [
            'placeName' => 'Mexico City',
            'slug' => 'mexico-city',
            'countryRegion' => 'Mexico City',
            'countryCode' => 'MX',
            'briefDescription' => 'Mexico City is a vibrant capital bursting with cultural treasures. Explore historic sites like the Zocalo and Templo Mayor, indulge in delicious street food, and immerse yourself in world-class museums such as the Frida Kahlo Museum and the National Museum of Anthropology.',
            'longDescription' => '',
            'bestTimeToVisit' => '',
            'thingsToDo' => '',
            'accommodation' => '',
            'food' => '',
            'tags' => 'For a taste of fine dining, explore the upscale restaurants in Polanco and Roma neighborhoods, where renowned chefs showcase innovative Mexican cuisine with a modern twist. Don\'t miss the opportunity to savor delicious Mexican street snacks like elote (grilled corn) and churros.',
            'imageTags' => 'Zocalo, Metropolitan Cathedral, Frida Kahlo Museum, Templo Mayor, Chapultepec Castle, National Museum of Anthropology, Coyoacan, San Angel, Mexican cuisine, Diego Rivera murals, Historic Center, Xochimilco, Polanco, Reforma, Mercado de la Merced',
            'ranking' => 1,
            'worldRanking' => 1,
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Cancun and the Riviera Maya',
            'slug' => 'cancun-and-the-riviera-maya',
            'countryRegion' => 'Cancun and the Riviera Maya',
            'countryCode' => 'MX',
            'briefDescription' => 'Cancun and the Riviera Maya offer stunning beaches, crystal-clear waters, and a vibrant nightlife. Explore ancient Mayan ruins, snorkel in the Great Mayan Reef, and indulge in the luxury resorts and outdoor adventures this tropical paradise has to offer.',
            'longDescription' => '',
            'bestTimeToVisit' => '',
            'thingsToDo' => '',
            'accommodation' => '',
            'food' => '',
            'tags' => 'Tulum, Chichen Itza, Playa del Carmen, Cancun Hotel Zone, Xcaret, Isla Mujeres, cenotes, Mayan ruins, beach, snorkeling, luxury resorts, eco-tourism, Sian Ka\'an Biosphere Reserve, Akumal, Mexican cuisine',
            'imageTags' => 'Cancun, Riviera Maya, beaches, Mayan ruins, snorkeling, Great Mayan Reef, cenotes, nightlife, luxury resorts, outdoor adventures',
            'ranking' => 2,
            'worldRanking' => 2,
            'sortOrder' => 2,
        ],
        [
            'placeName' => 'Oaxaca',
            'slug' => 'oaxaca',
            'countryRegion' => 'Oaxaca',
            'countryCode' => 'MX',
            'briefDescription' => 'Oaxaca is a cultural gem in Mexico, known for its colonial architecture, vibrant markets, and rich indigenous heritage. Explore ancient ruins, immerse yourself in traditional arts and crafts, and savor the regional cuisine that makes Oaxaca a truly unique destination.',
            'longDescription' => '',
            'bestTimeToVisit' => '',
            'thingsToDo' => '',
            'accommodation' => '',
            'food' => '',
            'tags' => 'Oaxaca, cultural heritage, colonial architecture, traditional crafts, markets, mole, mezcal, archaeological sites, Zapotec culture, textiles',
            'imageTags' => 'Monte Albán, Mercado Benito Juarez, Santo Domingo Church, Oaxaca Textile Museum, Day of the Dead, Mitla, Guelaguetza festival, Hierve el Agua, mezcal distillery, tlayudas, traditional crafts, Zocalo, Oaxacan cuisine, Jardín Etnobotánico de Oaxaca, street food.',
            'ranking' => 3,
            'worldRanking' => 3,
            'sortOrder' => 3,
        ],
        [
            'placeName' => 'Guanajuato',
            'slug' => 'guanajuato',
            'countryRegion' => 'Guanajuato',
            'countryCode' => 'MX',
            'briefDescription' => 'Guanajuato, a UNESCO World Heritage site, enchants visitors with its colorful colonial architecture, narrow winding streets, and vibrant cultural scene. Discover its rich history, explore underground tunnels, and immerse yourself in the lively atmosphere of its plazas.',
            'longDescription' => '',
            'bestTimeToVisit' => '',
            'thingsToDo' => '',
            'accommodation' => '',
            'food' => '',
            'tags' => 'Guanajuato, colonial architecture, underground tunnels, cultural festivals, mummies, mining history, museums, historic sites, traditional food, Teatro Juarez',
            'imageTags' => 'Callejón del Beso, Basilica of Our Lady of Guanajuato, El Pípila, Museum of the Mummies, Hidalgo Market, Teatro Juarez, Alhóndiga de Granaditas, Plaza de la Paz, Diego Rivera House Museum, Monumento al Pípila, enchiladas mineras, street food, colonial streets, panoramic views, cultural festivals',
            'ranking' => 4,
            'worldRanking' => 4,
            'sortOrder' => 4,
        ],
        [
            'placeName' => 'Copper Canyon',
            'slug' => 'copper-canyon',
            'countryRegion' => 'Copper Canyon',
            'countryCode' => 'MX',
            'briefDescription' => 'Copper Canyon, located in the Sierra Madre Occidental mountain range, is a breathtaking natural wonder known for its stunning landscapes, rugged canyons, and scenic train rides. Explore the vast canyon system, hike through picturesque trails, and immerse yourself in the indigenous culture of the Tarahumara people.',
            'longDescription' => '',
            'bestTimeToVisit' => '',
            'thingsToDo' => '',
            'accommodation' => '',
            'food' => '',
            'tags' => 'Copper Canyon, Barrancas del Cobre, Sierra Madre Occidental, canyons, natural beauty, hiking, indigenous culture, Tarahumara, scenic train, outdoor adventure',
            'imageTags' => 'Copper Canyon Train, Tarahumara community, hiking trails, Urique River, Batopilas River, Creel, Basaseachi Waterfall, zip-lining, birdwatching, Piedra Volada viewpoint, eco-lodge, tesgüino, pinole, stunning landscapes, outdoor adventure, cultural immersion',
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
