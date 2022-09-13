<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPI\Models;

use stdClass;

class ContractCredentialModel implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $name;

    /**
     * @var string|null
     */
    private $label;

    /**
     * @var string|null
     */
    private $sort;

    /**
     * @var string|null
     */
    private $description;

    /**
     * @var string
     */
    private $url;

    /**
     * @param string $url
     */
    public function __construct(string $url)
    {
        $this->url = $url;
    }

    /**
     * Returns Name.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     *
     * @maps name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Label.
     */
    public function getLabel(): ?string
    {
        return $this->label;
    }

    /**
     * Sets Label.
     *
     * @maps label
     */
    public function setLabel(?string $label): void
    {
        $this->label = $label;
    }

    /**
     * Returns Sort.
     */
    public function getSort(): ?string
    {
        return $this->sort;
    }

    /**
     * Sets Sort.
     *
     * @maps sort
     */
    public function setSort(?string $sort): void
    {
        $this->sort = $sort;
    }

    /**
     * Returns Description.
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Sets Description.
     *
     * @maps description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
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
        $json['name']        = $this->name;
        $json['label']       = $this->label;
        $json['sort']        = $this->sort;
        $json['description'] = $this->description;
        $json['url']         = $this->url;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
