<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPILib\Models;

use stdClass;

class CampaignPostingModel implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $name;

    /**
     * @var int|null
     */
    private $clicks;

    /**
     * @var string|null
     */
    private $productId;

    /**
     * Returns Name.
     * The name of the Product that was bought
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * The name of the Product that was bought
     *
     * @maps name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Clicks.
     * Number of clicks of the mentioned posting
     */
    public function getClicks(): ?int
    {
        return $this->clicks;
    }

    /**
     * Sets Clicks.
     * Number of clicks of the mentioned posting
     *
     * @maps clicks
     */
    public function setClicks(?int $clicks): void
    {
        $this->clicks = $clicks;
    }

    /**
     * Returns Product Id.
     * The ID of the product that was bought
     */
    public function getProductId(): ?string
    {
        return $this->productId;
    }

    /**
     * Sets Product Id.
     * The ID of the product that was bought
     *
     * @maps productId
     */
    public function setProductId(?string $productId): void
    {
        $this->productId = $productId;
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
        if (isset($this->name)) {
            $json['name']      = $this->name;
        }
        if (isset($this->clicks)) {
            $json['clicks']    = $this->clicks;
        }
        if (isset($this->productId)) {
            $json['productId'] = $this->productId;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
