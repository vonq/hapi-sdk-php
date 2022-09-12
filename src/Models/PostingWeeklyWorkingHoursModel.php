<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPILib\Models;

use stdClass;

class PostingWeeklyWorkingHoursModel implements \JsonSerializable
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
     * @param int $to
     */
    public function __construct(int $to)
    {
        $this->to = $to;
    }

    /**
     * Returns From.
     * Minimum amount of Working Hours
     */
    public function getFrom(): ?int
    {
        return $this->from;
    }

    /**
     * Sets From.
     * Minimum amount of Working Hours
     *
     * @maps from
     */
    public function setFrom(?int $from): void
    {
        $this->from = $from;
    }

    /**
     * Returns To.
     * Maximum amount of Working Hours
     */
    public function getTo(): int
    {
        return $this->to;
    }

    /**
     * Sets To.
     * Maximum amount of Working Hours
     *
     * @required
     * @maps to
     */
    public function setTo(int $to): void
    {
        $this->to = $to;
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
            $json['from'] = $this->from;
        }
        $json['to']       = $this->to;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
