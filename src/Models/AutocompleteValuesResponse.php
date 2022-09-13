<?php

declare(strict_types=1);

/*
 * VONQHiringAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VONQHiringAPILib\Models;

use stdClass;

class AutocompleteValuesResponse implements \JsonSerializable
{
    /**
     * @var string
     */
    private $key;

    /**
     * @var string
     */
    private $label;

    /**
     * @param string $key
     * @param string $label
     */
    public function __construct(string $key, string $label)
    {
        $this->key = $key;
        $this->label = $label;
    }

    /**
     * Returns Key.
     */
    public function getKey(): string
    {
        return $this->key;
    }

    /**
     * Sets Key.
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
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * Sets Label.
     *
     * @required
     * @maps label
     */
    public function setLabel(string $label): void
    {
        $this->label = $label;
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
        $json['key']   = $this->key;
        $json['label'] = $this->label;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}