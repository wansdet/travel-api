<?php

declare(strict_types=1);

namespace App\DataFixtures;

use App\Entity\Place;
use App\Factory\FeaturedImageFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ObjectManager;

class FeaturedImageFixtures extends Fixture implements DependentFixtureInterface, FixtureGroupInterface
{
    private array $featuredImages = [
        /* Section 1 */
        [
            'pageType' => 'home',
            'section' => 1,
            'orientation' => 'panorama',
            'title' => 'Paris',
            'description' => 'Romantic city with iconic landmarks, world-class cuisine, charming streets, and a captivating blend of history and culture.',
            'filePath' => 'assets/images/europe/france/paris/panorama/florian-wehde-milUxSbp4_A-unsplash.jpg',
            'ranking' => 1,
            'sortOrder' => 1,
        ],
        [
            'pageType' => 'home',
            'section' => 1,
            'orientation' => 'panorama',
            'title' => 'London',
            'description' => 'Cosmopolitan metropolis with iconic landmarks, royal heritage, diverse culture, thriving arts scene, and vibrant street life.',
            'filePath' => 'assets/images/europe/united-kingdom/london/panorama/shannon-tremaine-NRz7SfpnqUM-unsplash.jpg',
            'ranking' => 2,
            'sortOrder' => 2,
        ],
        [
            'pageType' => 'home',
            'section' => 1,
            'orientation' => 'panorama',
            'title' => 'Barcelona',
            'description' => 'Vibrant coastal city with stunning architecture, lively street life, delicious cuisine, and a rich artistic heritage.',
            'filePath' => 'assets/images/europe/spain/barcelona/panorama/ken-cheung-VbLTNceBTFE-unsplash.jpg',
            'ranking' => 3,
            'sortOrder' => 3,
        ],
        [
            'pageType' => 'home',
            'section' => 1,
            'orientation' => 'panorama',
            'title' => 'Florence',
            'description' => 'Artistic treasure trove with Renaissance masterpieces, magnificent architecture, charming streets, and delectable Tuscan cuisine.',
            'filePath' => 'assets/images/europe/italy/florence/panorama/ahmed-mansour-NmXEMrm8o7g-unsplash.jpg',
            'ranking' => 4,
            'sortOrder' => 4,
        ],
        [
            'pageType' => 'home',
            'section' => 1,
            'orientation' => 'panorama',
            'title' => 'York',
            'description' => 'Medieval gem with ancient city walls, historic charm, iconic cathedral, quaint streets, and rich Viking heritage.',
            'filePath' => 'assets/images/europe/united-kingdom/york/panorama/karl-moran-JBJmXBiCBPk-unsplash.jpg',
            'ranking' => 5,
            'sortOrder' => 5,
        ],

        /* Section 2 */
        [
            'pageType' => 'home',
            'section' => 2,
            'orientation' => 'portrait',
            'title' => 'Milan',
            'description' => 'Fashion capital with stunning architecture, world-class shopping, thriving arts scene, and vibrant culinary offerings.',
            'filePath' => 'assets/images/europe/italy/milan/portrait/julia-solonina-lZKMFhsPQ30-unsplash.jpg',
            'ranking' => 1,
            'sortOrder' => 1,
        ],
        [
            'pageType' => 'home',
            'section' => 2,
            'orientation' => 'portrait',
            'title' => 'London',
            'description' => 'Cosmopolitan metropolis with iconic landmarks, royal heritage, diverse culture, thriving arts scene, and vibrant street life.',
            'filePath' => 'assets/images/europe/united-kingdom/london/portrait/anthony-bressy-HeKAtfot-Dc-unsplash.jpg',
            'ranking' => 2,
            'sortOrder' => 2,
        ],
        [
            'pageType' => 'home',
            'section' => 2,
            'orientation' => 'portrait',
            'title' => 'Provence',
            'description' => 'Idyllic region with picturesque landscapes, fragrant lavender fields, charming villages, exquisite cuisine, and rich cultural heritage.',
            'filePath' => 'assets/images/europe/france/provence/portrait/andrei-koscina-Qn_ot1LHFng-unsplash.jpg',
            'ranking' => 3,
            'sortOrder' => 3,
        ],

        /* Section 3 */
        /*
        [
            'pageType' => 'home',
            'section' => 3,
            'orientation' => 'portrait',
            'title' => 'Hong Kong',
            'description' => 'Dynamic metropolis with towering skyscrapers, bustling markets, vibrant street food, stunning harbor views, and diverse cultural experiences.',
            'filePath' => 'assets/images/asia/hong-kong/landscape/manson-yim-XXgderYktds-unsplash.jpg',
            'ranking' => 1,
            'sortOrder' => 1,
        ],*/
        [
            'pageType' => 'home',
            'section' => 3,
            'orientation' => 'portrait',
            'title' => 'Bali',
            'description' => 'Tropical paradise with stunning beaches, lush landscapes, ancient temples, vibrant arts, and a laid-back island atmosphere.',
            'filePath' => 'assets/images/asia/indonesia/bali/landscape/alfiano-sutianto-exFdOWkYBQw-unsplash.jpg',
            'ranking' => 1,
            'sortOrder' => 1,
        ],
        [
            'pageType' => 'home',
            'section' => 3,
            'orientation' => 'portrait',
            'title' => 'Tokyo',
            'description' => 'Lively megacity with cutting-edge technology, ancient traditions, neon-lit streets, world-class cuisine, and captivating pop culture.',
            'filePath' => 'assets/images/asia/japan/tokyo/landscape/jezael-melgoza-alY6_OpdwRQ-unsplash.jpg',
            'ranking' => 2,
            'sortOrder' => 2,
        ],
        [
            'pageType' => 'home',
            'section' => 3,
            'orientation' => 'portrait',
            'title' => 'Singapore',
            'description' => 'Modern city-state with futuristic architecture, lush gardens, multicultural cuisine, luxury shopping, and a vibrant street food scene.',
            'filePath' => 'assets/images/asia/singapore/singapore-city/landscape/swapnil-bapat-sJ7pYyJFyuA-unsplash.jpg',
            'ranking' => 3,
            'sortOrder' => 3,
        ],
        [
            'pageType' => 'home',
            'section' => 3,
            'orientation' => 'portrait',
            'title' => 'Bangkok',
            'description' => 'Bustling capital with ornate temples, vibrant street markets, exquisite cuisine, energetic nightlife, and rich cultural heritage.',
            'filePath' => 'assets/images/asia/thailand/bangkok/landscape/frida-aguilar-estrada-_ffkj8TnuGo-unsplash.jpg',
            'ranking' => 4,
            'sortOrder' => 4,
        ],
        [
            'pageType' => 'home',
            'section' => 3,
            'orientation' => 'portrait',
            'title' => 'Seoul',
            'description' => 'Dynamic metropolis with ancient palaces, futuristic technology, thriving K-pop scene, vibrant street food, and rich cultural traditions.',
            'filePath' => 'assets/images/asia/south-korea/seoul/landscape/mathew-schwartz-01hH6y7oZFk-unsplash.jpg',
            'ranking' => 5,
            'sortOrder' => 5,
        ],
        [
            'pageType' => 'home',
            'section' => 3,
            'orientation' => 'portrait',
            'title' => 'Shanghai',
            'description' => 'Cosmopolitan metropolis with towering skyscrapers, historic waterfront, diverse cuisine, vibrant markets, and a blend of modernity and tradition.',
            'filePath' => 'assets/images/asia/china/shanghai/landscape/li-yang-5h_dMuX_7RE-unsplash.jpg',
            'ranking' => 6,
            'sortOrder' => 6,
        ],

        /* Section 4 */
        [
            'pageType' => 'home',
            'section' => 4,
            'orientation' => 'landscape',
            'title' => 'New York City',
            'description' => 'Vibrant metropolis with iconic landmarks, diverse culture, world-class dining, and endless entertainment options.',
            'filePath' => 'assets/images/north-america/united-states/new-york-city/landscape/andreas-niendorf-l8ypMiU1Hio-unsplash.jpg',
            'ranking' => 1,
            'sortOrder' => 1,
        ],
        [
            'pageType' => 'home',
            'section' => 4,
            'orientation' => 'landscape',
            'title' => 'Cancun and the Riviera Maya',
            'description' => 'Tropical paradise with pristine beaches, turquoise waters, vibrant nightlife, and ancient Mayan ruins.',
            'filePath' => 'assets/images/north-america/mexico/cancun/landscape/josh-hammond-VOnMTj81T_E-unsplash.jpg',
            'ranking' => 2,
            'sortOrder' => 2,
        ],
        [
            'pageType' => 'home',
            'section' => 4,
            'orientation' => 'landscape',
            'title' => 'Vancouver',
            'description' => 'Breathtaking city surrounded by mountains, offering stunning natural beauty, diverse culture, and outdoor adventures.',
            'filePath' => 'assets/images/north-america/canada/vancouver/landscape/lee-robinson-MzCeUhY3Xy0-unsplash(1).jpg',
            'ranking' => 3,
            'sortOrder' => 3,
        ],
        [
            'pageType' => 'home',
            'section' => 4,
            'orientation' => 'landscape',
            'title' => 'Yellowstone National Park',
            'description' => 'Iconic wilderness sanctuary with geysers, hot springs, wildlife, and majestic landscapes showcasing the power of nature.',
            'filePath' => 'assets/images/north-america/united-states/yellowstone-national-park/landscape/meina-yin-2H5P4fWf1LA-unsplash.jpg',
            'ranking' => 4,
            'sortOrder' => 4,
        ],
        [
            'pageType' => 'home',
            'section' => 4,
            'orientation' => 'landscape',
            'title' => 'Boston',
            'description' => 'Historic city with rich colonial heritage, renowned universities, charming neighborhoods, and a thriving arts and culture scene.',
            'filePath' => 'assets/images/north-america/united-states/boston/landscape/jimmy-woo-SUMtPksZXBE-unsplash.jpg',
            'ranking' => 5,
            'sortOrder' => 5,
        ],
        [
            'pageType' => 'home',
            'section' => 4,
            'orientation' => 'landscape',
            'title' => 'Banff National Park',
            'description' => 'Alpine wilderness featuring turquoise lakes, majestic mountains, abundant wildlife, and incredible outdoor activities.',
            'filePath' => 'assets/images/north-america/canada/banff-national-park/landscape/david-wirzba-wxalerEiUVQ-unsplash.jpg',
            'ranking' => 6,
            'sortOrder' => 6,
        ],

        /*
        [
            'pageType' => 'home',
            'section' => 1,
            'orientation' => '',
            'title' => '',
            'description' => '',
            'filePath' => '',
            'ranking' => 1,
            'sortOrder' => 1,
        ],
         */
    ];

    public function __construct(private readonly EntityManagerInterface $entityManager)
    {
    }

    public function getDependencies(): array
    {
        return [
            PlaceImageFixturesUSA::class,
        ];
    }

    public static function getGroups(): array
    {
        return ['place_image', 'all'];
    }

    public function load(ObjectManager $manager)
    {
        $featuredImagesIndex = 1;
        FeaturedImageFactory::createSequence(
            function () use (&$featuredImagesIndex) {
                foreach ($this->featuredImages as $featuredImage) {
                    $place = $this->entityManager->getRepository(Place::class)->findOneBy(['placeName' => $featuredImage['title']]);

                    if (!$place) {
                        // throw new \Exception('Place not found: '.$featuredImage['title']);
                        $link = '';
                    } else {
                        $link = '/destinations/'.$place->getId();
                    }

                    yield [
                        'pageType' => $featuredImage['pageType'],
                        'section' => $featuredImage['section'],
                        'orientation' => $featuredImage['orientation'],
                        'title' => $featuredImage['title'],
                        'description' => $featuredImage['description'],
                        'filePath' => $featuredImage['filePath'],
                        'ranking' => $featuredImage['ranking'],
                        'sortOrder' => $featuredImage['sortOrder'],
                        'link' => $link,
                    ];
                    ++$featuredImagesIndex;
                }
            }
        );
    }
}
