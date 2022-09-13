<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPI\Models;

use stdClass;

class TermModel implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $field;

    /**
     * @var string|null
     */
    private $facet;

    /**
     * Returns Field.
     * Vacancy field from where to take the value used for the term field
     */
    public function getField(): ?string
    {
        return $this->field;
    }

    /**
     * Sets Field.
     * Vacancy field from where to take the value used for the term field
     *
     * @maps field
     */
    public function setField(?string $field): void
    {
        $this->field = $field;
    }

    /**
     * Returns Facet.
     * Facet key from where to take the value used for the term
     */
    public function getFacet(): ?string
    {
        return $this->facet;
    }

    /**
     * Sets Facet.
     * Facet key from where to take the value used for the term
     *
     * @maps facet
     */
    public function setFacet(?string $facet): void
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
        if (isset($this->field)) {
            $json['field'] = $this->field;
        }
        if (isset($this->facet)) {
            $json['facet'] = $this->facet;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
