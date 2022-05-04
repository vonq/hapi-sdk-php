<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPILib\Models;

use stdClass;

class OrderCampaignSuccessResponseModel implements \JsonSerializable
{
    /**
     * @var string
     */
    private $campaignId;

    /**
     * @param string $campaignId
     */
    public function __construct(string $campaignId)
    {
        $this->campaignId = $campaignId;
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
        $json['campaignId'] = $this->campaignId;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
