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
 * List of rules used to decide if this facet should be displayed or not.
 *
 * The facet is displayed when the display rules object is null or if there is a match with at least
 * one of the show rules.
 * Else the facet is not displayed and should not be shown to the user nor facet data be sent to the
 * endpoint.
 */
class FacetDisplayRulesModel implements \JsonSerializable
{
    /**
     * @var FacetDisplayRuleModel[]
     */
    private $show;

    /**
     * @param FacetDisplayRuleModel[] $show
     */
    public function __construct(array $show)
    {
        $this->show = $show;
    }

    /**
     * Returns Show.
     *
     * @return FacetDisplayRuleModel[]
     */
    public function getShow(): array
    {
        return $this->show;
    }

    /**
     * Sets Show.
     *
     * @required
     * @maps show
     *
     * @param FacetDisplayRuleModel[] $show
     */
    public function setShow(array $show): void
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
        $json['show'] = $this->show;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
