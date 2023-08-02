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

class PlaceImageFixturesUSA extends Fixture implements DependentFixtureInterface, FixtureGroupInterface
{
    private array $placeImages = [
        [
            'placeName' => 'Boston',
            'filePath' => 'assets/images/north-america/united-states/boston/landscape/jimmy-woo-SUMtPksZXBE-unsplash.jpg',
            'orientation' => 'landscape',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Boston',
            'filePath' => 'assets/images/north-america/united-states/boston/panorama/jimmy-woo-SUMtPksZXBE-unsplash.jpg',
            'orientation' => 'panorama',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Chicago',
            'filePath' => 'assets/images/north-america/united-states/chicago/landscape/pedro-lastra-Nyvq2juw4_o-unsplash.jpg',
            'orientation' => 'landscape',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Chicago',
            'filePath' => 'assets/images/north-america/united-states/chicago/panorama/pedro-lastra-Nyvq2juw4_o-unsplash.jpg',
            'orientation' => 'panorama',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Grand Canyon',
            'filePath' => 'assets/images/north-america/united-states/grand-canyon/landscape/omer-nezih-gerek-ZZnH4GOzDgc-unsplash.jpg',
            'orientation' => 'landscape',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Grand Canyon',
            'filePath' => 'assets/images/north-america/united-states/grand-canyon/panorama/omer-nezih-gerek-ZZnH4GOzDgc-unsplash.jpg',
            'orientation' => 'panorama',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Hawaii',
            'filePath' => 'assets/images/north-america/united-states/hawaii/landscape/karsten-winegeart-fd1cQ3mmBTE-unsplash.jpg',
            'orientation' => 'landscape',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Hawaii',
            'filePath' => 'assets/images/north-america/united-states/hawaii/panorama/karsten-winegeart-fd1cQ3mmBTE-unsplash.jpg',
            'orientation' => 'panorama',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Las Vegas',
            'filePath' => 'assets/images/north-america/united-states/las-vegas/landscape/stephen-leonardi-hWX2pboBPBk-unsplash.jpg',
            'orientation' => 'landscape',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Las Vegas',
            'filePath' => 'assets/images/north-america/united-states/las-vegas/panorama/stephen-leonardi-hWX2pboBPBk-unsplash.jpg',
            'orientation' => 'panorama',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Los Angeles',
            'filePath' => 'assets/images/north-america/united-states/los-angeles/landscape/alonso-reyes-Wff-dK05DVg-unsplash.jpg',
            'orientation' => 'landscape',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Los Angeles',
            'filePath' => 'assets/images/north-america/united-states/los-angeles/panorama/alonso-reyes-Wff-dK05DVg-unsplash.jpg',
            'orientation' => 'panorama',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'New Orleans',
            'filePath' => 'assets/images/north-america/united-states/new-orleans/landscape/joao-francisco-jQwv5FnpksM-unsplash.jpg',
            'orientation' => 'landscape',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'New Orleans',
            'filePath' => 'assets/images/north-america/united-states/new-orleans/panorama/joao-francisco-jQwv5FnpksM-unsplash.jpg',
            'orientation' => 'panorama',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'New York City',
            'filePath' => 'assets/images/north-america/united-states/new-york-city/landscape/jan-folwarczny-ZXBPMnNVtlE-unsplash.jpg',
            'orientation' => 'landscape',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'New York City',
            'filePath' => 'assets/images/north-america/united-states/new-york-city/panorama/jan-folwarczny-ZXBPMnNVtlE-unsplash.jpg',
            'orientation' => 'panorama',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'San Francisco',
            'filePath' => 'assets/images/north-america/united-states/san-francisco/landscape/maarten-van-den-heuvel-gZXx8lKAb7Y-unsplash.jpg',
            'orientation' => 'landscape',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'San Francisco',
            'filePath' => 'assets/images/north-america/united-states/san-francisco/panorama/maarten-van-den-heuvel-gZXx8lKAb7Y-unsplash.jpg',
            'orientation' => 'panorama',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Washington DC',
            'filePath' => 'assets/images/north-america/united-states/washington-dc/landscape/david-everett-strickler-igCBFrMd11I-unsplash.jpg',
            'orientation' => 'landscape',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Washington DC',
            'filePath' => 'assets/images/north-america/united-states/washington-dc/panorama/david-everett-strickler-igCBFrMd11I-unsplash.jpg',
            'orientation' => 'panorama',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Yellowstone National Park',
            'filePath' => 'assets/images/north-america/united-states/yellowstone-national-park/landscape/austin-farrington-gp2QLJKOvVc-unsplash.jpg',
            'orientation' => 'landscape',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Yellowstone National Park',
            'filePath' => 'assets/images/north-america/united-states/yellowstone-national-park/panorama/austin-farrington-gp2QLJKOvVc-unsplash.jpg',
            'orientation' => 'panorama',
            'sortOrder' => 1,
        ],

        /*
        [
            'placeName' => '',
            'filePath' => 'assets/images/north-america/united-states/boston/landscape/',
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
            PlaceFixturesUSA::class,
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
