<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPILib\Models;

use stdClass;

class OrderedProductsGetElementModel implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $productId;

    /**
     * @var string|null
     */
    private $status;

    /**
     * @var string|null
     */
    private $statusDescription;

    /**
     * @var string|null
     */
    private $deliveredOn;

    /**
     * @var string|null
     */
    private $duration;

    /**
     * @var DurationModel|null
     */
    private $durationPeriod;

    /**
     * @var string|null
     */
    private $utm;

    /**
     * @var string|null
     */
    private $jobBoardLink;

    /**
     * @var string|null
     */
    private $contractId;

    /**
     * @var PostingRequirementsModel|null
     */
    private $postingRequirements;

    /**
     * Returns Product Id.
     * Product Identification
     */
    public function getProductId(): ?string
    {
        return $this->productId;
    }

    /**
     * Sets Product Id.
     * Product Identification
     *
     * @maps productId
     */
    public function setProductId(?string $productId): void
    {
        $this->productId = $productId;
    }

    /**
     * Returns Status.
     * Status per product
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     * Status per product
     *
     * @maps status
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Status Description.
     * Status description, additional status information
     */
    public function getStatusDescription(): ?string
    {
        return $this->statusDescription;
    }

    /**
     * Sets Status Description.
     * Status description, additional status information
     *
     * @maps statusDescription
     */
    public function setStatusDescription(?string $statusDescription): void
    {
        $this->statusDescription = $statusDescription;
    }

    /**
     * Returns Delivered On.
     * Date when the channel went online
     */
    public function getDeliveredOn(): ?string
    {
        return $this->deliveredOn;
    }

    /**
     * Sets Delivered On.
     * Date when the channel went online
     *
     * @maps deliveredOn
     */
    public function setDeliveredOn(?string $deliveredOn): void
    {
        $this->deliveredOn = $deliveredOn;
    }

    /**
     * Returns Duration.
     * How long will the `Product` be online. [DEPRECATED] please instead use the `durationPeriod`
     */
    public function getDuration(): ?string
    {
        return $this->duration;
    }

    /**
     * Sets Duration.
     * How long will the `Product` be online. [DEPRECATED] please instead use the `durationPeriod`
     *
     * @maps duration
     */
    public function setDuration(?string $duration): void
    {
        $this->duration = $duration;
    }

    /**
     * Returns Duration Period.
     */
    public function getDurationPeriod(): ?DurationModel
    {
        return $this->durationPeriod;
    }

    /**
     * Sets Duration Period.
     *
     * @maps durationPeriod
     */
    public function setDurationPeriod(?DurationModel $durationPeriod): void
    {
        $this->durationPeriod = $durationPeriod;
    }

    /**
     * Returns Utm.
     * Tracking codes
     */
    public function getUtm(): ?string
    {
        return $this->utm;
    }

    /**
     * Sets Utm.
     * Tracking codes
     *
     * @maps utm
     */
    public function setUtm(?string $utm): void
    {
        $this->utm = $utm;
    }

    /**
     * Returns Job Board Link.
     * Link to the job ad on the channel. Sometimes this link is not available from a job board, then the
     * product homepage is returned.
     */
    public function getJobBoardLink(): ?string
    {
        return $this->jobBoardLink;
    }

    /**
     * Sets Job Board Link.
     * Link to the job ad on the channel. Sometimes this link is not available from a job board, then the
     * product homepage is returned.
     *
     * @maps jobBoardLink
     */
    public function setJobBoardLink(?string $jobBoardLink): void
    {
        $this->jobBoardLink = $jobBoardLink;
    }

    /**
     * Returns Contract Id.
     * Contract Identifier for My Contracts product
     */
    public function getContractId(): ?string
    {
        return $this->contractId;
    }

    /**
     * Sets Contract Id.
     * Contract Identifier for My Contracts product
     *
     * @maps contractId
     */
    public function setContractId(?string $contractId): void
    {
        $this->contractId = $contractId;
    }

    /**
     * Returns Posting Requirements.
     */
    public function getPostingRequirements(): ?PostingRequirementsModel
    {
        return $this->postingRequirements;
    }

    /**
     * Sets Posting Requirements.
     *
     * @maps postingRequirements
     */
    public function setPostingRequirements(?PostingRequirementsModel $postingRequirements): void
    {
        $this->postingRequirements = $postingRequirements;
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
        if (isset($this->productId)) {
            $json['productId']           = $this->productId;
        }
        if (isset($this->status)) {
            $json['status']              = $this->status;
        }
        if (isset($this->statusDescription)) {
            $json['statusDescription']   = $this->statusDescription;
        }
        if (isset($this->deliveredOn)) {
            $json['deliveredOn']         = $this->deliveredOn;
        }
        if (isset($this->duration)) {
            $json['duration']            = $this->duration;
        }
        if (isset($this->durationPeriod)) {
            $json['durationPeriod']      = $this->durationPeriod;
        }
        if (isset($this->utm)) {
            $json['utm']                 = $this->utm;
        }
        if (isset($this->jobBoardLink)) {
            $json['jobBoardLink']        = $this->jobBoardLink;
        }
        if (isset($this->contractId)) {
            $json['contractId']          = $this->contractId;
        }
        if (isset($this->postingRequirements)) {
            $json['postingRequirements'] = $this->postingRequirements;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
