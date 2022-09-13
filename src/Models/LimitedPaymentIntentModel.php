<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPI\Models;

use stdClass;

class LimitedPaymentIntentModel implements \JsonSerializable
{
    /**
     * @var string
     */
    private $paymentIntentClientSecret;

    /**
     * @var int
     */
    private $amount;

    /**
     * @param string $paymentIntentClientSecret
     * @param int $amount
     */
    public function __construct(string $paymentIntentClientSecret, int $amount)
    {
        $this->paymentIntentClientSecret = $paymentIntentClientSecret;
        $this->amount = $amount;
    }

    /**
     * Returns Payment Intent Client Secret.
     * A secret string needed to instantiate Stripe Elements.
     */
    public function getPaymentIntentClientSecret(): string
    {
        return $this->paymentIntentClientSecret;
    }

    /**
     * Sets Payment Intent Client Secret.
     * A secret string needed to instantiate Stripe Elements.
     *
     * @required
     * @maps payment_intent_client_secret
     */
    public function setPaymentIntentClientSecret(string $paymentIntentClientSecret): void
    {
        $this->paymentIntentClientSecret = $paymentIntentClientSecret;
    }

    /**
     * Returns Amount.
     * Amount to be charged, in USD cents.
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * Sets Amount.
     * Amount to be charged, in USD cents.
     *
     * @required
     * @maps amount
     */
    public function setAmount(int $amount): void
    {
        $this->amount = $amount;
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
        $json['payment_intent_client_secret'] = $this->paymentIntentClientSecret;
        $json['amount']                       = $this->amount;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
