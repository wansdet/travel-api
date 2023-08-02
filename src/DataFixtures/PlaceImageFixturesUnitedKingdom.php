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

class PlaceImageFixturesUnitedKingdom extends Fixture implements DependentFixtureInterface, FixtureGroupInterface
{
    private array $placeImages = [
        [
            'placeName' => 'Bath',
            'filePath' => 'assets/images/europe/united-kingdom/bath/landscape/lasma-artmane-iq5kbiunYF8-unsplash.jpg',
            'orientation' => 'landscape',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Bath',
            'filePath' => 'assets/images/europe/united-kingdom/bath/panorama/lasma-artmane-iq5kbiunYF8-unsplash.jpg',
            'orientation' => 'panorama',
            'sortOrder' => 1,
        ],

        [
            'placeName' => 'Cambridge',
            'filePath' => 'assets/images/europe/united-kingdom/cambridge/landscape/kirsten-drew-xWdwXtgw-Pg-unsplash.jpg',
            'orientation' => 'landscape',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Cambridge',
            'filePath' => 'assets/images/europe/united-kingdom/cambridge/panorama/kirsten-drew-xWdwXtgw-Pg-unsplash.jpg',
            'orientation' => 'panorama',
            'sortOrder' => 1,
        ],

        [
            'placeName' => 'Edinburgh',
            'filePath' => 'assets/images/europe/united-kingdom/edinburgh/landscape/cameron-gibson-TmDEY0DtQd0-unsplash.jpg',
            'orientation' => 'landscape',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Edinburgh',
            'filePath' => 'assets/images/europe/united-kingdom/edinburgh/panorama/cameron-gibson-TmDEY0DtQd0-unsplash.jpg',
            'orientation' => 'panorama',
            'sortOrder' => 1,
        ],

        [
            'placeName' => 'Lake District',
            'filePath' => 'assets/images/europe/united-kingdom/lake-district/panorama/claire-jones-nKtTubtxf6g-unsplash.jpg',
            'orientation' => 'panorama',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Lake District',
            'filePath' => 'assets/images/europe/united-kingdom/lake-district/landscape/claire-jones-nKtTubtxf6g-unsplash.jpg',
            'orientation' => 'landscape',
            'sortOrder' => 1,
        ],

        [
            'placeName' => 'Liverpool',
            'filePath' => 'assets/images/europe/united-kingdom/liverpool/landscape/marcus-cramer-lRmjKqgyfBM-unsplash.jpg',
            'orientation' => 'landscape',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Liverpool',
            'filePath' => 'assets/images/europe/united-kingdom/liverpool/panorama/marcus-cramer-lRmjKqgyfBM-unsplash.jpg',
            'orientation' => 'panorama',
            'sortOrder' => 1,
        ],

        [
            'placeName' => 'London',
            'filePath' => 'assets/images/europe/united-kingdom/london/landscape/shannon-tremaine-NRz7SfpnqUM-unsplash.jpg',
            'orientation' => 'landscape',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'London',
            'filePath' => 'assets/images/europe/united-kingdom/london/panorama/shannon-tremaine-NRz7SfpnqUM-unsplash.jpg',
            'orientation' => 'panorama',
            'sortOrder' => 1,
        ],

        [
            'placeName' => 'Oxford',
            'filePath' => 'assets/images/europe/united-kingdom/oxford/landscape/liv-cashman-TAxS43K2MUE-unsplash.jpg',
            'orientation' => 'landscape',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Oxford',
            'filePath' => 'assets/images/europe/united-kingdom/oxford/panorama/liv-cashman-TAxS43K2MUE-unsplash.jpg',
            'orientation' => 'panorama',
            'sortOrder' => 1,
        ],

        [
            'placeName' => 'Stonehenge',
            'filePath' => 'assets/images/europe/united-kingdom/stonehenge/landscape/ankit-sood-q0ZLK_D7ngI-unsplash.jpg',
            'orientation' => 'landscape',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Stonehenge',
            'filePath' => 'assets/images/europe/united-kingdom/stonehenge/panorama/ankit-sood-q0ZLK_D7ngI-unsplash.jpg',
            'orientation' => 'panorama',
            'sortOrder' => 1,
        ],

        [
            'placeName' => 'Stratford-upon-Avon',
            'filePath' => 'assets/images/europe/united-kingdom/stratford-upon-avon/landscape/swati-kedia-LtEf3pAUNDo-unsplash.jpg',
            'orientation' => 'landscape',
            'sortOrder' => 1,
        ],

        [
            'placeName' => 'Stratford-upon-Avon',
            'filePath' => 'assets/images/europe/united-kingdom/stratford-upon-avon/panorama/swati-kedia-LtEf3pAUNDo-unsplash.jpg',
            'orientation' => 'panorama',
            'sortOrder' => 1,
        ],

        [
            'placeName' => 'York',
            'filePath' => 'assets/images/europe/united-kingdom/york/landscape/karl-moran-JBJmXBiCBPk-unsplash.jpg',
            'orientation' => 'landscape',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'York',
            'filePath' => 'assets/images/europe/united-kingdom/york/panorama/karl-moran-JBJmXBiCBPk-unsplash.jpg',
            'orientation' => 'panorama',
            'sortOrder' => 1,
        ],

        /*
        [
            'placeName' => '',
            'filePath' => 'assets/images/europe/united-kingdom/london/landscape/',
            'orientation' => 'landscape',
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
            PlaceFixturesUK::class,
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
