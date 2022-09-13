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

class ContractsController extends BaseController
{
    public function __construct(ConfigurationInterface $config, array $authManagers, ?HttpCallBack $httpCallBack)
    {
        parent::__construct($config, $authManagers, $httpCallBack);
    }

    /**
     * This endpoint exposes a list of contract available to a particular customer.
     *
     * @param string $xCustomerId In order to identify the ATS end-user, some requests (to HAPI Job
     *        Post in particular) require this header. You need to provide this to be able to work
     *        with Contracts functionality (adding contract, retrieving channels, ordering
     *        campaigns with contracts).
     * @param int|null $limit Number of results to return per page.
     * @param int|null $offset The initial index from which to return the results.
     *
     * @return Models\PaginatedContractListModel Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listContracts(
        string $xCustomerId,
        ?int $limit = 50,
        ?int $offset = 0
    ): Models\PaginatedContractListModel {
        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri() . '/contracts/';

        //process query parameters
        ApiHelper::appendUrlWithQueryParameters($_queryUrl, [
            'limit'         => (null != $limit) ?
                $limit : 50,
            'offset'        => (null != $offset) ?
                $offset : 0,
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
        return ApiHelper::mapClass($_httpRequest, $_httpResponse, $response->body, 'PaginatedContractListModel');
    }

    /**
     * This endpoint creates a new customer contract. It requires a reference to a channel, a credential
     * payload, and the facets set for the contracted product.
     *
     * HAPI doesn't support contract editing, because job boards require the same credentials to be able to
     * delete already posted jobs via that contract at a later moment. Otherwise, deleting jobs would not
     * be possible. To edit contract credentials, the credentials need to be deleted first, and then
     * recreated. When deleted, all corresponding jobs can't be deleted anymore
     *
     * @param string $xCustomerId In order to identify the ATS end-user, some requests (to HAPI Job
     *        Post in particular) require this header. You need to provide this to be able to work
     *        with Contracts functionality (adding contract, retrieving channels, ordering
     *        campaigns with contracts).
     * @param Models\ContractCreateRequestModel $body
     *
     * @return Models\EncryptedContractModel Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createContract(
        string $xCustomerId,
        Models\ContractCreateRequestModel $body
    ): Models\EncryptedContractModel {
        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri() . '/contracts/';

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
                '\\HAPILib\\Exceptions\\ContractCreateRequestValidationErrorException',
                'Bad Request',
                $_httpRequest,
                $_httpResponse
            );
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpRequest);
        return ApiHelper::mapClass($_httpRequest, $_httpResponse, $response->body, 'EncryptedContractModel');
    }

    /**
     * This endpoint deletes a contract.
     *
     * HAPI doesn't support contract editing, because job boards require the same credentials to be able
     * to delete already posted jobs via that contract at a later moment. Otherwise, deleting jobs would
     * not be possible. To edit contract credentials, the credentials need to be deleted first, and then
     * recreated. When deleted, all corresponding jobs can't be deleted anymore
     *
     *
     *
     * ***Warning***:
     * Contracts with Campaign(s) whose Channel status (retrievable through the "[Check a campaign
     * status](https://vonq.stoplight.io/docs/hapi/cd5f4f9018c18-check-campaign-status)" endpoint, as
     * defined by the`orderedProductsStatus.status`) is set to `online` can be deleted, but this will
     * result the inability to [Take the campaign offline](https://vonq.stoplight.
     * io/docs/hapi/d70d556dbb9ba-take-a-campaign-offline).
     *
     * @param string $contractId The ID of the contract you want to delete
     * @param string $xCustomerId In order to identify the ATS end-user, some requests (to HAPI Job
     *        Post in particular) require this header. You need to provide this to be able to work
     *        with Contracts functionality (adding contract, retrieving channels, ordering
     *        campaigns with contracts).
     *
     * @return void Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function deleteContract(string $contractId, string $xCustomerId): void
    {
        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri() . '/contracts/{contract_id}/';

        //process template parameters
        $_queryUrl = ApiHelper::appendUrlWithTemplateParameters($_queryUrl, [
            'contract_id'   => $contractId,
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
        if ($response->code == 404) {
            throw new ApiException('Not Found', $_httpRequest, $_httpResponse);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpRequest);
    }

    /**
     * This endpoint exposes a list of multiple contracts, if available to a specific customer
     *
     * @param string[] $contractsIds Comma separated list of contract IDs
     * @param string $xCustomerId In order to identify the ATS end-user, some requests (to HAPI Job
     *        Post in particular) require this header. You need to provide this to be able to work
     *        with Contracts functionality (adding contract, retrieving channels, ordering
     *        campaigns with contracts)
     * @param int|null $limit Number of results to return per page
     * @param int|null $offset The initial index from which to return the results
     *
     * @return Models\PaginatedDetailedContractListModel Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function retrieveMultipleContracts(
        array $contractsIds,
        string $xCustomerId,
        ?int $limit = 50,
        ?int $offset = 0
    ): Models\PaginatedDetailedContractListModel {
        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri() . '/contracts/multiple/{contracts_ids}';

        //process template parameters
        $_queryUrl = ApiHelper::appendUrlWithTemplateParameters($_queryUrl, [
            'contracts_ids' => $contractsIds,
        ]);

        //process query parameters
        ApiHelper::appendUrlWithQueryParameters($_queryUrl, [
            'limit'         => (null != $limit) ?
                $limit : 50,
            'offset'        => (null != $offset) ?
                $offset : 0,
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
        return ApiHelper::mapClass(
            $_httpRequest,
            $_httpResponse,
            $response->body,
            'PaginatedDetailedContractListModel'
        );
    }

    /**
     * This endpoint exposes autocomplete items given a `channel_id` or `contract_id` and a posting
     * requirement name.
     *
     * When `channel_id` is used, the credentials are required. When using `contract_id`, since the
     * credentials were already send as part of contract creation, there is no need to pass the credentials.
     *
     * @param int $channelIdOrContractId The channel ID or contract ID
     * @param string $postingRequirementName The name of the posting requirement
     * @param string $xCustomerId In order to identify the ATS end-user, some requests (to HAPI Job
     *        Post in particular) require this header. You need to provide this to be able to work
     *        with Contracts functionality (adding contract, retrieving channels, ordering
     *        campaigns with contracts).
     * @param Models\FacetAutocompleteModel $body
     *
     * @return Models\AutocompleteValuesResponseModel[] Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listAutocompleteValues(
        int $channelIdOrContractId,
        string $postingRequirementName,
        string $xCustomerId,
        Models\FacetAutocompleteModel $body
    ): array {
        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri() .
            '/contracts/posting-requirements/{channel_id_or_contract_id}/{posting-requirement-name}/';

        //process template parameters
        $_queryUrl = ApiHelper::appendUrlWithTemplateParameters($_queryUrl, [
            'channel_id_or_contract_id' => $channelIdOrContractId,
            'posting-requirement-name'  => $postingRequirementName,
        ]);

        //prepare headers
        $_headers = [
            'user-agent'              => self::$userAgent,
            'Accept'                  => 'application/json',
            'X-Customer-Id'             => $xCustomerId,
            'Content-Type'              => 'application/json'
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
            throw new ApiException('', $_httpRequest, $_httpResponse);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpRequest);
        return ApiHelper::mapClass(
            $_httpRequest,
            $_httpResponse,
            $response->body,
            'AutocompleteValuesResponseModel',
            1
        );
    }

    /**
     * This endpoint retrieves the detail for a customer contract. It contains a reference to a channel, an
     * (encrypted) credential payload, and the facets set for the My Contracts product.
     *
     * @param string $contractId ID of the contract you want to retrieve
     * @param string $xCustomerId In order to identify the ATS end-user, some requests (to HAPI Job
     *        Post in particular) require this header. You need to provide this to be able to work
     *        with Contracts functionality (adding contract, retrieving channels, ordering
     *        campaigns with contracts).
     *
     * @return Models\EncryptedContractModel Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function retrieveContract(string $contractId, string $xCustomerId): Models\EncryptedContractModel
    {
        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri() . '/contracts/single/{contract_id}/';

        //process template parameters
        $_queryUrl = ApiHelper::appendUrlWithTemplateParameters($_queryUrl, [
            'contract_id'   => $contractId,
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
        return ApiHelper::mapClass($_httpRequest, $_httpResponse, $response->body, 'EncryptedContractModel');
    }
}
