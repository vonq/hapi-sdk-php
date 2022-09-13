<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPI\Models;

use stdClass;

class TotalDeliveryTimeModel implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $daysToProcess;

    /**
     * @var int|null
     */
    private $daysToSetup;

    /**
     * @var int|null
     */
    private $totalDays;

    /**
     * Returns Days to Process.
     */
    public function getDaysToProcess(): ?int
    {
        return $this->daysToProcess;
    }

    /**
     * Sets Days to Process.
     *
     * @maps days_to_process
     */
    public function setDaysToProcess(?int $daysToProcess): void
    {
        $this->daysToProcess = $daysToProcess;
    }

    /**
     * Returns Days to Setup.
     */
    public function getDaysToSetup(): ?int
    {
        return $this->daysToSetup;
    }

    /**
     * Sets Days to Setup.
     *
     * @maps days_to_setup
     */
    public function setDaysToSetup(?int $daysToSetup): void
    {
        $this->daysToSetup = $daysToSetup;
    }

    /**
     * Returns Total Days.
     */
    public function getTotalDays(): ?int
    {
        return $this->totalDays;
    }

    /**
     * Sets Total Days.
     *
     * @maps total_days
     */
    public function setTotalDays(?int $totalDays): void
    {
        $this->totalDays = $totalDays;
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
        if (isset($this->daysToProcess)) {
            $json['days_to_process'] = $this->daysToProcess;
        }
        if (isset($this->daysToSetup)) {
            $json['days_to_setup']   = $this->daysToSetup;
        }
        if (isset($this->totalDays)) {
            $json['total_days']      = $this->totalDays;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
