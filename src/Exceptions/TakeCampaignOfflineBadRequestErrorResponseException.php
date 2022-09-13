<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPI\Exceptions;

class TakeCampaignOfflineBadRequestErrorResponseException extends \HAPI\Exceptions\ApiException
{
    /**
     * @var string[]|null
     */
    private $campaignId;

    /**
     * @var string[]|null
     */
    private $status;

    /**
     * @var string[]|null
     */
    private $campaignIdInUrl;

    /**
     * Returns Campaign Id.
     * Validation error on the `campaignId` field.
     *
     * @return string[]|null
     */
    public function getCampaignId(): ?array
    {
        return $this->campaignId;
    }

    /**
     * Sets Campaign Id.
     * Validation error on the `campaignId` field.
     *
     * @maps campaignId
     *
     * @param string[]|null $campaignId
     */
    public function setCampaignId(?array $campaignId): void
    {
        $this->campaignId = $campaignId;
    }

    /**
     * Returns Status.
     * Validation error on the `status` field.
     *
     * @return string[]|null
     */
    public function getStatus(): ?array
    {
        return $this->status;
    }

    /**
     * Sets Status.
     * Validation error on the `status` field.
     *
     * @maps status
     *
     * @param string[]|null $status
     */
    public function setStatus(?array $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Campaign Id in Url.
     * Error for the path parameter `campaignId`
     *
     * @return string[]|null
     */
    public function getCampaignIdInUrl(): ?array
    {
        return $this->campaignIdInUrl;
    }

    /**
     * Sets Campaign Id in Url.
     * Error for the path parameter `campaignId`
     *
     * @maps campaignIdInUrl
     *
     * @param string[]|null $campaignIdInUrl
     */
    public function setCampaignIdInUrl(?array $campaignIdInUrl): void
    {
        $this->campaignIdInUrl = $campaignIdInUrl;
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
}
