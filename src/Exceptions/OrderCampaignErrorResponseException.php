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
     * @var string[]
     */
    private $companyId;

    /**
     * @var \HAPILib\Models\PostingDetailsErrorsModel
     */
    private $postingDetails;

    /**
     * @var string[]
     */
    private $targetGroup;

    /**
     * @var \HAPILib\Models\RecruiterInfoErrorsModel
     */
    private $recruiterInfo;

    /**
     * @var string[]
     */
    private $orderedProducts;

    /**
     * @var \HAPILib\Models\OrderedProductsSpecModel[]
     */
    private $orderedProductsSpecs;

    /**
     * @param string $reason
     * @param \HAPILib\Http\HttpRequest $request
     * @param \HAPILib\Http\HttpResponse $response
     * @param string[] $companyId
     * @param \HAPILib\Models\PostingDetailsErrorsModel $postingDetails
     * @param string[] $targetGroup
     * @param \HAPILib\Models\RecruiterInfoErrorsModel $recruiterInfo
     * @param string[] $orderedProducts
     * @param \HAPILib\Models\OrderedProductsSpecModel[] $orderedProductsSpecs
     */
    public function __construct(
        string $reason,
        \HAPILib\Http\HttpRequest $request,
        \HAPILib\Http\HttpResponse $response,
        array $companyId,
        \HAPILib\Models\PostingDetailsErrorsModel $postingDetails,
        array $targetGroup,
        \HAPILib\Models\RecruiterInfoErrorsModel $recruiterInfo,
        array $orderedProducts,
        array $orderedProductsSpecs
    ) {
        parent::__construct($reason, $request, $response);
        $this->companyId = $companyId;
        $this->postingDetails = $postingDetails;
        $this->targetGroup = $targetGroup;
        $this->recruiterInfo = $recruiterInfo;
        $this->orderedProducts = $orderedProducts;
        $this->orderedProductsSpecs = $orderedProductsSpecs;
    }

    /**
     * Returns Company Id.
     *
     * @return string[]
     */
    public function getCompanyId(): array
    {
        return $this->companyId;
    }

    /**
     * Sets Company Id.
     *
     * @required
     * @maps companyId
     *
     * @param string[] $companyId
     */
    public function setCompanyId(array $companyId): void
    {
        $this->companyId = $companyId;
    }

    /**
     * Returns Posting Details.
     */
    public function getPostingDetails(): \HAPILib\Models\PostingDetailsErrorsModel
    {
        return $this->postingDetails;
    }

    /**
     * Sets Posting Details.
     *
     * @required
     * @maps postingDetails
     */
    public function setPostingDetails(\HAPILib\Models\PostingDetailsErrorsModel $postingDetails): void
    {
        $this->postingDetails = $postingDetails;
    }

    /**
     * Returns Target Group.
     *
     * @return string[]
     */
    public function getTargetGroup(): array
    {
        return $this->targetGroup;
    }

    /**
     * Sets Target Group.
     *
     * @required
     * @maps targetGroup
     *
     * @param string[] $targetGroup
     */
    public function setTargetGroup(array $targetGroup): void
    {
        $this->targetGroup = $targetGroup;
    }

    /**
     * Returns Recruiter Info.
     */
    public function getRecruiterInfo(): \HAPILib\Models\RecruiterInfoErrorsModel
    {
        return $this->recruiterInfo;
    }

    /**
     * Sets Recruiter Info.
     *
     * @required
     * @maps recruiterInfo
     */
    public function setRecruiterInfo(\HAPILib\Models\RecruiterInfoErrorsModel $recruiterInfo): void
    {
        $this->recruiterInfo = $recruiterInfo;
    }

    /**
     * Returns Ordered Products.
     *
     * @return string[]
     */
    public function getOrderedProducts(): array
    {
        return $this->orderedProducts;
    }

    /**
     * Sets Ordered Products.
     *
     * @required
     * @maps orderedProducts
     *
     * @param string[] $orderedProducts
     */
    public function setOrderedProducts(array $orderedProducts): void
    {
        $this->orderedProducts = $orderedProducts;
    }

    /**
     * Returns Ordered Products Specs.
     *
     * @return \HAPILib\Models\OrderedProductsSpecModel[]
     */
    public function getOrderedProductsSpecs(): array
    {
        return $this->orderedProductsSpecs;
    }

    /**
     * Sets Ordered Products Specs.
     *
     * @required
     * @maps orderedProductsSpecs
     *
     * @param \HAPILib\Models\OrderedProductsSpecModel[] $orderedProductsSpecs
     */
    public function setOrderedProductsSpecs(array $orderedProductsSpecs): void
    {
        $this->orderedProductsSpecs = $orderedProductsSpecs;
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
