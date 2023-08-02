<?php

declare(strict_types=1);

namespace App\DataFixtures;

use App\Entity\Place;
use App\Factory\PlaceImageFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ObjectManager;

class PlaceImageFixturesFrance extends Fixture implements DependentFixtureInterface, FixtureGroupInterface
{
    private array $placeImages = [
        [
            'placeName' => 'Paris',
            'filePath' => 'assets/images/europe/france/paris/panorama/anthony-delanoix-pt4j4bGSPmw-unsplash.jpg',
            'orientation' => 'panorama',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Paris',
            'filePath' => 'assets/images/europe/france/paris/panorama/florian-wehde-milUxSbp4_A-unsplash.jpg',
            'orientation' => 'panorama',
            'sortOrder' => 2,
        ],
        [
            'placeName' => 'Paris',
            'filePath' => 'assets/images/europe/france/paris/panorama/leonard-cotte-R5scocnOOdM-unsplash.jpg',
            'orientation' => 'panorama',
            'sortOrder' => 3,
        ],
        [
            'placeName' => 'Paris',
            'filePath' => 'assets/images/europe/france/paris/panorama/louis-paulin-3JC79rpl3ZA-unsplash.jpg',
            'orientation' => 'panorama',
            'sortOrder' => 4,
        ],
        [
            'placeName' => 'Paris',
            'filePath' => 'assets/images/europe/france/paris/panorama/michael-fousert-3G1e6AxFcMA-unsplash.jpg',
            'orientation' => 'panorama',
            'sortOrder' => 5,
        ],
        [
            'placeName' => 'Paris',
            'filePath' => 'assets/images/europe/france/paris/panorama/pedro-lastra-suRvdiwP9Pk-unsplash.jpg',
            'orientation' => 'panorama',
            'sortOrder' => 6,
        ],
        [
            'placeName' => 'Paris',
            'filePath' => 'assets/images/europe/france/paris/panorama/tony-lee-8IKf54pc3qk-unsplash.jpg',
            'orientation' => 'panorama',
            'sortOrder' => 7,
        ],
        [
            'placeName' => 'Paris',
            'filePath' => 'assets/images/europe/france/paris/landscape/michael-fousert-3G1e6AxFcMA-unsplash.jpg',
            'orientation' => 'landscape',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Paris',
            'filePath' => 'assets/images/europe/france/paris/portrait/celine-haeringer-6Z9kZp-4n6A-unsplash.jpg',
            'orientation' => 'portrait',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Paris',
            'filePath' => 'assets/images/europe/france/paris/portrait/john-towner-6Z9kZp-4n6A-unsplash.jpg',
            'orientation' => 'portrait',
            'sortOrder' => 2,
        ],
        [
            'placeName' => 'Paris',
            'filePath' => 'assets/images/europe/france/paris/portrait/louis-blythe-6ZTQJnVfY-8-unsplash.jpg',
            'orientation' => 'portrait',
            'sortOrder' => 3,
        ],

        [
            'placeName' => 'Bordeaux',
            'filePath' => 'assets/images/europe/france/Bordeaux/landscape/tristan-mimet-B8fbzLYcr64-unsplash.jpg',
            'orientation' => 'landscape',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Bordeaux',
            'filePath' => 'assets/images/europe/france/Bordeaux/panorama/tristan-mimet-B8fbzLYcr64-unsplash.jpg',
            'orientation' => 'panorama',
            'sortOrder' => 1,
        ],

        [
            'placeName' => 'French Riviera',
            'filePath' => 'assets/images/europe/france/french-riviera/landscape/nick-karvounis-GT4TGeuZZp0-unsplash.jpg',
            'orientation' => 'landscape',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'French Riviera',
            'filePath' => 'assets/images/europe/france/french-riviera/panorama/nick-karvounis-GT4TGeuZZp0-unsplash.jpg',
            'orientation' => 'panorama',
            'sortOrder' => 1,
        ],

        [
            'placeName' => 'Mont Saint-Michel',
            'filePath' => 'assets/images/europe/france/mont-saint-michel/landscape/frederic-paulussen-K4bvYKfXi3w-unsplash.jpg',
            'orientation' => 'landscape',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Mont Saint-Michel',
            'filePath' => 'assets/images/europe/france/mont-saint-michel/panorama/frederic-paulussen-K4bvYKfXi3w-unsplash.jpg',
            'orientation' => 'panorama',
            'sortOrder' => 1,
        ],

        [
            'placeName' => 'Provence',
            'filePath' => 'assets/images/europe/france/provence/landscape/clement-griffet-OfZGZlcRW38-unsplash.jpg',
            'orientation' => 'landscape',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Provence',
            'filePath' => 'assets/images/europe/france/provence/panorama/clement-griffet-OfZGZlcRW38-unsplash.jpg',
            'orientation' => 'panorama',
            'sortOrder' => 1,
        ],

        [
            'placeName' => 'Alsace',
            'filePath' => 'assets/images/europe/france/alsace/landscape/vered-caspi-bb35qAkWb9Y-unsplash.jpg',
            'orientation' => 'landscape',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Alsace',
            'filePath' => 'assets/images/europe/france/alsace/panorama/vered-caspi-bb35qAkWb9Y-unsplash.jpg',
            'orientation' => 'panorama',
            'sortOrder' => 1,
        ],

        [
            'placeName' => 'Corsica',
            'filePath' => 'assets/images/europe/france/corsica/landscape/dusan-veverkolog-7fOf5XKpnb8-unsplash.jpg',
            'orientation' => 'landscape',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Corsica',
            'filePath' => 'assets/images/europe/france/corsica/panorama/dusan-veverkolog-7fOf5XKpnb8-unsplash.jpg',
            'orientation' => 'panorama',
            'sortOrder' => 1,
        ],

        [
            'placeName' => 'French Alps',
            'filePath' => 'assets/images/europe/france/french-alps/landscape/clemence-bergougnoux-zLIrNgNzPYs-unsplash.jpg',
            'orientation' => 'landscape',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'French Alps',
            'filePath' => 'assets/images/europe/france/french-alps/panorama/clemence-bergougnoux-zLIrNgNzPYs-unsplash.jpg',
            'orientation' => 'panorama',
            'sortOrder' => 1,
        ],

        [
            'placeName' => 'Loire Valley',
            'filePath' => 'assets/images/europe/france/loire-valley/landscape/axp-photography-_WVCq08eLnM-unsplash.jpg',
            'orientation' => 'landscape',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Loire Valley',
            'filePath' => 'assets/images/europe/france/loire-valley/panorama/axp-photography-_WVCq08eLnM-unsplash.jpg',
            'orientation' => 'panorama',
            'sortOrder' => 1,
        ],

        [
            'placeName' => 'Normandy',
            'filePath' => 'assets/images/europe/france/normandy/landscape/ilnur-kalimullin-ZtdNFSpugQE-unsplash.jpg',
            'orientation' => 'landscape',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Normandy',
            'filePath' => 'assets/images/europe/france/normandy/panorama/ilnur-kalimullin-ZtdNFSpugQE-unsplash.jpg',
            'orientation' => 'panorama',
            'sortOrder' => 1,
        ],

        /*
        [
            'placeId' => '',
            'orientation' => '',
            'countryRegion' => '',
            'countryCode' => '',
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
            PlaceFixturesFrance::class,
        ];
    }

    public static function getGroups(): array
    {
        return ['place_image', 'all'];
    }

    public function load(ObjectManager $manager): void
    {
        $placeImageIndex = 1;
        PlaceImageFactory::createSequence(
            function () use (&$placeImageIndex) {
                foreach ($this->placeImages as $placeImage) {
                    $place = $this->entityManager->getRepository(Place::class)->findOneBy(['placeName' => $placeImage['placeName']]);

                    if (!$place) {
                        throw new \Exception('Place not found: '.$placeImage['placeName']);
                    }

                    yield [
                        'place' => $place,
                        'filePath' => $placeImage['filePath'],
                        'sortOrder' => $placeImage['sortOrder'],
                        'orientation' => $placeImage['orientation'],
                    ];
                    ++$placeImageIndex;
                }
            }
        );
    }
}
