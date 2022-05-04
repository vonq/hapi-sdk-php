<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPILib\Models;

use stdClass;

class FacetOptionShowFacetsModel implements \JsonSerializable
{
    /**
     * @var string
     */
    private $facet;

    /**
     * @param string $facet
     */
    public function __construct(string $facet)
    {
        $this->facet = $facet;
    }

    /**
     * Returns Facet.
     * The facet name that becomes required when this option is chosen.
     */
    public function getFacet(): string
    {
        return $this->facet;
    }

    /**
     * Sets Facet.
     * The facet name that becomes required when this option is chosen.
     *
     * @required
     * @maps facet
     */
    public function setFacet(string $facet): void
    {
        $this->facet = $facet;
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
        $json['facet'] = $this->facet;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
