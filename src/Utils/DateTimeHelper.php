<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPI\Utils;

use DateTime;
use DateTimeZone;
use Exception;
use stdClass;

class DateTimeHelper
{
    /**
     * Match the pattern for a datetime string in simeple date format
     */
    public const SIMPLE_DATE = 'Y-m-d';

    /**
     * Match the pattern for a datetime string in Rfc1123 format
     */
    public const RFC1123 = 'D, d M Y H:i:s T';

    /**
     * Match the pattern for a datetime string in RFC3339 format
     */
    public const RFC3339 = 'Y-m-d\TH:i:sP';

    /**
     * Convert a DateTime object to a string in simple date format
     *
     * @param DateTime|null $date The DateTime object to convert
     *
     * @return string|null The datetime as a string in simple date format
     * @throws Exception
     */
    public static function toSimpleDate(?DateTime $date): ?string
    {
        if (is_null($date)) {
            return null;
        } elseif ($date instanceof DateTime) {
            return $date->format(static::SIMPLE_DATE);
        }
        throw new Exception('Not a valid DateTime object.');
    }

    /**
     * Convert an array of DateTime objects to an array of strings in simple date format
     *
     * @param array|null $dates The array of DateTime objects to convert
     *
     * @return array|null The array of datetime strings in simple date format
     */
    public static function toSimpleDateArray(?array $dates): ?array
    {
        if (is_null($dates)) {
            return null;
        }
        return array_map([self::class, 'toSimpleDate'], $dates);
    }

    /**
     * Convert a 2D array of DateTime objects to a 2D array of strings in simple date format
     *
     * @param array|null $dates The 2D array of DateTime objects to convert
     *
     * @return array|null The 2D array of datetime strings in simple date format
     */
    public static function toSimpleDate2DArray(?array $dates): ?array
    {
        if (is_null($dates)) {
            return null;
        }
        return array_map([self::class, 'toSimpleDateArray'], $dates);
    }

    /**
     * Parse a datetime string in simple date format to a DateTime object
     *
     * @param string|null $date A datetime string in simple date format
     *
     * @return DateTime|null The parsed DateTime object
     * @throws Exception
     */
    public static function fromSimpleDate(?string $date): ?DateTime
    {
        if (is_null($date)) {
            return null;
        }
        $x = DateTime::createFromFormat(static::SIMPLE_DATE, $date);
        if ($x instanceof DateTime) {
            return $x;
        }
        throw new Exception('Incorrect format.');
    }

    /**
     * Parse an array of datetime strings in simple date format to an array of DateTime objects
     *
     * @param array|null $dates An array of datetime strings in simple date format
     *
     * @return array|null An array of parsed DateTime objects
     */
    public static function fromSimpleDateArray(?array $dates): ?array
    {
        if (is_null($dates)) {
            return null;
        }
        return array_map([self::class, 'fromSimpleDate'], $dates);
    }

    /**
     * Parse an array of map of datetime strings in simple date format to a 2D array of DateTime objects
     *
     * @param array|null $dates An array of map of datetime strings in simple date format
     *
     * @return array|null A 2D array of parsed DateTime objects
     */
    public static function fromSimpleDateArrayOfMap(?array $dates): ?array
    {
        if (is_null($dates)) {
            return null;
        }
        return array_map([self::class, 'fromSimpleDateMap'], $dates);
    }

    /**
     * Parse a class of datetime strings in simple date format to an array of DateTime objects
     *
     * @param stdClass|null $datetimes A class of datetime strings in simple date format
     *
     * @return array|null An array of parsed DateTime objects
     */
    public static function fromSimpleDateMap(?stdClass $datetimes): ?array
    {
        if (is_null($datetimes)) {
            return null;
        }
        $array = json_decode(json_encode($datetimes), true);
        return array_map([self::class, 'fromSimpleDate'], $array);
    }

    /**
     * Parse a map of array of datetime strings in simple date format to a 2D array of DateTime objects
     *
     * @param stdClass|null $dates A map of array of datetime strings in simple date format
     *
     * @return array|null A 2D array of parsed DateTime objects
     */
    public static function fromSimpleDateMapOfArray(?stdClass $dates): ?array
    {
        if (is_null($dates)) {
            return null;
        }
        $array = json_decode(json_encode($dates), true);
        return array_map([self::class, 'fromSimpleDateArray'], $array);
    }

    /**
     * Convert a DateTime object to a string in Rfc1123 format
     *
     * @param DateTime|null $datetime The DateTime object to convert
     *
     * @return string|null The datetime as a string in Rfc1123 format
     * @throws Exception
     */
    public static function toRfc1123DateTime(?DateTime $datetime): ?string
    {
        if (is_null($datetime)) {
            return null;
        } elseif ($datetime instanceof DateTime) {
            return $datetime->setTimeZone(new DateTimeZone('GMT'))->format(static::RFC1123);
        }
        throw new Exception('Not a valid DateTime object.');
    }

    /**
     * Convert an array of DateTime objects to an array of strings in Rfc1123 format
     *
     * @param array|null $datetimes The array of DateTime objects to convert
     *
     * @return array|null The array of datetime strings in Rfc1123 format
     */
    public static function toRfc1123DateTimeArray(?array $datetimes): ?array
    {
        if (is_null($datetimes)) {
            return null;
        }
        return array_map([self::class, 'toRfc1123DateTime'], $datetimes);
    }

    /**
     * Convert a 2D array of DateTime objects to a 2D array of strings in Rfc1123 format
     *
     * @param array|null $dates The 2D array of DateTime objects to convert
     *
     * @return array|null The 2D array of datetime strings in Rfc1123 format
     */
    public static function toRfc1123DateTime2DArray(?array $dates): ?array
    {
        if (is_null($dates)) {
            return null;
        }
        return array_map([self::class, 'toRfc1123DateTimeArray'], $dates);
    }

    /**
     * Parse a datetime string in Rfc1123 format to a DateTime object
     *
     * @param string|null $datetime A datetime string in Rfc1123 format
     *
     * @return DateTime|null The parsed DateTime object
     * @throws Exception
     */
    public static function fromRfc1123DateTime(?string $datetime): ?DateTime
    {
        if (is_null($datetime)) {
            return null;
        }
        $x = DateTime::createFromFormat(static::RFC1123, $datetime);
        if ($x instanceof DateTime) {
            return $x->setTimeZone(new DateTimeZone('GMT'));
        }
        throw new Exception('Incorrect format.');
    }

    /**
     * Parse an array of datetime strings in Rfc1123 format to an array of DateTime objects
     *
     * @param array|null $datetimes An array of datetime strings in Rfc1123 format
     *
     * @return array|null An array of parsed DateTime objects
     */
    public static function fromRfc1123DateTimeArray(?array $datetimes): ?array
    {
        if (is_null($datetimes)) {
            return null;
        }
        return array_map([self::class, 'fromRfc1123DateTime'], $datetimes);
    }

    /**
     * Parse an array of map of datetime strings in Rfc1123 format to a 2D array of DateTime objects
     *
     * @param array|null $dates An array of map of datetime strings in Rfc1123 format
     *
     * @return array|null A 2D array of parsed DateTime objects
     */
    public static function fromRfc1123DateTimeArrayOfMap(?array $dates): ?array
    {
        if (is_null($dates)) {
            return null;
        }
        return array_map([self::class, 'fromRfc1123DateTimeMap'], $dates);
    }

    /**
     * Parse a class of datetime strings in Rfc1123 format to an array of DateTime objects
     *
     * @param stdClass|null $datetimes A class of datetime strings in Rfc1123 format
     *
     * @return array|null An array of parsed DateTime objects
     */
    public static function fromRfc1123DateTimeMap(?stdClass $datetimes): ?array
    {
        if (is_null($datetimes)) {
            return null;
        }
        $array = json_decode(json_encode($datetimes), true);
        return array_map([self::class, 'fromRfc1123DateTime'], $array);
    }

    /**
     * Parse a map of array of datetime strings in Rfc1123 format to a 2D array of DateTime objects
     *
     * @param stdClass|null $dates A map of array of datetime strings in Rfc1123 format
     *
     * @return array|null A 2D array of parsed DateTime objects
     */
    public static function fromRfc1123DateTimeMapOfArray(?stdClass $dates): ?array
    {
        if (is_null($dates)) {
            return null;
        }
        $array = json_decode(json_encode($dates), true);
        return array_map([self::class, 'fromRfc1123DateTimeArray'], $array);
    }

    /**
     * Convert a DateTime object to a string in Rfc3339 format
     *
     * @param DateTime|null $datetime The DateTime object to convert
     *
     * @return string|null The datetime as a string in Rfc3339 format
     * @throws Exception
     */
    public static function toRfc3339DateTime(?DateTime $datetime): ?string
    {
        if (is_null($datetime)) {
            return null;
        } elseif ($datetime instanceof DateTime) {
            return $datetime->setTimeZone(new DateTimeZone('UTC'))->format(static::RFC3339);
        }
        throw new Exception('Not a valid DateTime object.');
    }

    /**
     * Convert an array of DateTime objects to an array of strings in Rfc3339 format
     *
     * @param array|null $datetimes The array of DateTime objects to convert
     *
     * @return array|null The array of datetime strings in Rfc3339 format
     */
    public static function toRfc3339DateTimeArray(?array $datetimes): ?array
    {
        if (is_null($datetimes)) {
            return null;
        }
        return array_map([self::class, 'toRfc3339DateTime'], $datetimes);
    }

    /**
     * Convert a 2D array of DateTime objects to a 2D array of strings in Rfc3339 format
     *
     * @param array|null $dates The 2D array of DateTime objects to convert
     *
     * @return array|null The 2D array of datetime strings in Rfc3339 format
     */
    public static function toRfc3339DateTime2DArray(?array $dates): ?array
    {
        if (is_null($dates)) {
            return null;
        }
        return array_map([self::class, 'toRfc3339DateTimeArray'], $dates);
    }

    /**
     * Parse a datetime string in Rfc3339 format to a DateTime object
     *
     * @param string|null $datetime A datetime string in Rfc3339 format
     *
     * @return DateTime|null The parsed DateTime object
     * @throws Exception
     */
    public static function fromRfc3339DateTime(?string $datetime): ?DateTime
    {
        if (is_null($datetime)) {
            return null;
        }
        // Check for timezone information and append it if missing
        if (!(substr($datetime, strlen($datetime) - 1) == 'Z' || strpos($datetime, '+') !== false)) {
            $datetime .= 'Z';
        }

        $x = DateTime::createFromFormat(static::RFC3339, $datetime);
        if ($x instanceof DateTime) {
            return $x->setTimeZone(new DateTimeZone('UTC'));
        }
        $x = DateTime::createFromFormat("Y-m-d\TH:i:s.uP", $datetime); // parse with up to 6 microseconds
        if ($x instanceof DateTime) {
            return $x->setTimeZone(new DateTimeZone('UTC'));
        }
        $x = DateTime::createFromFormat("Y-m-d\TH:i:s.uuP", $datetime); // parse with up to 12 microseconds
        if ($x instanceof DateTime) {
            return $x->setTimeZone(new DateTimeZone('UTC'));
        }
        throw new Exception('Incorrect format.');
    }

    /**
     * Parse an array of datetime strings in Rfc3339 format to an array of DateTime objects
     *
     * @param array|null $datetimes An array of datetime strings in Rfc3339 format
     *
     * @return array|null An array of parsed DateTime objects
     */
    public static function fromRfc3339DateTimeArray(?array $datetimes): ?array
    {
        if (is_null($datetimes)) {
            return null;
        }
        return array_map([self::class, 'fromRfc3339DateTime'], $datetimes);
    }

    /**
     * Parse an array of map of datetime strings in Rfc3339 format to a 2D array DateTime objects
     *
     * @param array|null $dates An array of map of datetime strings in Rfc3339 format
     *
     * @return array|null A 2D array of parsed DateTime objects
     */
    public static function fromRfc3339DateTimeArrayOfMap(?array $dates): ?array
    {
        if (is_null($dates)) {
            return null;
        }
        return array_map([self::class, 'fromRfc3339DateTimeMap'], $dates);
    }

    /**
     * Parse a class of datetime strings in Rfc3339 format to an array of DateTime objects
     *
     * @param stdClass|null $datetimes A class of datetime strings in Rfc3339 format
     *
     * @return array|null An array of parsed DateTime objects
     */
    public static function fromRfc3339DateTimeMap(?stdClass $datetimes): ?array
    {
        if (is_null($datetimes)) {
            return null;
        }
        $array = json_decode(json_encode($datetimes), true);
        return array_map([self::class, 'fromRfc3339DateTime'], $array);
    }

    /**
     * Parse a map of array of datetime strings in Rfc3339 format to a 2D array of DateTime objects
     *
     * @param stdClass|null $dates A map of array of datetime strings in Rfc3339 format
     *
     * @return array|null A 2D array of parsed DateTime objects
     */
    public static function fromRfc3339DateTimeMapOfArray(?stdClass $dates): ?array
    {
        if (is_null($dates)) {
            return null;
        }
        $array = json_decode(json_encode($dates), true);
        return array_map([self::class, 'fromRfc3339DateTimeArray'], $array);
    }

    /**
     * Convert a DateTime object to a Unix Timestamp
     *
     * @param DateTime|null $datetime The DateTime object to convert
     *
     * @return int|null The converted Unix Timestamp
     * @throws Exception
     */
    public static function toUnixTimestamp(?DateTime $datetime): ?int
    {
        if (is_null($datetime)) {
            return null;
        } elseif ($datetime instanceof DateTime) {
            return $datetime->getTimestamp();
        }
        throw new Exception('Not a valid DateTime object.');
    }

    /**
     * Convert an array of DateTime objects to an array of Unix timestamps
     *
     * @param array|null $datetimes The array of DateTime objects to convert
     *
     * @return array|null The array of integers representing date-time in Unix timestamp
     */
    public static function toUnixTimestampArray(?array $datetimes): ?array
    {
        if (is_null($datetimes)) {
            return null;
        }
        return array_map([self::class, 'toUnixTimestamp'], $datetimes);
    }

    /**
     * Convert a 2D array of DateTime objects to a 2D array of Unix timestamps
     *
     * @param array|null $dates The 2D array of DateTime objects to convert
     *
     * @return array|null The 2D array of integers representing date-time in Unix timestamp
     */
    public static function toUnixTimestamp2DArray(?array $dates): ?array
    {
        if (is_null($dates)) {
            return null;
        }
        return array_map([self::class, 'toUnixTimestampArray'], $dates);
    }

    /**
     * Parse a Unix Timestamp to a DateTime object
     *
     * @param string|null $datetime The Unix Timestamp
     *
     * @return DateTime|null The parsed DateTime object
     * @throws Exception
     */
    public static function fromUnixTimestamp(?string $datetime): ?DateTime
    {
        if (is_null($datetime)) {
            return null;
        }
        $x = DateTime::createFromFormat("U", $datetime);
        if ($x instanceof DateTime) {
            return $x;
        }
        throw new Exception('Incorrect format.');
    }

    /**
     * Parse an array of Unix Timestamps to an array of DateTime objects
     *
     * @param array|null $datetimes An array of Unix Timestamps
     *
     * @return array|null An array of parsed DateTime objects
     */
    public static function fromUnixTimestampArray(?array $datetimes): ?array
    {
        if (is_null($datetimes)) {
            return null;
        }
        return array_map([self::class, 'fromUnixTimestamp'], array_map('strval', $datetimes));
    }

    /**
     * Parse an array of map of Unix Timestamps to a 2D array of DateTime objects
     *
     * @param array|null $dates An array of map of Unix Timestamps
     *
     * @return array|null A 2D array of parsed DateTime objects
     */
    public static function fromUnixTimestampArrayOfMap(?array $dates): ?array
    {
        if (is_null($dates)) {
            return null;
        }
        return array_map([self::class, 'fromUnixTimestampMap'], $dates);
    }

    /**
     * Parse a class of Unix Timestamps to an array of DateTime objects
     *
     * @param stdClass|null $datetimes A class of Unix Timestamps
     *
     * @return array|null An array of parsed DateTime objects
     */
    public static function fromUnixTimestampMap(?stdClass $datetimes): ?array
    {
        if (is_null($datetimes)) {
            return null;
        }
        $array = json_decode(json_encode($datetimes), true);
        return array_map([self::class, 'fromUnixTimestamp'], array_map('strval', $array));
    }

    /**
     * Parse a map of array of Unix Timestamps to a 2D array of DateTime objects
     *
     * @param stdClass|null $dates A map of array of Unix Timestamps
     *
     * @return array|null A 2D array of parsed DateTime objects
     */
    public static function fromUnixTimestampMapOfArray(?stdClass $dates): ?array
    {
        if (is_null($dates)) {
            return null;
        }
        $array = json_decode(json_encode($dates), true);
        return array_map([self::class, 'fromUnixTimestampArray'], $array);
    }
}
