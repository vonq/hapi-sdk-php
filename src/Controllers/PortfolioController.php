<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPILib\Controllers;

use HAPILib\Exceptions\ApiException;
use HAPILib\ConfigurationInterface;
use HAPILib\ApiHelper;
use HAPILib\Models;
use HAPILib\Http\HttpRequest;
use HAPILib\Http\HttpResponse;
use HAPILib\Http\HttpMethod;
use HAPILib\Http\HttpContext;
use HAPILib\Http\HttpCallBack;
use Unirest\Request;

class PortfolioController extends BaseController
{
    public function __construct(ConfigurationInterface $config, array $authManagers, ?HttpCallBack $httpCallBack)
    {
        parent::__construct($config, $authManagers, $httpCallBack);
    }

    /**
     * For a detailed tutorial on how to get started with portfolio search v2, check out our [Quickstart
     * Tutorial](https://pkb.stoplight.io/docs/search/docs/Tutorial.md).
     * For an implementation demo of the product search experience, check out our [Developer Portal](http:
     * //vonq.io/pkb).
     * This endpoint exposes a list of Products with the options to search by Location, Job Title, Job
     * Function and Industry.
     * Products are ranked by their relevancy to the search terms.
     * Optionally, products can filtered by Location.
     * Values for each parameter can be fetched by calling the other endpoints in this section.
     * Calling this endpoint will guarantee that the Products you see are configured for you as our Partner.
     * Besides the default English, German and Dutch result translations can be requested by specifying an
     * `Accept-Language: [de|nl]` header.
     *
     * @param int|null $limit Number of results to return per page.
     * @param int|null $offset The initial index from which to return the results.
     * @param string[]|null $includeLocationId Id for a Location to search products against. If no
     *        exact matches exist, search will be expanded to the Location's region and country.
     *        Optionally, a (comma-separated) array of values can be passed. Passing multiple
     *        values increases the number of search results.
     * @param string|null $exactLocationId Match only products specifically assigned to a Location.
     * @param string|null $jobFunctionId Job Function id. Not to be used in conjunction with a Job
     *        Title id.
     * @param string|null $jobTitleId Job title id
     * @param string[]|null $industryId Industry Id
     * @param string|null $durationFrom Match only products with a duration more or equal than a
     *        certain number of days
     * @param string|null $durationTo Match only products with a duration up to a certain number of
     *        days
     * @param string|null $name Search text for a product name
     * @param string|null $currency ISO-4217 code for a currency
     * @param string|null $sortBy Which products to show first. Defaults to 'relevant'
     * @param bool|null $recommended Whether to display a list of recommended products for the
     *        search parameters. If true, returns a limited list of products for the types: Job
     *        board, social media, publication and community.
     * @param bool|null $mcEnabled Can be used to filter for products that are linked to a channel
     *        enabled for My Contracts orders
     * @param string|null $acceptLanguage
     * @param bool|null $excludeRecommended Exclude recommended products from search results. Cannot
     *        be used in combination with 'recommended'.
     *
     * @return Models\ProductModel[] Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function searchProducts(
        ?int $limit = null,
        ?int $offset = null,
        ?array $includeLocationId = null,
        ?string $exactLocationId = null,
        ?string $jobFunctionId = null,
        ?string $jobTitleId = null,
        ?array $industryId = null,
        ?string $durationFrom = null,
        ?string $durationTo = null,
        ?string $name = null,
        ?string $currency = null,
        ?string $sortBy = Models\SortByEnum::RELEVANT,
        ?bool $recommended = null,
        ?bool $mcEnabled = null,
        ?string $acceptLanguage = null,
        ?bool $excludeRecommended = false
    ): array {
        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri() . '/products/search/';

        //process query parameters
        ApiHelper::appendUrlWithQueryParameters($_queryUrl, [
            'limit'              => $limit,
            'offset'             => $offset,
            'includeLocationId'  => $includeLocationId,
            'exactLocationId'    => $exactLocationId,
            'jobFunctionId'      => $jobFunctionId,
            'jobTitleId'         => $jobTitleId,
            'industryId'         => $industryId,
            'durationFrom'       => $durationFrom,
            'durationTo'         => $durationTo,
            'name'               => $name,
            'currency'           => $currency,
            'sortBy'             => (null != $sortBy) ?
                Models\SortByEnum::checkValue($sortBy) : Models\SortByEnum::RELEVANT,
            'recommended'        => var_export($recommended, true),
            'mcEnabled'          => var_export($mcEnabled, true),
            'excludeRecommended' => (null != $excludeRecommended) ?
                var_export($excludeRecommended, true) : false,
        ]);

        //prepare headers
        $_headers = [
            'user-agent'       => self::$userAgent,
            'Accept'           => 'application/json',
            'Accept-Language'    => Models\AcceptLanguageEnum::checkValue($acceptLanguage)
        ];

        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        // Enable or disable SSL certificate validation
        Request::verifyPeer(!$this->config->getSkipSslVerification());

        // and invoke the API call request to fetch the response
        try {
            $response = Request::get($_httpRequest->getQueryUrl(), $_httpRequest->getHeaders());
        } catch (\Unirest\Exception $ex) {
            throw new ApiException($ex->getMessage(), $_httpRequest);
        }


        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //Error handling using HTTP status codes
        if ($response->code == 400) {
            throw new ApiException('', $_httpRequest, $_httpResponse);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpRequest);
        return ApiHelper::mapClass($_httpRequest, $_httpResponse, $response->body, 'ProductModel', 1);
    }

    /**
     * Sometimes you already have access to the Identification code of any particular Product and you want
     * to retrieve the most up-to-date information about it.
     * Besides the default English, German and Dutch result translations can be requested by specifying an
     * `Accept-Language: [de|nl]` header.
     *
     * @param string $productId
     * @param string|null $acceptLanguage
     *
     * @return Models\ProductModel Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function retrieveSingleProduct(string $productId, ?string $acceptLanguage = null): Models\ProductModel
    {
        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri() . '/products/single/{product_id}/';

        //process template parameters
        $_queryUrl = ApiHelper::appendUrlWithTemplateParameters($_queryUrl, [
            'product_id'      => $productId,
        ]);

        //prepare headers
        $_headers = [
            'user-agent'    => self::$userAgent,
            'Accept'        => 'application/json',
            'Accept-Language' => Models\AcceptLanguageEnum::checkValue($acceptLanguage)
        ];

        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        // Enable or disable SSL certificate validation
        Request::verifyPeer(!$this->config->getSkipSslVerification());

        // and invoke the API call request to fetch the response
        try {
            $response = Request::get($_httpRequest->getQueryUrl(), $_httpRequest->getHeaders());
        } catch (\Unirest\Exception $ex) {
            throw new ApiException($ex->getMessage(), $_httpRequest);
        }


        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpRequest);
        return ApiHelper::mapClass($_httpRequest, $_httpResponse, $response->body, 'ProductModel');
    }

    /**
     * Sometimes you already have access to the Identification codes of more than one Product and you want
     * to retrieve the most up-to-date information about them.
     * Besides the default English, German and Dutch result translations can be requested by specifying an
     * `Accept-Language: [de|nl]` header.
     *
     * @param string[] $productsIds
     * @param string|null $acceptLanguage
     *
     * @return Models\ProductModel[] Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function retrieveMultipleProducts(array $productsIds, ?string $acceptLanguage = null): array
    {
        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri() . '/products/multiple/{products_ids}/';

        //process template parameters
        $_queryUrl = ApiHelper::appendUrlWithTemplateParameters($_queryUrl, [
            'products_ids'    => $productsIds,
        ]);

        //prepare headers
        $_headers = [
            'user-agent'    => self::$userAgent,
            'Accept'        => 'application/json',
            'Accept-Language' => Models\AcceptLanguageEnum::checkValue($acceptLanguage)
        ];

        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        // Enable or disable SSL certificate validation
        Request::verifyPeer(!$this->config->getSkipSslVerification());

        // and invoke the API call request to fetch the response
        try {
            $response = Request::get($_httpRequest->getQueryUrl(), $_httpRequest->getHeaders());
        } catch (\Unirest\Exception $ex) {
            throw new ApiException($ex->getMessage(), $_httpRequest);
        }


        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpRequest);
        return ApiHelper::mapClass($_httpRequest, $_httpResponse, $response->body, 'ProductModel', 1);
    }

    /**
     * This endpoint calculates total number of days to process and setup a campaign containing a list of
     * Products, given a comma-separated list of their ids.
     *
     * @param string[] $productsIds
     *
     * @return Models\ProductsDeliveryTimeModel[] Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function calculateOrderDeliveryTime(array $productsIds): array
    {
        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri() . '/products/delivery-time/{products_ids}/';

        //process template parameters
        $_queryUrl = ApiHelper::appendUrlWithTemplateParameters($_queryUrl, [
            'products_ids' => $productsIds,
        ]);

        //prepare headers
        $_headers = [
            'user-agent'    => self::$userAgent,
            'Accept'        => 'application/json'
        ];

        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        // Enable or disable SSL certificate validation
        Request::verifyPeer(!$this->config->getSkipSslVerification());

        // and invoke the API call request to fetch the response
        try {
            $response = Request::get($_httpRequest->getQueryUrl(), $_httpRequest->getHeaders());
        } catch (\Unirest\Exception $ex) {
            throw new ApiException($ex->getMessage(), $_httpRequest);
        }


        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpRequest);
        return ApiHelper::mapClass($_httpRequest, $_httpResponse, $response->body, 'ProductsDeliveryTimeModel', 1);
    }
}
