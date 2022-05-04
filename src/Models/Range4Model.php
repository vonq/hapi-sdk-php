<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPILib\Models;

use stdClass;

class Range4Model implements \JsonSerializable
{
    /**
     * @var string[]
     */
    private $to;

    /**
     * @param string[] $to
     */
    public function __construct(array $to)
    {
        $this->to = $to;
    }

    /**
     * Returns To.
     *
     * @return string[]
     */
    public function getTo(): array
    {
        return $this->to;
    }

    /**
     * Sets To.
     *
     * @required
     * @maps to
     *
     * @param string[] $to
     */
    public function setTo(array $to): void
    {
        $this->to = $to;
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
        $json['to'] = $this->to;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
