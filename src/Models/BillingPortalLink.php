<?php

declare(strict_types=1);

/*
 * VONQHiringAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VONQHiringAPILib\Models;

use stdClass;

class BillingPortalLink implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $billingPortalLink;

    /**
     * Returns Billing Portal Link.
     * It expires five minutes after being fetched. If a customer uses it within that time period, then the
     * link expires within one hour of the most recent activity. Each billing portal link can last up to
     * two hours before expiring.
     */
    public function getBillingPortalLink(): ?string
    {
        return $this->billingPortalLink;
    }

    /**
     * Sets Billing Portal Link.
     * It expires five minutes after being fetched. If a customer uses it within that time period, then the
     * link expires within one hour of the most recent activity. Each billing portal link can last up to
     * two hours before expiring.
     *
     * @maps billingPortalLink
     */
    public function setBillingPortalLink(?string $billingPortalLink): void
    {
        $this->billingPortalLink = $billingPortalLink;
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
        if (isset($this->billingPortalLink)) {
            $json['billingPortalLink'] = $this->billingPortalLink;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
