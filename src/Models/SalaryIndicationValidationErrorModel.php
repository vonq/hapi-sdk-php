<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPILib\Models;

use stdClass;

class SalaryIndicationValidationErrorModel implements \JsonSerializable
{
    /**
     * @var string[]|null
     */
    private $period;

    /**
     * @var SalaryRangeValidationErrorModel|null
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
    public function getRange(): ?SalaryRangeValidationErrorModel
    {
        return $this->range;
    }

    /**
     * Sets Range.
     *
     * @maps range
     */
    public function setRange(?SalaryRangeValidationErrorModel $range): void
    {
        $this->range = $range;
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
        if (isset($this->period)) {
            $json['period'] = $this->period;
        }
        if (isset($this->range)) {
            $json['range']  = $this->range;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
