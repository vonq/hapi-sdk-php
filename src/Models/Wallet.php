<?php

declare(strict_types=1);

/*
 * VONQHiringAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VONQHiringAPILib\Models;

use stdClass;
use VONQHiringAPILib\Utils\DateTimeHelper;

/**
 * A wallet can be used by ATS customers to pay for campaigns. It can be funded with the `top up`
 * functionality.
 */
class Wallet implements \JsonSerializable
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var Balance
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
     * @param Balance $balance
     * @param \DateTime $createdDate
     * @param bool $hasBillingDetails
     */
    public function __construct(string $id, Balance $balance, \DateTime $createdDate, bool $hasBillingDetails)
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
    public function getBalance(): Balance
    {
        return $this->balance;
    }

    /**
     * Sets Balance.
     *
     * @required
     * @maps balance
     */
    public function setBalance(Balance $balance): void
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
     * @factory \VONQHiringAPILib\Utils\DateTimeHelper::fromRfc3339DateTime
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

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}