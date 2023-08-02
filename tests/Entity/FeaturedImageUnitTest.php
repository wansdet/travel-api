<?php

declare(strict_types=1);

namespace App\Tests\Entity\Unit;

use App\Entity\FeaturedImage;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 *
 * @coversNothing
 */
final class FeaturedImageUnitTest extends TestCase
{
    private FeaturedImage $featuredImage;

    protected function setUp(): void
    {
        $this->featuredImage = new FeaturedImage();
    }

    public function testGetSetDescription(): void
    {
        $description = 'Test description';
        $this->featuredImage->setDescription($description);
        self::assertEquals($description, $this->featuredImage->getDescription());
    }

    public function testGetSetDestinationCode(): void
    {
        $destinationCode = 'DE';
        $this->featuredImage->setDestinationCode($destinationCode);
        self::assertEquals($destinationCode, $this->featuredImage->getDestinationCode());
    }

    public function testGetSetFilePath(): void
    {
        $filePath = 'test.jpg';
        $this->featuredImage->setFilePath($filePath);
        self::assertEquals($filePath, $this->featuredImage->getFilePath());
    }

    public function testGetSetLink(): void
    {
        $link = 'https://www.google.com';
        $this->featuredImage->setLink($link);
        self::assertEquals($link, $this->featuredImage->getLink());
    }

    public function testGetSetOrientation(): void
    {
        $orientation = 'landscape';
        $this->featuredImage->setOrientation($orientation);
        self::assertEquals($orientation, $this->featuredImage->getOrientation());
    }

    public function testGetSetPageType(): void
    {
        $pageType = 'home';
        $this->featuredImage->setPageType($pageType);
        self::assertEquals($pageType, $this->featuredImage->getPageType());
    }

    public function testGetSetRanking(): void
    {
        $ranking = 1;
        $this->featuredImage->setRanking($ranking);
        self::assertEquals($ranking, $this->featuredImage->getRanking());
    }

    public function testGetSetSection(): void
    {
        $section = 1;
        $this->featuredImage->setSection($section);
        self::assertEquals($section, $this->featuredImage->getSection());
    }

    public function testGetSetSortOrder(): void
    {
        $sortOrder = 2;
        $this->featuredImage->setSortOrder($sortOrder);
        self::assertEquals($sortOrder, $this->featuredImage->getSortOrder());
    }

    public function testGetSetTitle(): void
    {
        $title = 'Edinburgh';
        $this->featuredImage->setTitle($title);
        self::assertEquals($title, $this->featuredImage->getTitle());
    }
}
