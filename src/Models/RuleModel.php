<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPILib\Models;

use stdClass;

class RuleModel implements \JsonSerializable
{
    /**
     * @var string
     */
    private $rule;

    /**
     * @var string
     */
    private $data;

    /**
     * @param string $rule
     * @param string $data
     */
    public function __construct(string $rule, string $data)
    {
        $this->rule = $rule;
        $this->data = $data;
    }

    /**
     * Returns Rule.
     * lower/higher: value for this facet should be lower/higher than or equal to the value for referred
     * facet
     *
     * before/after: value for this facet should be before/after than or equal to the value for referred
     * facet. Both facets are dates
     *
     * url: value should be a valid URL
     *
     * be-pc: Belgium postal code
     *
     * belgium/de/dutch-city: Belgium/German/Dutch city
     *
     * nl-pc, np-pc-straat: Dutch postal code, for nl-pc PO-boxes are not valid
     *
     * isodateoptional: date formatted "Y-m-d", "Y-md H:i" or "Y-m-d H:i:s"
     *
     * maxlengthcombined: (only used for type TEXTEXPAND) maximum length for all inputs combined to one
     * string
     *
     * separator: (only used for type TEXTEXPAND) string used to combine
     *
     * maxlevels: maximum depth of a HIER
     *
     * propertyId: only used internally
     *
     * pushvalue: only used internally
     *
     * validator:notEmptyIf: facet depends on vacancyvalue (exposed in API by required-tag in
     * [OptionsFacet](https://vonq.stoplight.io/docs/hapi/branches/2.1/6f1768e932ab5-facet-option) )
     */
    public function getRule(): string
    {
        return $this->rule;
    }

    /**
     * Sets Rule.
     * lower/higher: value for this facet should be lower/higher than or equal to the value for referred
     * facet
     *
     * before/after: value for this facet should be before/after than or equal to the value for referred
     * facet. Both facets are dates
     *
     * url: value should be a valid URL
     *
     * be-pc: Belgium postal code
     *
     * belgium/de/dutch-city: Belgium/German/Dutch city
     *
     * nl-pc, np-pc-straat: Dutch postal code, for nl-pc PO-boxes are not valid
     *
     * isodateoptional: date formatted "Y-m-d", "Y-md H:i" or "Y-m-d H:i:s"
     *
     * maxlengthcombined: (only used for type TEXTEXPAND) maximum length for all inputs combined to one
     * string
     *
     * separator: (only used for type TEXTEXPAND) string used to combine
     *
     * maxlevels: maximum depth of a HIER
     *
     * propertyId: only used internally
     *
     * pushvalue: only used internally
     *
     * validator:notEmptyIf: facet depends on vacancyvalue (exposed in API by required-tag in
     * [OptionsFacet](https://vonq.stoplight.io/docs/hapi/branches/2.1/6f1768e932ab5-facet-option) )
     *
     * @required
     * @maps rule
     * @factory \HAPILib\Models\RuleEnum::checkValue
     */
    public function setRule(string $rule): void
    {
        $this->rule = $rule;
    }

    /**
     * Returns Data.
     * the value used for the rule
     */
    public function getData(): string
    {
        return $this->data;
    }

    /**
     * Sets Data.
     * the value used for the rule
     *
     * @required
     * @maps data
     */
    public function setData(string $data): void
    {
        $this->data = $data;
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
        $json['rule'] = RuleEnum::checkValue($this->rule);
        $json['data'] = $this->data;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
