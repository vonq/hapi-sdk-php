<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPI\Models;

use stdClass;

class OrganizationValidationErrorModel implements \JsonSerializable
{
    /**
     * @var string[]|null
     */
    private $name;

    /**
     * @var string[]|null
     */
    private $companyLogo;

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
     * Returns Company Logo.
     *
     * @return string[]|null
     */
    public function getCompanyLogo(): ?array
    {
        return $this->companyLogo;
    }

    /**
     * Sets Company Logo.
     *
     * @maps companyLogo
     *
     * @param string[]|null $companyLogo
     */
    public function setCompanyLogo(?array $companyLogo): void
    {
        $this->companyLogo = $companyLogo;
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
        if (isset($this->name)) {
            $json['name']        = $this->name;
        }
        if (isset($this->companyLogo)) {
            $json['companyLogo'] = $this->companyLogo;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
