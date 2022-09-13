<?php

declare(strict_types=1);

/*
 * VONQHiringAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VONQHiringAPILib\Models;

use stdClass;

class DurationInHours implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $range;

    /**
     * @var int|null
     */
    private $period;

    /**
     * Returns Range.
     * The range of the time to process
     */
    public function getRange(): ?string
    {
        return $this->range;
    }

    /**
     * Sets Range.
     * The range of the time to process
     *
     * @maps range
     * @factory \VONQHiringAPILib\Models\Range1Enum::checkValue
     */
    public function setRange(?string $range): void
    {
        $this->range = $range;
    }

    /**
     * Returns Period.
     * The period of the time to process
     */
    public function getPeriod(): ?int
    {
        return $this->period;
    }

    /**
     * Sets Period.
     * The period of the time to process
     *
     * @maps period
     */
    public function setPeriod(?int $period): void
    {
        $this->period = $period;
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
        if (isset($this->range)) {
            $json['range']  = Range1Enum::checkValue($this->range);
        }
        if (isset($this->period)) {
            $json['period'] = $this->period;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}