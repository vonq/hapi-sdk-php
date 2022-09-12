<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPILib\Models;

use stdClass;

class WorkingLocationValidationErrorModel implements \JsonSerializable
{
    /**
     * @var string[]|null
     */
    private $addressLine1;

    /**
     * @var string[]|null
     */
    private $addressLine2;

    /**
     * @var string[]|null
     */
    private $postcode;

    /**
     * @var string[]|null
     */
    private $city;

    /**
     * @var string[]|null
     */
    private $country;

    /**
     * @var string[]|null
     */
    private $allowsRemoteWork;

    /**
     * Returns Address Line 1.
     *
     * @return string[]|null
     */
    public function getAddressLine1(): ?array
    {
        return $this->addressLine1;
    }

    /**
     * Sets Address Line 1.
     *
     * @maps addressLine1
     *
     * @param string[]|null $addressLine1
     */
    public function setAddressLine1(?array $addressLine1): void
    {
        $this->addressLine1 = $addressLine1;
    }

    /**
     * Returns Address Line 2.
     *
     * @return string[]|null
     */
    public function getAddressLine2(): ?array
    {
        return $this->addressLine2;
    }

    /**
     * Sets Address Line 2.
     *
     * @maps addressLine2
     *
     * @param string[]|null $addressLine2
     */
    public function setAddressLine2(?array $addressLine2): void
    {
        $this->addressLine2 = $addressLine2;
    }

    /**
     * Returns Postcode.
     *
     * @return string[]|null
     */
    public function getPostcode(): ?array
    {
        return $this->postcode;
    }

    /**
     * Sets Postcode.
     *
     * @maps postcode
     *
     * @param string[]|null $postcode
     */
    public function setPostcode(?array $postcode): void
    {
        $this->postcode = $postcode;
    }

    /**
     * Returns City.
     *
     * @return string[]|null
     */
    public function getCity(): ?array
    {
        return $this->city;
    }

    /**
     * Sets City.
     *
     * @maps city
     *
     * @param string[]|null $city
     */
    public function setCity(?array $city): void
    {
        $this->city = $city;
    }

    /**
     * Returns Country.
     *
     * @return string[]|null
     */
    public function getCountry(): ?array
    {
        return $this->country;
    }

    /**
     * Sets Country.
     *
     * @maps country
     *
     * @param string[]|null $country
     */
    public function setCountry(?array $country): void
    {
        $this->country = $country;
    }

    /**
     * Returns Allows Remote Work.
     *
     * @return string[]|null
     */
    public function getAllowsRemoteWork(): ?array
    {
        return $this->allowsRemoteWork;
    }

    /**
     * Sets Allows Remote Work.
     *
     * @maps allowsRemoteWork
     *
     * @param string[]|null $allowsRemoteWork
     */
    public function setAllowsRemoteWork(?array $allowsRemoteWork): void
    {
        $this->allowsRemoteWork = $allowsRemoteWork;
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
        if (isset($this->addressLine1)) {
            $json['addressLine1']     = $this->addressLine1;
        }
        if (isset($this->addressLine2)) {
            $json['addressLine2']     = $this->addressLine2;
        }
        if (isset($this->postcode)) {
            $json['postcode']         = $this->postcode;
        }
        if (isset($this->city)) {
            $json['city']             = $this->city;
        }
        if (isset($this->country)) {
            $json['country']          = $this->country;
        }
        if (isset($this->allowsRemoteWork)) {
            $json['allowsRemoteWork'] = $this->allowsRemoteWork;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
