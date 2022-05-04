<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPILib\Models;

use HAPILib\Utils\DateTimeHelper;
use stdClass;

class PostContractModel implements \JsonSerializable
{
    /**
     * @var float
     */
    private $channelId;

    /**
     * @var array
     */
    private $credentials;

    /**
     * @var array|null
     */
    private $facets;

    /**
     * @var bool|null
     */
    private $followedInstructions;

    /**
     * @var \DateTime|null
     */
    private $expiryDate;

    /**
     * @var float|null
     */
    private $credits;

    /**
     * @var ContractPurchasePriceModel|null
     */
    private $purchasePrice;

    /**
     * @param float $channelId
     * @param array $credentials
     */
    public function __construct(float $channelId, array $credentials)
    {
        $this->channelId = $channelId;
        $this->credentials = $credentials;
    }

    /**
     * Returns Channel Id.
     */
    public function getChannelId(): float
    {
        return $this->channelId;
    }

    /**
     * Sets Channel Id.
     *
     * @required
     * @maps channel_id
     */
    public function setChannelId(float $channelId): void
    {
        $this->channelId = $channelId;
    }

    /**
     * Returns Credentials.
     * An object with credentials data
     */
    public function getCredentials(): array
    {
        return $this->credentials;
    }

    /**
     * Sets Credentials.
     * An object with credentials data
     *
     * @required
     * @maps credentials
     */
    public function setCredentials(array $credentials): void
    {
        $this->credentials = $credentials;
    }

    /**
     * Returns Facets.
     * An object with product parameters
     */
    public function getFacets(): ?array
    {
        return $this->facets;
    }

    /**
     * Sets Facets.
     * An object with product parameters
     *
     * @maps facets
     */
    public function setFacets(?array $facets): void
    {
        $this->facets = $facets;
    }

    /**
     * Returns Followed Instructions.
     * When creating contracts for Channels that require the end-user to follow instructions (based on the
     * `manual_setup_required` key in the response body for the [Retrieve details for channel with support
     * for contracts](https://vonq.stoplight.io/docs/hapi/b3A6NTUxMjYwODI-retrieve-details-for-channel-with-
     * support-for-contracts) endpoint), set this value to `true` to confirm the user has done so. For
     * quality purposes, setting this field to `true` for Channels that don't require following
     * instructions will result in a 400 Bad Request.
     */
    public function getFollowedInstructions(): ?bool
    {
        return $this->followedInstructions;
    }

    /**
     * Sets Followed Instructions.
     * When creating contracts for Channels that require the end-user to follow instructions (based on the
     * `manual_setup_required` key in the response body for the [Retrieve details for channel with support
     * for contracts](https://vonq.stoplight.io/docs/hapi/b3A6NTUxMjYwODI-retrieve-details-for-channel-with-
     * support-for-contracts) endpoint), set this value to `true` to confirm the user has done so. For
     * quality purposes, setting this field to `true` for Channels that don't require following
     * instructions will result in a 400 Bad Request.
     *
     * @maps followed_instructions
     */
    public function setFollowedInstructions(?bool $followedInstructions): void
    {
        $this->followedInstructions = $followedInstructions;
    }

    /**
     * Returns Expiry Date.
     */
    public function getExpiryDate(): ?\DateTime
    {
        return $this->expiryDate;
    }

    /**
     * Sets Expiry Date.
     *
     * @maps expiry_date
     * @factory \HAPILib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setExpiryDate(?\DateTime $expiryDate): void
    {
        $this->expiryDate = $expiryDate;
    }

    /**
     * Returns Credits.
     */
    public function getCredits(): ?float
    {
        return $this->credits;
    }

    /**
     * Sets Credits.
     *
     * @maps credits
     */
    public function setCredits(?float $credits): void
    {
        $this->credits = $credits;
    }

    /**
     * Returns Purchase Price.
     */
    public function getPurchasePrice(): ?ContractPurchasePriceModel
    {
        return $this->purchasePrice;
    }

    /**
     * Sets Purchase Price.
     *
     * @maps purchase_price
     */
    public function setPurchasePrice(?ContractPurchasePriceModel $purchasePrice): void
    {
        $this->purchasePrice = $purchasePrice;
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
        $json['channel_id']                = $this->channelId;
        $json['credentials']               = $this->credentials;
        if (isset($this->facets)) {
            $json['facets']                = $this->facets;
        }
        if (isset($this->followedInstructions)) {
            $json['followed_instructions'] = $this->followedInstructions;
        }
        if (isset($this->expiryDate)) {
            $json['expiry_date']           = DateTimeHelper::toRfc3339DateTime($this->expiryDate);
        }
        if (isset($this->credits)) {
            $json['credits']               = $this->credits;
        }
        if (isset($this->purchasePrice)) {
            $json['purchase_price']        = $this->purchasePrice;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
