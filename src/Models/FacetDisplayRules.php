<?php

declare(strict_types=1);

/*
 * VONQHiringAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VONQHiringAPILib\Models;

use stdClass;

/**
 * List of rules used to decide if this facet should be displayed or not.
 *
 * The facet is displayed when the display rules object is null or if there is a match with at least
 * one of the show rules.
 * Else the facet is not displayed and should not be shown to the user nor facet data be sent to the
 * endpoint.
 */
class FacetDisplayRules implements \JsonSerializable
{
    /**
     * @var FacetDisplayRule[]
     */
    private $show;

    /**
     * @param FacetDisplayRule[] $show
     */
    public function __construct(array $show)
    {
        $this->show = $show;
    }

    /**
     * Returns Show.
     *
     * @return FacetDisplayRule[]
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
     * @param FacetDisplayRule[] $show
     */
    public function setShow(array $show): void
    {
        $this->show = $show;
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

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
