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

class TaxonomyController extends BaseController
{
    public function __construct(ConfigurationInterface $config, array $authManagers, ?HttpCallBack $httpCallBack)
    {
        parent::__construct($config, $authManagers, $httpCallBack);
    }

    /**
     * This endpoint returns a tree-like structure of supported Job Functions that can be used to search
     * for Products.
     * Use the `id` key of any Job Function in the response to search for a Product.
     * Each Job Function is associated with [**`Job Titles`**](b3A6MzM0NDA3MzY-job-titles) in a one-to-many
     * fashion.
     * Besides the default English, German and Dutch result translations can be requested by specifying an
     * `Accept-Language: [de|nl]` header.
     *
     * @param string|null $acceptLanguage
     *
     * @return Models\JobFunctionModel[] Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function retrieveJobFunctionsTree(?string $acceptLanguage = null): array
    {
        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri() . '/products/job-functions/';

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
        return ApiHelper::mapClass($_httpRequest, $_httpResponse, $response->body, 'JobFunctionModel', 1);
    }

    /**
     * This endpoint takes any text as input and returns a list of supported Job Titles matching the query,
     * ordered by popularity.
     * Use the `id` key of each object in the response to search for a Product.
     * Currently, we support 4,000 job titles for each of the following languages: English, Dutch and
     * German.
     * Each Job Title is associated with a [**`Job Function`**](b3A6MzM0NDA3MzU-job-functions) in a many-to-
     * one fashion.
     * Besides the default English, German and Dutch result translations can be requested by specifying an
     * `Accept-Language: [de|nl]` header.
     *
     * @param string $text Search text for a job title name
     * @param float|null $limit Number of results to return per page.
     * @param float|null $offset The initial index from which to return the results.
     * @param string|null $acceptLanguage
     *
     * @return Models\JobTitleModel[] Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function searchJobTitles(
        string $text,
        ?float $limit = null,
        ?float $offset = null,
        ?string $acceptLanguage = null
    ): array {
        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri() . '/products/job-titles/';

        //process query parameters
        ApiHelper::appendUrlWithQueryParameters($_queryUrl, [
            'text'            => $text,
            'limit'           => $limit,
            'offset'          => $offset,
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
        return ApiHelper::mapClass($_httpRequest, $_httpResponse, $response->body, 'JobTitleModel', 1);
    }

    /**
     * This endpoint takes any text as input and returns a list of Locations matching the query, ordered
     * by popularity.
     * Each response will include the entire world as a Location, even no Locations match the text query.
     * Use the `id` key of each object in the response to search for a Product.
     * Supports text input in English, Dutch and German.
     *
     * @param string $text Search text for a location name in either English, Dutch, German, French
     *        and Italian. Partial recognition of 20 other languages.
     *
     * @return Models\LocationModel[] Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function searchLocations(string $text): array
    {
        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri() . '/products/location/search/';

        //process query parameters
        ApiHelper::appendUrlWithQueryParameters($_queryUrl, [
            'text' => $text,
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
        return ApiHelper::mapClass($_httpRequest, $_httpResponse, $response->body, 'LocationModel', 1);
    }

    /**
     * This endpoint returns a list of supported industry names that can be used to search for products.
     * Results are ordered alphabetically.
     * Use the `id` key of any Industry in the response to search for a product.
     * Besides the default English, German and Dutch result translations can be requested by specifying an
     * `Accept-Language: [de|nl]` header.
     *
     * @param float|null $limit Number of results to return per page.
     * @param float|null $offset The initial index from which to return the results.
     * @param string|null $acceptLanguage
     *
     * @return Models\IndustryModel[] Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listIndustries(?float $limit = null, ?float $offset = null, ?string $acceptLanguage = null): array
    {
        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri() . '/products/industries/';

        //process query parameters
        ApiHelper::appendUrlWithQueryParameters($_queryUrl, [
            'limit'           => $limit,
            'offset'          => $offset,
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
        return ApiHelper::mapClass($_httpRequest, $_httpResponse, $response->body, 'IndustryModel', 1);
    }

    /**
     * Retrieve all Education Level possible values.
     *
     * @return Models\EducationLevelModel[] Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function retrieveEducationLevels(): array
    {
        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri() . '/taxonomy/education-levels';

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
        return ApiHelper::mapClass($_httpRequest, $_httpResponse, $response->body, 'EducationLevelModel', 1);
    }

    /**
     * Retrieve all Seniority possible values.
     *
     * @return Models\SeniorityModel[] Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function retrieveSeniorities(): array
    {
        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri() . '/taxonomy/seniority';

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
        return ApiHelper::mapClass($_httpRequest, $_httpResponse, $response->body, 'SeniorityModel', 1);
    }
}
