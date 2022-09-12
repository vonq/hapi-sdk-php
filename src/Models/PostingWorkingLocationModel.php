<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPILib\Models;

use stdClass;

class PostingWorkingLocationModel implements \JsonSerializable
{
    /**
     * @var string
     */
    private $addressLine1;

    /**
     * @var string|null
     */
    private $addressLine2;

    /**
     * @var string
     */
    private $postcode;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $country;

    /**
     * @var array
     */
    private $allowsRemoteWork = [];

    /**
     * @param string $addressLine1
     * @param string $postcode
     * @param string $city
     * @param string $country
     */
    public function __construct(string $addressLine1, string $postcode, string $city, string $country)
    {
        $this->addressLine1 = $addressLine1;
        $this->postcode = $postcode;
        $this->city = $city;
        $this->country = $country;
    }

    /**
     * Returns Address Line 1.
     */
    public function getAddressLine1(): string
    {
        return $this->addressLine1;
    }

    /**
     * Sets Address Line 1.
     *
     * @required
     * @maps addressLine1
     */
    public function setAddressLine1(string $addressLine1): void
    {
        $this->addressLine1 = $addressLine1;
    }

    /**
     * Returns Address Line 2.
     */
    public function getAddressLine2(): ?string
    {
        return $this->addressLine2;
    }

    /**
     * Sets Address Line 2.
     *
     * @maps addressLine2
     */
    public function setAddressLine2(?string $addressLine2): void
    {
        $this->addressLine2 = $addressLine2;
    }

    /**
     * Returns Postcode.
     */
    public function getPostcode(): string
    {
        return $this->postcode;
    }

    /**
     * Sets Postcode.
     *
     * @required
     * @maps postcode
     */
    public function setPostcode(string $postcode): void
    {
        $this->postcode = $postcode;
    }

    /**
     * Returns City.
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * Sets City.
     *
     * @required
     * @maps city
     */
    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    /**
     * Returns Country.
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * Sets Country.
     *
     * @required
     * @maps country
     */
    public function setCountry(string $country): void
    {
        $this->country = $country;
    }

    /**
     * Returns Allows Remote Work.
     * Optional parameter allowing remote work, possible values are 0 and 1, defaults to 0
     */
    public function getAllowsRemoteWork(): ?int
    {
        if (count($this->allowsRemoteWork) == 0) {
            return null;
        }
        return $this->allowsRemoteWork['value'];
    }

    /**
     * Sets Allows Remote Work.
     * Optional parameter allowing remote work, possible values are 0 and 1, defaults to 0
     *
     * @maps allowsRemoteWork
     */
    public function setAllowsRemoteWork(?int $allowsRemoteWork): void
    {
        $this->allowsRemoteWork['value'] = $allowsRemoteWork;
    }

    /**
     * Unsets Allows Remote Work.
     * Optional parameter allowing remote work, possible values are 0 and 1, defaults to 0
     */
    public function unsetAllowsRemoteWork(): void
    {
        $this->allowsRemoteWork = [];
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
        $json['addressLine1']         = $this->addressLine1;
        if (isset($this->addressLine2)) {
            $json['addressLine2']     = $this->addressLine2;
        }
        $json['postcode']             = $this->postcode;
        $json['city']                 = $this->city;
        $json['country']              = $this->country;
        if (!empty($this->allowsRemoteWork)) {
            $json['allowsRemoteWork'] = $this->allowsRemoteWork['value'];
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
