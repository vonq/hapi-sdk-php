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
use stdClass;

/**
 * ICU Locale code for the Language of the taxonomy item
 */
class LanguageCodeEnum
{
    public const DE_DE = 'de_DE';

    public const EN_GB = 'en_GB';

    public const NL_NL = 'nl_NL';

    private const _ALL_VALUES = [self::DE_DE, self::EN_GB, self::NL_NL];

    /**
     * Ensures that all the given values are present in this Enum.
     *
     * @param array|stdClass|null|string $value Value or a list/map of values to be checked
     *
     * @return array|null|string Input value(s), if all are a part of this Enum
     *
     * @throws Exception Throws exception if any given value is not in this Enum
     */
    public static function checkValue($value)
    {
        $value = json_decode(json_encode($value), true); // converts stdClass into array
        ApiHelper::checkValueInEnum($value, self::class, self::_ALL_VALUES);
        return $value;
    }
}
