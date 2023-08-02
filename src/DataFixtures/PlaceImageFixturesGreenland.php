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

class PlaceImageFixturesGreenland extends Fixture implements DependentFixtureInterface, FixtureGroupInterface
{
    private array $placeImages = [
        [
            'placeName' => 'Disko Island',
            'filePath' => 'assets/images/north-america/greenland/disko-island/landscape/andreas-strandman-eGXPXBB0EME-unsplash.jpg',
            'orientation' => 'landscape',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Disko Island',
            'filePath' => 'assets/images/north-america/greenland/disko-island/panorama/andreas-strandman-eGXPXBB0EME-unsplash.jpg',
            'orientation' => 'panorama',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Ilulissat Icefjord',
            'filePath' => 'assets/images/north-america/greenland/ilulissat-icefjord/landscape/66-north-_u13zxG3jyQ-unsplash.jpg',
            'orientation' => 'landscape',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Ilulissat Icefjord',
            'filePath' => 'assets/images/north-america/greenland/ilulissat-icefjord/panorama/66-north-_u13zxG3jyQ-unsplash.jpg',
            'orientation' => 'panorama',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Nuuk',
            'filePath' => 'assets/images/north-america/greenland/nuuk/landscape/bogomil-shopov--F146GrhnbY-unsplash.jpg',
            'orientation' => 'landscape',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Nuuk',
            'filePath' => 'assets/images/north-america/greenland/nuuk/panorama/bogomil-shopov--F146GrhnbY-unsplash.jpg',
            'orientation' => 'panorama',
            'sortOrder' => 1,
        ],

        /*
        [
            'placeName' => '',
            'filePath' => 'assets/images/north-america/greenland/disko-island/landscape/',
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
            PlaceFixturesGreenland::class,
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
