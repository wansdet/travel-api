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

class PlaceImageFixturesCanada extends Fixture implements DependentFixtureInterface, FixtureGroupInterface
{
    private array $placeImages = [
        [
            'placeName' => 'Banff National Park',
            'filePath' => 'assets/images/north-america/canada/banff-national-park/landscape/david-wirzba-wxalerEiUVQ-unsplash.jpg',
            'orientation' => 'landscape',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Banff National Park',
            'filePath' => 'assets/images/north-america/canada/banff-national-park/panorama/david-wirzba-wxalerEiUVQ-unsplash.jpg',
            'orientation' => 'panorama',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Niagara Falls',
            'filePath' => 'assets/images/north-america/canada/niagara-falls/landscape/sergey-pesterev-wZLsZ9DRLSI-unsplash.jpg',
            'orientation' => 'landscape',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Niagara Falls',
            'filePath' => 'assets/images/north-america/canada/niagara-falls/panorama/sergey-pesterev-wZLsZ9DRLSI-unsplash.jpg',
            'orientation' => 'panorama',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Quebec City',
            'filePath' => 'assets/images/north-america/canada/quebec-city/landscape/rich-martello-mSVRrKEZAH8-unsplash.jpg',
            'orientation' => 'landscape',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Quebec City',
            'filePath' => 'assets/images/north-america/canada/quebec-city/panorama/rich-martello-mSVRrKEZAH8-unsplash.jpg',
            'orientation' => 'panorama',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Vancouver',
            'filePath' => 'assets/images/north-america/canada/vancouver/landscape/lee-robinson-Yc9h5SJdEzI-unsplash.jpg',
            'orientation' => 'landscape',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Vancouver',
            'filePath' => 'assets/images/north-america/canada/vancouver/panorama/lee-robinson-Yc9h5SJdEzI-unsplash.jpg',
            'orientation' => 'panorama',
            'sortOrder' => 1,
        ],

        /*
        [
            'placeName' => '',
            'filePath' => 'assets/images/north-america/canada/banff-national-park/landscape/',
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
            PlaceFixturesCanada::class,
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
