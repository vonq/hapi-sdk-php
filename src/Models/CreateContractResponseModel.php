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

class CreateContractResponseModel implements \JsonSerializable
{
    /**
     * @var string
     */
    private $customerId;

    /**
     * @var string
     */
    private $contractId;

    /**
     * @var int
     */
    private $channelId;

    /**
     * @var string
     */
    private $credentials;

    /**
     * @var string
     */
    private $className;

    /**
     * @var array
     */
    private $facets;

    /**
     * @var ProductLiteModel
     */
    private $product;

    /**
     * @var string
     */
    private $postingRequirements;

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
     * @param string $customerId
     * @param string $contractId
     * @param int $channelId
     * @param string $credentials
     * @param string $className
     * @param array $facets
     * @param ProductLiteModel $product
     * @param string $postingRequirements
     */
    public function __construct(
        string $customerId,
        string $contractId,
        int $channelId,
        string $credentials,
        string $className,
        array $facets,
        ProductLiteModel $product,
        string $postingRequirements
    ) {
        $this->customerId = $customerId;
        $this->contractId = $contractId;
        $this->channelId = $channelId;
        $this->credentials = $credentials;
        $this->className = $className;
        $this->facets = $facets;
        $this->product = $product;
        $this->postingRequirements = $postingRequirements;
    }

    /**
     * Returns Customer Id.
     */
    public function getCustomerId(): string
    {
        return $this->customerId;
    }

    /**
     * Sets Customer Id.
     *
     * @required
     * @maps customer_id
     */
    public function setCustomerId(string $customerId): void
    {
        $this->customerId = $customerId;
    }

    /**
     * Returns Contract Id.
     */
    public function getContractId(): string
    {
        return $this->contractId;
    }

    /**
     * Sets Contract Id.
     *
     * @required
     * @maps contract_id
     */
    public function setContractId(string $contractId): void
    {
        $this->contractId = $contractId;
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
     */
    public function getCredentials(): string
    {
        return $this->credentials;
    }

    /**
     * Sets Credentials.
     *
     * @required
     * @maps credentials
     */
    public function setCredentials(string $credentials): void
    {
        $this->credentials = $credentials;
    }

    /**
     * Returns Class Name.
     */
    public function getClassName(): string
    {
        return $this->className;
    }

    /**
     * Sets Class Name.
     *
     * @required
     * @maps class_name
     */
    public function setClassName(string $className): void
    {
        $this->className = $className;
    }

    /**
     * Returns Facets.
     */
    public function getFacets(): array
    {
        return $this->facets;
    }

    /**
     * Sets Facets.
     *
     * @required
     * @maps facets
     */
    public function setFacets(array $facets): void
    {
        $this->facets = $facets;
    }

    /**
     * Returns Product.
     */
    public function getProduct(): ProductLiteModel
    {
        return $this->product;
    }

    /**
     * Sets Product.
     *
     * @required
     * @maps product
     */
    public function setProduct(ProductLiteModel $product): void
    {
        $this->product = $product;
    }

    /**
     * Returns Posting Requirements.
     */
    public function getPostingRequirements(): string
    {
        return $this->postingRequirements;
    }

    /**
     * Sets Posting Requirements.
     *
     * @required
     * @maps posting_requirements
     */
    public function setPostingRequirements(string $postingRequirements): void
    {
        $this->postingRequirements = $postingRequirements;
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
        $json['customer_id']          = $this->customerId;
        $json['contract_id']          = $this->contractId;
        $json['channel_id']           = $this->channelId;
        $json['credentials']          = $this->credentials;
        $json['class_name']           = $this->className;
        $json['facets']               = $this->facets;
        $json['product']              = $this->product;
        $json['posting_requirements'] = $this->postingRequirements;
        if (isset($this->expiryDate)) {
            $json['expiry_date']      = DateTimeHelper::toRfc3339DateTime($this->expiryDate);
        }
        if (isset($this->credits)) {
            $json['credits']          = $this->credits;
        }
        if (isset($this->purchasePrice)) {
            $json['purchase_price']   = $this->purchasePrice;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
