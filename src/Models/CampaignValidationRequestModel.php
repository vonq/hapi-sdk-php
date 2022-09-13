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
 * Vacancy validation object payload.
 *
 * The `campaign` property will contain all vacancy data used to send in the campaign ordering.
 */
class CampaignValidationRequestModel implements \JsonSerializable
{
    /**
     * @var array
     */
    private $campaign;

    /**
     * @param array $campaign
     */
    public function __construct(array $campaign)
    {
        $this->campaign = $campaign;
    }

    /**
     * Returns Campaign.
     */
    public function getCampaign(): array
    {
        return $this->campaign;
    }

    /**
     * Sets Campaign.
     *
     * @required
     * @maps campaign
     */
    public function setCampaign(array $campaign): void
    {
        $this->campaign = $campaign;
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
        $json['campaign'] = $this->campaign;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
