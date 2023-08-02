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

class PlaceImageFixtures extends Fixture implements DependentFixtureInterface, FixtureGroupInterface
{
    private array $placeImages = [
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
