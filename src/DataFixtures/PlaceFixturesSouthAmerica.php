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

class PlaceFixturesSouthAmerica extends Fixture implements DependentFixtureInterface, FixtureGroupInterface
{
    use DataFixturesTrait;

    private array $places = [
        [
            'placeName' => 'Iguazu Falls',
            'slug' => 'iguazu-falls',
            'countryRegion' => 'Misiones',
            'countryCode' => 'AR',
            'briefDescription' => 'A breathtaking natural wonder, Iguazu Falls is a collection of 275 waterfalls amid lush rainforest, offering spectacular views and a thrilling boat ride experience.',
        ],
        [
            'placeName' => 'Perito Moreno Glacier',
            'slug' => 'perito-moreno-glacier',
            'countryRegion' => 'Santa Cruz',
            'countryCode' => 'AR',
            'briefDescription' => 'A massive advancing glacier in Los Glaciares National Park, providing an awe-inspiring display of ice calving into Lake Argentino.',
        ],
        [
            'placeName' => 'Buenos Aires',
            'slug' => 'buenos-aires',
            'countryRegion' => 'Buenos Aires',
            'countryCode' => 'AR',
            'briefDescription' => 'Argentina\'s vibrant capital, known for its tango music, European-style architecture, diverse neighborhoods, and cultural scene, offering a rich blend of history and modernity.',
        ],
        [
            'placeName' => 'Ushuaia',
            'slug' => 'ushuaia',
            'countryRegion' => 'Tierra del Fuego',
            'countryCode' => 'AR',
            'briefDescription' => 'The southernmost city in the world, Ushuaia serves as a gateway to Antarctica, boasting stunning landscapes, wildlife, and adventurous activities like hiking and sailing.',
        ],
        [
            'placeName' => 'Salta and the Northwest',
            'slug' => 'salta-and-the-northwest',
            'countryRegion' => 'Salta',
            'countryCode' => 'AR',
            'briefDescription' => 'A region of stunning landscapes, colonial towns, and indigenous culture, with attractions like the Hill of Seven Colors, Cafayate vineyards, and the Train to the Clouds.',
        ],
        [
            'placeName' => 'Rio de Janeiro',
            'slug' => 'rio-de-janeiro',
            'countryRegion' => 'Rio de Janeiro',
            'countryCode' => 'BR',
            'briefDescription' => 'A vibrant coastal city, famed for its iconic landmarks like Christ the Redeemer and Sugarloaf Mountain, as well as stunning beaches and lively samba culture.',
        ],
        [
            'placeName' => 'Amazon Rainforest',
            'slug' => 'amazon-rainforest',
            'countryRegion' => 'Amazonas',
            'countryCode' => 'BR',
            'briefDescription' => 'The world\'s largest tropical rainforest, boasting unparalleled biodiversity and eco-tourism opportunities, offering wildlife encounters and unforgettable jungle experiences.',
        ],
        [
            'placeName' => 'Salvador da Bahia',
            'slug' => 'salvador-da-bahia',
            'countryRegion' => 'Bahia',
            'countryCode' => 'BR',
            'briefDescription' => 'A city rich in Afro-Brazilian culture, featuring colorful colonial architecture, lively music and dance, and a captivating blend of African and Portuguese heritage.',
        ],
        [
            'placeName' => 'Iguazu Falls',
            'slug' => 'iguazu-falls',
            'countryRegion' => 'Misiones',
            'countryCode' => 'BR',
            'briefDescription' => 'A breathtaking natural wonder shared with Argentina, comprising 275 waterfalls surrounded by lush forests, providing incredible views and boat rides close to the cascades.',
        ],
        [
            'placeName' => 'Fernando de Noronha',
            'slug' => 'fernando-de-noronha',
            'countryRegion' => 'Pernambuco',
            'countryCode' => 'BR',
            'briefDescription' => 'A pristine archipelago with crystalline waters, white-sand beaches, and diverse marine life, perfect for diving, snorkeling, and ecotourism in a protected marine reserve.',
        ],
        [
            'placeName' => 'Salar de Uyuni',
            'slug' => 'salar-de-uyuni',
            'countryRegion' => 'Potosi',
            'countryCode' => 'BO',
            'briefDescription' => 'The world\s largest salt flat, a surreal landscape that becomes a mirror during the rainy season, offering breathtaking views and opportunities for photography and stargazing.',
        ],
        [
            'placeName' => 'La Paz',
            'slug' => 'la-paz',
            'countryRegion' => 'La Paz',
            'countryCode' => 'BO',
            'briefDescription' => 'Bolivia\'s capital city nestled in a dramatic valley, featuring unique markets, the Witches\' Market, and the stunning Valle de la Luna (Valley of the Moon) with lunar-like formations.',
        ],
        [
            'placeName' => 'Tiwanaku',
            'slug' => 'tiwanaku',
            'countryRegion' => 'La Paz',
            'countryCode' => 'BO',
            'briefDescription' => 'An ancient archaeological site near Lake Titicaca, with impressive pre-Inca ruins, including the Akapana Pyramid and the Gate of the Sun, offering insights into Bolivia\'s rich history.',
        ],
        [
            'placeName' => 'Atacama Desert',
            'slug' => 'atacama-desert',
            'countryRegion' => 'Antofagasta',
            'countryCode' => 'CL',
            'briefDescription' => 'The driest desert on Earth, boasting lunar-like landscapes, geysers, and stunning salt flats, offering stargazing opportunities and unique outdoor adventures.',
        ],
        [
            'placeName' => 'Torres del Paine National Park',
            'slug' => 'torres-del-paine-national-park',
            'countryRegion' => 'Magallanes',
            'countryCode' => 'CL',
            'briefDescription' => 'A Patagonian paradise with soaring granite peaks, glaciers, and emerald lakes, providing world-class trekking experiences and abundant wildlife sightings.',
        ],
        [
            'placeName' => 'Easter Island',
            'slug' => 'easter-island',
            'countryRegion' => 'Valparaiso',
            'countryCode' => 'CL',
            'briefDescription' => 'A remote Pacific island known for its mysterious Moai statues, ancient Polynesian culture, and stunning beaches, making it a fascinating and isolated destination.',
        ],
        [
            'placeName' => 'Cartagena',
            'slug' => 'cartagena',
            'countryRegion' => 'Bolivar',
            'countryCode' => 'CO',
            'briefDescription' => 'A coastal gem with a well-preserved historic center, featuring colorful colonial architecture, cobbled streets, and vibrant Caribbean culture, making it a must-visit destination for history and beach lovers.',
        ],
        [
            'placeName' => 'Tayrona National Natural Park',
            'slug' => 'tayrona-national-natural-park',
            'countryRegion' => 'Magdalena',
            'countryCode' => 'CO',
            'briefDescription' => 'A protected area on the Caribbean coast, featuring lush rainforest, white-sand beaches, and pre-Columbian ruins, offering a variety of outdoor activities and wildlife sightings.',
        ],
        [
            'placeName' => 'Medellín',
            'slug' => 'medellin',
            'countryRegion' => 'Antioquia',
            'countryCode' => 'CO',
            'briefDescription' => 'Once infamous, now vibrant, this city in the Andes is known for its innovative urban renewal, pleasant climate, and artistic atmosphere, making it a captivating destination for modern culture and city exploration.',
        ],
        [
            'placeName' => 'Galápagos Islands',
            'slug' => 'galapagos-islands',
            'countryRegion' => 'Galapagos',
            'countryCode' => 'EC',
            'briefDescription' => 'A bucket-list destination known for its diverse wildlife and pristine landscapes, offering incredible opportunities for snorkeling, wildlife encounters, and a glimpse into Charles Darwin\'s theory of evolution.',
        ],
        [
            'placeName' => 'Quito',
            'slug' => 'quito',
            'countryRegion' => 'Pichincha',
            'countryCode' => 'EC',
            'briefDescription' => 'Ecuador\'s capital, nestled in the Andes, boasts well-preserved colonial architecture, vibrant markets, and nearby volcanoes, providing a mix of history, culture, and outdoor adventures.',
        ],
        [
            'placeName' => 'Amazon Rainforest',
            'slug' => 'amazon-rainforest',
            'countryRegion' => 'Amazonas',
            'countryCode' => 'EC',
            'briefDescription' => 'Part of the world\'s largest tropical rainforest, the Ecuadorian Amazon offers immersive jungle experiences, indigenous encounters, and a chance to explore the incredible biodiversity of the region.',
        ],
        [
            'placeName' => 'Machu Picchu',
            'slug' => 'machu-picchu',
            'countryRegion' => 'Cusco',
            'countryCode' => 'PE',
            'briefDescription' => 'An iconic Incan citadel nestled in the Andes, offering breathtaking views, ancient ruins, and a chance to experience the ancient marvels of the Inca civilization.',
        ],
        [
            'placeName' => 'Cusco',
            'slug' => 'cusco',
            'countryRegion' => 'Cusco',
            'countryCode' => 'PE',
            'briefDescription' => 'A historic city with Spanish colonial architecture built on Incan foundations, serving as a gateway to Machu Picchu and showcasing a vibrant blend of cultures.',
        ],
        [
            'placeName' => 'Amazon Rainforest',
            'slug' => 'amazon-rainforest',
            'countryRegion' => 'Loreto',
            'countryCode' => 'PE',
            'briefDescription' => 'A vast expanse of pristine jungle, providing exceptional wildlife encounters, indigenous culture experiences, and eco-tourism adventures in one of the world\'s most biodiverse regions.',
        ],
        [
            'placeName' => 'Asunción',
            'slug' => 'asuncion',
            'countryRegion' => 'Asuncion',
            'countryCode' => 'PY',
            'briefDescription' => 'The capital city offering a mix of colonial architecture, modernity, and cultural richness, with attractions like the Panteón Nacional de los Héroes and lively local markets.',
        ],
        [
            'placeName' => 'Iguazu Falls (Paraguay)',
            'slug' => 'iguazu-falls',
            'countryRegion' => 'Alto Parana',
            'countryCode' => 'PY',
            'briefDescription' => 'A lesser-known part of the famous falls, offering a tranquil experience amidst lush forests and providing unique views of the majestic cascades.',
        ],
        [
            'placeName' => 'Montevideo',
            'slug' => 'montevideo',
            'countryRegion' => 'Montevideo',
            'countryCode' => 'UY',
            'briefDescription' => 'Uruguay\'s capital city, known for its coastal promenades, colonial architecture, and vibrant culture, offering a mix of history and modernity.',
        ],
        [
            'placeName' => 'Punta del Este',
            'slug' => 'punta-del-este',
            'countryRegion' => 'Maldonado',
            'countryCode' => 'UY',
            'briefDescription' => 'A chic beach resort town, attracting visitors with its sandy beaches, upscale restaurants, and lively nightlife, making it a popular destination for beach lovers and socialites.',
        ],
        [
            'placeName' => 'Colonia del Sacramento',
            'slug' => 'colonia-del-sacramento',
            'countryRegion' => 'Colonia',
            'countryCode' => 'UY',
            'briefDescription' => 'A UNESCO World Heritage site, this charming colonial town showcases cobbled streets, historic buildings, and a captivating blend of Portuguese and Spanish influences.',
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
