<?php

declare(strict_types=1);

namespace App\Tests\Entity\Constants;

use App\Constants\Orientation;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 *
 * @coversNothing
 */
final class OrientationUnitTest extends TestCase
{
    public function testOrientationConstants(): void
    {
        self::assertTrue(\defined('App\Constants\Orientation::ORIENTATION_PORTRAIT'));
        self::assertTrue(\defined('App\Constants\Orientation::ORIENTATION_LANDSCAPE'));
        self::assertTrue(\defined('App\Constants\Orientation::ORIENTATION_SQUARE'));
        self::assertTrue(\defined('App\Constants\Orientation::ORIENTATION_PANORAMA'));
    }

    public function testOrientationsArray(): void
    {
        $expectedOrientations = [
            Orientation::ORIENTATION_PORTRAIT,
            Orientation::ORIENTATION_LANDSCAPE,
            Orientation::ORIENTATION_SQUARE,
            Orientation::ORIENTATION_PANORAMA,
        ];

        self::assertSame($expectedOrientations, Orientation::ORIENTATIONS);
    }
}
