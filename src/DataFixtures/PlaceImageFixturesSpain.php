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

class PlaceImageFixturesSpain extends Fixture implements DependentFixtureInterface, FixtureGroupInterface
{
    private array $placeImages = [
        [
            'placeName' => 'Barcelona',
            'filePath' => 'assets/images/europe/spain/barcelona/landscape/logan-armstrong-hVhfqhDYciU-unsplash.jpg',
            'orientation' => 'landscape',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Barcelona',
            'filePath' => 'assets/images/europe/spain/barcelona/panorama/logan-armstrong-hVhfqhDYciU-unsplash.jpg',
            'orientation' => 'panorama',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Bilbao',
            'filePath' => 'assets/images/europe/spain/bilbao/landscape/rodrigo-curi-fQev0lbOUjs-unsplash.jpg',
            'orientation' => 'landscape',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Bilbao',
            'filePath' => 'assets/images/europe/spain/bilbao/panorama/rodrigo-curi-fQev0lbOUjs-unsplash.jpg',
            'orientation' => 'panorama',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Cordoba',
            'filePath' => 'assets/images/europe/spain/cordoba/landscape/saad-chaudhry-uYMyUKL1QSU-unsplash.jpg',
            'orientation' => 'landscape',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Cordoba',
            'filePath' => 'assets/images/europe/spain/cordoba/panorama/saad-chaudhry-uYMyUKL1QSU-unsplash.jpg',
            'orientation' => 'panorama',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Granada',
            'filePath' => 'assets/images/europe/spain/granada/landscape/marco-montero-pisani-eZBmCd94cmE-unsplash.jpg',
            'orientation' => 'landscape',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Granada',
            'filePath' => 'assets/images/europe/spain/granada/panorama/marco-montero-pisani-eZBmCd94cmE-unsplash.jpg',
            'orientation' => 'panorama',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Madrid',
            'filePath' => 'assets/images/europe/spain/madrid/landscape/florian-wehde-WBGjg0DsO_g-unsplash.jpg',
            'orientation' => 'landscape',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Madrid',
            'filePath' => 'assets/images/europe/spain/madrid/panorama/florian-wehde-WBGjg0DsO_g-unsplash.jpg',
            'orientation' => 'panorama',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Malaga',
            'filePath' => 'assets/images/europe/spain/malaga/landscape/martijn-vonk-7b4RvaDndyA-unsplash.jpg',
            'orientation' => 'landscape',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Malaga',
            'filePath' => 'assets/images/europe/spain/malaga/panorama/martijn-vonk-7b4RvaDndyA-unsplash.jpg',
            'orientation' => 'panorama',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'San Sebastian',
            'filePath' => 'assets/images/europe/spain/san-sebastian/landscape/ultrash-ricco-8KCquMrFEPg-unsplash.jpg',
            'orientation' => 'landscape',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'San Sebastian',
            'filePath' => 'assets/images/europe/spain/san-sebastian/panorama/ultrash-ricco-8KCquMrFEPg-unsplash.jpg',
            'orientation' => 'panorama',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Seville',
            'filePath' => 'assets/images/europe/spain/seville/landscape/shai-pal-UeSZNsV7GZE-unsplash.jpg',
            'orientation' => 'landscape',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Seville',
            'filePath' => 'assets/images/europe/spain/seville/panorama/shai-pal-UeSZNsV7GZE-unsplash.jpg',
            'orientation' => 'panorama',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Toledo',
            'filePath' => 'assets/images/europe/spain/toledo/landscape/rubina-ajdary-ME0uoIMqxmg-unsplash.jpg',
            'orientation' => 'landscape',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Toledo',
            'filePath' => 'assets/images/europe/spain/toledo/panorama/rubina-ajdary-ME0uoIMqxmg-unsplash.jpg',
            'orientation' => 'panorama',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Valencia',
            'filePath' => 'assets/images/europe/spain/valencia/landscape/jonny-james-M-J7gtp4m8c-unsplash.jpg',
            'orientation' => 'landscape',
            'sortOrder' => 1,
        ],
        [
            'placeName' => 'Valencia',
            'filePath' => 'assets/images/europe/spain/valencia/panorama/jonny-james-M-J7gtp4m8c-unsplash.jpg',
            'orientation' => 'panorama',
            'sortOrder' => 1,
        ],

        /*
        [
            'placeName' => '',
            'filePath' => 'assets/images/europe/spain/barcelona/landscape/',
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
            PlaceFixturesSpain::class,
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
