<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPI\Exceptions;

class ContractCreateRequestValidationErrorException extends \HAPI\Exceptions\ApiException
{
    /**
     * @var string[]|null
     */
    private $alias;

    /**
     * @var string[]|null
     */
    private $channelId;

    /**
     * @var array|null
     */
    private $credentials;

    /**
     * @var array|null
     */
    private $facets;

    /**
     * @var string[]|null
     */
    private $expiryDate;

    /**
     * @var string[]|null
     */
    private $credits;

    /**
     * @var \HAPI\Models\PurchasePriceValidationErrorModel|null
     */
    private $purchasePrice;

    /**
     * @var string[]|null
     */
    private $followedInstructions;

    /**
     * @var string[]|null
     */
    private $groupId;

    /**
     * Returns Alias.
     *
     * @return string[]|null
     */
    public function getAlias(): ?array
    {
        return $this->alias;
    }

    /**
     * Sets Alias.
     *
     * @maps alias
     *
     * @param string[]|null $alias
     */
    public function setAlias(?array $alias): void
    {
        $this->alias = $alias;
    }

    /**
     * Returns Channel Id.
     *
     * @return string[]|null
     */
    public function getChannelId(): ?array
    {
        return $this->channelId;
    }

    /**
     * Sets Channel Id.
     *
     * @maps channel_id
     *
     * @param string[]|null $channelId
     */
    public function setChannelId(?array $channelId): void
    {
        $this->channelId = $channelId;
    }

    /**
     * Returns Credentials.
     */
    public function getCredentials(): ?array
    {
        return $this->credentials;
    }

    /**
     * Sets Credentials.
     *
     * @maps credentials
     */
    public function setCredentials(?array $credentials): void
    {
        $this->credentials = $credentials;
    }

    /**
     * Returns Facets.
     */
    public function getFacets(): ?array
    {
        return $this->facets;
    }

    /**
     * Sets Facets.
     *
     * @maps facets
     */
    public function setFacets(?array $facets): void
    {
        $this->facets = $facets;
    }

    /**
     * Returns Expiry Date.
     *
     * @return string[]|null
     */
    public function getExpiryDate(): ?array
    {
        return $this->expiryDate;
    }

    /**
     * Sets Expiry Date.
     *
     * @maps expiry_date
     *
     * @param string[]|null $expiryDate
     */
    public function setExpiryDate(?array $expiryDate): void
    {
        $this->expiryDate = $expiryDate;
    }

    /**
     * Returns Credits.
     *
     * @return string[]|null
     */
    public function getCredits(): ?array
    {
        return $this->credits;
    }

    /**
     * Sets Credits.
     *
     * @maps credits
     *
     * @param string[]|null $credits
     */
    public function setCredits(?array $credits): void
    {
        $this->credits = $credits;
    }

    /**
     * Returns Purchase Price.
     */
    public function getPurchasePrice(): ?\HAPI\Models\PurchasePriceValidationErrorModel
    {
        return $this->purchasePrice;
    }

    /**
     * Sets Purchase Price.
     *
     * @maps purchase_price
     */
    public function setPurchasePrice(?\HAPI\Models\PurchasePriceValidationErrorModel $purchasePrice): void
    {
        $this->purchasePrice = $purchasePrice;
    }

    /**
     * Returns Followed Instructions.
     *
     * @return string[]|null
     */
    public function getFollowedInstructions(): ?array
    {
        return $this->followedInstructions;
    }

    /**
     * Sets Followed Instructions.
     *
     * @maps followed_instructions
     *
     * @param string[]|null $followedInstructions
     */
    public function setFollowedInstructions(?array $followedInstructions): void
    {
        $this->followedInstructions = $followedInstructions;
    }

    /**
     * Returns Group Id.
     *
     * @return string[]|null
     */
    public function getGroupId(): ?array
    {
        return $this->groupId;
    }

    /**
     * Sets Group Id.
     *
     * @maps group_id
     *
     * @param string[]|null $groupId
     */
    public function setGroupId(?array $groupId): void
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
}
