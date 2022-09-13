<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPI\Models;

use stdClass;

class FacetAutocompleteModel implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $term;

    /**
     * @var array|null
     */
    private $credentials;

    /**
     * Returns Term.
     */
    public function getTerm(): ?string
    {
        return $this->term;
    }

    /**
     * Sets Term.
     *
     * @maps term
     */
    public function setTerm(?string $term): void
    {
        $this->term = $term;
    }

    /**
     * Returns Credentials.
     * An object with `contract_credentials` data
     */
    public function getCredentials(): ?array
    {
        return $this->credentials;
    }

    /**
     * Sets Credentials.
     * An object with `contract_credentials` data
     *
     * @maps credentials
     */
    public function setCredentials(?array $credentials): void
    {
        $this->credentials = $credentials;
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
        if (isset($this->term)) {
            $json['term']        = $this->term;
        }
        if (isset($this->credentials)) {
            $json['credentials'] = $this->credentials;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
