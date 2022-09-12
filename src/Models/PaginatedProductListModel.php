<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPILib\Models;

use stdClass;

class PaginatedProductListModel implements \JsonSerializable
{
    /**
     * @var int
     */
    private $count;

    /**
     * @var array[]
     */
    private $facets;

    /**
     * @var string|null
     */
    private $next;

    /**
     * @var string|null
     */
    private $previous;

    /**
     * @var ProductModel[]
     */
    private $results;

    /**
     * @param int $count
     * @param array[] $facets
     * @param ProductModel[] $results
     */
    public function __construct(int $count, array $facets, array $results)
    {
        $this->count = $count;
        $this->facets = $facets;
        $this->results = $results;
    }

    /**
     * Returns Count.
     * Total number of products.
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * Sets Count.
     * Total number of products.
     *
     * @required
     * @maps count
     */
    public function setCount(int $count): void
    {
        $this->count = $count;
    }

    /**
     * Returns Facets.
     *
     * @return array[]
     */
    public function getFacets(): array
    {
        return $this->facets;
    }

    /**
     * Sets Facets.
     *
     * @required
     * @maps facets
     *
     * @param array[] $facets
     */
    public function setFacets(array $facets): void
    {
        $this->facets = $facets;
    }

    /**
     * Returns Next.
     * Path to the next page of results, if any.
     */
    public function getNext(): ?string
    {
        return $this->next;
    }

    /**
     * Sets Next.
     * Path to the next page of results, if any.
     *
     * @maps next
     */
    public function setNext(?string $next): void
    {
        $this->next = $next;
    }

    /**
     * Returns Previous.
     * Path to the previous page of results, if any.
     */
    public function getPrevious(): ?string
    {
        return $this->previous;
    }

    /**
     * Sets Previous.
     * Path to the previous page of results, if any.
     *
     * @maps previous
     */
    public function setPrevious(?string $previous): void
    {
        $this->previous = $previous;
    }

    /**
     * Returns Results.
     *
     * @return ProductModel[]
     */
    public function getResults(): array
    {
        return $this->results;
    }

    /**
     * Sets Results.
     *
     * @required
     * @maps results
     *
     * @param ProductModel[] $results
     */
    public function setResults(array $results): void
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
        $json['count']    = $this->count;
        $json['facets']   = $this->facets;
        $json['next']     = $this->next;
        $json['previous'] = $this->previous;
        $json['results']  = $this->results;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
