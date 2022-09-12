<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPILib\Models;

use stdClass;

class ProductValidationErrorsModel implements \JsonSerializable
{
    /**
     * @var array
     */
    private $credentials;

    /**
     * @var array
     */
    private $postingRequirements;

    /**
     * @param array $credentials
     * @param array $postingRequirements
     */
    public function __construct(array $credentials, array $postingRequirements)
    {
        $this->credentials = $credentials;
        $this->postingRequirements = $postingRequirements;
    }

    /**
     * Returns Credentials.
     */
    public function getCredentials(): array
    {
        return $this->credentials;
    }

    /**
     * Sets Credentials.
     *
     * @required
     * @maps credentials
     */
    public function setCredentials(array $credentials): void
    {
        $this->credentials = $credentials;
    }

    /**
     * Returns Posting Requirements.
     */
    public function getPostingRequirements(): array
    {
        return $this->postingRequirements;
    }

    /**
     * Sets Posting Requirements.
     *
     * @required
     * @maps posting_requirements
     */
    public function setPostingRequirements(array $postingRequirements): void
    {
        $this->postingRequirements = $postingRequirements;
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
        $json['credentials']          = $this->credentials;
        $json['posting_requirements'] = $this->postingRequirements;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
