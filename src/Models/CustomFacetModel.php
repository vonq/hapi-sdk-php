<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPI\Models;

use stdClass;

class CustomFacetModel implements \JsonSerializable
{
    /**
     * @var string[]
     */
    private $requiredParameters;

    /**
     * @var ParametersSourceModel
     */
    private $parametersSource;

    /**
     * @param string[] $requiredParameters
     * @param ParametersSourceModel $parametersSource
     */
    public function __construct(array $requiredParameters, ParametersSourceModel $parametersSource)
    {
        $this->requiredParameters = $requiredParameters;
        $this->parametersSource = $parametersSource;
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
     * @factory \HAPI\Models\RequiredParametersEnum::checkValue
     *
     * @param string[] $requiredParameters
     */
    public function setRequiredParameters(array $requiredParameters): void
    {
        $this->requiredParameters = $requiredParameters;
    }

    /**
     * Returns Parameters Source.
     * Optional source for the parameters made of parameter name as key and source for the parameter value
     * as object
     */
    public function getParametersSource(): ParametersSourceModel
    {
        return $this->parametersSource;
    }

    /**
     * Sets Parameters Source.
     * Optional source for the parameters made of parameter name as key and source for the parameter value
     * as object
     *
     * @required
     * @maps parameters_source
     */
    public function setParametersSource(ParametersSourceModel $parametersSource): void
    {
        $this->parametersSource = $parametersSource;
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
        $json['required_parameters'] = RequiredParametersEnum::checkValue($this->requiredParameters);
        $json['parameters_source']   = $this->parametersSource;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
