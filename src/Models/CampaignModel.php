<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPILib\Models;

use HAPILib\Utils\DateTimeHelper;
use stdClass;

class CampaignModel implements \JsonSerializable
{
    /**
     * @var string
     */
    private $campaignId;

    /**
     * @var string|null
     */
    private $companyId;

    /**
     * @var array
     */
    private $orderReference = [];

    /**
     * @var RecruiterInfoModel
     */
    private $recruiterInfo;

    /**
     * @var array
     */
    private $campaignName = [];

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
     * @var OrderedProductsGetElementModel[]
     */
    private $orderedProductsSpecs;

    /**
     * @var CampaignPostingModel[]
     */
    private $postings;

    /**
     * @var \DateTime
     */
    private $createdOn;

    /**
     * @var array
     */
    private $currency = [];

    /**
     * @var string
     */
    private $status;

    /**
     * @var PriceInCentsModel
     */
    private $totalPrice;

    /**
     * @var string|null
     */
    private $walletId;

    /**
     * @var string|null
     */
    private $customerId;

    /**
     * @param string $campaignId
     * @param RecruiterInfoModel $recruiterInfo
     * @param PostingDetailsModel $postingDetails
     * @param TargetGroupModel $targetGroup
     * @param string[] $orderedProducts
     * @param OrderedProductsGetElementModel[] $orderedProductsSpecs
     * @param CampaignPostingModel[] $postings
     * @param \DateTime $createdOn
     * @param string $status
     * @param PriceInCentsModel $totalPrice
     */
    public function __construct(
        string $campaignId,
        RecruiterInfoModel $recruiterInfo,
        PostingDetailsModel $postingDetails,
        TargetGroupModel $targetGroup,
        array $orderedProducts,
        array $orderedProductsSpecs,
        array $postings,
        \DateTime $createdOn,
        string $status,
        PriceInCentsModel $totalPrice
    ) {
        $this->campaignId = $campaignId;
        $this->recruiterInfo = $recruiterInfo;
        $this->postingDetails = $postingDetails;
        $this->targetGroup = $targetGroup;
        $this->orderedProducts = $orderedProducts;
        $this->orderedProductsSpecs = $orderedProductsSpecs;
        $this->postings = $postings;
        $this->createdOn = $createdOn;
        $this->status = $status;
        $this->totalPrice = $totalPrice;
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

    /**
     * Returns Company Id.
     * A vendor-related unique identification for the Company that's making the order. Doesn't affect the
     * order process at all, but provides a method for later filtering by this identification. It's also
     * used when creating a unified report of Campaign orders made in a period of time.
     */
    public function getCompanyId(): ?string
    {
        return $this->companyId;
    }

    /**
     * Sets Company Id.
     * A vendor-related unique identification for the Company that's making the order. Doesn't affect the
     * order process at all, but provides a method for later filtering by this identification. It's also
     * used when creating a unified report of Campaign orders made in a period of time.
     *
     * @maps companyId
     */
    public function setCompanyId(?string $companyId): void
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
        if (count($this->orderReference) == 0) {
            return null;
        }
        return $this->orderReference['value'];
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
        $this->orderReference['value'] = $orderReference;
    }

    /**
     * Unsets Order Reference.
     * A vendor-related Reference number for the order. This could be a PO number or an Invoice number.
     * Doesn't affect the order process at all, but provides a way for the ATS to identify the specific
     * order for their internal billing process
     * Maximum length of this field is 80 symbols
     */
    public function unsetOrderReference(): void
    {
        $this->orderReference = [];
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
        if (count($this->campaignName) == 0) {
            return null;
        }
        return $this->campaignName['value'];
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
        $this->campaignName['value'] = $campaignName;
    }

    /**
     * Unsets Campaign Name.
     * Campaign name as it's going to be listed. Doesn't have to resemble the Posting Title.
     * For example, the Campaign name could be **Software Development Manager** while the Posting
     * title could be **Want to lead a Team of Software Developers? Join us**
     */
    public function unsetCampaignName(): void
    {
        $this->campaignName = [];
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
     * This part contains information of the ordered products.
     *
     * @return OrderedProductsGetElementModel[]
     */
    public function getOrderedProductsSpecs(): array
    {
        return $this->orderedProductsSpecs;
    }

    /**
     * Sets Ordered Products Specs.
     * This part contains information of the ordered products.
     *
     * @required
     * @maps orderedProductsSpecs
     *
     * @param OrderedProductsGetElementModel[] $orderedProductsSpecs
     */
    public function setOrderedProductsSpecs(array $orderedProductsSpecs): void
    {
        $this->orderedProductsSpecs = $orderedProductsSpecs;
    }

    /**
     * Returns Postings.
     * includes information about number of clicks per product
     *
     * @return CampaignPostingModel[]
     */
    public function getPostings(): array
    {
        return $this->postings;
    }

    /**
     * Sets Postings.
     * includes information about number of clicks per product
     *
     * @required
     * @maps postings
     *
     * @param CampaignPostingModel[] $postings
     */
    public function setPostings(array $postings): void
    {
        $this->postings = $postings;
    }

    /**
     * Returns Created On.
     */
    public function getCreatedOn(): \DateTime
    {
        return $this->createdOn;
    }

    /**
     * Sets Created On.
     *
     * @required
     * @maps createdOn
     * @factory \HAPILib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setCreatedOn(\DateTime $createdOn): void
    {
        $this->createdOn = $createdOn;
    }

    /**
     * Returns Currency.
     * ISO 3-Letter Currency Code
     */
    public function getCurrency(): ?string
    {
        if (count($this->currency) == 0) {
            return null;
        }
        return $this->currency['value'];
    }

    /**
     * Sets Currency.
     * ISO 3-Letter Currency Code
     *
     * @maps currency
     * @factory \HAPILib\Models\Currency2Enum::checkValue
     */
    public function setCurrency(?string $currency): void
    {
        $this->currency['value'] = $currency;
    }

    /**
     * Unsets Currency.
     * ISO 3-Letter Currency Code
     */
    public function unsetCurrency(): void
    {
        $this->currency = [];
    }

    /**
     * Returns Status.
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     *
     * @required
     * @maps status
     * @factory \HAPILib\Models\Status1Enum::checkValue
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Total Price.
     */
    public function getTotalPrice(): PriceInCentsModel
    {
        return $this->totalPrice;
    }

    /**
     * Sets Total Price.
     *
     * @required
     * @maps totalPrice
     */
    public function setTotalPrice(PriceInCentsModel $totalPrice): void
    {
        $this->totalPrice = $totalPrice;
    }

    /**
     * Returns Wallet Id.
     * The Wallet used to purchase this campaign
     */
    public function getWalletId(): ?string
    {
        return $this->walletId;
    }

    /**
     * Sets Wallet Id.
     * The Wallet used to purchase this campaign
     *
     * @maps walletId
     */
    public function setWalletId(?string $walletId): void
    {
        $this->walletId = $walletId;
    }

    /**
     * Returns Customer Id.
     * The X-CUSTOMER-ID Header used when ordering this campaign
     */
    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }

    /**
     * Sets Customer Id.
     * The X-CUSTOMER-ID Header used when ordering this campaign
     *
     * @maps customerId
     */
    public function setCustomerId(?string $customerId): void
    {
        $this->customerId = $customerId;
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
        $json['campaignId']           = $this->campaignId;
        $json['companyId']            = $this->companyId;
        if (!empty($this->orderReference)) {
            $json['orderReference']   = $this->orderReference['value'];
        }
        $json['recruiterInfo']        = $this->recruiterInfo;
        if (!empty($this->campaignName)) {
            $json['campaignName']     = $this->campaignName['value'];
        }
        $json['postingDetails']       = $this->postingDetails;
        $json['targetGroup']          = $this->targetGroup;
        $json['orderedProducts']      = $this->orderedProducts;
        $json['orderedProductsSpecs'] = $this->orderedProductsSpecs;
        $json['postings']             = $this->postings;
        $json['createdOn']            = DateTimeHelper::toRfc3339DateTime($this->createdOn);
        if (!empty($this->currency)) {
            $json['currency']         = Currency2Enum::checkValue($this->currency['value']);
        }
        $json['status']               = Status1Enum::checkValue($this->status);
        $json['totalPrice']           = $this->totalPrice;
        $json['walletId']             = $this->walletId;
        $json['customerId']           = $this->customerId;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
