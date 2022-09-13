<?php

declare(strict_types=1);

/*
 * VONQHiringAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VONQHiringAPILib\Models;

use stdClass;

class WeeklyWorkingHoursValidationError implements \JsonSerializable
{
    /**
     * @var string[]
     */
    private $to;

    /**
     * @var string[]|null
     */
    private $from;

    /**
     * @param string[] $to
     */
    public function __construct(array $to)
    {
        $this->to = $to;
    }

    /**
     * Returns To.
     *
     * @return string[]
     */
    public function getTo(): array
    {
        return $this->to;
    }

    /**
     * Sets To.
     *
     * @required
     * @maps to
     *
     * @param string[] $to
     */
    public function setTo(array $to): void
    {
        $this->to = $to;
    }

    /**
     * Returns From.
     *
     * @return string[]|null
     */
    public function getFrom(): ?array
    {
        return $this->from;
    }

    /**
     * Sets From.
     *
     * @maps from
     *
     * @param string[]|null $from
     */
    public function setFrom(?array $from): void
    {
        $this->from = $from;
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
        $json['to']       = $this->to;
        if (isset($this->from)) {
            $json['from'] = $this->from;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
