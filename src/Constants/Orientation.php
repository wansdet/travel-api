<?php

declare(strict_types=1);

namespace App\Constants;

class Orientation
{
    public const ORIENTATION_LANDSCAPE = 'landscape';

    public const ORIENTATION_PANORAMA = 'panorama';

    public const ORIENTATION_PORTRAIT = 'portrait';

    public const ORIENTATION_SQUARE = 'square';

    public const ORIENTATIONS = [
        self::ORIENTATION_PORTRAIT,
        self::ORIENTATION_LANDSCAPE,
        self::ORIENTATION_SQUARE,
        self::ORIENTATION_PANORAMA,
    ];
}
