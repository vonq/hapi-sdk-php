<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPILib\Models;

use stdClass;

class CampaignStatusModel implements \JsonSerializable
{
    /**
     * @var string
     */
    private $campaignId;

    /**
     * @var string
     */
    private $status;

    /**
     * @var OrderedProductsStatusItemModel[]|null
     */
    private $orderedProductsStatuses;

    /**
     * @param string $campaignId
     * @param string $status
     */
    public function __construct(string $campaignId, string $status)
    {
        $this->campaignId = $campaignId;
        $this->status = $status;
    }

    /**
     * Returns Campaign Id.
     */
    public function getCampaignId(): string
    {
        return $this->campaignId;
    }

    /**
     * Sets Campaign Id.
     *
     * @required
     * @maps campaignId
     */
    public function setCampaignId(string $campaignId): void
    {
        $this->campaignId = $campaignId;
    }

    /**
     * Returns Status.
     * Status of the campaign. One of the following
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     * Status of the campaign. One of the following
     *
     * @required
     * @maps status
     * @factory \HAPILib\Models\StatusEnum::checkValue
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Ordered Products Statuses.
     *
     * @return OrderedProductsStatusItemModel[]|null
     */
    public function getOrderedProductsStatuses(): ?array
    {
        return $this->orderedProductsStatuses;
    }

    /**
     * Sets Ordered Products Statuses.
     *
     * @maps orderedProductsStatuses
     *
     * @param OrderedProductsStatusItemModel[]|null $orderedProductsStatuses
     */
    public function setOrderedProductsStatuses(?array $orderedProductsStatuses): void
    {
        $this->orderedProductsStatuses = $orderedProductsStatuses;
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
        $json['campaignId']                  = $this->campaignId;
        $json['status']                      = StatusEnum::checkValue($this->status);
        if (isset($this->orderedProductsStatuses)) {
            $json['orderedProductsStatuses'] = $this->orderedProductsStatuses;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
