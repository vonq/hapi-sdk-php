<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPILib\Exceptions;

class OrderCampaignErrorResponseException extends \HAPILib\Exceptions\ApiException
{
    /**
     * @var string[]|null
     */
    private $companyId;

    /**
     * @var \HAPILib\Models\PostingDetailsValidationErrorModel|null
     */
    private $postingDetails;

    /**
     * @var \HAPILib\Models\TargetGroupValidationErrorModel|null
     */
    private $targetGroup;

    /**
     * @var \HAPILib\Models\RecruiterInfoValidationErrorModel|null
     */
    private $recruiterInfo;

    /**
     * @var string[]|null
     */
    private $orderedProducts;

    /**
     * @var \HAPILib\Models\OrderedProductsSpecValidationErrorModel[]|null
     */
    private $orderedProductsSpecs;

    /**
     * @var string[]|null
     */
    private $orderReference;

    /**
     * @var string[]|null
     */
    private $campaignName;

    /**
     * @var string[]|null
     */
    private $walletId;

    /**
     * @var string[]|null
     */
    private $currency;

    /**
     * Returns Company Id.
     *
     * @return string[]|null
     */
    public function getCompanyId(): ?array
    {
        return $this->companyId;
    }

    /**
     * Sets Company Id.
     *
     * @maps companyId
     *
     * @param string[]|null $companyId
     */
    public function setCompanyId(?array $companyId): void
    {
        $this->companyId = $companyId;
    }

    /**
     * Returns Posting Details.
     */
    public function getPostingDetails(): ?\HAPILib\Models\PostingDetailsValidationErrorModel
    {
        return $this->postingDetails;
    }

    /**
     * Sets Posting Details.
     *
     * @maps postingDetails
     */
    public function setPostingDetails(?\HAPILib\Models\PostingDetailsValidationErrorModel $postingDetails): void
    {
        $this->postingDetails = $postingDetails;
    }

    /**
     * Returns Target Group.
     */
    public function getTargetGroup(): ?\HAPILib\Models\TargetGroupValidationErrorModel
    {
        return $this->targetGroup;
    }

    /**
     * Sets Target Group.
     *
     * @maps targetGroup
     */
    public function setTargetGroup(?\HAPILib\Models\TargetGroupValidationErrorModel $targetGroup): void
    {
        $this->targetGroup = $targetGroup;
    }

    /**
     * Returns Recruiter Info.
     */
    public function getRecruiterInfo(): ?\HAPILib\Models\RecruiterInfoValidationErrorModel
    {
        return $this->recruiterInfo;
    }

    /**
     * Sets Recruiter Info.
     *
     * @maps recruiterInfo
     */
    public function setRecruiterInfo(?\HAPILib\Models\RecruiterInfoValidationErrorModel $recruiterInfo): void
    {
        $this->recruiterInfo = $recruiterInfo;
    }

    /**
     * Returns Ordered Products.
     *
     * @return string[]|null
     */
    public function getOrderedProducts(): ?array
    {
        return $this->orderedProducts;
    }

    /**
     * Sets Ordered Products.
     *
     * @maps orderedProducts
     *
     * @param string[]|null $orderedProducts
     */
    public function setOrderedProducts(?array $orderedProducts): void
    {
        $this->orderedProducts = $orderedProducts;
    }

    /**
     * Returns Ordered Products Specs.
     *
     * @return \HAPILib\Models\OrderedProductsSpecValidationErrorModel[]|null
     */
    public function getOrderedProductsSpecs(): ?array
    {
        return $this->orderedProductsSpecs;
    }

    /**
     * Sets Ordered Products Specs.
     *
     * @maps orderedProductsSpecs
     *
     * @param \HAPILib\Models\OrderedProductsSpecValidationErrorModel[]|null $orderedProductsSpecs
     */
    public function setOrderedProductsSpecs(?array $orderedProductsSpecs): void
    {
        $this->orderedProductsSpecs = $orderedProductsSpecs;
    }

    /**
     * Returns Order Reference.
     *
     * @return string[]|null
     */
    public function getOrderReference(): ?array
    {
        return $this->orderReference;
    }

    /**
     * Sets Order Reference.
     *
     * @maps orderReference
     *
     * @param string[]|null $orderReference
     */
    public function setOrderReference(?array $orderReference): void
    {
        $this->orderReference = $orderReference;
    }

    /**
     * Returns Campaign Name.
     *
     * @return string[]|null
     */
    public function getCampaignName(): ?array
    {
        return $this->campaignName;
    }

    /**
     * Sets Campaign Name.
     *
     * @maps campaignName
     *
     * @param string[]|null $campaignName
     */
    public function setCampaignName(?array $campaignName): void
    {
        $this->campaignName = $campaignName;
    }

    /**
     * Returns Wallet Id.
     *
     * @return string[]|null
     */
    public function getWalletId(): ?array
    {
        return $this->walletId;
    }

    /**
     * Sets Wallet Id.
     *
     * @maps walletId
     *
     * @param string[]|null $walletId
     */
    public function setWalletId(?array $walletId): void
    {
        $this->walletId = $walletId;
    }

    /**
     * Returns Currency.
     *
     * @return string[]|null
     */
    public function getCurrency(): ?array
    {
        return $this->currency;
    }

    /**
     * Sets Currency.
     *
     * @maps currency
     *
     * @param string[]|null $currency
     */
    public function setCurrency(?array $currency): void
    {
        $this->currency = $currency;
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
