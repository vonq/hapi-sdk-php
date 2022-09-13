<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPI\Exceptions;

class WalletValidationErrorException extends \HAPI\Exceptions\ApiException
{
    /**
     * @var string[]|null
     */
    private $customerName;

    /**
     * Returns Customer Name.
     *
     * @return string[]|null
     */
    public function getCustomerName(): ?array
    {
        return $this->customerName;
    }

    /**
     * Sets Customer Name.
     *
     * @maps customerName
     *
     * @param string[]|null $customerName
     */
    public function setCustomerName(?array $customerName): void
    {
        $this->customerName = $customerName;
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
