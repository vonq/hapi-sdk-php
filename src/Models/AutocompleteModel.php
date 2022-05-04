<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPILib\Models;

use stdClass;

/**
 * Used for Facets whose value choices need to be fetched through an additional call to the [List
 * autocomplete values for posting requirements](https://vonq.stoplight.io/docs/hapi/b3A6MzM2MDEzODk-
 * list-autocomplete-values-for-posting-requirement) endpoint.
 */
class AutocompleteModel implements \JsonSerializable
{
    /**
     * @var string[]
     */
    private $requiredParameters;

    /**
     * @param string[] $requiredParameters
     */
    public function __construct(array $requiredParameters)
    {
        $this->requiredParameters = $requiredParameters;
    }

    /**
     * Returns Required Parameters.
     * List of keys to pass to  the body of the request calling the [List autocomplete values for posting
     * requirements](https://vonq.stoplight.io/docs/hapi/b3A6MzM2MDEzODk-list-autocomplete-values-for-
     * posting-requirement) endpoint.
     *
     * @return string[]
     */
    public function getRequiredParameters(): array
    {
        return $this->requiredParameters;
    }

    /**
     * Sets Required Parameters.
     * List of keys to pass to  the body of the request calling the [List autocomplete values for posting
     * requirements](https://vonq.stoplight.io/docs/hapi/b3A6MzM2MDEzODk-list-autocomplete-values-for-
     * posting-requirement) endpoint.
     *
     * @required
     * @maps required_parameters
     * @factory \HAPILib\Models\RequiredParameterEnum::checkValue
     *
     * @param string[] $requiredParameters
     */
    public function setRequiredParameters(array $requiredParameters): void
    {
        $this->requiredParameters = $requiredParameters;
    }

    private $additionalProperties = [];

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function addAdditionalProperty(string $name, $value)
    {
        $this->additionalProperties[$name] = $value;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['required_parameters'] = RequiredParameterEnum::checkValue($this->requiredParameters);
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
