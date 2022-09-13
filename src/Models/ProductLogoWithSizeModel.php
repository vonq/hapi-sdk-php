<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPI\Models;

use stdClass;

/**
 * Logo Object used by the channels or products. Most Products and Channels will have a logo associated.
 * These can be displayed by the partner as square or rectangular.
 */
class ProductLogoWithSizeModel implements \JsonSerializable
{
    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $size;

    /**
     * @param string $url
     * @param string $size
     */
    public function __construct(string $url, string $size)
    {
        $this->url = $url;
        $this->size = $size;
    }

    /**
     * Returns Url.
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * Sets Url.
     *
     * @required
     * @maps url
     */
    public function setUrl(string $url): void
    {
        $this->url = $url;
    }

    /**
     * Returns Size.
     * Size format: WIDTHxHEIGHT
     */
    public function getSize(): string
    {
        return $this->size;
    }

    /**
     * Sets Size.
     * Size format: WIDTHxHEIGHT
     *
     * @required
     * @maps size
     */
    public function setSize(string $size): void
    {
        $this->size = $size;
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
        $json['url']  = $this->url;
        $json['size'] = $this->size;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
