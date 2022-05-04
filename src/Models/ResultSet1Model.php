<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPILib\Models;

use stdClass;

class ResultSet1Model implements \JsonSerializable
{
    /**
     * @var float|null
     */
    private $total;

    /**
     * @var float|null
     */
    private $limit;

    /**
     * @var float|null
     */
    private $offset;

    /**
     * @var CampaignModel[]|null
     */
    private $data;

    /**
     * Returns Total.
     * Number of total results
     */
    public function getTotal(): ?float
    {
        return $this->total;
    }

    /**
     * Sets Total.
     * Number of total results
     *
     * @maps total
     */
    public function setTotal(?float $total): void
    {
        $this->total = $total;
    }

    /**
     * Returns Limit.
     * Results page size
     */
    public function getLimit(): ?float
    {
        return $this->limit;
    }

    /**
     * Sets Limit.
     * Results page size
     *
     * @maps limit
     */
    public function setLimit(?float $limit): void
    {
        $this->limit = $limit;
    }

    /**
     * Returns Offset.
     * Initial starting index for the results
     */
    public function getOffset(): ?float
    {
        return $this->offset;
    }

    /**
     * Sets Offset.
     * Initial starting index for the results
     *
     * @maps offset
     */
    public function setOffset(?float $offset): void
    {
        $this->offset = $offset;
    }

    /**
     * Returns Data.
     * A Page of Campaign Objects
     *
     * @return CampaignModel[]|null
     */
    public function getData(): ?array
    {
        return $this->data;
    }

    /**
     * Sets Data.
     * A Page of Campaign Objects
     *
     * @maps data
     *
     * @param CampaignModel[]|null $data
     */
    public function setData(?array $data): void
    {
        $this->data = $data;
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
        if (isset($this->total)) {
            $json['total']  = $this->total;
        }
        if (isset($this->limit)) {
            $json['limit']  = $this->limit;
        }
        if (isset($this->offset)) {
            $json['offset'] = $this->offset;
        }
        if (isset($this->data)) {
            $json['data']   = $this->data;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
