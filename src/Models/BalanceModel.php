<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPILib\Models;

use stdClass;

class BalanceModel implements \JsonSerializable
{
    /**
     * @var int
     */
    private $uSD;

    /**
     * @param int $uSD
     */
    public function __construct(int $uSD)
    {
        $this->uSD = $uSD;
    }

    /**
     * Returns U SD.
     * Integer balance in USD cents
     */
    public function getUSD(): int
    {
        return $this->uSD;
    }

    /**
     * Sets U SD.
     * Integer balance in USD cents
     *
     * @required
     * @maps USD
     */
    public function setUSD(int $uSD): void
    {
        $this->uSD = $uSD;
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
        $json['USD'] = $this->uSD;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
