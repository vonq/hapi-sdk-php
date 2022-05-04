<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPILib\Models;

use stdClass;

class ChannelLiteModel implements \JsonSerializable
{
    /**
     * @var bool
     */
    private $mcEnabled;

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $type;

    /**
     * @param bool $mcEnabled
     * @param int $id
     * @param string $name
     * @param string $url
     * @param string $type
     */
    public function __construct(bool $mcEnabled, int $id, string $name, string $url, string $type)
    {
        $this->mcEnabled = $mcEnabled;
        $this->id = $id;
        $this->name = $name;
        $this->url = $url;
        $this->type = $type;
    }

    /**
     * Returns Mc Enabled.
     */
    public function getMcEnabled(): bool
    {
        return $this->mcEnabled;
    }

    /**
     * Sets Mc Enabled.
     *
     * @required
     * @maps mc_enabled
     */
    public function setMcEnabled(bool $mcEnabled): void
    {
        $this->mcEnabled = $mcEnabled;
    }

    /**
     * Returns Id.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Sets Id.
     *
     * @required
     * @maps id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Name.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     *
     * @required
     * @maps name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
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
     * Returns Type.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     *
     * @required
     * @maps type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
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
        $json['mc_enabled'] = $this->mcEnabled;
        $json['id']         = $this->id;
        $json['name']       = $this->name;
        $json['url']        = $this->url;
        $json['type']       = $this->type;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
