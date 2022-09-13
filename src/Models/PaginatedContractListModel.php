<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPI\Models;

use stdClass;

class PaginatedContractListModel implements \JsonSerializable
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
     * @var ListContractModel[]|null
     */
    private $results;

    /**
     * Returns Count.
     * Total number of contracts
     */
    public function getCount(): ?int
    {
        return $this->count;
    }

    /**
     * Sets Count.
     * Total number of contracts
     *
     * @maps count
     */
    public function setCount(?int $count): void
    {
        $this->count = $count;
    }

    /**
     * Returns Next.
     * Path to the next page of results, if any
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
     * Path to the next page of results, if any
     *
     * @maps next
     */
    public function setNext(?string $next): void
    {
        $this->next['value'] = $next;
    }

    /**
     * Unsets Next.
     * Path to the next page of results, if any
     */
    public function unsetNext(): void
    {
        $this->next = [];
    }

    /**
     * Returns Previous.
     * Path to the previous page of results, if any
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
     * Path to the previous page of results, if any
     *
     * @maps previous
     */
    public function setPrevious(?string $previous): void
    {
        $this->previous['value'] = $previous;
    }

    /**
     * Unsets Previous.
     * Path to the previous page of results, if any
     */
    public function unsetPrevious(): void
    {
        $this->previous = [];
    }

    /**
     * Returns Results.
     *
     * @return ListContractModel[]|null
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
     * @param ListContractModel[]|null $results
     */
    public function setResults(?array $results): void
    {
        $this->results = $results;
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
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
