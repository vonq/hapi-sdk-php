<?php

declare(strict_types=1);

/*
 * VONQHiringAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VONQHiringAPILib\Models;

use stdClass;

class RecruiterInfoValidationError implements \JsonSerializable
{
    /**
     * @var string[]|null
     */
    private $id;

    /**
     * @var string[]|null
     */
    private $name;

    /**
     * @var string[]|null
     */
    private $emailAddress;

    /**
     * Returns Id.
     *
     * @return string[]|null
     */
    public function getId(): ?array
    {
        return $this->id;
    }

    /**
     * Sets Id.
     *
     * @maps id
     *
     * @param string[]|null $id
     */
    public function setId(?array $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Name.
     *
     * @return string[]|null
     */
    public function getName(): ?array
    {
        return $this->name;
    }

    /**
     * Sets Name.
     *
     * @maps name
     *
     * @param string[]|null $name
     */
    public function setName(?array $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Email Address.
     *
     * @return string[]|null
     */
    public function getEmailAddress(): ?array
    {
        return $this->emailAddress;
    }

    /**
     * Sets Email Address.
     *
     * @maps emailAddress
     *
     * @param string[]|null $emailAddress
     */
    public function setEmailAddress(?array $emailAddress): void
    {
        $this->emailAddress = $emailAddress;
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
        if (isset($this->id)) {
            $json['id']           = $this->id;
        }
        if (isset($this->name)) {
            $json['name']         = $this->name;
        }
        if (isset($this->emailAddress)) {
            $json['emailAddress'] = $this->emailAddress;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}