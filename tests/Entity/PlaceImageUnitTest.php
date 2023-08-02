<?php

declare(strict_types=1);

namespace App\Tests\Entity\Unit;

use App\Entity\Place;
use App\Entity\PlaceImage;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 *
 * @coversNothing
 */
final class PlaceImageUnitTest extends TestCase
{
    private PlaceImage $placeImage;

    protected function setUp(): void
    {
        $this->placeImage = new PlaceImage();
    }

    public function testGetSetCountryCode(): void
    {
        $countryCode = 'ES';
        $this->placeImage->setCountryCode($countryCode);
        self::assertEquals($countryCode, $this->placeImage->getCountryCode());
    }

    public function testGetSetDescription(): void
    {
        $description = 'Test description';
        $this->placeImage->setDescription($description);
        self::assertEquals($description, $this->placeImage->getDescription());
    }

    public function testGetSetFilePath(): void
    {
        $filePath = 'test.jpg';
        $this->placeImage->setFilePath($filePath);
        self::assertEquals($filePath, $this->placeImage->getFilePath());
    }

    public function testGetSetOrientation(): void
    {
        $orientation = 'landscape';
        $this->placeImage->setOrientation($orientation);
        self::assertEquals($orientation, $this->placeImage->getOrientation());
    }

    public function testGetSetPlace(): void
    {
        $place = new Place();
        $place->setPlaceName('Cambridge');
        $this->placeImage->setPlace($place);
        self::assertEquals($place, $this->placeImage->getPlace());
    }

    public function testGetSetRegionCode(): void
    {
        $regionCode = 'OCEANIA';
        $this->placeImage->setRegionCode($regionCode);
        self::assertEquals($regionCode, $this->placeImage->getRegionCode());
    }

    public function testGetSetSortOrder(): void
    {
        $sortOrder = 7;
        $this->placeImage->setSortOrder($sortOrder);
        self::assertEquals($sortOrder, $this->placeImage->getSortOrder());
    }

    public function testGetSetTitle(): void
    {
        $title = 'Cambridge';
        $this->placeImage->setTitle($title);
        self::assertEquals($title, $this->placeImage->getTitle());
    }
}
