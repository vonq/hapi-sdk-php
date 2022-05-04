<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPILib\Models;

use stdClass;

class OrderedProductsSpecModel implements \JsonSerializable
{
    /**
     * @var string[]
     */
    private $productId;

    /**
     * @var string[]
     */
    private $utm;

    /**
     * @param string[] $productId
     * @param string[] $utm
     */
    public function __construct(array $productId, array $utm)
    {
        $this->productId = $productId;
        $this->utm = $utm;
    }

    /**
     * Returns Product Id.
     *
     * @return string[]
     */
    public function getProductId(): array
    {
        return $this->productId;
    }

    /**
     * Sets Product Id.
     *
     * @required
     * @maps productId
     *
     * @param string[] $productId
     */
    public function setProductId(array $productId): void
    {
        $this->productId = $productId;
    }

    /**
     * Returns Utm.
     *
     * @return string[]
     */
    public function getUtm(): array
    {
        return $this->utm;
    }

    /**
     * Sets Utm.
     *
     * @required
     * @maps utm
     *
     * @param string[] $utm
     */
    public function setUtm(array $utm): void
    {
        $this->utm = $utm;
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
        $json['productId'] = $this->productId;
        $json['utm']       = $this->utm;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
