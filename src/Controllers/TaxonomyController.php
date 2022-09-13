<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPI\Controllers;

use HAPI\Exceptions\ApiException;
use HAPI\ConfigurationInterface;
use HAPI\ApiHelper;
use HAPI\Models;
use HAPI\Http\ApiResponse;
use HAPI\Http\HttpRequest;
use HAPI\Http\HttpResponse;
use HAPI\Http\HttpMethod;
use HAPI\Http\HttpContext;
use HAPI\Http\HttpCallBack;

class TaxonomyController extends BaseController
{
    public function __construct(ConfigurationInterface $config, array $authManagers, ?HttpCallBack $httpCallBack)
    {
        parent::__construct($config, $authManagers, $httpCallBack);
    }

    /**
     * This endpoint returns a list of supported industry names that can be used to search for products.
     * Results are ordered alphabetically.
     * Use the `id` key of any Industry in the response to search for a product.
     * Besides the default English, German and Dutch result translations can be requested by specifying an
     * `Accept-Language: [de|nl]` header.
     *
     * @param int|null $limit Number of results to return per page.
     * @param int|null $offset The initial index from which to return the results.
     * @param string|null $acceptLanguage The language the client prefers
     * @param string|null $xCustomerId In order to identify the ATS end-user, some requests (to HAPI
     *        Job Post in particular) require this header. You need to provide this to be able to
     *        work with Contracts functionality (adding contract, retrieving channels, ordering
     *        campaigns with contracts).
     *
     * @return ApiResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listIndustries(
        ?int $limit = 50,
        ?int $offset = 0,
        ?string $acceptLanguage = null,
        ?string $xCustomerId = null
    ): ApiResponse {
        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri() . '/products/industries/';

        //process query parameters
        ApiHelper::appendUrlWithQueryParameters($_queryUrl, [
            'limit'           => (null != $limit) ?
                $limit : 50,
            'offset'          => (null != $offset) ?
                $offset : 0,
        ]);

        //prepare headers
        $_headers = [
            'user-agent'    => self::$userAgent,
            'Accept'        => 'application/json',
            'Accept-Language' => Models\AcceptLanguageEnum::checkValue($acceptLanguage),
            'X-Customer-Id'   => $xCustomerId
        ];

        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);

        // Apply authorization to request
        $this->getAuthManager('global')->apply($_httpRequest);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        // and invoke the API call request to fetch the response
        try {
            $response = self::$request->get($_httpRequest->getQueryUrl(), $_httpRequest->getHeaders());
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
        $deserializedResponse = ApiHelper::mapClass($_httpRequest, $_httpResponse, $response->body, 'IndustryModel', 1);
        return ApiResponse::createFromContext($response->body, $deserializedResponse, $_httpContext);
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
     * @param string|null $acceptLanguage The language the client prefers
     * @param string|null $xCustomerId In order to identify the ATS end-user, some requests (to HAPI
     *        Job Post in particular) require this header. You need to provide this to be able to
     *        work with Contracts functionality (adding contract, retrieving channels, ordering
     *        campaigns with contracts).
     *
     * @return ApiResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function retrieveJobFunctionsTree(?string $acceptLanguage = null, ?string $xCustomerId = null): ApiResponse
    {
        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri() . '/products/job-functions/';

        //prepare headers
        $_headers = [
            'user-agent'    => self::$userAgent,
            'Accept'        => 'application/json',
            'Accept-Language' => Models\AcceptLanguageEnum::checkValue($acceptLanguage),
            'X-Customer-Id'   => $xCustomerId
        ];

        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);

        // Apply authorization to request
        $this->getAuthManager('global')->apply($_httpRequest);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        // and invoke the API call request to fetch the response
        try {
            $response = self::$request->get($_httpRequest->getQueryUrl(), $_httpRequest->getHeaders());
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
        $deserializedResponse = ApiHelper::mapClass(
            $_httpRequest,
            $_httpResponse,
            $response->body,
            'JobFunctionTreeModel',
            1
        );
        return ApiResponse::createFromContext($response->body, $deserializedResponse, $_httpContext);
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
     * @param int|null $limit Number of results to return per page.
     * @param int|null $offset The initial index from which to return the results.
     * @param string|null $acceptLanguage The language the client prefers
     * @param string|null $xCustomerId In order to identify the ATS end-user, some requests (to HAPI
     *        Job Post in particular) require this header. You need to provide this to be able to
     *        work with Contracts functionality (adding contract, retrieving channels, ordering
     *        campaigns with contracts).
     *
     * @return ApiResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function searchJobTitles(
        string $text,
        ?int $limit = 50,
        ?int $offset = 0,
        ?string $acceptLanguage = null,
        ?string $xCustomerId = null
    ): ApiResponse {
        //check that all required arguments are provided
        if (!isset($text)) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }

        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri() . '/products/job-titles/';

        //process query parameters
        ApiHelper::appendUrlWithQueryParameters($_queryUrl, [
            'text'            => $text,
            'limit'           => (null != $limit) ?
                $limit : 50,
            'offset'          => (null != $offset) ?
                $offset : 0,
        ]);

        //prepare headers
        $_headers = [
            'user-agent'    => self::$userAgent,
            'Accept'        => 'application/json',
            'Accept-Language' => Models\AcceptLanguageEnum::checkValue($acceptLanguage),
            'X-Customer-Id'   => $xCustomerId
        ];

        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);

        // Apply authorization to request
        $this->getAuthManager('global')->apply($_httpRequest);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        // and invoke the API call request to fetch the response
        try {
            $response = self::$request->get($_httpRequest->getQueryUrl(), $_httpRequest->getHeaders());
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
        $deserializedResponse = ApiHelper::mapClass(
            $_httpRequest,
            $_httpResponse,
            $response->body,
            'PaginatedJobTitleListModel'
        );
        return ApiResponse::createFromContext($response->body, $deserializedResponse, $_httpContext);
    }

    /**
     * This endpoint takes any text as input and returns a list of Locations matching the query, ordered by
     * popularity.
     * Each response will include the entire world as a Location, even no Locations match the text query.
     * Use the `id` key of each object in the response to search for a Product.
     * Supports text input in English, Dutch and German.
     *
     * @param string $text Search text for a location name in either English, Dutch, German, French
     *        and Italian. Partial recognition of 20 other languages.
     * @param string|null $acceptLanguage The language the client prefers
     * @param string|null $xCustomerId In order to identify the ATS end-user, some requests (to HAPI
     *        Job Post in particular) require this header. You need to provide this to be able to
     *        work with Contracts functionality (adding contract, retrieving channels, ordering
     *        campaigns with contracts).
     *
     * @return ApiResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function searchLocations(
        string $text,
        ?string $acceptLanguage = null,
        ?string $xCustomerId = null
    ): ApiResponse {
        //check that all required arguments are provided
        if (!isset($text)) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }

        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri() . '/products/location/search/';

        //process query parameters
        ApiHelper::appendUrlWithQueryParameters($_queryUrl, [
            'text'            => $text,
        ]);

        //prepare headers
        $_headers = [
            'user-agent'    => self::$userAgent,
            'Accept'        => 'application/json',
            'Accept-Language' => Models\AcceptLanguageEnum::checkValue($acceptLanguage),
            'X-Customer-Id'   => $xCustomerId
        ];

        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);

        // Apply authorization to request
        $this->getAuthManager('global')->apply($_httpRequest);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        // and invoke the API call request to fetch the response
        try {
            $response = self::$request->get($_httpRequest->getQueryUrl(), $_httpRequest->getHeaders());
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
            throw $this->createExceptionFromJson(
                '\\HAPI\\Exceptions\\GenericErrorException',
                'Bad Request',
                $_httpRequest,
                $_httpResponse
            );
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpRequest);
        $deserializedResponse = ApiHelper::mapClass($_httpRequest, $_httpResponse, $response->body, 'LocationModel', 1);
        return ApiResponse::createFromContext($response->body, $deserializedResponse, $_httpContext);
    }

    /**
     * Retrieve all Education Level possible values.
     *
     * @return ApiResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function retrieveEducationLevels(): ApiResponse
    {
        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri() . '/taxonomy/education-levels';

        //prepare headers
        $_headers = [
            'user-agent'    => self::$userAgent,
            'Accept'        => 'application/json'
        ];

        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);

        // Apply authorization to request
        $this->getAuthManager('global')->apply($_httpRequest);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        // and invoke the API call request to fetch the response
        try {
            $response = self::$request->get($_httpRequest->getQueryUrl(), $_httpRequest->getHeaders());
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
        $deserializedResponse = ApiHelper::mapClass(
            $_httpRequest,
            $_httpResponse,
            $response->body,
            'EducationLevelModel',
            1
        );
        return ApiResponse::createFromContext($response->body, $deserializedResponse, $_httpContext);
    }

    /**
     * Retrieve all Seniority possible values.
     *
     * @return ApiResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function retrieveSeniorities(): ApiResponse
    {
        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri() . '/taxonomy/seniority';

        //prepare headers
        $_headers = [
            'user-agent'    => self::$userAgent,
            'Accept'        => 'application/json'
        ];

        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);

        // Apply authorization to request
        $this->getAuthManager('global')->apply($_httpRequest);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        // and invoke the API call request to fetch the response
        try {
            $response = self::$request->get($_httpRequest->getQueryUrl(), $_httpRequest->getHeaders());
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
        $deserializedResponse = ApiHelper::mapClass(
            $_httpRequest,
            $_httpResponse,
            $response->body,
            'SeniorityModel',
            1
        );
        return ApiResponse::createFromContext($response->body, $deserializedResponse, $_httpContext);
    }
}
