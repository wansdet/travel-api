<?php

declare(strict_types=1);

namespace App\Tests\Entity\Unit;

use App\Entity\Country;
use App\Entity\Place;
use App\Entity\PlaceImage;
use Doctrine\Common\Collections\ArrayCollection;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 *
 * @coversNothing
 */
final class PlaceUnitTest extends TestCase
{
    private Place $place;

    protected function setUp(): void
    {
        $this->place = new Place();
    }

    public function testGetDayTrips(): void
    {
        $dayTrips = 'Day trips';
        $this->place->setDayTrips($dayTrips);
        self::assertEquals($dayTrips, $this->place->getDayTrips());
    }

    public function testGetPlaceImages(): void
    {
        $placeImage1 = new PlaceImage();
        $placeImage2 = new PlaceImage();

        self::assertInstanceOf(ArrayCollection::class, $this->place->getPlaceImages());
        self::assertCount(0, $this->place->getPlaceImages());

        $this->place->getPlaceImages()->add($placeImage1);
        $this->place->getPlaceImages()->add($placeImage2);

        self::assertCount(2, $this->place->getPlaceImages());

        $this->place->getPlaceImages()->removeElement($placeImage1);

        self::assertCount(1, $this->place->getPlaceImages());
    }

    public function testGetSetAccommodation(): void
    {
        $accommodation = 'Accommodation';
        $this->place->setAccommodation($accommodation);
        self::assertEquals($accommodation, $this->place->getAccommodation());
    }

    public function testGetSetBestTimeToVisit(): void
    {
        $bestTimeToVisit = 'Best time to visit';
        $this->place->setBestTimeToVisit($bestTimeToVisit);
        self::assertEquals($bestTimeToVisit, $this->place->getBestTimeToVisit());
    }

    public function testGetSetBriefDescription(): void
    {
        $briefDescription = 'Brief description';
        $this->place->setBriefDescription($briefDescription);
        self::assertEquals($briefDescription, $this->place->getBriefDescription());
    }

    public function testGetSetCountry(): void
    {
        $country = new Country();
        $this->place->setCountry($country);
        self::assertEquals($country, $this->place->getCountry());
    }

    public function testGetSetCountryRegion(): void
    {
        $countryRegion = 'England';
        $this->place->setCountryRegion($countryRegion);
        self::assertEquals($countryRegion, $this->place->getCountryRegion());
    }

    public function testGetSetCreatedBy(): void
    {
        $createdBy = 'user1';
        $this->place->setCreatedBy($createdBy);
        self::assertEquals($createdBy, $this->place->getCreatedBy());
    }

    public function testGetSetFood(): void
    {
        $food = 'Food';
        $this->place->setFood($food);
        self::assertEquals($food, $this->place->getFood());
    }

    public function testGetSetImageTags(): void
    {
        $imageTags = ['Image tag1', 'Image tag2'];
        $this->place->setImageTags($imageTags);
        self::assertEquals($imageTags, $this->place->getImageTags());
    }

    public function testGetSetLongDescription(): void
    {
        $longDescription = 'Long description';
        $this->place->setLongDescription($longDescription);
        self::assertEquals($longDescription, $this->place->getLongDescription());
    }

    public function testGetSetPlaceCode(): void
    {
        $placeCode = 'FR-PARIS';
        $this->place->setPlaceCode($placeCode);
        self::assertEquals($placeCode, $this->place->getPlaceCode());
    }

    public function testGetSetPlaceName(): void
    {
        $placeName = 'Cotswold';
        $this->place->setPlaceName($placeName);
        self::assertEquals($placeName, $this->place->getPlaceName());
    }

    public function testGetSetRanking(): void
    {
        $ranking = 3;
        $this->place->setRanking($ranking);
        self::assertEquals($ranking, $this->place->getRanking());
    }

    public function testGetSetSafety(): void
    {
        $safety = 'Safety';
        $this->place->setSafety($safety);
        self::assertEquals($safety, $this->place->getSafety());
    }

    public function testGetSetSlug(): void
    {
        $slug = 'gb-bristol';
        $this->place->setSlug($slug);
        self::assertEquals($slug, $this->place->getSlug());
    }

    public function testGetSetSortOrder(): void
    {
        $sortOrder = 5;
        $this->place->setSortOrder($sortOrder);
        self::assertEquals($sortOrder, $this->place->getSortOrder());
    }

    public function testGetSetTags(): void
    {
        $tags = ['Tag1', 'Tag2'];
        $this->place->setTags($tags);
        self::assertEquals($tags, $this->place->getTags());
    }

    public function testGetSetThingsToDo(): void
    {
        $thingsToDo = 'Things to do';
        $this->place->setThingsToDo($thingsToDo);
        self::assertEquals($thingsToDo, $this->place->getThingsToDo());
    }

    public function testGetSetTravelInformation(): void
    {
        $travelInformation = 'Travel information';
        $this->place->setTravelInformation($travelInformation);
        self::assertEquals($travelInformation, $this->place->getTravelInformation());
    }

    public function testGetSetUpdatedBy(): void
    {
        $updatedBy = 'user2';
        $this->place->setUpdatedBy($updatedBy);
        self::assertEquals($updatedBy, $this->place->getUpdatedBy());
    }

    public function testGetSetWorldRanking(): void
    {
        $worldRanking = 4;
        $this->place->setWorldRanking($worldRanking);
        self::assertEquals($worldRanking, $this->place->getWorldRanking());
    }
}
