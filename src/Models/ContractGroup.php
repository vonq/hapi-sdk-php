<?php

declare(strict_types=1);

/*
 * VONQHiringAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VONQHiringAPILib\Models;

use stdClass;

/**
 * Model containing the contract group details
 */
class ContractGroup implements \JsonSerializable
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $id;

    /**
     * @var int
     */
    private $idx;

    /**
     * @var string
     */
    private $igbCustomerId;

    /**
     * @param string $name
     * @param string $id
     * @param int $idx
     * @param string $igbCustomerId
     */
    public function __construct(string $name, string $id, int $idx, string $igbCustomerId)
    {
        $this->name = $name;
        $this->id = $id;
        $this->idx = $idx;
        $this->igbCustomerId = $igbCustomerId;
    }

    /**
     * Returns Name.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     *
     * @required
     * @maps name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Id.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     *
     * @required
     * @maps id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Idx.
     */
    public function getIdx(): int
    {
        return $this->idx;
    }

    /**
     * Sets Idx.
     *
     * @required
     * @maps idx
     */
    public function setIdx(int $idx): void
    {
        $this->idx = $idx;
    }

    /**
     * Returns Igb Customer Id.
     */
    public function getIgbCustomerId(): string
    {
        return $this->igbCustomerId;
    }

    /**
     * Sets Igb Customer Id.
     *
     * @required
     * @maps igb_customer_id
     */
    public function setIgbCustomerId(string $igbCustomerId): void
    {
        $this->igbCustomerId = $igbCustomerId;
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
        $json['name']            = $this->name;
        $json['id']              = $this->id;
        $json['idx']             = $this->idx;
        $json['igb_customer_id'] = $this->igbCustomerId;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}