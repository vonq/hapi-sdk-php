<?php

declare(strict_types=1);

/*
 * VONQHiringAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VONQHiringAPILib\Models;

use stdClass;

class Balance implements \JsonSerializable
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

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}