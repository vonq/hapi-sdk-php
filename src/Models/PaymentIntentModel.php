<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPI\Models;

use stdClass;

class PaymentIntentModel implements \JsonSerializable
{
    /**
     * @var string
     */
    private $walletId;

    /**
     * @var string
     */
    private $partnerId;

    /**
     * @var int
     */
    private $amount;

    /**
     * @var int|null
     */
    private $queryParamsAmount;

    /**
     * @var string|null
     */
    private $successCallbackUrl;

    /**
     * @var bool|null
     */
    private $agreeTerms = false;

    /**
     * @param string $walletId
     * @param string $partnerId
     * @param int $amount
     */
    public function __construct(string $walletId, string $partnerId, int $amount)
    {
        $this->walletId = $walletId;
        $this->partnerId = $partnerId;
        $this->amount = $amount;
    }

    /**
     * Returns Wallet Id.
     */
    public function getWalletId(): string
    {
        return $this->walletId;
    }

    /**
     * Sets Wallet Id.
     *
     * @required
     * @maps walletId
     */
    public function setWalletId(string $walletId): void
    {
        $this->walletId = $walletId;
    }

    /**
     * Returns Partner Id.
     */
    public function getPartnerId(): string
    {
        return $this->partnerId;
    }

    /**
     * Sets Partner Id.
     *
     * @required
     * @maps partnerId
     */
    public function setPartnerId(string $partnerId): void
    {
        $this->partnerId = $partnerId;
    }

    /**
     * Returns Amount.
     * The amount to be charged, in USD cents.
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * Sets Amount.
     * The amount to be charged, in USD cents.
     *
     * @required
     * @maps amount
     */
    public function setAmount(int $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * Returns Query Params Amount.
     * The amount initially passed to the top-up iframe, in USD cents.
     */
    public function getQueryParamsAmount(): ?int
    {
        return $this->queryParamsAmount;
    }

    /**
     * Sets Query Params Amount.
     * The amount initially passed to the top-up iframe, in USD cents.
     *
     * @maps queryParamsAmount
     */
    public function setQueryParamsAmount(?int $queryParamsAmount): void
    {
        $this->queryParamsAmount = $queryParamsAmount;
    }

    /**
     * Returns Success Callback Url.
     */
    public function getSuccessCallbackUrl(): ?string
    {
        return $this->successCallbackUrl;
    }

    /**
     * Sets Success Callback Url.
     *
     * @maps successCallbackUrl
     */
    public function setSuccessCallbackUrl(?string $successCallbackUrl): void
    {
        $this->successCallbackUrl = $successCallbackUrl;
    }

    /**
     * Returns Agree Terms.
     */
    public function getAgreeTerms(): ?bool
    {
        return $this->agreeTerms;
    }

    /**
     * Sets Agree Terms.
     *
     * @maps agreeTerms
     */
    public function setAgreeTerms(?bool $agreeTerms): void
    {
        $this->agreeTerms = $agreeTerms;
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
        $json['walletId']               = $this->walletId;
        $json['partnerId']              = $this->partnerId;
        $json['amount']                 = $this->amount;
        if (isset($this->queryParamsAmount)) {
            $json['queryParamsAmount']  = $this->queryParamsAmount;
        }
        if (isset($this->successCallbackUrl)) {
            $json['successCallbackUrl'] = $this->successCallbackUrl;
        }
        if (isset($this->agreeTerms)) {
            $json['agreeTerms']         = $this->agreeTerms;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
