<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPI\Models;

use stdClass;

/**
 * Recruiter is the user creating the campaign and you may want to use this to provide filtering by
 * recruiter for groups sharing an account.
 */
class RecruiterInfoModel implements \JsonSerializable
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $emailAddress;

    /**
     * @param string $id
     * @param string $name
     * @param string $emailAddress
     */
    public function __construct(string $id, string $name, string $emailAddress)
    {
        $this->id = $id;
        $this->name = $name;
        $this->emailAddress = $emailAddress;
    }

    /**
     * Returns Id.
     * A vendor-related unique identification for the Recruiter
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * A vendor-related unique identification for the Recruiter
     *
     * @required
     * @maps id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
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
     * Returns Email Address.
     */
    public function getEmailAddress(): string
    {
        return $this->emailAddress;
    }

    /**
     * Sets Email Address.
     *
     * @required
     * @maps emailAddress
     */
    public function setEmailAddress(string $emailAddress): void
    {
        $this->emailAddress = $emailAddress;
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
        $json['id']           = $this->id;
        $json['name']         = $this->name;
        $json['emailAddress'] = $this->emailAddress;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
