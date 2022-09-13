<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPI\Models;

use stdClass;

class OrderedProductsPostElementModel implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $productId;

    /**
     * @var string|null
     */
    private $utm;

    /**
     * @var string|null
     */
    private $contractId;

    /**
     * @var PostingRequirementsModel|null
     */
    private $postingRequirements;

    /**
     * Returns Product Id.
     * Product Identification
     */
    public function getProductId(): ?string
    {
        return $this->productId;
    }

    /**
     * Sets Product Id.
     * Product Identification
     *
     * @maps productId
     */
    public function setProductId(?string $productId): void
    {
        $this->productId = $productId;
    }

    /**
     * Returns Utm.
     * Query string for UTM parameters
     *
     * **Pattern:** `^([%.\-_!*a-zA-Z0-9]{1,}=[%.\-_!*+,;$\(\)a-zA-Z0-9]{1,}[&]{0,}){1,}$`
     */
    public function getUtm(): ?string
    {
        return $this->utm;
    }

    /**
     * Sets Utm.
     * Query string for UTM parameters
     *
     * **Pattern:** `^([%.\-_!*a-zA-Z0-9]{1,}=[%.\-_!*+,;$\(\)a-zA-Z0-9]{1,}[&]{0,}){1,}$`
     *
     * @maps utm
     */
    public function setUtm(?string $utm): void
    {
        $this->utm = $utm;
    }

    /**
     * Returns Contract Id.
     * Contract Identifier needed for My Contracts product
     */
    public function getContractId(): ?string
    {
        return $this->contractId;
    }

    /**
     * Sets Contract Id.
     * Contract Identifier needed for My Contracts product
     *
     * @maps contractId
     */
    public function setContractId(?string $contractId): void
    {
        $this->contractId = $contractId;
    }

    /**
     * Returns Posting Requirements.
     */
    public function getPostingRequirements(): ?PostingRequirementsModel
    {
        return $this->postingRequirements;
    }

    /**
     * Sets Posting Requirements.
     *
     * @maps postingRequirements
     */
    public function setPostingRequirements(?PostingRequirementsModel $postingRequirements): void
    {
        $this->postingRequirements = $postingRequirements;
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
        if (isset($this->productId)) {
            $json['productId']           = $this->productId;
        }
        if (isset($this->utm)) {
            $json['utm']                 = $this->utm;
        }
        if (isset($this->contractId)) {
            $json['contractId']          = $this->contractId;
        }
        if (isset($this->postingRequirements)) {
            $json['postingRequirements'] = $this->postingRequirements;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
