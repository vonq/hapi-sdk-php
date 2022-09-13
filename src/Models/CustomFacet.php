<?php

declare(strict_types=1);

/*
 * VONQHiringAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VONQHiringAPILib\Models;

use stdClass;

class CustomFacet implements \JsonSerializable
{
    /**
     * @var string[]
     */
    private $requiredParameters;

    /**
     * @var ParametersSource
     */
    private $parametersSource;

    /**
     * @param string[] $requiredParameters
     * @param ParametersSource $parametersSource
     */
    public function __construct(array $requiredParameters, ParametersSource $parametersSource)
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
     * @factory \VONQHiringAPILib\Models\RequiredParametersEnum::checkValue
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
    public function getParametersSource(): ParametersSource
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
    public function setParametersSource(ParametersSource $parametersSource): void
    {
        $this->parametersSource = $parametersSource;
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

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
