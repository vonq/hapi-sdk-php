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

class RuleEnum
{
    public const DATE = 'date';

    public const EMAIL = 'email';

    public const INT = 'int';

    public const FLOAT = 'float';

    public const REGEX = 'regex';

    public const LOWER = 'lower';

    public const HIGHER = 'higher';

    public const MIN = 'min';

    public const MAX = 'max';

    public const MINITEMS = 'minitems';

    public const MAXITEMS = 'maxitems';

    public const MINLENGTH = 'minlength';

    public const MAXLENGTH = 'maxlength';

    public const BEFORE = 'before';

    public const AFTER = 'after';

    public const URL = 'url';

    public const BEPC = 'be-pc';

    public const BELGIUMCITY = 'belgiumcity';

    public const DECITY = 'de-city';

    public const DUTCHCITY = 'dutchcity';

    public const ISODATEOPTIONALTIE = 'isodateoptionaltie';

    public const MAXLENGTHCOMBINED = 'maxlengthcombined';

    public const MAXLEVELS = 'maxlevels';

    public const NLPC = 'nl-pc';

    public const NLPCSTRAAT = 'nl-pc-straat';

    public const NOTEQUAL = 'notequal';

    public const PROPERTYID = 'propertyId';

    public const PUSHVALUE = 'pushvalue';

    public const SEPARATOR = 'separator';

    public const UKPC = 'uk-pc';

    public const ENUM_VALIDATORCHECKKEYWORDS = 'validator:checkKeywords';

    public const ENUM_VALIDATORINRANGE = 'validator:inRange';

    public const ENUM_VALIDATORKRUISPUNT = 'validator:kruispunt';

    public const ENUM_VALIDATORNOTEMPTYIF = 'validator:notEmptyIf';

    private const _ALL_VALUES = [
        self::DATE,
        self::EMAIL,
        self::INT,
        self::FLOAT,
        self::REGEX,
        self::LOWER,
        self::HIGHER,
        self::MIN,
        self::MAX,
        self::MINITEMS,
        self::MAXITEMS,
        self::MINLENGTH,
        self::MAXLENGTH,
        self::BEFORE,
        self::AFTER,
        self::URL,
        self::BEPC,
        self::BELGIUMCITY,
        self::DECITY,
        self::DUTCHCITY,
        self::ISODATEOPTIONALTIE,
        self::MAXLENGTHCOMBINED,
        self::MAXLEVELS,
        self::NLPC,
        self::NLPCSTRAAT,
        self::NOTEQUAL,
        self::PROPERTYID,
        self::PUSHVALUE,
        self::SEPARATOR,
        self::UKPC,
        self::ENUM_VALIDATORCHECKKEYWORDS,
        self::ENUM_VALIDATORINRANGE,
        self::ENUM_VALIDATORKRUISPUNT,
        self::ENUM_VALIDATORNOTEMPTYIF,
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
