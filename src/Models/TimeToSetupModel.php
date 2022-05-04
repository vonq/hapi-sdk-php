<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPILib\Models;

use stdClass;

class TimeToSetupModel implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $range;

    /**
     * @var float|null
     */
    private $period;

    /**
     * Returns Range.
     * The range of the time to setup required by the supplier
     */
    public function getRange(): ?string
    {
        return $this->range;
    }

    /**
     * Sets Range.
     * The range of the time to setup required by the supplier
     *
     * @maps range
     * @factory \HAPILib\Models\Range2Enum::checkValue
     */
    public function setRange(?string $range): void
    {
        $this->range = $range;
    }

    /**
     * Returns Period.
     * The period of the time to setup required by the supplier
     */
    public function getPeriod(): ?float
    {
        return $this->period;
    }

    /**
     * Sets Period.
     * The period of the time to setup required by the supplier
     *
     * @maps period
     */
    public function setPeriod(?float $period): void
    {
        $this->period = $period;
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
        if (isset($this->range)) {
            $json['range']  = Range2Enum::checkValue($this->range);
        }
        if (isset($this->period)) {
            $json['period'] = $this->period;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
