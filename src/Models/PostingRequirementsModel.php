<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPILib\Models;

use stdClass;

class PostingRequirementsModel implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $someText;

    /**
     * @var string[]|null
     */
    private $multipleSelectField;

    /**
     * @var float|null
     */
    private $someIntValue;

    /**
     * Returns Some Text.
     */
    public function getSomeText(): ?string
    {
        return $this->someText;
    }

    /**
     * Sets Some Text.
     *
     * @maps someText
     */
    public function setSomeText(?string $someText): void
    {
        $this->someText = $someText;
    }

    /**
     * Returns Multiple Select Field.
     *
     * @return string[]|null
     */
    public function getMultipleSelectField(): ?array
    {
        return $this->multipleSelectField;
    }

    /**
     * Sets Multiple Select Field.
     *
     * @maps multipleSelectField
     *
     * @param string[]|null $multipleSelectField
     */
    public function setMultipleSelectField(?array $multipleSelectField): void
    {
        $this->multipleSelectField = $multipleSelectField;
    }

    /**
     * Returns Some Int Value.
     */
    public function getSomeIntValue(): ?float
    {
        return $this->someIntValue;
    }

    /**
     * Sets Some Int Value.
     *
     * @maps someIntValue
     */
    public function setSomeIntValue(?float $someIntValue): void
    {
        $this->someIntValue = $someIntValue;
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
        if (isset($this->someText)) {
            $json['someText']            = $this->someText;
        }
        if (isset($this->multipleSelectField)) {
            $json['multipleSelectField'] = $this->multipleSelectField;
        }
        if (isset($this->someIntValue)) {
            $json['someIntValue']        = $this->someIntValue;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
