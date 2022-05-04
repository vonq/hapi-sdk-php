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

/**
 * The type of UI and data structure to be used to input and store values for this Facet.
 */
class TypeEnum
{
    public const AUTOCOMPLETE = 'AUTOCOMPLETE';

    public const DATE = 'DATE';

    public const SELECT = 'SELECT';

    public const TEXT = 'TEXT';

    public const TEXTAREA = 'TEXTAREA';

    public const TEXTEXPAND = 'TEXTEXPAND';

    public const AREACOUNT = 'AREACOUNT';

    public const HIER = 'HIER';

    public const STATISCH = 'STATISCH';

    public const MULTIPLE = 'MULTIPLE';

    public const SELECTMAP_ONLY = 'SELECT-MAP_ONLY';

    private const _ALL_VALUES = [
        self::AUTOCOMPLETE,
        self::DATE,
        self::SELECT,
        self::TEXT,
        self::TEXTAREA,
        self::TEXTEXPAND,
        self::AREACOUNT,
        self::HIER,
        self::STATISCH,
        self::MULTIPLE,
        self::SELECTMAP_ONLY,
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
