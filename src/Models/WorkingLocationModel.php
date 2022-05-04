<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPILib\Models;

use stdClass;

class WorkingLocationModel implements \JsonSerializable
{
    /**
     * @var string[]
     */
    private $addressLine1;

    /**
     * @var string[]
     */
    private $postcode;

    /**
     * @var string[]
     */
    private $city;

    /**
     * @var string[]
     */
    private $country;

    /**
     * @param string[] $addressLine1
     * @param string[] $postcode
     * @param string[] $city
     * @param string[] $country
     */
    public function __construct(array $addressLine1, array $postcode, array $city, array $country)
    {
        $this->addressLine1 = $addressLine1;
        $this->postcode = $postcode;
        $this->city = $city;
        $this->country = $country;
    }

    /**
     * Returns Address Line 1.
     *
     * @return string[]
     */
    public function getAddressLine1(): array
    {
        return $this->addressLine1;
    }

    /**
     * Sets Address Line 1.
     *
     * @required
     * @maps addressLine1
     *
     * @param string[] $addressLine1
     */
    public function setAddressLine1(array $addressLine1): void
    {
        $this->addressLine1 = $addressLine1;
    }

    /**
     * Returns Postcode.
     *
     * @return string[]
     */
    public function getPostcode(): array
    {
        return $this->postcode;
    }

    /**
     * Sets Postcode.
     *
     * @required
     * @maps postcode
     *
     * @param string[] $postcode
     */
    public function setPostcode(array $postcode): void
    {
        $this->postcode = $postcode;
    }

    /**
     * Returns City.
     *
     * @return string[]
     */
    public function getCity(): array
    {
        return $this->city;
    }

    /**
     * Sets City.
     *
     * @required
     * @maps city
     *
     * @param string[] $city
     */
    public function setCity(array $city): void
    {
        $this->city = $city;
    }

    /**
     * Returns Country.
     *
     * @return string[]
     */
    public function getCountry(): array
    {
        return $this->country;
    }

    /**
     * Sets Country.
     *
     * @required
     * @maps country
     *
     * @param string[] $country
     */
    public function setCountry(array $country): void
    {
        $this->country = $country;
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
        $json['addressLine1'] = $this->addressLine1;
        $json['postcode']     = $this->postcode;
        $json['city']         = $this->city;
        $json['country']      = $this->country;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
