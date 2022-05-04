<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPILib\Models;

use stdClass;

class ListChannelsResponseModel implements \JsonSerializable
{
    /**
     * @var int
     */
    private $count;

    /**
     * @var string|null
     */
    private $next;

    /**
     * @var string|null
     */
    private $previous;

    /**
     * @var ChannelLiteModel[]
     */
    private $results;

    /**
     * @param int $count
     * @param ChannelLiteModel[] $results
     */
    public function __construct(int $count, array $results)
    {
        $this->count = $count;
        $this->results = $results;
    }

    /**
     * Returns Count.
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * Sets Count.
     *
     * @required
     * @maps count
     */
    public function setCount(int $count): void
    {
        $this->count = $count;
    }

    /**
     * Returns Next.
     */
    public function getNext(): ?string
    {
        return $this->next;
    }

    /**
     * Sets Next.
     *
     * @maps next
     */
    public function setNext(?string $next): void
    {
        $this->next = $next;
    }

    /**
     * Returns Previous.
     */
    public function getPrevious(): ?string
    {
        return $this->previous;
    }

    /**
     * Sets Previous.
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
     * @return ChannelLiteModel[]
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
     * @param ChannelLiteModel[] $results
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
        $json['next']     = $this->next;
        $json['previous'] = $this->previous;
        $json['results']  = $this->results;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
