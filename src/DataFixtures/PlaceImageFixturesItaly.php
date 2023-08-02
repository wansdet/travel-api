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

class PlaceImageFixturesItaly extends Fixture implements DependentFixtureInterface, FixtureGroupInterface
{
    private array $placeImages = [
        [
            'placeName' => 'Amalfi Coast',
            'filePath' => 'assets/images/europe/italy/amalfi-coast/landscape/nick-fewings-mDnvJvsrbUc-unsplash.jpg',
            'orientation' => 'landscape',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Amalfi Coast',
            'filePath' => 'assets/images/europe/italy/amalfi-coast/panorama/nick-fewings-mDnvJvsrbUc-unsplash.jpg',
            'orientation' => 'panorama',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Cinque Terre',
            'filePath' => 'assets/images/europe/italy/cinque-terre/landscape/bjorn-snelders-PeLkhi_B3wI-unsplash.jpg',
            'orientation' => 'landscape',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Cinque Terre',
            'filePath' => 'assets/images/europe/italy/cinque-terre/panorama/bjorn-snelders-PeLkhi_B3wI-unsplash.jpg',
            'orientation' => 'panorama',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Florence',
            'filePath' => 'assets/images/europe/italy/florence/landscape/ilse-orsel-hjmV0xG-KPk-unsplash.jpg',
            'orientation' => 'landscape',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Florence',
            'filePath' => 'assets/images/europe/italy/florence/panorama/ilse-orsel-hjmV0xG-KPk-unsplash.jpg',
            'orientation' => 'panorama',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Milan',
            'filePath' => 'assets/images/europe/italy/milan/landscape/ouael-ben-salah-nN5DRGC7Oe4-unsplash.jpg',
            'orientation' => 'landscape',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Milan',
            'filePath' => 'assets/images/europe/italy/milan/panorama/ouael-ben-salah-nN5DRGC7Oe4-unsplash.jpg',
            'orientation' => 'panorama',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Naples',
            'filePath' => 'assets/images/europe/italy/naples/landscape/ellena-mcguinness-W6DWLWR1DUE-unsplash.jpg',
            'orientation' => 'landscape',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Naples',
            'filePath' => 'assets/images/europe/italy/naples/panorama/ellena-mcguinness-W6DWLWR1DUE-unsplash.jpg',
            'orientation' => 'panorama',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Rome',
            'filePath' => 'assets/images/europe/italy/rome/landscape/caleb-miller-0Bs3et8FYyg-unsplash.jpg',
            'orientation' => 'landscape',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Rome',
            'filePath' => 'assets/images/europe/italy/rome/panorama/caleb-miller-0Bs3et8FYyg-unsplash.jpg',
            'orientation' => 'panorama',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Sardinia',
            'filePath' => 'assets/images/europe/italy/sardinia/landscape/massimo-virgilio-xVWM7zUvhww-unsplash.jpg',
            'orientation' => 'landscape',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Sardinia',
            'filePath' => 'assets/images/europe/italy/sardinia/panorama/massimo-virgilio-xVWM7zUvhww-unsplash.jpg',
            'orientation' => 'panorama',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Sicily',
            'filePath' => 'assets/images/europe/italy/sicily/landscape/samuel-ferrara-uNvgvo2cs7k-unsplash.jpg',
            'orientation' => 'landscape',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Sicily',
            'filePath' => 'assets/images/europe/italy/sicily/panorama/samuel-ferrara-uNvgvo2cs7k-unsplash.jpg',
            'orientation' => 'panorama',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Tuscany',
            'filePath' => 'assets/images/europe/italy/tuscany/landscape/jonathan-skule-hvhpyxZtQMc-unsplash.jpg',
            'orientation' => 'landscape',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Tuscany',
            'filePath' => 'assets/images/europe/italy/tuscany/panorama/jonathan-skule-hvhpyxZtQMc-unsplash.jpg',
            'orientation' => 'panorama',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Venice',
            'filePath' => 'assets/images/europe/italy/venice/landscape/angelo-casto-n0mdOC7I-70-unsplash.jpg',
            'orientation' => 'landscape',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Venice',
            'filePath' => 'assets/images/europe/italy/venice/panorama/angelo-casto-n0mdOC7I-70-unsplash.jpg',
            'orientation' => 'panorama',
            'sortOrder' => 1,
        ],

        /*
        [
            'placeName' => '',
            'filePath' => 'assets/images/europe/france/paris/landscape/',
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
            PlaceFixturesItaly::class,
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
