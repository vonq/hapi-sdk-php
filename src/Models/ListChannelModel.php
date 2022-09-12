<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPILib\Models;

use stdClass;

class ListChannelModel implements \JsonSerializable
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var bool|null
     */
    private $mcEnabled;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $url;

    /**
     * @var ProductLogoModel[]|null
     */
    private $logoUrl;

    /**
     * @var ProductLogoWithSizeModel[]|null
     */
    private $logoSquareUrl;

    /**
     * @var ProductLogoWithSizeModel[]|null
     */
    private $logoRectangleUrl;

    /**
     * @param int $id
     * @param string $name
     * @param string $type
     * @param string $url
     */
    public function __construct(int $id, string $name, string $type, string $url)
    {
        $this->id = $id;
        $this->name = $name;
        $this->type = $type;
        $this->url = $url;
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
     * Returns Mc Enabled.
     */
    public function getMcEnabled(): ?bool
    {
        return $this->mcEnabled;
    }

    /**
     * Sets Mc Enabled.
     *
     * @maps mc_enabled
     */
    public function setMcEnabled(?bool $mcEnabled): void
    {
        $this->mcEnabled = $mcEnabled;
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
     * Returns Logo Url.
     *
     * @return ProductLogoModel[]|null
     */
    public function getLogoUrl(): ?array
    {
        return $this->logoUrl;
    }

    /**
     * Sets Logo Url.
     *
     * @maps logo_url
     *
     * @param ProductLogoModel[]|null $logoUrl
     */
    public function setLogoUrl(?array $logoUrl): void
    {
        $this->logoUrl = $logoUrl;
    }

    /**
     * Returns Logo Square Url.
     *
     * @return ProductLogoWithSizeModel[]|null
     */
    public function getLogoSquareUrl(): ?array
    {
        return $this->logoSquareUrl;
    }

    /**
     * Sets Logo Square Url.
     *
     * @maps logo_square_url
     *
     * @param ProductLogoWithSizeModel[]|null $logoSquareUrl
     */
    public function setLogoSquareUrl(?array $logoSquareUrl): void
    {
        $this->logoSquareUrl = $logoSquareUrl;
    }

    /**
     * Returns Logo Rectangle Url.
     *
     * @return ProductLogoWithSizeModel[]|null
     */
    public function getLogoRectangleUrl(): ?array
    {
        return $this->logoRectangleUrl;
    }

    /**
     * Sets Logo Rectangle Url.
     *
     * @maps logo_rectangle_url
     *
     * @param ProductLogoWithSizeModel[]|null $logoRectangleUrl
     */
    public function setLogoRectangleUrl(?array $logoRectangleUrl): void
    {
        $this->logoRectangleUrl = $logoRectangleUrl;
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
        $json['id']                     = $this->id;
        if (isset($this->mcEnabled)) {
            $json['mc_enabled']         = $this->mcEnabled;
        }
        $json['name']                   = $this->name;
        $json['type']                   = $this->type;
        $json['url']                    = $this->url;
        if (isset($this->logoUrl)) {
            $json['logo_url']           = $this->logoUrl;
        }
        if (isset($this->logoSquareUrl)) {
            $json['logo_square_url']    = $this->logoSquareUrl;
        }
        if (isset($this->logoRectangleUrl)) {
            $json['logo_rectangle_url'] = $this->logoRectangleUrl;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
