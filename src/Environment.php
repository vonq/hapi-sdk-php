<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPILib;

use Exception;
use HAPILib\ApiHelper;

/**
 * Environments available for API
 */
class Environment
{
    /**
     * Sandbox
     */
    public const SANDBOX = 'sandbox';

    /**
     * Production
     */
    public const PRODUCTION = 'production';

    private const _ALL_VALUES = [self::SANDBOX, self::PRODUCTION];

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
