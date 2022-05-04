<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPILib\Models;

use Exception;
use HAPILib\ApiHelper;

class SortByEnum
{
    public const RELEVANT = 'relevant';

    public const RECENT = 'recent';

    public const ENUM_ORDER_FREQUENCYDESC = 'order_frequency.desc';

    public const ENUM_ORDER_FREQUENCYASC = 'order_frequency.asc';

    public const ENUM_CREATEDDESC = 'created.desc';

    public const ENUM_CREATEDASC = 'created.asc';

    public const ENUM_LIST_PRICEDESC = 'list_price.desc';

    public const ENUM_LIST_PRICEASC = 'list_price.asc';

    private const _ALL_VALUES = [
        self::RELEVANT,
        self::RECENT,
        self::ENUM_ORDER_FREQUENCYDESC,
        self::ENUM_ORDER_FREQUENCYASC,
        self::ENUM_CREATEDDESC,
        self::ENUM_CREATEDASC,
        self::ENUM_LIST_PRICEDESC,
        self::ENUM_LIST_PRICEASC,
    ];

    /**
     * Ensures that all the given values are present in this Enum.
     *
     * @param array|null|string $value Value or a list of values to be checked
     *
     * @return array|null|string Input value(s), if all are a part of this Enum
     *
     * @throws Exception Throws exception if any given value is not in this Enum
     */
    public static function checkValue($value)
    {
        ApiHelper::checkValueInEnum($value, self::class, self::_ALL_VALUES);
        return $value;
    }
}
