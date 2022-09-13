<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPI\Models;

use stdClass;

/**
 * Vacancy info validation object payload.
 *
 * The `vacancy` property will contain all vacancy data used to send in the campaign ordering except
 * for `orderedProducts` and `orderedProductsSpecs` props.
 */
class VacancyValidationRequestModel implements \JsonSerializable
{
    /**
     * @var array
     */
    private $vacancy;

    /**
     * @param array $vacancy
     */
    public function __construct(array $vacancy)
    {
        $this->vacancy = $vacancy;
    }

    /**
     * Returns Vacancy.
     */
    public function getVacancy(): array
    {
        return $this->vacancy;
    }

    /**
     * Sets Vacancy.
     *
     * @required
     * @maps vacancy
     */
    public function setVacancy(array $vacancy): void
    {
        $this->vacancy = $vacancy;
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
        $json['vacancy'] = $this->vacancy;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
