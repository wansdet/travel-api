<?php

declare(strict_types=1);

namespace App\Constants;

class PageType
{
    public const PAGE_TYPE_COUNTRY = 'country';

    public const PAGE_TYPE_HOME = 'home';

    public const PAGE_TYPE_PLACE = 'place';

    public const PAGE_TYPE_REGION = 'region';

    public const PAGE_TYPES = [
        self::PAGE_TYPE_COUNTRY,
        self::PAGE_TYPE_HOME,
        self::PAGE_TYPE_PLACE,
        self::PAGE_TYPE_REGION,
    ];
}
