<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPI\Trues;

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

class ProductsTrue extends BaseTrue
{
    public function __construct(ConfigurationInterface $config, array $authManagers, ?HttpCallBack $httpCallBack)
    {
        parent::__construct($config, $authManagers, $httpCallBack);
    }

    /**
     * This endpoint calculates total number of days to process and setup a campaign containing a list of
     * Products, given a comma-separated list of their ids.
     *
     * Read more about days to process and days to setup [here](https://hapisupport.vonq.com/hc/en-
     * us/articles/6042174569883-Time-to-process-and-time-to-set-up-first-order-per-channel).
     *
     * Learn why some products take up to 10 days to setup: - https://hapisupport.vonq.com/hc/en-
     * us/articles/6042257631643-What-is-a-sub-account-What-impact-does-this-have-on-the-order-
     *
     * Note that delivery time is only applicable for Job Marketing products and it won't appear when using
     * HAPI Job Post and connecting your contracts.
     *
     * @param array $options Array with all options for search
     *
     * @return ApiResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function calculateOrderDeliveryTime(array $options): ApiResponse
    {
        //check that all required arguments are provided
        if (!isset($options['productsIds'])) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }

        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri() . '/products/delivery-time/{products_ids}/';

        //process template parameters
        $_queryUrl = ApiHelper::appendUrlWithTemplateParameters($_queryUrl, [
            'products_ids'  => $this->val($options, 'productsIds'),
        ]);

        //prepare headers
        $_headers = [
            'user-agent'    => self::$userAgent,
            'Accept'        => 'application/json',
            'X-Customer-Id'   => $this->val($options, 'xCustomerId')
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

        if ($response->code == 404) {
            throw $this->createExceptionFromJson(
                '\\HAPI\\Exceptions\\GenericErrorException',
                'Not Found',
                $_httpRequest,
                $_httpResponse
            );
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpRequest);
        $deserializedResponse = ApiHelper::mapClass(
            $_httpRequest,
            $_httpResponse,
            $response->body,
            'TotalDeliveryTimeModel'
        );
        return ApiResponse::createFromContext($response->body, $deserializedResponse, $_httpContext);
    }

    /**
     * Sometimes you already have access to the Identification codes of more than one Product and you want
     * to retrieve the most up-to-date information about them.
     * Besides the default English, German and Dutch result translations can be requested by specifying an
     * `Accept-Language: [de|nl]` header.
     *
     * @param array $options Array with all options for search
     *
     * @return ApiResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function retrieveMultipleProducts(array $options): ApiResponse
    {
        //check that all required arguments are provided
        if (!isset($options['productsIds'])) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }

        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri() . '/products/multiple/{products_ids}/';

        //process template parameters
        $_queryUrl = ApiHelper::appendUrlWithTemplateParameters($_queryUrl, [
            'products_ids'    => $this->val($options, 'productsIds'),
        ]);

        //prepare headers
        $_headers = [
            'user-agent'    => self::$userAgent,
            'Accept'        => 'application/json',
            'Accept-Language' => Models\AcceptLanguageEnum::checkValue($this->val($options, 'acceptLanguage')),
            'X-Customer-Id'   => $this->val($options, 'xCustomerId')
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
            'PaginatedProductListModel'
        );
        return ApiResponse::createFromContext($response->body, $deserializedResponse, $_httpContext);
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
     * @param array $options Array with all options for search
     *
     * @return ApiResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function searchProducts(array $options): ApiResponse
    {
        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri() . '/products/search/';

        //process query parameters
        ApiHelper::appendUrlWithQueryParameters($_queryUrl, [
            'limit'              => $this->val($options, 'limit'),
            'offset'             => $this->val($options, 'offset'),
            'includeLocationId'  => $this->val($options, 'includeLocationId'),
            'exactLocationId'    => $this->val($options, 'exactLocationId'),
            'jobFunctionId'      => $this->val($options, 'jobFunctionId'),
            'jobTitleId'         => $this->val($options, 'jobTitleId'),
            'industryId'         => $this->val($options, 'industryId'),
            'durationFrom'       => $this->val($options, 'durationFrom'),
            'durationTo'         => $this->val($options, 'durationTo'),
            'name'               => $this->val($options, 'name'),
            'currency'           => $this->val($options, 'currency'),
            'sortBy'             => Models\SortByEnum::checkValue($this->val($options, 'sortBy', Models\SortByEnum::RELEVANT)),
            'recommended'        => $this->val($options, 'recommended'),
            'mcEnabled'          => $this->val($options, 'mcEnabled'),
            'excludeRecommended' => $this->val($options, 'excludeRecommended', false),
        ]);

        //prepare headers
        $_headers = [
            'user-agent'       => self::$userAgent,
            'Accept'           => 'application/json',
            'Accept-Language'    => Models\AcceptLanguageEnum::checkValue($this->val($options, 'acceptLanguage')),
            'X-Customer-Id'      => $this->val($options, 'xCustomerId')
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
        $deserializedResponse = ApiHelper::mapClass(
            $_httpRequest,
            $_httpResponse,
            $response->body,
            'PaginatedProductListModel'
        );
        return ApiResponse::createFromContext($response->body, $deserializedResponse, $_httpContext);
    }

    /**
     * Sometimes you already have access to the Identification code of any particular Product and you want
     * to retrieve the most up-to-date information about it.
     * Besides the default English, German and Dutch result translations can be requested by specifying an
     * `Accept-Language: [de|nl]` header.
     *
     * @param array $options Array with all options for search
     *
     * @return ApiResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function retrieveSingleProduct(array $options): ApiResponse
    {
        //check that all required arguments are provided
        if (!isset($options['productId'])) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }

        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri() . '/products/single/{product_id}/';

        //process template parameters
        $_queryUrl = ApiHelper::appendUrlWithTemplateParameters($_queryUrl, [
            'product_id'      => $this->val($options, 'productId'),
        ]);

        //prepare headers
        $_headers = [
            'user-agent'    => self::$userAgent,
            'Accept'        => 'application/json',
            'Accept-Language' => Models\AcceptLanguageEnum::checkValue($this->val($options, 'acceptLanguage')),
            'X-Customer-Id'   => $this->val($options, 'xCustomerId')
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
        if ($response->code == 404) {
            throw $this->createExceptionFromJson(
                '\\HAPI\\Exceptions\\GenericErrorException',
                'Not Found',
                $_httpRequest,
                $_httpResponse
            );
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpRequest);
        $deserializedResponse = ApiHelper::mapClass($_httpRequest, $_httpResponse, $response->body, 'ProductModel');
        return ApiResponse::createFromContext($response->body, $deserializedResponse, $_httpContext);
    }

    /**
     * Array access utility method
     * @param  array          $arr         Array of values to read from
     * @param  string         $key         Key to get the value from the array
     * @param  mixed|null     $default     Default value to use if the key was not found
     * @return mixed
     */
    private function val(array $arr, string $key, $default = null)
    {
        if (isset($arr[$key])) {
            return is_bool($arr[$key]) ? var_export($arr[$key], true) : $arr[$key];
        }
        return $default;
    }
}
