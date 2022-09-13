<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPI\Models;

use stdClass;

/**
 * Optional source for the parameters made of parameter name as key and source for the parameter value
 * as object
 */
class ParametersSourceModel implements \JsonSerializable
{
    /**
     * @var TermModel|null
     */
    private $term;

    /**
     * Returns Term.
     */
    public function getTerm(): ?TermModel
    {
        return $this->term;
    }

    /**
     * Sets Term.
     *
     * @maps term
     */
    public function setTerm(?TermModel $term): void
    {
        $this->term = $term;
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
            $json['term'] = $this->term;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
