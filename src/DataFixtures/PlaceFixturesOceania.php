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

class PlaceFixturesOceania extends Fixture implements DependentFixtureInterface, FixtureGroupInterface
{
    use DataFixturesTrait;

    private array $places = [
        [
            'placeName' => 'Great Barrier Reef',
            'slug' => 'great-barrier-reef',
            'countryRegion' => 'Queensland',
            'countryCode' => 'AU',
            'briefDescription' => 'A natural wonder, the Great Barrier Reef is the world\'s largest coral reef system, offering breathtaking snorkeling and diving experiences with colorful marine life and pristine waters.',
        ],
        [
            'placeName' => 'Uluru (Ayers Rock)',
            'slug' => 'uluru-ayers-rock',
            'countryRegion' => 'Northern Territory',
            'countryCode' => 'AU',
            'briefDescription' => 'A sacred monolith rising dramatically from the desert, Uluru is an iconic symbol of Australia\'s ancient indigenous culture, offering stunning sunrises and sunsets.',
        ],
        [
            'placeName' => 'Sydney',
            'slug' => 'sydney',
            'countryRegion' => 'New South Wales',
            'countryCode' => 'AU',
            'briefDescription' => 'Australia\'s vibrant harbor city, Sydney is famous for its iconic landmarks like the Sydney Opera House and Sydney Harbour Bridge, offering a blend of stunning beaches, cultural experiences, and a bustling cityscape.',
        ],
        [
            'placeName' => 'Daintree Rainforest',
            'slug' => 'daintree-rainforest',
            'countryRegion' => 'Queensland',
            'countryCode' => 'AU',
            'briefDescription' => 'A UNESCO World Heritage site, the Daintree Rainforest is one of the oldest tropical rainforests on Earth, teeming with unique flora and fauna, providing an enchanting escape into nature.',
        ],
        [
            'placeName' => 'Kangaroo Island',
            'slug' => 'kangaroo-island',
            'countryRegion' => 'South Australia',
            'countryCode' => 'AU',
            'briefDescription' => 'Known as Australia\'s Galapagos, Kangaroo Island boasts diverse wildlife, including kangaroos, koalas, and seals, alongside breathtaking landscapes, such as rugged coastlines and pristine beaches.',
        ],
        [
            'placeName' => 'Milford Sound',
            'slug' => 'milford-sound',
            'countryRegion' => 'South Island',
            'countryCode' => 'NZ',
            'briefDescription' => 'A stunning fjord with towering cliffs, cascading waterfalls, and abundant wildlife, offering scenic cruises and hiking opportunities amidst awe-inspiring landscapes.',
        ],
        [
            'placeName' => 'Hobbiton',
            'slug' => 'hobbiton',
            'countryRegion' => 'North Island',
            'countryCode' => 'NZ',
            'briefDescription' => 'A magical movie set from "The Lord of the Rings" and "The Hobbit" films, where visitors can explore the charming hobbit holes and experience Middle-earth.',
        ],
        [
            'placeName' => 'Tongariro National Park',
            'slug' => 'tongariro-national-park',
            'countryRegion' => 'North Island',
            'countryCode' => 'NZ',
            'briefDescription' => 'New Zealand\'s oldest national park, featuring the otherworldly landscapes of the Tongariro Alpine Crossing, including volcanic peaks, emerald lakes, and geothermal activity.',
        ],
        [
            'placeName' => 'Fox and Franz Josef Glaciers',
            'slug' => 'fox-and-franz-josef-glaciers',
            'countryRegion' => 'South Island',
            'countryCode' => 'NZ',
            'briefDescription' => 'Unique glaciers that descend from the Southern Alps to rainforests, offering guided walks and helicopter tours for an up-close encounter with icy wonders.',
        ],
        [
            'placeName' => 'Bay of Islands',
            'slug' => 'bay-of-islands',
            'countryRegion' => 'North Island',
            'countryCode' => 'NZ',
            'briefDescription' => 'A picturesque region with 144 islands, offering sailing, dolphin watching, and historic sites like the Waitangi Treaty Grounds, where New Zealand\'s founding document was signed.',
        ],
        [
            'placeName' => 'Cocos (Keeling) Islands',
            'slug' => 'cocos-keeling-islands',
            'countryRegion' => 'Cocos (Keeling) Islands',
            'countryCode' => 'CC',
            'briefDescription' => 'Remote tropical paradise with white-sand beaches, vibrant marine life, ideal for snorkeling, diving, and experiencing unique Cocos Malay culture. Off-the-beaten-path adventure awaits!',
        ],
        [
            'placeName' => 'Cook Islands',
            'slug' => 'cook-islands',
            'countryRegion' => 'Cook Islands',
            'countryCode' => 'CK',
            'briefDescription' => 'A Polynesian gem in the South Pacific, offering stunning turquoise waters, coral reefs, lush landscapes, and warm hospitality, perfect for relaxation and cultural exploration.',
        ],
        [
            'placeName' => 'Christmas Island',
            'slug' => 'christmas-island',
            'countryRegion' => 'Christmas Island',
            'countryCode' => 'CX',
            'briefDescription' => 'A remote Australian territory in the Indian Ocean, known for its unique wildlife, spectacular red crab migration, pristine beaches, and diverse marine life, ideal for nature enthusiasts and adventure seekers.',
        ],
        [
            'placeName' => 'Fiji',
            'slug' => 'fiji',
            'countryRegion' => 'Fiji',
            'countryCode' => 'FJ',
            'briefDescription' => 'An enchanting South Pacific archipelago, boasting turquoise waters, palm-fringed beaches, vibrant coral reefs, warm hospitality, and rich cultural experiences, creating a tropical paradise for relaxation and adventure.',
        ],
        [
            'placeName' => 'Guam',
            'slug' => 'guam',
            'countryRegion' => 'Guam',
            'countryCode' => 'GU',
            'briefDescription' => 'A U.S. territory in the Western Pacific, featuring beautiful beaches, World War II historical sites, Chamorro culture, and outdoor activities like snorkeling and hiking, making it a diverse island destination.',
        ],
        [
            'placeName' => 'French Polynesia',
            'slug' => 'french-polynesia',
            'countryRegion' => 'French Polynesia',
            'countryCode' => 'PF',
            'briefDescription' => 'A dreamy South Pacific archipelago, encompassing Tahiti, Bora Bora, and more, renowned for its overwater bungalows, turquoise lagoons, lush mountains, and vibrant Polynesian culture, offering an idyllic tropical escape.',
        ],
        [
            'placeName' => 'Papua New Guinea',
            'slug' => 'papua-new-guinea',
            'countryRegion' => 'Papua New Guinea',
            'countryCode' => 'PG',
            'briefDescription' => 'A culturally diverse and rugged country in the South Pacific, known for its pristine rainforests, unique tribal cultures, diverse wildlife, and adventurous trekking opportunities, making it an off-the-beaten-path destination for explorers.',
        ],
        [
            'placeName' => 'Solomon Islands',
            'slug' => 'solomon-islands',
            'countryRegion' => 'Solomon Islands',
            'countryCode' => 'SB',
            'briefDescription' => 'An untouched Pacific paradise, offering turquoise waters, lush rainforests, World War II relics, and vibrant indigenous cultures, making it an ideal destination for diving, nature enthusiasts, and cultural immersion.',
        ],
        [
            'placeName' => 'Tonga',
            'slug' => 'tonga',
            'countryRegion' => 'Tonga',
            'countryCode' => 'TO',
            'briefDescription' => 'A serene South Pacific kingdom, featuring white-sand beaches, clear waters, humpback whale encounters, authentic Polynesian culture, and a laid-back atmosphere, offering an escape to paradise.',
        ],
        [
            'placeName' => 'Samoa',
            'slug' => 'samoa',
            'countryRegion' => 'Samoa',
            'countryCode' => 'WS',
            'briefDescription' => 'A tropical Polynesian haven, showcasing stunning beaches, lush landscapes, cascading waterfalls, vibrant fa\'a Samoa (Samoan culture), and warm hospitality, making it a serene getaway with authentic island charm.',
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
