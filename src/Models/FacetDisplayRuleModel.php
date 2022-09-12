<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPILib\Models;

use HAPILib\ApiHelper;
use stdClass;

class FacetDisplayRuleModel implements \JsonSerializable
{
    /**
     * @var string
     */
    private $facet;

    /**
     * @var string|null|float|int|bool|array
     */
    private $value;

    /**
     * @var string
     */
    private $op;

    /**
     * @param string $facet
     * @param string $op
     */
    public function __construct(string $facet, string $op)
    {
        $this->facet = $facet;
        $this->op = $op;
    }

    /**
     * Returns Facet.
     * Facet from which to use the value
     */
    public function getFacet(): string
    {
        return $this->facet;
    }

    /**
     * Sets Facet.
     * Facet from which to use the value
     *
     * @required
     * @maps facet
     */
    public function setFacet(string $facet): void
    {
        $this->facet = $facet;
    }

    /**
     * Returns Value.
     * Value to use in the operation
     *
     * @return string|null|float|int|bool|array
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets Value.
     * Value to use in the operation
     *
     * @maps value
     * @mapsBy anyOf(string,float,int,bool,array,null)
     *
     * @param string|null|float|int|bool|array $value
     */
    public function setValue($value): void
    {
        $this->value = $value;
    }

    /**
     * Returns Op.
     * Operation type made between the value and the facet value
     */
    public function getOp(): string
    {
        return $this->op;
    }

    /**
     * Sets Op.
     * Operation type made between the value and the facet value
     *
     * @required
     * @maps op
     * @factory \HAPILib\Models\OpEnum::checkValue
     */
    public function setOp(string $op): void
    {
        $this->op = $op;
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
        $json['facet']     = $this->facet;
        if (isset($this->value)) {
            $json['value'] = ApiHelper::verifyTypes($this->value, 'anyOf(string,float,int,bool,array,null)');
        }
        $json['op']        = OpEnum::checkValue($this->op);
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
