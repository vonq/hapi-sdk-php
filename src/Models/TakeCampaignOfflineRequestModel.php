<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPI\Models;

use stdClass;

class TakeCampaignOfflineRequestModel implements \JsonSerializable
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
     * @param string $campaignId
     */
    public function __construct(string $campaignId)
    {
        $this->campaignId = $campaignId;
    }

    /**
     * Returns Campaign Id.
     * Id of the Campaign you want to take offline
     */
    public function getCampaignId(): string
    {
        return $this->campaignId;
    }

    /**
     * Sets Campaign Id.
     * Id of the Campaign you want to take offline
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
     * The new status you want the campaign to have.
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     * The new status you want the campaign to have.
     *
     * @maps status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
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
        $json['status']     = $this->status;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
