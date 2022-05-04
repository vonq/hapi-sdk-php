<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPILib\Exceptions;

class TakeCampaignOfflineErrorResponse2Exception extends \HAPILib\Exceptions\ApiException
{
    /**
     * @var string[]
     */
    private $campaignId;

    /**
     * @var string[]
     */
    private $status;

    /**
     * @param string $reason
     * @param \HAPILib\Http\HttpRequest $request
     * @param \HAPILib\Http\HttpResponse $response
     * @param string[] $campaignId
     * @param string[] $status
     */
    public function __construct(
        string $reason,
        \HAPILib\Http\HttpRequest $request,
        \HAPILib\Http\HttpResponse $response,
        array $campaignId,
        array $status
    ) {
        parent::__construct($reason, $request, $response);
        $this->campaignId = $campaignId;
        $this->status = $status;
    }

    /**
     * Returns Campaign Id.
     *
     * @return string[]
     */
    public function getCampaignId(): array
    {
        return $this->campaignId;
    }

    /**
     * Sets Campaign Id.
     *
     * @required
     * @maps campaignId
     *
     * @param string[] $campaignId
     */
    public function setCampaignId(array $campaignId): void
    {
        $this->campaignId = $campaignId;
    }

    /**
     * Returns Status.
     *
     * @return string[]
     */
    public function getStatus(): array
    {
        return $this->status;
    }

    /**
     * Sets Status.
     *
     * @required
     * @maps status
     *
     * @param string[] $status
     */
    public function setStatus(array $status): void
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
}
