<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPI\Exceptions;

class GenericErrorException extends \HAPI\Exceptions\ApiException
{
    /**
     * @var string|null
     */
    private $error;

    /**
     * Returns Error.
     */
    public function getError(): ?string
    {
        return $this->error;
    }

    /**
     * Sets Error.
     *
     * @maps error
     */
    public function setError(?string $error): void
    {
        $this->error = $error;
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
