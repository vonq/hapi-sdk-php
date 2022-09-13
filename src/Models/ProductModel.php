<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPI\Models;

use stdClass;

class ProductModel implements \JsonSerializable
{
    /**
     * @var string
     */
    private $title;

    /**
     * @var LimitedLocationModel[]
     */
    private $locations;

    /**
     * @var LimitedJobFunctionModel[]
     */
    private $jobFunctions;

    /**
     * @var IndustryModel[]
     */
    private $industries;

    /**
     * @var string|null
     */
    private $description;

    /**
     * @var string|null
     */
    private $homepage;

    /**
     * @var ProductLogoModel[]
     */
    private $logoUrl;

    /**
     * @var ProductLogoWithSizeModel[]
     */
    private $logoSquareUrl;

    /**
     * @var ProductLogoWithSizeModel[]
     */
    private $logoRectangleUrl;

    /**
     * @var DurationInDaysModel
     */
    private $duration;

    /**
     * @var DurationInHoursModel
     */
    private $timeToProcess;

    /**
     * @var DurationInHoursModel
     */
    private $timeToSetup;

    /**
     * @var string
     */
    private $productId;

    /**
     * @var PriceModel[]
     */
    private $vonqPrice;

    /**
     * @var PriceModel[]
     */
    private $ratecardPrice;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string[]
     */
    private $crossPostings;

    /**
     * @var ListChannelModel
     */
    private $channel;

    /**
     * @var string
     */
    private $audienceGroup;

    /**
     * @var bool
     */
    private $mcEnabled;

    /**
     * @var bool
     */
    private $mcOnly;

    /**
     * @var bool
     */
    private $allowOrders;

    /**
     * @param string $title
     * @param LimitedLocationModel[] $locations
     * @param LimitedJobFunctionModel[] $jobFunctions
     * @param IndustryModel[] $industries
     * @param ProductLogoModel[] $logoUrl
     * @param ProductLogoWithSizeModel[] $logoSquareUrl
     * @param ProductLogoWithSizeModel[] $logoRectangleUrl
     * @param DurationInDaysModel $duration
     * @param DurationInHoursModel $timeToProcess
     * @param DurationInHoursModel $timeToSetup
     * @param string $productId
     * @param PriceModel[] $vonqPrice
     * @param PriceModel[] $ratecardPrice
     * @param string $type
     * @param string[] $crossPostings
     * @param ListChannelModel $channel
     * @param string $audienceGroup
     * @param bool $mcEnabled
     * @param bool $mcOnly
     * @param bool $allowOrders
     */
    public function __construct(
        string $title,
        array $locations,
        array $jobFunctions,
        array $industries,
        array $logoUrl,
        array $logoSquareUrl,
        array $logoRectangleUrl,
        DurationInDaysModel $duration,
        DurationInHoursModel $timeToProcess,
        DurationInHoursModel $timeToSetup,
        string $productId,
        array $vonqPrice,
        array $ratecardPrice,
        string $type,
        array $crossPostings,
        ListChannelModel $channel,
        string $audienceGroup,
        bool $mcEnabled,
        bool $mcOnly,
        bool $allowOrders
    ) {
        $this->title = $title;
        $this->locations = $locations;
        $this->jobFunctions = $jobFunctions;
        $this->industries = $industries;
        $this->logoUrl = $logoUrl;
        $this->logoSquareUrl = $logoSquareUrl;
        $this->logoRectangleUrl = $logoRectangleUrl;
        $this->duration = $duration;
        $this->timeToProcess = $timeToProcess;
        $this->timeToSetup = $timeToSetup;
        $this->productId = $productId;
        $this->vonqPrice = $vonqPrice;
        $this->ratecardPrice = $ratecardPrice;
        $this->type = $type;
        $this->crossPostings = $crossPostings;
        $this->channel = $channel;
        $this->audienceGroup = $audienceGroup;
        $this->mcEnabled = $mcEnabled;
        $this->mcOnly = $mcOnly;
        $this->allowOrders = $allowOrders;
    }

    /**
     * Returns Title.
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Sets Title.
     *
     * @required
     * @maps title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * Returns Locations.
     *
     * @return LimitedLocationModel[]
     */
    public function getLocations(): array
    {
        return $this->locations;
    }

    /**
     * Sets Locations.
     *
     * @required
     * @maps locations
     *
     * @param LimitedLocationModel[] $locations
     */
    public function setLocations(array $locations): void
    {
        $this->locations = $locations;
    }

    /**
     * Returns Job Functions.
     *
     * @return LimitedJobFunctionModel[]
     */
    public function getJobFunctions(): array
    {
        return $this->jobFunctions;
    }

    /**
     * Sets Job Functions.
     *
     * @required
     * @maps job_functions
     *
     * @param LimitedJobFunctionModel[] $jobFunctions
     */
    public function setJobFunctions(array $jobFunctions): void
    {
        $this->jobFunctions = $jobFunctions;
    }

    /**
     * Returns Industries.
     *
     * @return IndustryModel[]
     */
    public function getIndustries(): array
    {
        return $this->industries;
    }

    /**
     * Sets Industries.
     *
     * @required
     * @maps industries
     *
     * @param IndustryModel[] $industries
     */
    public function setIndustries(array $industries): void
    {
        $this->industries = $industries;
    }

    /**
     * Returns Description.
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Sets Description.
     *
     * @maps description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * Returns Homepage.
     */
    public function getHomepage(): ?string
    {
        return $this->homepage;
    }

    /**
     * Sets Homepage.
     *
     * @maps homepage
     */
    public function setHomepage(?string $homepage): void
    {
        $this->homepage = $homepage;
    }

    /**
     * Returns Logo Url.
     *
     * @return ProductLogoModel[]
     */
    public function getLogoUrl(): array
    {
        return $this->logoUrl;
    }

    /**
     * Sets Logo Url.
     *
     * @required
     * @maps logo_url
     *
     * @param ProductLogoModel[] $logoUrl
     */
    public function setLogoUrl(array $logoUrl): void
    {
        $this->logoUrl = $logoUrl;
    }

    /**
     * Returns Logo Square Url.
     *
     * @return ProductLogoWithSizeModel[]
     */
    public function getLogoSquareUrl(): array
    {
        return $this->logoSquareUrl;
    }

    /**
     * Sets Logo Square Url.
     *
     * @required
     * @maps logo_square_url
     *
     * @param ProductLogoWithSizeModel[] $logoSquareUrl
     */
    public function setLogoSquareUrl(array $logoSquareUrl): void
    {
        $this->logoSquareUrl = $logoSquareUrl;
    }

    /**
     * Returns Logo Rectangle Url.
     *
     * @return ProductLogoWithSizeModel[]
     */
    public function getLogoRectangleUrl(): array
    {
        return $this->logoRectangleUrl;
    }

    /**
     * Sets Logo Rectangle Url.
     *
     * @required
     * @maps logo_rectangle_url
     *
     * @param ProductLogoWithSizeModel[] $logoRectangleUrl
     */
    public function setLogoRectangleUrl(array $logoRectangleUrl): void
    {
        $this->logoRectangleUrl = $logoRectangleUrl;
    }

    /**
     * Returns Duration.
     */
    public function getDuration(): DurationInDaysModel
    {
        return $this->duration;
    }

    /**
     * Sets Duration.
     *
     * @required
     * @maps duration
     */
    public function setDuration(DurationInDaysModel $duration): void
    {
        $this->duration = $duration;
    }

    /**
     * Returns Time to Process.
     */
    public function getTimeToProcess(): DurationInHoursModel
    {
        return $this->timeToProcess;
    }

    /**
     * Sets Time to Process.
     *
     * @required
     * @maps time_to_process
     */
    public function setTimeToProcess(DurationInHoursModel $timeToProcess): void
    {
        $this->timeToProcess = $timeToProcess;
    }

    /**
     * Returns Time to Setup.
     */
    public function getTimeToSetup(): DurationInHoursModel
    {
        return $this->timeToSetup;
    }

    /**
     * Sets Time to Setup.
     *
     * @required
     * @maps time_to_setup
     */
    public function setTimeToSetup(DurationInHoursModel $timeToSetup): void
    {
        $this->timeToSetup = $timeToSetup;
    }

    /**
     * Returns Product Id.
     */
    public function getProductId(): string
    {
        return $this->productId;
    }

    /**
     * Sets Product Id.
     *
     * @required
     * @maps product_id
     */
    public function setProductId(string $productId): void
    {
        $this->productId = $productId;
    }

    /**
     * Returns Vonq Price.
     * the price to be displayed to customers
     *
     * @return PriceModel[]
     */
    public function getVonqPrice(): array
    {
        return $this->vonqPrice;
    }

    /**
     * Sets Vonq Price.
     * the price to be displayed to customers
     *
     * @required
     * @maps vonq_price
     *
     * @param PriceModel[] $vonqPrice
     */
    public function setVonqPrice(array $vonqPrice): void
    {
        $this->vonqPrice = $vonqPrice;
    }

    /**
     * Returns Ratecard Price.
     *
     * @return PriceModel[]
     */
    public function getRatecardPrice(): array
    {
        return $this->ratecardPrice;
    }

    /**
     * Sets Ratecard Price.
     *
     * @required
     * @maps ratecard_price
     *
     * @param PriceModel[] $ratecardPrice
     */
    public function setRatecardPrice(array $ratecardPrice): void
    {
        $this->ratecardPrice = $ratecardPrice;
    }

    /**
     * Returns Type.
     * The type of a channel
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     * The type of a channel
     *
     * @required
     * @maps type
     * @factory \HAPI\Models\ChannelTypeEnum::checkValue
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * Returns Cross Postings.
     *
     * @return string[]
     */
    public function getCrossPostings(): array
    {
        return $this->crossPostings;
    }

    /**
     * Sets Cross Postings.
     *
     * @required
     * @maps cross_postings
     *
     * @param string[] $crossPostings
     */
    public function setCrossPostings(array $crossPostings): void
    {
        $this->crossPostings = $crossPostings;
    }

    /**
     * Returns Channel.
     */
    public function getChannel(): ListChannelModel
    {
        return $this->channel;
    }

    /**
     * Sets Channel.
     *
     * @required
     * @maps channel
     */
    public function setChannel(ListChannelModel $channel): void
    {
        $this->channel = $channel;
    }

    /**
     * Returns Audience Group.
     * The product's audience group (niche/generic)
     */
    public function getAudienceGroup(): string
    {
        return $this->audienceGroup;
    }

    /**
     * Sets Audience Group.
     * The product's audience group (niche/generic)
     *
     * @required
     * @maps audience_group
     * @factory \HAPI\Models\AudienceGroupEnum::checkValue
     */
    public function setAudienceGroup(string $audienceGroup): void
    {
        $this->audienceGroup = $audienceGroup;
    }

    /**
     * Returns Mc Enabled.
     * is My Contract enabled for the channel
     */
    public function getMcEnabled(): bool
    {
        return $this->mcEnabled;
    }

    /**
     * Sets Mc Enabled.
     * is My Contract enabled for the channel
     *
     * @required
     * @maps mc_enabled
     */
    public function setMcEnabled(bool $mcEnabled): void
    {
        $this->mcEnabled = $mcEnabled;
    }

    /**
     * Returns Mc Only.
     * is the product available only for My Contract order
     */
    public function getMcOnly(): bool
    {
        return $this->mcOnly;
    }

    /**
     * Sets Mc Only.
     * is the product available only for My Contract order
     *
     * @required
     * @maps mc_only
     */
    public function setMcOnly(bool $mcOnly): void
    {
        $this->mcOnly = $mcOnly;
    }

    /**
     * Returns Allow Orders.
     * is the product available for order. a campaign cannot be ordered with a product having
     * `allow_orders` set to `false`.
     */
    public function getAllowOrders(): bool
    {
        return $this->allowOrders;
    }

    /**
     * Sets Allow Orders.
     * is the product available for order. a campaign cannot be ordered with a product having
     * `allow_orders` set to `false`.
     *
     * @required
     * @maps allow_orders
     */
    public function setAllowOrders(bool $allowOrders): void
    {
        $this->allowOrders = $allowOrders;
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
        $json['title']              = $this->title;
        $json['locations']          = $this->locations;
        $json['job_functions']      = $this->jobFunctions;
        $json['industries']         = $this->industries;
        $json['description']        = $this->description;
        $json['homepage']           = $this->homepage;
        $json['logo_url']           = $this->logoUrl;
        $json['logo_square_url']    = $this->logoSquareUrl;
        $json['logo_rectangle_url'] = $this->logoRectangleUrl;
        $json['duration']           = $this->duration;
        $json['time_to_process']    = $this->timeToProcess;
        $json['time_to_setup']      = $this->timeToSetup;
        $json['product_id']         = $this->productId;
        $json['vonq_price']         = $this->vonqPrice;
        $json['ratecard_price']     = $this->ratecardPrice;
        $json['type']               = ChannelTypeEnum::checkValue($this->type);
        $json['cross_postings']     = $this->crossPostings;
        $json['channel']            = $this->channel;
        $json['audience_group']     = AudienceGroupEnum::checkValue($this->audienceGroup);
        $json['mc_enabled']         = $this->mcEnabled;
        $json['mc_only']            = $this->mcOnly;
        $json['allow_orders']       = $this->allowOrders;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
