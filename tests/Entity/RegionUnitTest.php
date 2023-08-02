<?php

declare(strict_types=1);

namespace App\Tests\Entity\Unit;

use App\Entity\Country;
use App\Entity\Region;
use Doctrine\Common\Collections\ArrayCollection;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 *
 * @coversNothing
 */
final class RegionUnitTest extends TestCase
{
    private Region $region;

    protected function setUp(): void
    {
        $this->region = new Region();
    }

    public function testGetAddRemoveCountries(): void
    {
        $country = new Country();
        $country->setCountryCode('GB');
        $country->setCountryName('United Kingdom');
        $country->setBriefDescription('Brief description');
        $country->setLongDescription('Long description');
        $country->setRanking(6);
        $country->setSortOrder(6);
        $country->setCreatedBy('admin');
        $country->setUpdatedBy('admin');

        $this->region->addCountry($country);
        self::assertInstanceOf(ArrayCollection::class, $this->region->getCountries());
        self::assertEquals(1, $this->region->getCountries()->count());

        $this->region->removeCountry($country);
        self::assertEquals(0, $this->region->getCountries()->count());
    }

    public function testGetSetBriefDescription(): void
    {
        $briefDescription = 'Brief description';
        $this->region->setBriefDescription($briefDescription);
        self::assertEquals($briefDescription, $this->region->getBriefDescription());
    }

    public function testGetSetCreatedBy(): void
    {
        $createdBy = 'admin';
        $this->region->setCreatedBy($createdBy);
        self::assertEquals($createdBy, $this->region->getCreatedBy());
    }

    public function testGetSetImageTags(): void
    {
        $imageTags = ['Image tag1', 'Image tag2'];
        $this->region->setImageTags($imageTags);
        self::assertEquals($imageTags, $this->region->getImageTags());
    }

    public function testGetSetLongDescription(): void
    {
        $longDescription = 'Long description';
        $this->region->setLongDescription($longDescription);
        self::assertEquals($longDescription, $this->region->getLongDescription());
    }

    public function testGetSetRanking(): void
    {
        $ranking = 6;
        $this->region->setRanking($ranking);
        self::assertEquals($ranking, $this->region->getRanking());
    }

    public function testGetSetRegionCode(): void
    {
        $regionCode = 'EUROPE';
        $this->region->setRegionCode($regionCode);
        self::assertEquals($regionCode, $this->region->getRegionCode());
    }

    public function testGetSetRegionName(): void
    {
        $regionName = 'Europe';
        $this->region->setRegionName($regionName);
        self::assertEquals($regionName, $this->region->getRegionName());
    }

    public function testGetSetShortDescription(): void
    {
        $shortDescription = 'Short description';
        $this->region->setShortDescription($shortDescription);
        self::assertEquals($shortDescription, $this->region->getShortDescription());
    }

    public function testGetSetSortOrder(): void
    {
        $sortOrder = 6;
        $this->region->setSortOrder($sortOrder);
        self::assertEquals($sortOrder, $this->region->getSortOrder());
    }

    public function testGetSetUpdatedBy(): void
    {
        $updatedBy = 'admin';
        $this->region->setUpdatedBy($updatedBy);
        self::assertEquals($updatedBy, $this->region->getUpdatedBy());
    }
}
