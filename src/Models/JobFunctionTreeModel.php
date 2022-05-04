<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPILib\Models;

use stdClass;

class JobFunctionTreeModel implements \JsonSerializable
{
    /**
     * @var float
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var JobFunctionTreeModel[]
     */
    private $children;

    /**
     * @param float $id
     * @param string $name
     * @param JobFunctionTreeModel[] $children
     */
    public function __construct(float $id, string $name, array $children)
    {
        $this->id = $id;
        $this->name = $name;
        $this->children = $children;
    }

    /**
     * Returns Id.
     */
    public function getId(): float
    {
        return $this->id;
    }

    /**
     * Sets Id.
     *
     * @required
     * @maps id
     */
    public function setId(float $id): void
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
     * Returns Children.
     *
     * @return JobFunctionTreeModel[]
     */
    public function getChildren(): array
    {
        return $this->children;
    }

    /**
     * Sets Children.
     *
     * @required
     * @maps children
     *
     * @param JobFunctionTreeModel[] $children
     */
    public function setChildren(array $children): void
    {
        $this->children = $children;
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
        $json['id']       = $this->id;
        $json['name']     = $this->name;
        $json['children'] = $this->children;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
