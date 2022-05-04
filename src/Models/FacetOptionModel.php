<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPILib\Models;

use stdClass;

class FacetOptionModel implements \JsonSerializable
{
    /**
     * @var string
     */
    private $mDefault;

    /**
     * @var string
     */
    private $key;

    /**
     * @var string
     */
    private $label;

    /**
     * @var string
     */
    private $sort;

    /**
     * @var FacetOptionShowFacetsModel[]|null
     */
    private $show;

    /**
     * @param string $mDefault
     * @param string $key
     * @param string $label
     * @param string $sort
     */
    public function __construct(string $mDefault, string $key, string $label, string $sort)
    {
        $this->mDefault = $mDefault;
        $this->key = $key;
        $this->label = $label;
        $this->sort = $sort;
    }

    /**
     * Returns M Default.
     * Whether the option should be the default choice when rendering the SELECT.
     */
    public function getMDefault(): string
    {
        return $this->mDefault;
    }

    /**
     * Sets M Default.
     * Whether the option should be the default choice when rendering the SELECT.
     *
     * @required
     * @maps default
     */
    public function setMDefault(string $mDefault): void
    {
        $this->mDefault = $mDefault;
    }

    /**
     * Returns Key.
     * The value to be used when setting the value of the facet when this option is selected.
     */
    public function getKey(): string
    {
        return $this->key;
    }

    /**
     * Sets Key.
     * The value to be used when setting the value of the facet when this option is selected.
     *
     * @required
     * @maps key
     */
    public function setKey(string $key): void
    {
        $this->key = $key;
    }

    /**
     * Returns Label.
     * The option's user-friendly label
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * Sets Label.
     * The option's user-friendly label
     *
     * @required
     * @maps label
     */
    public function setLabel(string $label): void
    {
        $this->label = $label;
    }

    /**
     * Returns Sort.
     * The order of the option in the list of options. lower value means higher rank.
     */
    public function getSort(): string
    {
        return $this->sort;
    }

    /**
     * Sets Sort.
     * The order of the option in the list of options. lower value means higher rank.
     *
     * @required
     * @maps sort
     */
    public function setSort(string $sort): void
    {
        $this->sort = $sort;
    }

    /**
     * Returns Show.
     * References to Facets that becomes required when this option is selected
     *
     * @return FacetOptionShowFacetsModel[]|null
     */
    public function getShow(): ?array
    {
        return $this->show;
    }

    /**
     * Sets Show.
     * References to Facets that becomes required when this option is selected
     *
     * @maps show
     *
     * @param FacetOptionShowFacetsModel[]|null $show
     */
    public function setShow(?array $show): void
    {
        $this->show = $show;
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
        $json['default']  = $this->mDefault;
        $json['key']      = $this->key;
        $json['label']    = $this->label;
        $json['sort']     = $this->sort;
        if (isset($this->show)) {
            $json['show'] = $this->show;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
