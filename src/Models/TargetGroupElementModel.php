<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPI\Models;

use stdClass;

class TargetGroupElementModel implements \JsonSerializable
{
    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $vonqId;

    /**
     * @param string $description
     * @param string $vonqId
     */
    public function __construct(string $description, string $vonqId)
    {
        $this->description = $description;
        $this->vonqId = $vonqId;
    }

    /**
     * Returns Description.
     * The vonq name for this target group element
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Sets Description.
     * The vonq name for this target group element
     *
     * @required
     * @maps description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * Returns Vonq Id.
     * The Vonq ID representing this concept, as indicated in the [**`Taxonomy
     * Endpoints`**](#reference/experimental-products-search)
     */
    public function getVonqId(): string
    {
        return $this->vonqId;
    }

    /**
     * Sets Vonq Id.
     * The Vonq ID representing this concept, as indicated in the [**`Taxonomy
     * Endpoints`**](#reference/experimental-products-search)
     *
     * @required
     * @maps vonqId
     */
    public function setVonqId(string $vonqId): void
    {
        $this->vonqId = $vonqId;
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
        $json['description'] = $this->description;
        $json['vonqId']      = $this->vonqId;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
