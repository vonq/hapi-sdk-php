<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPILib\Models;

use stdClass;

class OrderedProductsSpecValidationErrorModel implements \JsonSerializable
{
    /**
     * @var string[]|null
     */
    private $productId;

    /**
     * @var string[]|null
     */
    private $utm;

    /**
     * @var string[]|null
     */
    private $contractId;

    /**
     * @var string[]|null
     */
    private $postingRequirements;

    /**
     * Returns Product Id.
     *
     * @return string[]|null
     */
    public function getProductId(): ?array
    {
        return $this->productId;
    }

    /**
     * Sets Product Id.
     *
     * @maps productId
     *
     * @param string[]|null $productId
     */
    public function setProductId(?array $productId): void
    {
        $this->productId = $productId;
    }

    /**
     * Returns Utm.
     *
     * @return string[]|null
     */
    public function getUtm(): ?array
    {
        return $this->utm;
    }

    /**
     * Sets Utm.
     *
     * @maps utm
     *
     * @param string[]|null $utm
     */
    public function setUtm(?array $utm): void
    {
        $this->utm = $utm;
    }

    /**
     * Returns Contract Id.
     *
     * @return string[]|null
     */
    public function getContractId(): ?array
    {
        return $this->contractId;
    }

    /**
     * Sets Contract Id.
     *
     * @maps contractId
     *
     * @param string[]|null $contractId
     */
    public function setContractId(?array $contractId): void
    {
        $this->contractId = $contractId;
    }

    /**
     * Returns Posting Requirements.
     *
     * @return string[]|null
     */
    public function getPostingRequirements(): ?array
    {
        return $this->postingRequirements;
    }

    /**
     * Sets Posting Requirements.
     *
     * @maps postingRequirements
     *
     * @param string[]|null $postingRequirements
     */
    public function setPostingRequirements(?array $postingRequirements): void
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
