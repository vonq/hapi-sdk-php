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

class ContractGroupsController extends BaseController
{
    public function __construct(ConfigurationInterface $config, array $authManagers, ?HttpCallBack $httpCallBack)
    {
        parent::__construct($config, $authManagers, $httpCallBack);
    }

    /**
     * This endpoint exposes the list of contract groups
     *
     * @param string $xCustomerId In order to identify the ATS end-user, some requests (to HAPI Job
     *        Post in particular) require this header. You need to provide this to be able to work
     *        with Contracts functionality (adding contract, retrieving channels, ordering
     *        campaigns with contracts).
     * @param string|null $ordering Which field to use when ordering the results.
     * @param string|null $search A search term.
     *
     * @return Models\ContractGroupModel[] Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listContractsGroups(string $xCustomerId, ?string $ordering = null, ?string $search = null): array
    {
        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri() . '/igb/contracts/groups/';

        //process query parameters
        ApiHelper::appendUrlWithQueryParameters($_queryUrl, [
            'ordering'      => $ordering,
            'search'        => $search,
        ]);

        //prepare headers
        $_headers = [
            'user-agent'    => self::$userAgent,
            'Accept'        => 'application/json',
            'X-Customer-Id'   => $xCustomerId
        ];

        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);

        // Apply authorization to request
        $this->getAuthManager('global')->apply($_httpRequest);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        // Enable or disable SSL certificate validation
        self::$request->verifyPeer(!$this->config->getSkipSslVerification());

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
        return ApiHelper::mapClass($_httpRequest, $_httpResponse, $response->body, 'ContractGroupModel', 1);
    }

    /**
     * This endpoint allows to create a new contract group
     *
     * @param string $xCustomerId In order to identify the ATS end-user, some requests (to HAPI Job
     *        Post in particular) require this header. You need to provide this to be able to work
     *        with Contracts functionality (adding contract, retrieving channels, ordering
     *        campaigns with contracts).
     * @param Models\ContractGroupRequestModel|null $body
     *
     * @return Models\ContractGroupModel Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createContractsGroup(
        string $xCustomerId,
        ?Models\ContractGroupRequestModel $body = null
    ): Models\ContractGroupModel {
        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri() . '/igb/contracts/groups/';

        //prepare headers
        $_headers = [
            'user-agent'    => self::$userAgent,
            'Accept'        => 'application/json',
            'X-Customer-Id'   => $xCustomerId,
            'Content-Type'    => 'application/json'
        ];

        //json encode body
        $_bodyJson = ApiHelper::serialize($body);

        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);

        // Apply authorization to request
        $this->getAuthManager('global')->apply($_httpRequest);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        // Enable or disable SSL certificate validation
        self::$request->verifyPeer(!$this->config->getSkipSslVerification());

        // and invoke the API call request to fetch the response
        try {
            $response = self::$request->post($_httpRequest->getQueryUrl(), $_httpRequest->getHeaders(), $_bodyJson);
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
                '\\HAPILib\\Exceptions\\ContractGroupValidationErrorException',
                'Bad Request',
                $_httpRequest,
                $_httpResponse
            );
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpRequest);
        return ApiHelper::mapClass($_httpRequest, $_httpResponse, $response->body, 'ContractGroupModel');
    }

    /**
     * Returns the details of the Contract Group by index/idx
     *
     * @param string $groupIdx The countract group ID
     * @param string $xCustomerId In order to identify the ATS end-user, some requests (to HAPI Job
     *        Post in particular) require this header. You need to provide this to be able to work
     *        with Contracts functionality (adding contract, retrieving channels, ordering
     *        campaigns with contracts).
     *
     * @return Models\ContractGroupModel Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function getContractGroup(string $groupIdx, string $xCustomerId): Models\ContractGroupModel
    {
        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri() . '/igb/contracts/groups/{group_idx}/';

        //process template parameters
        $_queryUrl = ApiHelper::appendUrlWithTemplateParameters($_queryUrl, [
            'group_idx'     => $groupIdx,
        ]);

        //prepare headers
        $_headers = [
            'user-agent'    => self::$userAgent,
            'Accept'        => 'application/json',
            'X-Customer-Id'   => $xCustomerId
        ];

        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);

        // Apply authorization to request
        $this->getAuthManager('global')->apply($_httpRequest);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        // Enable or disable SSL certificate validation
        self::$request->verifyPeer(!$this->config->getSkipSslVerification());

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
                '\\HAPILib\\Exceptions\\GenericErrorWithDetailException',
                'Not Found',
                $_httpRequest,
                $_httpResponse
            );
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpRequest);
        return ApiHelper::mapClass($_httpRequest, $_httpResponse, $response->body, 'ContractGroupModel');
    }

    /**
     * Deletes a contract Contract Group by idx.
     * Groups with idx=0 or associated to contracts can't be deleted.
     *
     * @param string $groupIdx The countract group ID
     * @param string $xCustomerId In order to identify the ATS end-user, some requests (to HAPI Job
     *        Post in particular) require this header. You need to provide this to be able to work
     *        with Contracts functionality (adding contract, retrieving channels, ordering
     *        campaigns with contracts).
     *
     * @return void Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function deleteContractGroup(string $groupIdx, string $xCustomerId): void
    {
        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri() . '/igb/contracts/groups/{group_idx}/';

        //process template parameters
        $_queryUrl = ApiHelper::appendUrlWithTemplateParameters($_queryUrl, [
            'group_idx'     => $groupIdx,
        ]);

        //prepare headers
        $_headers = [
            'user-agent'    => self::$userAgent,
            'X-Customer-Id'   => $xCustomerId
        ];

        $_httpRequest = new HttpRequest(HttpMethod::DELETE, $_headers, $_queryUrl);

        // Apply authorization to request
        $this->getAuthManager('global')->apply($_httpRequest);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        // Enable or disable SSL certificate validation
        self::$request->verifyPeer(!$this->config->getSkipSslVerification());

        // and invoke the API call request to fetch the response
        try {
            $response = self::$request->delete($_httpRequest->getQueryUrl(), $_httpRequest->getHeaders());
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
            throw new ApiException('Bad Request', $_httpRequest, $_httpResponse);
        }

        if ($response->code == 404) {
            throw $this->createExceptionFromJson(
                '\\HAPILib\\Exceptions\\GenericErrorWithDetailException',
                'Not Found',
                $_httpRequest,
                $_httpResponse
            );
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpRequest);
    }

    /**
     * Allows updating the contract group name
     *
     * @param string $groupIdx The countract group ID
     * @param string $xCustomerId In order to identify the ATS end-user, some requests (to HAPI Job
     *        Post in particular) require this header. You need to provide this to be able to work
     *        with Contracts functionality (adding contract, retrieving channels, ordering
     *        campaigns with contracts).
     * @param Models\ContractGroupRequestModel|null $body
     *
     * @return Models\ContractGroupModel Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function updateContractGroup(
        string $groupIdx,
        string $xCustomerId,
        ?Models\ContractGroupRequestModel $body = null
    ): Models\ContractGroupModel {
        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri() . '/igb/contracts/groups/{group_idx}/';

        //process template parameters
        $_queryUrl = ApiHelper::appendUrlWithTemplateParameters($_queryUrl, [
            'group_idx'     => $groupIdx,
        ]);

        //prepare headers
        $_headers = [
            'user-agent'    => self::$userAgent,
            'Accept'        => 'application/json',
            'X-Customer-Id'   => $xCustomerId,
            'Content-Type'    => 'application/json'
        ];

        //json encode body
        $_bodyJson = ApiHelper::serialize($body);

        $_httpRequest = new HttpRequest(HttpMethod::PUT, $_headers, $_queryUrl);

        // Apply authorization to request
        $this->getAuthManager('global')->apply($_httpRequest);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        // Enable or disable SSL certificate validation
        self::$request->verifyPeer(!$this->config->getSkipSslVerification());

        // and invoke the API call request to fetch the response
        try {
            $response = self::$request->put($_httpRequest->getQueryUrl(), $_httpRequest->getHeaders(), $_bodyJson);
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
                '\\HAPILib\\Exceptions\\ContractGroupValidationErrorException',
                'Bad Request',
                $_httpRequest,
                $_httpResponse
            );
        }

        if ($response->code == 404) {
            throw $this->createExceptionFromJson(
                '\\HAPILib\\Exceptions\\GenericErrorWithDetailException',
                'Not Found',
                $_httpRequest,
                $_httpResponse
            );
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpRequest);
        return ApiHelper::mapClass($_httpRequest, $_httpResponse, $response->body, 'ContractGroupModel');
    }

    /**
     * Allows updating the contract group name
     *
     * @param string $groupIdx The countract group ID
     * @param string $xCustomerId In order to identify the ATS end-user, some requests (to HAPI Job
     *        Post in particular) require this header. You need to provide this to be able to work
     *        with Contracts functionality (adding contract, retrieving channels, ordering
     *        campaigns with contracts).
     * @param Models\ContractGroupRequestModel|null $body
     *
     * @return Models\ContractGroupModel Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function partialUpdateContractGroup(
        string $groupIdx,
        string $xCustomerId,
        ?Models\ContractGroupRequestModel $body = null
    ): Models\ContractGroupModel {
        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri() . '/igb/contracts/groups/{group_idx}/';

        //process template parameters
        $_queryUrl = ApiHelper::appendUrlWithTemplateParameters($_queryUrl, [
            'group_idx'     => $groupIdx,
        ]);

        //prepare headers
        $_headers = [
            'user-agent'    => self::$userAgent,
            'Accept'        => 'application/json',
            'X-Customer-Id'   => $xCustomerId,
            'Content-Type'    => 'application/json'
        ];

        //json encode body
        $_bodyJson = ApiHelper::serialize($body);

        $_httpRequest = new HttpRequest(HttpMethod::PATCH, $_headers, $_queryUrl);

        // Apply authorization to request
        $this->getAuthManager('global')->apply($_httpRequest);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        // Enable or disable SSL certificate validation
        self::$request->verifyPeer(!$this->config->getSkipSslVerification());

        // and invoke the API call request to fetch the response
        try {
            $response = self::$request->patch($_httpRequest->getQueryUrl(), $_httpRequest->getHeaders(), $_bodyJson);
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
                '\\HAPILib\\Exceptions\\ContractGroupValidationErrorException',
                'Bad Request',
                $_httpRequest,
                $_httpResponse
            );
        }

        if ($response->code == 404) {
            throw $this->createExceptionFromJson(
                '\\HAPILib\\Exceptions\\GenericErrorWithDetailException',
                'Not Found',
                $_httpRequest,
                $_httpResponse
            );
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpRequest);
        return ApiHelper::mapClass($_httpRequest, $_httpResponse, $response->body, 'ContractGroupModel');
    }
}