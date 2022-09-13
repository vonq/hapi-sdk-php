<?php

declare(strict_types=1);

/*
 * VONQHiringAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VONQHiringAPILib\Models;

use stdClass;

class ProductValidation implements \JsonSerializable
{
    /**
     * @var ProductValidationErrors|null
     */
    private $errors;

    /**
     * @var bool|null
     */
    private $hasErrors;

    /**
     * Returns Errors.
     */
    public function getErrors(): ?ProductValidationErrors
    {
        return $this->errors;
    }

    /**
     * Sets Errors.
     *
     * @maps errors
     */
    public function setErrors(?ProductValidationErrors $errors): void
    {
        $this->errors = $errors;
    }

    /**
     * Returns Has Errors.
     */
    public function getHasErrors(): ?bool
    {
        return $this->hasErrors;
    }

    /**
     * Sets Has Errors.
     *
     * @maps has_errors
     */
    public function setHasErrors(?bool $hasErrors): void
    {
        $this->hasErrors = $hasErrors;
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
        if (isset($this->errors)) {
            $json['errors']     = $this->errors;
        }
        if (isset($this->hasErrors)) {
            $json['has_errors'] = $this->hasErrors;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}