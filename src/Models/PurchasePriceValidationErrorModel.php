<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPILib\Models;

use stdClass;

class PurchasePriceValidationErrorModel implements \JsonSerializable
{
    /**
     * @var string[]|null
     */
    private $amount;

    /**
     * @var string[]|null
     */
    private $currency;

    /**
     * Returns Amount.
     *
     * @return string[]|null
     */
    public function getAmount(): ?array
    {
        return $this->amount;
    }

    /**
     * Sets Amount.
     *
     * @maps amount
     *
     * @param string[]|null $amount
     */
    public function setAmount(?array $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * Returns Currency.
     *
     * @return string[]|null
     */
    public function getCurrency(): ?array
    {
        return $this->currency;
    }

    /**
     * Sets Currency.
     *
     * @maps currency
     *
     * @param string[]|null $currency
     */
    public function setCurrency(?array $currency): void
    {
        $this->currency = $currency;
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
        if (isset($this->amount)) {
            $json['amount']   = $this->amount;
        }
        if (isset($this->currency)) {
            $json['currency'] = $this->currency;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
