<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPILib\Models;

use stdClass;

class PostingDetailsOrganizationModel implements \JsonSerializable
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $companyLogo;

    /**
     * @param string $name
     * @param string $companyLogo
     */
    public function __construct(string $name, string $companyLogo)
    {
        $this->name = $name;
        $this->companyLogo = $companyLogo;
    }

    /**
     * Returns Name.
     * Name of the Company
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * Name of the Company
     *
     * @required
     * @maps name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Company Logo.
     * The company Logo that wants to be used on the posting. It has to be publicly available so it's
     * picked up
     * and used for the different publishing platforms
     */
    public function getCompanyLogo(): string
    {
        return $this->companyLogo;
    }

    /**
     * Sets Company Logo.
     * The company Logo that wants to be used on the posting. It has to be publicly available so it's
     * picked up
     * and used for the different publishing platforms
     *
     * @required
     * @maps companyLogo
     */
    public function setCompanyLogo(string $companyLogo): void
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
        $json['name']        = $this->name;
        $json['companyLogo'] = $this->companyLogo;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
