<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPILib\Exceptions;

class TakeCampaignOfflineNotFoundErrorResponseException extends \HAPILib\Exceptions\ApiException
{
    /**
     * @var string
     */
    private $campaignId;

    /**
     * @param string $reason
     * @param \HAPILib\Http\HttpRequest $request
     * @param \HAPILib\Http\HttpResponse $response
     * @param string $campaignId
     */
    public function __construct(
        string $reason,
        \HAPILib\Http\HttpRequest $request,
        \HAPILib\Http\HttpResponse $response,
        string $campaignId
    ) {
        parent::__construct($reason, $request, $response);
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
}
