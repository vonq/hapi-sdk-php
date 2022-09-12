<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPILib\Models;

use stdClass;

class SalaryRangeModel implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $from;

    /**
     * @var int
     */
    private $to;

    /**
     * @var string|null
     */
    private $currency;

    /**
     * @param int $to
     */
    public function __construct(int $to)
    {
        $this->to = $to;
    }

    /**
     * Returns From.
     * Minimum salary indication of the indicated period, if given, cannot be greater
     *
     * than 'to', but equal to 'to' is allowed. This integer value should be specified in units (not cents).
     */
    public function getFrom(): ?int
    {
        return $this->from;
    }

    /**
     * Sets From.
     * Minimum salary indication of the indicated period, if given, cannot be greater
     *
     * than 'to', but equal to 'to' is allowed. This integer value should be specified in units (not cents).
     *
     * @maps from
     */
    public function setFrom(?int $from): void
    {
        $this->from = $from;
    }

    /**
     * Returns To.
     * Maximum salary indication of the indicated period. This integer value should be specified in units
     * (not cents).
     */
    public function getTo(): int
    {
        return $this->to;
    }

    /**
     * Sets To.
     * Maximum salary indication of the indicated period. This integer value should be specified in units
     * (not cents).
     *
     * @required
     * @maps to
     */
    public function setTo(int $to): void
    {
        $this->to = $to;
    }

    /**
     * Returns Currency.
     * The currency in which the range amount is expressed. Must be a valid ISO-4217 value.
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * Sets Currency.
     * The currency in which the range amount is expressed. Must be a valid ISO-4217 value.
     *
     * @maps currency
     */
    public function setCurrency(?string $currency): void
    {
        $this->currency = $currency;
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
        if (isset($this->from)) {
            $json['from']     = $this->from;
        }
        $json['to']           = $this->to;
        if (isset($this->currency)) {
            $json['currency'] = $this->currency;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
