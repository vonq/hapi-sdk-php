<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPI;

use apimatic\jsonmapper\JsonMapper;
use Exception;
use InvalidArgumentException;
use JsonSerializable;
use HAPI\Exceptions\ApiException;
use HAPI\Http\HttpRequest;
use HAPI\Http\HttpResponse;
use stdClass;

/**
 * API utility class
 */
class ApiHelper
{
    /**
     * @var JsonMapper
     */
    private static $mapper;

    /**
     * Get a new JsonMapper instance for mapping objects
     *
     * @return JsonMapper JsonMapper instance
     */
    public static function getJsonMapper(): JsonMapper
    {
        if (!isset(self::$mapper)) {
            self::$mapper = new JsonMapper();
            self::$mapper->sAdditionalPropertiesCollectionMethod = 'addAdditionalProperty';
        }
        return self::$mapper;
    }

    /**
     * Replaces template parameters in the given url
     *
     * @param    string  $url         The query string builder to replace the template parameters
     * @param    array   $parameters  The parameters to replace in the url
     * @param    bool    $encode      Should parameters be URL-encoded?
     *
     * @return   string  The processed url
     */
    public static function appendUrlWithTemplateParameters(string $url, array $parameters, bool $encode = true): string
    {
        foreach ($parameters as $key => $value) {
            $replaceValue = '';

            if (is_null($value)) {
                $replaceValue = '';
            } elseif (is_array($value)) {
                $val = array_map('strval', $value);
                $val = $encode ? array_map('urlencode', $val) : $val;
                $replaceValue = implode("/", $val);
            } else {
                $val = strval($value);
                $replaceValue = $encode ? urlencode($val) : $val;
            }

            $url = str_replace('{' . strval($key) . '}', $replaceValue, $url);
        }

        return $url;
    }

    /**
     * Appends the given set of parameters to the given query string.
     *
     * @param string $queryUrl   The query url string to append the parameters
     * @param array  $parameters The parameters to append
     */
    public static function appendUrlWithQueryParameters(string &$queryUrl, array $parameters): void
    {
        //perform parameter validation
        if (is_null($queryUrl) || !is_string($queryUrl)) {
            throw new InvalidArgumentException('Given value for parameter "queryBuilder" is invalid.');
        }
        if (is_null($parameters)) {
            return;
        }
        //does the query string already has parameters
        $hasParams = (strrpos($queryUrl, '?') > 0);

        //if already has parameters, use the &amp; to append new parameters
        $queryUrl .= (($hasParams) ? '&' : '?');

        //append parameters
        $queryUrl .= static::httpBuildQuery($parameters);
    }

    /**
     * Map the class onto the value,
     * If mapping failed due to the invalid oneOf or anyOf types,
     * throw ApiException
     *
     * @param HttpRequest  $request   httpRequest obj to be used to throw ApiException
     * @param HttpResponse $response  httpResponse obj to be used to throw ApiException
     * @param mixed        $value     value to be verified against the types
     * @param string       $classname name of the class to map
     * @param int          $dimension greater then 0 if trying to map class array of some
     *                                dimensions, Default: 0
     * @param string       $namespace namespace name for the model classes, Default: global namespace
     *
     * @return mixed
     * @throws ApiException
     */
    public static function mapClass(
        HttpRequest $request,
        HttpResponse $response,
        $value,
        string $classname,
        int $dimension = 0,
        string $namespace = 'HAPI\Models'
    ) {
        try {
            return $dimension == 0 ? self::getJsonMapper()->mapClass($value, "$namespace\\$classname")
                : self::getJsonMapper()->mapClassArray($value, "$namespace\\$classname", $dimension);
        } catch (Exception $e) {
            throw new ApiException($e->getMessage(), $request, $response);
        }
    }

    /**
     * Map the types onto the value,
     * If mapping failed due to the invalid oneOf or anyOf types,
     * throw ApiException
     *
     * @param HttpRequest  $request    httpRequest obj to be used to throw ApiException
     * @param HttpResponse $response   httpResponse obj to be used to throw ApiException
     * @param mixed        $value      value to be verified against the types
     * @param string       $types      types to be mapped in format OneOf(...) or AnyOf(...)
     * @param string[]     $facMethods Specify if any methods are required to map this value into any type
     * @param string       $namespace  namespace name for the model classes, Default: global namespace
     *
     * @return mixed
     * @throws ApiException
     */
    public static function mapTypes(
        HttpRequest $request,
        HttpResponse $response,
        $value,
        string $types,
        array $facMethods = [],
        string $namespace = 'HAPI\Models'
    ) {
        try {
            return self::getJsonMapper()->mapFor($value, $types, $namespace, $facMethods);
        } catch (Exception $e) {
            throw new ApiException($e->getMessage(), $request, $response);
        }
    }

    /**
     * Checks if type of the given value is present in the type group, also updates the value when
     * $serializationMethods for the value's type are given.
     *
     * @param mixed    $value                  value to be verified against the types
     * @param string   $types                  types to be mapped in format OneOf(...) or AnyOf(...)
     * @param string[] $serializationMethods   Specify methods required for serialization of specific types in
     *                                         in the type group, should be an array in the format:
     *                                         ['path/to/method argumentType', ...]. Default: []
     *
     * @return mixed
     * @throws InvalidArgumentException
     */
    public static function verifyTypes(
        $value,
        string $types,
        array $serializationMethods = []
    ) {
        try {
            return self::getJsonMapper()->checkTypeGroupFor($types, $value, $serializationMethods);
        } catch (Exception $e) {
            throw new InvalidArgumentException($e->getMessage());
        }
    }

    /**
     * Serialize any given mixed value.
     *
     * @param mixed $value Any value to be serialized
     *
     * @return string|null serialized value
     */
    public static function serialize($value): ?string
    {
        if (is_string($value) || is_null($value)) {
            return $value;
        }
        return json_encode($value);
    }

    /**
     * Ensures that all the given values are present in given Enum.
     *
     * @param array|null|int|string $value      Value or a list of values to be checked
     * @param string                $enumName   Enum to be checked with given value
     * @param array                 $enumValues An array with all possible enum values
     *
     * @throws Exception Throws exception if any given value is not in given Enum
     */
    public static function checkValueInEnum($value, string $enumName, array $enumValues): void
    {
        if (is_null($value)) {
            return;
        }
        if (is_array($value)) {
            foreach ($value as $v) {
                self::checkValueInEnum($v, $enumName, $enumValues);
            }
            return;
        }
        if (!in_array($value, $enumValues, true)) {
            throw new Exception("$value is invalid for $enumName.");
        }
    }

    /**
     * Deserialize a Json string
     *
     * @param  string   $json                      A valid Json string
     * @param  mixed    $instance                  Instance of an object to map the json into
     * @param  boolean  $isArray                   Is the Json an object array?
     * @param  boolean  $allowAdditionalProperties Allow additional properties
     *
     * @return mixed                               Decoded Json
     */
    public static function deserialize(
        string $json,
        $instance = null,
        bool $isArray = false,
        bool $allowAdditionalProperties = true
    ) {
        if ($instance == null) {
            return json_decode($json, true);
        } else {
            $mapper = new \apimatic\jsonmapper\JsonMapper();
            if ($allowAdditionalProperties) {
                $mapper->sAdditionalPropertiesCollectionMethod = 'addAdditionalProperty';
            }
            if ($isArray) {
                return $mapper->mapArray(json_decode($json), [], $instance);
            } else {
                return $mapper->map(json_decode($json), $instance);
            }
        }
    }

    /**
     * Check if an array isAssociative (has string keys)
     *
     * @param  array   $arr   A valid array
     *
     * @return boolean        True if the array is Associative, false if it is Indexed
     */
    private static function isAssociative(array $arr): bool
    {
        foreach ($arr as $key => $value) {
            if (is_string($key)) {
                return true;
            }
        }

        return false;
    }

    /**
     * Prepare a model for form/query encoding.
     *
     * @param JsonSerializable|null $model  A valid instance of JsonSerializable.
     *
     * @return array|null  The model as a map of key value pairs.
     */
    public static function prepareFields(?JsonSerializable $model): ?array
    {
        if ($model == null) {
            return null;
        }
        $modelArray = $model->jsonSerialize();
        if ($modelArray instanceof stdClass) {
            return [];
        }
        return self::prepareValue($modelArray);
    }

    /**
     * Prepare a mixed typed value or array for form/query encoding.
     *
     * @param mixed $value  Any mixed typed value.
     *
     * @return mixed  A valid instance to be sent in form/query.
     */
    public static function prepareValue($value)
    {
        if (is_null($value)) {
            return null;
        } elseif (is_array($value)) {
            // recursively calling this function to resolve all types in any array
            return array_map([self::class, 'prepareValue'], $value);
        } elseif (is_bool($value)) {
            return var_export($value, true);
        } elseif ($value instanceof JsonSerializable) {
            return self::prepareFields($value);
        }
        return $value;
    }

    /*
     * Encode the given data to be sent as form parameters.
     *
     * @param  mixed $data Input data to be encoded
     *
     * @return array       Encoded data
     */
    public static function formEncode($data)
    {
        if (is_array($data) || is_object($data) || $data instanceof \Traversable) {
            return static::httpBuildQuery((array)$data);
        }

        return $data;
    }

    /*
     * Generate URL-encoded query string from the giving list of parameters.
     *
     * @param  iterable $data       Input data to be encoded
     * @param  string   $parent     Parent name accessor
     * @param  boolean  $innerArray Is this an array within another array
     *
     * @return string               Url encoded query string
     */
    public static function httpBuildQuery(iterable $data, string $parent = '', bool $innerArray = false): string
    {
        if (!is_array($data)) {
            return "";
        }
        $r = [];
        foreach ((array)$data as $k => $v) {
            if ($innerArray) {
                if (is_numeric($k) && is_scalar($v)) {
                    $k = $parent;
                } else {
                    $k = $parent . "[$k]";
                }
            }
            if (is_array($v)) {
                $r[] = static::httpBuildQuery($v, $k, true);
                continue;
            }
            $r[] = urlencode($k) . "=" . urlencode(strval($v));
        }
        return implode("&", $r);
    }
}
