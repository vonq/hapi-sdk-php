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

class EncryptedContractModel implements \JsonSerializable
{
    /**
     * @var string
     */
    private $contractId;

    /**
     * @var string
     */
    private $customerId;

    /**
     * @var int
     */
    private $channelId;

    /**
     * @var string|null
     */
    private $alias;

    /**
     * @var array
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
     * @var ContractProductModel
     */
    private $product;

    /**
     * @var FacetModel[]
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
     * @var ContractPurchasePriceModel|null
     */
    private $purchasePrice;

    /**
     * @var string|null
     */
    private $igbCustomerId;

    /**
     * @var ListChannelModel|null
     */
    private $channel;

    /**
     * @var ContractGroupModel|null
     */
    private $group;

    /**
     * @param string $contractId
     * @param string $customerId
     * @param int $channelId
     * @param array $credentials
     * @param string $className
     * @param array $facets
     * @param ContractProductModel $product
     * @param FacetModel[] $postingRequirements
     */
    public function __construct(
        string $contractId,
        string $customerId,
        int $channelId,
        array $credentials,
        string $className,
        array $facets,
        ContractProductModel $product,
        array $postingRequirements
    ) {
        $this->contractId = $contractId;
        $this->customerId = $customerId;
        $this->channelId = $channelId;
        $this->credentials = $credentials;
        $this->className = $className;
        $this->facets = $facets;
        $this->product = $product;
        $this->postingRequirements = $postingRequirements;
    }

    /**
     * Returns Contract Id.
     * The identifier of the Contract. To be used when creating a Campaign
     */
    public function getContractId(): string
    {
        return $this->contractId;
    }

    /**
     * Sets Contract Id.
     * The identifier of the Contract. To be used when creating a Campaign
     *
     * @required
     * @maps contract_id
     */
    public function setContractId(string $contractId): void
    {
        $this->contractId = $contractId;
    }

    /**
     * Returns Customer Id.
     * The customer_id this contract belongs to. Based on the original `X-Customer-Id` header used when the
     * contract was created.
     */
    public function getCustomerId(): string
    {
        return $this->customerId;
    }

    /**
     * Sets Customer Id.
     * The customer_id this contract belongs to. Based on the original `X-Customer-Id` header used when the
     * contract was created.
     *
     * @required
     * @maps customer_id
     */
    public function setCustomerId(string $customerId): void
    {
        $this->customerId = $customerId;
    }

    /**
     * Returns Channel Id.
     * The Channel (job board) the contract is to be used for
     */
    public function getChannelId(): int
    {
        return $this->channelId;
    }

    /**
     * Sets Channel Id.
     * The Channel (job board) the contract is to be used for
     *
     * @required
     * @maps channel_id
     */
    public function setChannelId(int $channelId): void
    {
        $this->channelId = $channelId;
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
     * Returns Credentials.
     * AES Encrypted credentials
     */
    public function getCredentials(): array
    {
        return $this->credentials;
    }

    /**
     * Sets Credentials.
     * AES Encrypted credentials
     *
     * @required
     * @maps credentials
     */
    public function setCredentials(array $credentials): void
    {
        $this->credentials = $credentials;
    }

    /**
     * Returns Class Name.
     * Channel slug
     */
    public function getClassName(): string
    {
        return $this->className;
    }

    /**
     * Sets Class Name.
     * Channel slug
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
     * An object with contract parameters
     */
    public function getFacets(): array
    {
        return $this->facets;
    }

    /**
     * Sets Facets.
     * An object with contract parameters
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
     * The Product to be used in combination with the Contract when ordering a Campaign.
     */
    public function getProduct(): ContractProductModel
    {
        return $this->product;
    }

    /**
     * Sets Product.
     * The Product to be used in combination with the Contract when ordering a Campaign.
     *
     * @required
     * @maps product
     */
    public function setProduct(ContractProductModel $product): void
    {
        $this->product = $product;
    }

    /**
     * Returns Posting Requirements.
     * A list of the Contract Channel's Facets
     *
     * @return FacetModel[]
     */
    public function getPostingRequirements(): array
    {
        return $this->postingRequirements;
    }

    /**
     * Sets Posting Requirements.
     * A list of the Contract Channel's Facets
     *
     * @required
     * @maps posting_requirements
     *
     * @param FacetModel[] $postingRequirements
     */
    public function setPostingRequirements(array $postingRequirements): void
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

    /**
     * Returns Igb Customer Id.
     */
    public function getIgbCustomerId(): ?string
    {
        return $this->igbCustomerId;
    }

    /**
     * Sets Igb Customer Id.
     *
     * @maps igb_customer_id
     */
    public function setIgbCustomerId(?string $igbCustomerId): void
    {
        $this->igbCustomerId = $igbCustomerId;
    }

    /**
     * Returns Channel.
     */
    public function getChannel(): ?ListChannelModel
    {
        return $this->channel;
    }

    /**
     * Sets Channel.
     *
     * @maps channel
     */
    public function setChannel(?ListChannelModel $channel): void
    {
        $this->channel = $channel;
    }

    /**
     * Returns Group.
     * Model containing the contract group details
     */
    public function getGroup(): ?ContractGroupModel
    {
        return $this->group;
    }

    /**
     * Sets Group.
     * Model containing the contract group details
     *
     * @maps group
     */
    public function setGroup(?ContractGroupModel $group): void
    {
        $this->group = $group;
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
        $json['contract_id']          = $this->contractId;
        $json['customer_id']          = $this->customerId;
        $json['channel_id']           = $this->channelId;
        if (isset($this->alias)) {
            $json['alias']            = $this->alias;
        }
        $json['credentials']          = $this->credentials;
        $json['class_name']           = $this->className;
        $json['facets']               = $this->facets;
        $json['product']              = $this->product;
        $json['posting_requirements'] = $this->postingRequirements;
        $json['expiry_date']          = DateTimeHelper::toRfc3339DateTime($this->expiryDate);
        $json['credits']              = $this->credits;
        if (isset($this->purchasePrice)) {
            $json['purchase_price']   = $this->purchasePrice;
        }
        if (isset($this->igbCustomerId)) {
            $json['igb_customer_id']  = $this->igbCustomerId;
        }
        if (isset($this->channel)) {
            $json['channel']          = $this->channel;
        }
        if (isset($this->group)) {
            $json['group']            = $this->group;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
