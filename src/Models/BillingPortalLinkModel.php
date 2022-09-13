<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPI\Models;

use stdClass;

class BillingPortalLinkModel implements \JsonSerializable
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
        if (isset($this->billingPortalLink)) {
            $json['billingPortalLink'] = $this->billingPortalLink;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
