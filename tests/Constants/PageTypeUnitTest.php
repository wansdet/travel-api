<?php

declare(strict_types=1);

namespace App\Tests\Entity\Constants;

use App\Constants\PageType;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 *
 * @coversNothing
 */
final class PageTypeUnitTest extends TestCase
{
    public function testPageTypeConstants(): void
    {
        self::assertTrue(\defined('App\Constants\PageType::PAGE_TYPE_COUNTRY'));
        self::assertTrue(\defined('App\Constants\PageType::PAGE_TYPE_HOME'));
        self::assertTrue(\defined('App\Constants\PageType::PAGE_TYPE_PLACE'));
        self::assertTrue(\defined('App\Constants\PageType::PAGE_TYPE_REGION'));
    }

    public function testPageTypesArray(): void
    {
        $expectedPageTypes = [
            PageType::PAGE_TYPE_COUNTRY,
            PageType::PAGE_TYPE_HOME,
            PageType::PAGE_TYPE_PLACE,
            PageType::PAGE_TYPE_REGION,
        ];

        self::assertSame($expectedPageTypes, PageType::PAGE_TYPES);
    }
}
