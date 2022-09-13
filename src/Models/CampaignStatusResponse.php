<?php

declare(strict_types=1);

/*
 * VONQHiringAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VONQHiringAPILib\Models;

use stdClass;

class CampaignStatusResponse implements \JsonSerializable
{
    /**
     * @var CampaignStatus|null
     */
    private $data;

    /**
     * Returns Data.
     */
    public function getData(): ?CampaignStatus
    {
        return $this->data;
    }

    /**
     * Sets Data.
     *
     * @maps data
     */
    public function setData(?CampaignStatus $data): void
    {
        $this->data = $data;
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
        if (isset($this->data)) {
            $json['data'] = $this->data;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}