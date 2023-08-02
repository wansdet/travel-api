<?php

declare(strict_types=1);

namespace App\Tests\Entity\Unit;

use App\Entity\Country;
use App\Entity\Place;
use App\Entity\Region;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 *
 * @coversNothing
 */
final class CountryUnitTest extends TestCase
{
    private Country $country;

    protected function setUp(): void
    {
        $this->country = new Country();
    }

    public function testAddRemovePlace(): void
    {
        $place = new Place();
        $this->country->addPlace($place);
        self::assertContains($place, $this->country->getPlaces());
        $this->country->removePlace($place);
        self::assertNotContains($place, $this->country->getPlaces());
    }

    public function testGetDataSetRanking(): void
    {
        $ranking = 1;
        $this->country->setRanking($ranking);
        self::assertEquals($ranking, $this->country->getRanking());
    }

    public function testGetDataSetRegion(): void
    {
        $region = new Region();
        $this->country->setRegion($region);
        self::assertEquals($region, $this->country->getRegion());
    }

    public function testGetSetActive(): void
    {
        $active = true;
        $this->country->setActive($active);
        self::assertEquals($active, $this->country->isActive());
    }

    public function testGetSetAlerts(): void
    {
        $alerts = 'Alerts';
        $this->country->setAlerts($alerts);
        self::assertEquals($alerts, $this->country->getAlerts());
    }

    public function testGetSetAtm(): void
    {
        $atm = 'Atm';
        $this->country->setAtm($atm);
        self::assertEquals($atm, $this->country->getAtm());
    }

    public function testGetSetBriefDescription(): void
    {
        $briefDescription = 'Brief description';
        $this->country->setBriefDescription($briefDescription);
        self::assertEquals($briefDescription, $this->country->getBriefDescription());
    }

    public function testGetSetCapital(): void
    {
        $capital = 'London';
        $this->country->setCapital($capital);
        self::assertEquals($capital, $this->country->getCapital());
    }

    public function testGetSetCountryCode(): void
    {
        $countryCode = 'GB';
        $this->country->setCountryCode($countryCode);
        self::assertEquals($countryCode, $this->country->getCountryCode());
    }

    public function testGetSetCountryName(): void
    {
        $countryName = 'United Kingdom';
        $this->country->setCountryName($countryName);
        self::assertEquals($countryName, $this->country->getCountryName());
    }

    public function testGetSetCreatedBy(): void
    {
        $createdBy = 'Created by';
        $this->country->setCreatedBy($createdBy);
        self::assertEquals($createdBy, $this->country->getCreatedBy());
    }

    public function testGetSetCurrency(): void
    {
        $currency = 'Currency';
        $this->country->setCurrency($currency);
        self::assertEquals($currency, $this->country->getCurrency());
    }

    public function testGetSetElectricity(): void
    {
        $electricity = 'Electricity';
        $this->country->setElectricity($electricity);
        self::assertEquals($electricity, $this->country->getElectricity());
    }

    public function testGetSetEntry(): void
    {
        $entry = 'Entry';
        $this->country->setEntry($entry);
        self::assertEquals($entry, $this->country->getEntry());
    }

    public function testGetSetGettingAround(): void
    {
        $gettingAround = 'Getting around';
        $this->country->setGettingAround($gettingAround);
        self::assertEquals($gettingAround, $this->country->getGettingAround());
    }

    public function testGetSetImageTags(): void
    {
        $imageTags = ['Image tag1', 'Image tag2'];
        $this->country->setImageTags($imageTags);
        self::assertEquals($imageTags, $this->country->getImageTags());
    }

    public function testGetSetLanguage(): void
    {
        $language = 'Language';
        $this->country->setLanguage($language);
        self::assertEquals($language, $this->country->getLanguage());
    }

    public function testGetSetLongDescription(): void
    {
        $longDescription = 'Long description';
        $this->country->setLongDescription($longDescription);
        self::assertEquals($longDescription, $this->country->getLongDescription());
    }

    public function testGetSetMobilePhone(): void
    {
        $mobilePhone = 'Mobile phone';
        $this->country->setMobilePhone($mobilePhone);
        self::assertEquals($mobilePhone, $this->country->getMobilePhone());
    }

    public function testGetSetPlaces(): void
    {
        $place = new Place();
        $this->country->addPlace($place);
        self::assertContains($place, $this->country->getPlaces());
    }

    public function testGetSetSafety(): void
    {
        $safety = 'Safety';
        $this->country->setSafety($safety);
        self::assertEquals($safety, $this->country->getSafety());
    }

    public function testGetSetSalesTax(): void
    {
        $salesTax = 'Sales tax';
        $this->country->setSalesTax($salesTax);
        self::assertEquals($salesTax, $this->country->getSalesTax());
    }

    public function testGetSetShortDescription(): void
    {
        $shortDescription = 'Short description';
        $this->country->setShortDescription($shortDescription);
        self::assertEquals($shortDescription, $this->country->getShortDescription());
    }

    public function testGetSetSortOrder(): void
    {
        $sortOrder = 1;
        $this->country->setSortOrder($sortOrder);
        self::assertEquals($sortOrder, $this->country->getSortOrder());
    }

    public function testGetSetTravel(): void
    {
        $travel = 'Travel';
        $this->country->setTravel($travel);
        self::assertEquals($travel, $this->country->getTravel());
    }

    public function testGetSetUpdatedBy(): void
    {
        $updatedBy = 'Updated by';
        $this->country->setUpdatedBy($updatedBy);
        self::assertEquals($updatedBy, $this->country->getUpdatedBy());
    }
}
