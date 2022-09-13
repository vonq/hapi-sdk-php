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
 * A paginated list of campaigns.
 */
class PaginatedCampaignListModel implements \JsonSerializable
{
    /**
     * @var int
     */
    private $total;

    /**
     * @var int
     */
    private $limit;

    /**
     * @var int
     */
    private $offset;

    /**
     * @var MetaModel
     */
    private $meta;

    /**
     * @var CampaignModel[]
     */
    private $data;

    /**
     * @param int $total
     * @param int $limit
     * @param int $offset
     * @param MetaModel $meta
     * @param CampaignModel[] $data
     */
    public function __construct(int $total, int $limit, int $offset, MetaModel $meta, array $data)
    {
        $this->total = $total;
        $this->limit = $limit;
        $this->offset = $offset;
        $this->meta = $meta;
        $this->data = $data;
    }

    /**
     * Returns Total.
     * Total number of results.
     */
    public function getTotal(): int
    {
        return $this->total;
    }

    /**
     * Sets Total.
     * Total number of results.
     *
     * @required
     * @maps total
     */
    public function setTotal(int $total): void
    {
        $this->total = $total;
    }

    /**
     * Returns Limit.
     * Limit the number of results retrieved.
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * Sets Limit.
     * Limit the number of results retrieved.
     *
     * @required
     * @maps limit
     */
    public function setLimit(int $limit): void
    {
        $this->limit = $limit;
    }

    /**
     * Returns Offset.
     * Return results starting from this `offset`
     */
    public function getOffset(): int
    {
        return $this->offset;
    }

    /**
     * Sets Offset.
     * Return results starting from this `offset`
     *
     * @required
     * @maps offset
     */
    public function setOffset(int $offset): void
    {
        $this->offset = $offset;
    }

    /**
     * Returns Meta.
     */
    public function getMeta(): MetaModel
    {
        return $this->meta;
    }

    /**
     * Sets Meta.
     *
     * @required
     * @maps meta
     */
    public function setMeta(MetaModel $meta): void
    {
        $this->meta = $meta;
    }

    /**
     * Returns Data.
     *
     * @return CampaignModel[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * Sets Data.
     *
     * @required
     * @maps data
     *
     * @param CampaignModel[] $data
     */
    public function setData(array $data): void
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
        $json['total']  = $this->total;
        $json['limit']  = $this->limit;
        $json['offset'] = $this->offset;
        $json['meta']   = $this->meta;
        $json['data']   = $this->data;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
