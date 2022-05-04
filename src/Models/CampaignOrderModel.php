<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPILib\Models;

use stdClass;

class CampaignOrderModel implements \JsonSerializable
{
    /**
     * @var string
     */
    private $companyId;

    /**
     * @var string|null
     */
    private $orderReference;

    /**
     * @var string|null
     */
    private $currency;

    /**
     * @var RecruiterInfoModel
     */
    private $recruiterInfo;

    /**
     * @var string|null
     */
    private $campaignName;

    /**
     * @var PostingDetailsModel
     */
    private $postingDetails;

    /**
     * @var TargetGroupModel
     */
    private $targetGroup;

    /**
     * @var string[]
     */
    private $orderedProducts;

    /**
     * @var OrderedProductsPostElementModel[]|null
     */
    private $orderedProductsSpecs;

    /**
     * @param string $companyId
     * @param RecruiterInfoModel $recruiterInfo
     * @param PostingDetailsModel $postingDetails
     * @param TargetGroupModel $targetGroup
     * @param string[] $orderedProducts
     */
    public function __construct(
        string $companyId,
        RecruiterInfoModel $recruiterInfo,
        PostingDetailsModel $postingDetails,
        TargetGroupModel $targetGroup,
        array $orderedProducts
    ) {
        $this->companyId = $companyId;
        $this->recruiterInfo = $recruiterInfo;
        $this->postingDetails = $postingDetails;
        $this->targetGroup = $targetGroup;
        $this->orderedProducts = $orderedProducts;
    }

    /**
     * Returns Company Id.
     * A vendor-related unique identification for the Company that's making the order. Doesn't affect the
     * order process at all, but provides a method for later filtering by this identification. It's also
     * used when creating a unified report of Campaign orders made in a period of time.
     */
    public function getCompanyId(): string
    {
        return $this->companyId;
    }

    /**
     * Sets Company Id.
     * A vendor-related unique identification for the Company that's making the order. Doesn't affect the
     * order process at all, but provides a method for later filtering by this identification. It's also
     * used when creating a unified report of Campaign orders made in a period of time.
     *
     * @required
     * @maps companyId
     */
    public function setCompanyId(string $companyId): void
    {
        $this->companyId = $companyId;
    }

    /**
     * Returns Order Reference.
     * A vendor-related Reference number for the order. This could be a PO number or an Invoice number.
     * Doesn't affect the order process at all, but provides a way for the ATS to identify the specific
     * order for their internal billing process
     * Maximum length of this field is 80 symbols
     */
    public function getOrderReference(): ?string
    {
        return $this->orderReference;
    }

    /**
     * Sets Order Reference.
     * A vendor-related Reference number for the order. This could be a PO number or an Invoice number.
     * Doesn't affect the order process at all, but provides a way for the ATS to identify the specific
     * order for their internal billing process
     * Maximum length of this field is 80 symbols
     *
     * @maps orderReference
     */
    public function setOrderReference(?string $orderReference): void
    {
        $this->orderReference = $orderReference;
    }

    /**
     * Returns Currency.
     * An ISO 4217 code for a currency to use for order invoicing.
     * Currently only GBP and USD are supported. Default currency is EUR.
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * Sets Currency.
     * An ISO 4217 code for a currency to use for order invoicing.
     * Currently only GBP and USD are supported. Default currency is EUR.
     *
     * @maps currency
     */
    public function setCurrency(?string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * Returns Recruiter Info.
     * Recruiter is the user creating the campaign and you may want to use this to provide filtering by
     * recruiter for groups sharing an account.
     */
    public function getRecruiterInfo(): RecruiterInfoModel
    {
        return $this->recruiterInfo;
    }

    /**
     * Sets Recruiter Info.
     * Recruiter is the user creating the campaign and you may want to use this to provide filtering by
     * recruiter for groups sharing an account.
     *
     * @required
     * @maps recruiterInfo
     */
    public function setRecruiterInfo(RecruiterInfoModel $recruiterInfo): void
    {
        $this->recruiterInfo = $recruiterInfo;
    }

    /**
     * Returns Campaign Name.
     * Campaign name as it's going to be listed. Doesn't have to resemble the Posting Title.
     * For example, the Campaign name could be **Software Development Manager** while the Posting
     * title could be **Want to lead a Team of Software Developers? Join us**
     */
    public function getCampaignName(): ?string
    {
        return $this->campaignName;
    }

    /**
     * Sets Campaign Name.
     * Campaign name as it's going to be listed. Doesn't have to resemble the Posting Title.
     * For example, the Campaign name could be **Software Development Manager** while the Posting
     * title could be **Want to lead a Team of Software Developers? Join us**
     *
     * @maps campaignName
     */
    public function setCampaignName(?string $campaignName): void
    {
        $this->campaignName = $campaignName;
    }

    /**
     * Returns Posting Details.
     */
    public function getPostingDetails(): PostingDetailsModel
    {
        return $this->postingDetails;
    }

    /**
     * Sets Posting Details.
     *
     * @required
     * @maps postingDetails
     */
    public function setPostingDetails(PostingDetailsModel $postingDetails): void
    {
        $this->postingDetails = $postingDetails;
    }

    /**
     * Returns Target Group.
     */
    public function getTargetGroup(): TargetGroupModel
    {
        return $this->targetGroup;
    }

    /**
     * Sets Target Group.
     *
     * @required
     * @maps targetGroup
     */
    public function setTargetGroup(TargetGroupModel $targetGroup): void
    {
        $this->targetGroup = $targetGroup;
    }

    /**
     * Returns Ordered Products.
     * A list of the Products selected by the user.
     *
     * @return string[]
     */
    public function getOrderedProducts(): array
    {
        return $this->orderedProducts;
    }

    /**
     * Sets Ordered Products.
     * A list of the Products selected by the user.
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
     * Specification object for some of the ordered products
     *
     * @return OrderedProductsPostElementModel[]|null
     */
    public function getOrderedProductsSpecs(): ?array
    {
        return $this->orderedProductsSpecs;
    }

    /**
     * Sets Ordered Products Specs.
     * Specification object for some of the ordered products
     *
     * @maps orderedProductsSpecs
     *
     * @param OrderedProductsPostElementModel[]|null $orderedProductsSpecs
     */
    public function setOrderedProductsSpecs(?array $orderedProductsSpecs): void
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
        $json['companyId']                = $this->companyId;
        if (isset($this->orderReference)) {
            $json['orderReference']       = $this->orderReference;
        }
        if (isset($this->currency)) {
            $json['currency']             = $this->currency;
        }
        $json['recruiterInfo']            = $this->recruiterInfo;
        if (isset($this->campaignName)) {
            $json['campaignName']         = $this->campaignName;
        }
        $json['postingDetails']           = $this->postingDetails;
        $json['targetGroup']              = $this->targetGroup;
        $json['orderedProducts']          = $this->orderedProducts;
        if (isset($this->orderedProductsSpecs)) {
            $json['orderedProductsSpecs'] = $this->orderedProductsSpecs;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
