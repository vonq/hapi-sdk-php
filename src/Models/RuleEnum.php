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
 * lower/higher: value for this facet should be lower/higher than or equal to the value for referred
 * facet
 *
 * before/after: value for this facet should be before/after than or equal to the value for referred
 * facet. Both facets are dates
 *
 * url: value should be a valid URL
 *
 * be-pc: Belgium postal code
 *
 * belgium/de/dutch-city: Belgium/German/Dutch city
 *
 * nl-pc, np-pc-straat: Dutch postal code, for nl-pc PO-boxes are not valid
 *
 * isodateoptional: date formatted "Y-m-d", "Y-md H:i" or "Y-m-d H:i:s"
 *
 * maxlengthcombined: (only used for type TEXTEXPAND) maximum length for all inputs combined to one
 * string
 *
 * separator: (only used for type TEXTEXPAND) string used to combine
 *
 * maxlevels: maximum depth of a HIER
 *
 * propertyId: only used internally
 *
 * pushvalue: only used internally
 *
 * validator:notEmptyIf: facet depends on vacancyvalue (exposed in API by required-tag in
 * [OptionsFacet](https://vonq.stoplight.io/docs/hapi/branches/2.1/6f1768e932ab5-facet-option) )
 */
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

    public const NOTEMPTY = 'notempty';

    public const EQUAL = 'equal';

    public const IN = 'in';

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
        self::NOTEMPTY,
        self::EQUAL,
        self::IN,
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
