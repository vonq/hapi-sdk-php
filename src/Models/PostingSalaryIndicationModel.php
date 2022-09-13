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
 * Most job boards require a salary indication to be provided. This is a required field to be able to
 * offer a standardized check out experience for all 5000+ channels we offer, and to enable fast
 * campaign delivery.
 */
class PostingSalaryIndicationModel implements \JsonSerializable
{
    /**
     * @var string
     */
    private $period;

    /**
     * @var SalaryRangeModel
     */
    private $range;

    /**
     * @param string $period
     * @param SalaryRangeModel $range
     */
    public function __construct(string $period, SalaryRangeModel $range)
    {
        $this->period = $period;
        $this->range = $range;
    }

    /**
     * Returns Period.
     */
    public function getPeriod(): string
    {
        return $this->period;
    }

    /**
     * Sets Period.
     *
     * @required
     * @maps period
     * @factory \HAPI\Models\PeriodEnum::checkValue
     */
    public function setPeriod(string $period): void
    {
        $this->period = $period;
    }

    /**
     * Returns Range.
     */
    public function getRange(): SalaryRangeModel
    {
        return $this->range;
    }

    /**
     * Sets Range.
     *
     * @required
     * @maps range
     */
    public function setRange(SalaryRangeModel $range): void
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
        $json['period'] = PeriodEnum::checkValue($this->period);
        $json['range']  = $this->range;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
