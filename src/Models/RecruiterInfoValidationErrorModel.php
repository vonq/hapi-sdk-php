<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPI\Models;

use stdClass;

class RecruiterInfoValidationErrorModel implements \JsonSerializable
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
        if (isset($this->id)) {
            $json['id']           = $this->id;
        }
        if (isset($this->name)) {
            $json['name']         = $this->name;
        }
        if (isset($this->emailAddress)) {
            $json['emailAddress'] = $this->emailAddress;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
