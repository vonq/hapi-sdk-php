<?php

declare(strict_types=1);

/*
 * VONQHiringAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VONQHiringAPILib\Models;

use stdClass;

class PaginatedJobTitleList implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $count;

    /**
     * @var array
     */
    private $next = [];

    /**
     * @var array
     */
    private $previous = [];

    /**
     * @var JobTitle[]|null
     */
    private $results;

    /**
     * Returns Count.
     * Total number of results
     */
    public function getCount(): ?int
    {
        return $this->count;
    }

    /**
     * Sets Count.
     * Total number of results
     *
     * @maps count
     */
    public function setCount(?int $count): void
    {
        $this->count = $count;
    }

    /**
     * Returns Next.
     */
    public function getNext(): ?string
    {
        if (count($this->next) == 0) {
            return null;
        }
        return $this->next['value'];
    }

    /**
     * Sets Next.
     *
     * @maps next
     */
    public function setNext(?string $next): void
    {
        $this->next['value'] = $next;
    }

    /**
     * Unsets Next.
     */
    public function unsetNext(): void
    {
        $this->next = [];
    }

    /**
     * Returns Previous.
     */
    public function getPrevious(): ?string
    {
        if (count($this->previous) == 0) {
            return null;
        }
        return $this->previous['value'];
    }

    /**
     * Sets Previous.
     *
     * @maps previous
     */
    public function setPrevious(?string $previous): void
    {
        $this->previous['value'] = $previous;
    }

    /**
     * Unsets Previous.
     */
    public function unsetPrevious(): void
    {
        $this->previous = [];
    }

    /**
     * Returns Results.
     *
     * @return JobTitle[]|null
     */
    public function getResults(): ?array
    {
        return $this->results;
    }

    /**
     * Sets Results.
     *
     * @maps results
     *
     * @param JobTitle[]|null $results
     */
    public function setResults(?array $results): void
    {
        $this->results = $results;
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
        if (isset($this->count)) {
            $json['count']    = $this->count;
        }
        if (!empty($this->next)) {
            $json['next']     = $this->next['value'];
        }
        if (!empty($this->previous)) {
            $json['previous'] = $this->previous['value'];
        }
        if (isset($this->results)) {
            $json['results']  = $this->results;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}