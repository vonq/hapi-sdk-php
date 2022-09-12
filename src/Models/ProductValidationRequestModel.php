<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPILib\Models;

use stdClass;

class ProductValidationRequestModel implements \JsonSerializable
{
    /**
     * @var string
     */
    private $productId;

    /**
     * @var string
     */
    private $contractId;

    /**
     * @var InputRequestModel[]|null
     */
    private $vacancy;

    /**
     * @var InputRequestModel[]
     */
    private $postingRequirements;

    /**
     * @param string $productId
     * @param string $contractId
     * @param InputRequestModel[] $postingRequirements
     */
    public function __construct(string $productId, string $contractId, array $postingRequirements)
    {
        $this->productId = $productId;
        $this->contractId = $contractId;
        $this->postingRequirements = $postingRequirements;
    }

    /**
     * Returns Product Id.
     */
    public function getProductId(): string
    {
        return $this->productId;
    }

    /**
     * Sets Product Id.
     *
     * @required
     * @maps product_id
     */
    public function setProductId(string $productId): void
    {
        $this->productId = $productId;
    }

    /**
     * Returns Contract Id.
     */
    public function getContractId(): string
    {
        return $this->contractId;
    }

    /**
     * Sets Contract Id.
     *
     * @required
     * @maps contract_id
     */
    public function setContractId(string $contractId): void
    {
        $this->contractId = $contractId;
    }

    /**
     * Returns Vacancy.
     *
     * @return InputRequestModel[]|null
     */
    public function getVacancy(): ?array
    {
        return $this->vacancy;
    }

    /**
     * Sets Vacancy.
     *
     * @maps vacancy
     *
     * @param InputRequestModel[]|null $vacancy
     */
    public function setVacancy(?array $vacancy): void
    {
        $this->vacancy = $vacancy;
    }

    /**
     * Returns Posting Requirements.
     *
     * @return InputRequestModel[]
     */
    public function getPostingRequirements(): array
    {
        return $this->postingRequirements;
    }

    /**
     * Sets Posting Requirements.
     *
     * @required
     * @maps posting_requirements
     *
     * @param InputRequestModel[] $postingRequirements
     */
    public function setPostingRequirements(array $postingRequirements): void
    {
        $this->postingRequirements = $postingRequirements;
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
        $json['product_id']           = $this->productId;
        $json['contract_id']          = $this->contractId;
        if (isset($this->vacancy)) {
            $json['vacancy']          = $this->vacancy;
        }
        $json['posting_requirements'] = $this->postingRequirements;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
