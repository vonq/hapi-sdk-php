<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPI\Models;

use stdClass;

class MetaModel implements \JsonSerializable
{
    /**
     * @var string
     */
    private $first;

    /**
     * @var string
     */
    private $last;

    /**
     * @var string
     */
    private $next;

    /**
     * @var string
     */
    private $previous;

    /**
     * @param string $first
     * @param string $last
     * @param string $next
     * @param string $previous
     */
    public function __construct(string $first, string $last, string $next, string $previous)
    {
        $this->first = $first;
        $this->last = $last;
        $this->next = $next;
        $this->previous = $previous;
    }

    /**
     * Returns First.
     * /campaigns?limit=20&offset=0
     */
    public function getFirst(): string
    {
        return $this->first;
    }

    /**
     * Sets First.
     * /campaigns?limit=20&offset=0
     *
     * @required
     * @maps first
     */
    public function setFirst(string $first): void
    {
        $this->first = $first;
    }

    /**
     * Returns Last.
     * /campaigns?limit=20&offset=40
     */
    public function getLast(): string
    {
        return $this->last;
    }

    /**
     * Sets Last.
     * /campaigns?limit=20&offset=40
     *
     * @required
     * @maps last
     */
    public function setLast(string $last): void
    {
        $this->last = $last;
    }

    /**
     * Returns Next.
     * /campaigns?limit=20&offset=40
     */
    public function getNext(): string
    {
        return $this->next;
    }

    /**
     * Sets Next.
     * /campaigns?limit=20&offset=40
     *
     * @required
     * @maps next
     */
    public function setNext(string $next): void
    {
        $this->next = $next;
    }

    /**
     * Returns Previous.
     * /campaigns?limit=20&offset=20
     */
    public function getPrevious(): string
    {
        return $this->previous;
    }

    /**
     * Sets Previous.
     * /campaigns?limit=20&offset=20
     *
     * @required
     * @maps previous
     */
    public function setPrevious(string $previous): void
    {
        $this->previous = $previous;
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
        $json['first']    = $this->first;
        $json['last']     = $this->last;
        $json['next']     = $this->next;
        $json['previous'] = $this->previous;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
