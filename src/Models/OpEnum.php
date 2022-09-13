<?php

declare(strict_types=1);

/*
 * VONQHiringAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VONQHiringAPILib\Models;

use Exception;
use stdClass;
use VONQHiringAPILib\ApiHelper;

/**
 * Operation type made between the value and the facet value
 */
class OpEnum
{
    public const IN = 'in';

    public const NOTEMPTY = 'notempty';

    public const EQUAL = 'equal';

    private const _ALL_VALUES = [self::IN, self::NOTEMPTY, self::EQUAL];

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
