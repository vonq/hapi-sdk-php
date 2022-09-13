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

class ContractCreateRequestModel implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $alias;

    /**
     * @var int
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
     * @var \DateTime|null
     */
    private $expiryDate;

    /**
     * @var int|null
     */
    private $credits;

    /**
     * @var PurchasePriceModel|null
     */
    private $purchasePrice;

    /**
     * @var array
     */
    private $followedInstructions = [];

    /**
     * @var string|null
     */
    private $groupId;

    /**
     * @param int $channelId
     * @param array $credentials
     */
    public function __construct(int $channelId, array $credentials)
    {
        $this->channelId = $channelId;
        $this->credentials = $credentials;
    }

    /**
     * Returns Alias.
     * Optional alias used to differentiate multiple contracts on the same channel. If left empty during
     * contract creation, it will be given a default value.
     */
    public function getAlias(): ?string
    {
        return $this->alias;
    }

    /**
     * Sets Alias.
     * Optional alias used to differentiate multiple contracts on the same channel. If left empty during
     * contract creation, it will be given a default value.
     *
     * @maps alias
     */
    public function setAlias(?string $alias): void
    {
        $this->alias = $alias;
    }

    /**
     * Returns Channel Id.
     */
    public function getChannelId(): int
    {
        return $this->channelId;
    }

    /**
     * Sets Channel Id.
     *
     * @required
     * @maps channel_id
     */
    public function setChannelId(int $channelId): void
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
     * @factory \HAPI\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setExpiryDate(?\DateTime $expiryDate): void
    {
        $this->expiryDate = $expiryDate;
    }

    /**
     * Returns Credits.
     */
    public function getCredits(): ?int
    {
        return $this->credits;
    }

    /**
     * Sets Credits.
     *
     * @maps credits
     */
    public function setCredits(?int $credits): void
    {
        $this->credits = $credits;
    }

    /**
     * Returns Purchase Price.
     */
    public function getPurchasePrice(): ?PurchasePriceModel
    {
        return $this->purchasePrice;
    }

    /**
     * Sets Purchase Price.
     *
     * @maps purchase_price
     */
    public function setPurchasePrice(?PurchasePriceModel $purchasePrice): void
    {
        $this->purchasePrice = $purchasePrice;
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
        if (count($this->followedInstructions) == 0) {
            return null;
        }
        return $this->followedInstructions['value'];
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
        $this->followedInstructions['value'] = $followedInstructions;
    }

    /**
     * Unsets Followed Instructions.
     * When creating contracts for Channels that require the end-user to follow instructions (based on the
     * `manual_setup_required` key in the response body for the [Retrieve details for channel with support
     * for contracts](https://vonq.stoplight.io/docs/hapi/b3A6NTUxMjYwODI-retrieve-details-for-channel-with-
     * support-for-contracts) endpoint), set this value to `true` to confirm the user has done so. For
     * quality purposes, setting this field to `true` for Channels that don't require following
     * instructions will result in a 400 Bad Request.
     */
    public function unsetFollowedInstructions(): void
    {
        $this->followedInstructions = [];
    }

    /**
     * Returns Group Id.
     */
    public function getGroupId(): ?string
    {
        return $this->groupId;
    }

    /**
     * Sets Group Id.
     *
     * @maps group_id
     */
    public function setGroupId(?string $groupId): void
    {
        $this->groupId = $groupId;
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
        if (isset($this->alias)) {
            $json['alias']                 = $this->alias;
        }
        $json['channel_id']                = $this->channelId;
        $json['credentials']               = $this->credentials;
        if (isset($this->facets)) {
            $json['facets']                = $this->facets;
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
        if (!empty($this->followedInstructions)) {
            $json['followed_instructions'] = $this->followedInstructions['value'];
        }
        if (isset($this->groupId)) {
            $json['group_id']              = $this->groupId;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
