<?php

declare(strict_types=1);

/*
 * VONQHiringAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VONQHiringAPILib\Models;

use stdClass;

class SalaryIndicationValidationError implements \JsonSerializable
{
    /**
     * @var string[]|null
     */
    private $period;

    /**
     * @var SalaryRangeValidationError|null
     */
    private $range;

    /**
     * Returns Period.
     *
     * @return string[]|null
     */
    public function getPeriod(): ?array
    {
        return $this->period;
    }

    /**
     * Sets Period.
     *
     * @maps period
     *
     * @param string[]|null $period
     */
    public function setPeriod(?array $period): void
    {
        $this->period = $period;
    }

    /**
     * Returns Range.
     */
    public function getRange(): ?SalaryRangeValidationError
    {
        return $this->range;
    }

    /**
     * Sets Range.
     *
     * @maps range
     */
    public function setRange(?SalaryRangeValidationError $range): void
    {
        $this->range = $range;
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
        if (isset($this->period)) {
            $json['period'] = $this->period;
        }
        if (isset($this->range)) {
            $json['range']  = $this->range;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
