<?php

declare(strict_types=1);

/*
 * VONQHiringAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VONQHiringAPILib\Models;

use stdClass;

/**
 * Vacancy validation object payload.
 *
 * The `campaign` property will contain all vacancy data used to send in the campaign ordering.
 */
class CampaignValidationRequest implements \JsonSerializable
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

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
