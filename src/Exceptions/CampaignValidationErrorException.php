<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPI\Exceptions;

class CampaignValidationErrorException extends \HAPI\Exceptions\ApiException
{
    /**
     * @var array|null
     */
    private $errors;

    /**
     * @var bool|null
     */
    private $hasErrors;

    /**
     * Returns Errors.
     */
    public function getErrors(): ?array
    {
        return $this->errors;
    }

    /**
     * Sets Errors.
     *
     * @maps errors
     */
    public function setErrors(?array $errors): void
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
}
