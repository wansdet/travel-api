<?php

declare(strict_types=1);

namespace App\Tests\Entity\Unit;

use App\Entity\FeaturedDestination;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 *
 * @coversNothing
 */
final class FeaturedDestinationUnitTest extends TestCase
{
    private FeaturedDestination $featuredDestination;

    protected function setUp(): void
    {
        $this->featuredDestination = new FeaturedDestination();
    }

    public function testGetSetDescription(): void
    {
        $description = 'United Kingdom';
        $this->featuredDestination->setDescription($description);
        self::assertEquals($description, $this->featuredDestination->getDescription());
    }

    public function testGetSetDestinationCode(): void
    {
        $destinationCode = 'GB';
        $this->featuredDestination->setDestinationCode($destinationCode);
        self::assertEquals($destinationCode, $this->featuredDestination->getDestinationCode());
    }

    public function testGetSetPageType(): void
    {
        $pageType = 'home';
        $this->featuredDestination->setPageType($pageType);
        self::assertEquals($pageType, $this->featuredDestination->getPageType());
    }

    public function testGetSetSection(): void
    {
        $section = 1;
        $this->featuredDestination->setSection($section);
        self::assertEquals($section, $this->featuredDestination->getSection());
    }

    public function testGetSetSortOrder(): void
    {
        $sortOrder = 1;
        $this->featuredDestination->setSortOrder($sortOrder);
        self::assertEquals($sortOrder, $this->featuredDestination->getSortOrder());
    }

    public function testGetSetTitle(): void
    {
        $title = 'United Kingdom';
        $this->featuredDestination->setTitle($title);
        self::assertEquals($title, $this->featuredDestination->getTitle());
    }
}
