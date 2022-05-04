<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPILib\Models;

use stdClass;

class SalaryIndicationModel implements \JsonSerializable
{
    /**
     * @var string[]
     */
    private $period;

    /**
     * @var Range4Model
     */
    private $range;

    /**
     * @param string[] $period
     * @param Range4Model $range
     */
    public function __construct(array $period, Range4Model $range)
    {
        $this->period = $period;
        $this->range = $range;
    }

    /**
     * Returns Period.
     *
     * @return string[]
     */
    public function getPeriod(): array
    {
        return $this->period;
    }

    /**
     * Sets Period.
     *
     * @required
     * @maps period
     *
     * @param string[] $period
     */
    public function setPeriod(array $period): void
    {
        $this->period = $period;
    }

    /**
     * Returns Range.
     */
    public function getRange(): Range4Model
    {
        return $this->range;
    }

    /**
     * Sets Range.
     *
     * @required
     * @maps range
     */
    public function setRange(Range4Model $range): void
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
        $json['period'] = $this->period;
        $json['range']  = $this->range;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
