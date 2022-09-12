<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPILib\Models;

use stdClass;

class WalletRequestModel implements \JsonSerializable
{
    /**
     * @var string
     */
    private $customerName;

    /**
     * @param string $customerName
     */
    public function __construct(string $customerName)
    {
        $this->customerName = $customerName;
    }

    /**
     * Returns Customer Name.
     * The name of the customer, used as invoice detail.
     */
    public function getCustomerName(): string
    {
        return $this->customerName;
    }

    /**
     * Sets Customer Name.
     * The name of the customer, used as invoice detail.
     *
     * @required
     * @maps customerName
     */
    public function setCustomerName(string $customerName): void
    {
        $this->customerName = $customerName;
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
        $json['customerName'] = $this->customerName;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
