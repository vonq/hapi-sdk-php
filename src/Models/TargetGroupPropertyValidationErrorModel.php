<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPI\Models;

use stdClass;

class TargetGroupPropertyValidationErrorModel implements \JsonSerializable
{
    /**
     * @var string[]|null
     */
    private $vonqId;

    /**
     * @var string[]|null
     */
    private $description;

    /**
     * Returns Vonq Id.
     *
     * @return string[]|null
     */
    public function getVonqId(): ?array
    {
        return $this->vonqId;
    }

    /**
     * Sets Vonq Id.
     *
     * @maps vonqId
     *
     * @param string[]|null $vonqId
     */
    public function setVonqId(?array $vonqId): void
    {
        $this->vonqId = $vonqId;
    }

    /**
     * Returns Description.
     *
     * @return string[]|null
     */
    public function getDescription(): ?array
    {
        return $this->description;
    }

    /**
     * Sets Description.
     *
     * @maps description
     *
     * @param string[]|null $description
     */
    public function setDescription(?array $description): void
    {
        $this->description = $description;
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
        if (isset($this->vonqId)) {
            $json['vonqId']      = $this->vonqId;
        }
        if (isset($this->description)) {
            $json['description'] = $this->description;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
