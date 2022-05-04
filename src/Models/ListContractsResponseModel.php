<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPILib\Models;

use stdClass;

class ListContractsResponseModel implements \JsonSerializable
{
    /**
     * @var float|null
     */
    private $count;

    /**
     * @var string|null
     */
    private $previous;

    /**
     * @var string|null
     */
    private $next;

    /**
     * @var ContractModel[]|null
     */
    private $results;

    /**
     * Returns Count.
     * count of elements in results
     */
    public function getCount(): ?float
    {
        return $this->count;
    }

    /**
     * Sets Count.
     * count of elements in results
     *
     * @maps count
     */
    public function setCount(?float $count): void
    {
        $this->count = $count;
    }

    /**
     * Returns Previous.
     * link to get previous results
     */
    public function getPrevious(): ?string
    {
        return $this->previous;
    }

    /**
     * Sets Previous.
     * link to get previous results
     *
     * @maps previous
     */
    public function setPrevious(?string $previous): void
    {
        $this->previous = $previous;
    }

    /**
     * Returns Next.
     * link to get next results
     */
    public function getNext(): ?string
    {
        return $this->next;
    }

    /**
     * Sets Next.
     * link to get next results
     *
     * @maps next
     */
    public function setNext(?string $next): void
    {
        $this->next = $next;
    }

    /**
     * Returns Results.
     *
     * @return ContractModel[]|null
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
     * @param ContractModel[]|null $results
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
        if (isset($this->previous)) {
            $json['previous'] = $this->previous;
        }
        if (isset($this->next)) {
            $json['next']     = $this->next;
        }
        if (isset($this->results)) {
            $json['results']  = $this->results;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
