<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPI\Models;

use Exception;
use HAPI\ApiHelper;
use stdClass;

/**
 * The type of employment of the posting, whether it's a permanent position or a fixed time position
 */
class EmploymentTypeEnum
{
    public const PERMANENT = 'permanent';

    public const TEMPORARY = 'temporary';

    public const FIXED_TERM = 'fixed_term';

    public const FIXED_TERM_WITH_OPTION_FOR_PERMANENT = 'fixed_term_with_option_for_permanent';

    public const FREELANCE = 'freelance';

    public const TRAINEESHIP = 'traineeship';

    public const INTERNSHIP = 'internship';

    private const _ALL_VALUES = [
        self::PERMANENT,
        self::TEMPORARY,
        self::FIXED_TERM,
        self::FIXED_TERM_WITH_OPTION_FOR_PERMANENT,
        self::FREELANCE,
        self::TRAINEESHIP,
        self::INTERNSHIP,
    ];

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
