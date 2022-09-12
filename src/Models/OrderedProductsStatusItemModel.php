<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPILib\Models;

use stdClass;

class OrderedProductsStatusItemModel implements \JsonSerializable
{
    /**
     * @var string
     */
    private $productId;

    /**
     * @var string
     */
    private $status;

    /**
     * @var string|null
     */
    private $statusDescription;

    /**
     * @param string $productId
     * @param string $status
     */
    public function __construct(string $productId, string $status)
    {
        $this->productId = $productId;
        $this->status = $status;
    }

    /**
     * Returns Product Id.
     */
    public function getProductId(): string
    {
        return $this->productId;
    }

    /**
     * Sets Product Id.
     *
     * @required
     * @maps productId
     */
    public function setProductId(string $productId): void
    {
        $this->productId = $productId;
    }

    /**
     * Returns Status.
     * Status of the product. One of the following
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     * Status of the product. One of the following
     *
     * @required
     * @maps status
     * @factory \HAPILib\Models\OrderedProductStatusEnum::checkValue
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Status Description.
     * Additional information about product status
     */
    public function getStatusDescription(): ?string
    {
        return $this->statusDescription;
    }

    /**
     * Sets Status Description.
     * Additional information about product status
     *
     * @maps statusDescription
     */
    public function setStatusDescription(?string $statusDescription): void
    {
        $this->statusDescription = $statusDescription;
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
        $json['productId']         = $this->productId;
        $json['status']            = OrderedProductStatusEnum::checkValue($this->status);
        $json['statusDescription'] = $this->statusDescription;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
