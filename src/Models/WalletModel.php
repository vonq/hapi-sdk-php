<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPI\Models;

use HAPI\Utils\DateTimeHelper;
use stdClass;

/**
 * A wallet can be used by ATS customers to pay for campaigns. It can be funded with the `top up`
 * functionality.
 */
class WalletModel implements \JsonSerializable
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var BalanceModel
     */
    private $balance;

    /**
     * @var \DateTime
     */
    private $createdDate;

    /**
     * @var bool
     */
    private $hasBillingDetails;

    /**
     * @param string $id
     * @param BalanceModel $balance
     * @param \DateTime $createdDate
     * @param bool $hasBillingDetails
     */
    public function __construct(string $id, BalanceModel $balance, \DateTime $createdDate, bool $hasBillingDetails)
    {
        $this->id = $id;
        $this->balance = $balance;
        $this->createdDate = $createdDate;
        $this->hasBillingDetails = $hasBillingDetails;
    }

    /**
     * Returns Id.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     *
     * @required
     * @maps id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Balance.
     */
    public function getBalance(): BalanceModel
    {
        return $this->balance;
    }

    /**
     * Sets Balance.
     *
     * @required
     * @maps balance
     */
    public function setBalance(BalanceModel $balance): void
    {
        $this->balance = $balance;
    }

    /**
     * Returns Created Date.
     */
    public function getCreatedDate(): \DateTime
    {
        return $this->createdDate;
    }

    /**
     * Sets Created Date.
     *
     * @required
     * @maps created_date
     * @factory \HAPI\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setCreatedDate(\DateTime $createdDate): void
    {
        $this->createdDate = $createdDate;
    }

    /**
     * Returns Has Billing Details.
     */
    public function getHasBillingDetails(): bool
    {
        return $this->hasBillingDetails;
    }

    /**
     * Sets Has Billing Details.
     *
     * @required
     * @maps has_billing_details
     */
    public function setHasBillingDetails(bool $hasBillingDetails): void
    {
        $this->hasBillingDetails = $hasBillingDetails;
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
        $json['id']                  = $this->id;
        $json['balance']             = $this->balance;
        $json['created_date']        = DateTimeHelper::toRfc3339DateTime($this->createdDate);
        $json['has_billing_details'] = $this->hasBillingDetails;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
