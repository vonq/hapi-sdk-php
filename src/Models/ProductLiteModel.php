<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPILib\Models;

use stdClass;

class ProductLiteModel implements \JsonSerializable
{
    /**
     * @var string
     */
    private $productId;

    /**
     * @var string
     */
    private $title;

    /**
     * @param string $productId
     * @param string $title
     */
    public function __construct(string $productId, string $title)
    {
        $this->productId = $productId;
        $this->title = $title;
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
     * @maps product_id
     */
    public function setProductId(string $productId): void
    {
        $this->productId = $productId;
    }

    /**
     * Returns Title.
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Sets Title.
     *
     * @required
     * @maps title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
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
        $json['product_id'] = $this->productId;
        $json['title']      = $this->title;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
