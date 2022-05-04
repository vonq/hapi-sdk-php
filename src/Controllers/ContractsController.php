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

class ContractsController extends BaseController
{
    public function __construct(ConfigurationInterface $config, array $authManagers, ?HttpCallBack $httpCallBack)
    {
        parent::__construct($config, $authManagers, $httpCallBack);
    }

    /**
     * This endpoint exposes a list of channels with support for contracts. For all of the required
     * details for creating a contract or a campaign for each channel, please call the "Retrieve details
     * for channel with support for contracts".
     *
     * @param string|null $search A search term.
     * @param int|null $limit Number of results to return per page.
     * @param int|null $offset The initial index from which to return the results.
     * @param string|null $acceptLanguage The language the client prefers.
     *
     * @return Models\ListChannelsResponseModel Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listChannels(
        ?string $search = null,
        ?int $limit = null,
        ?int $offset = null,
        ?string $acceptLanguage = null
    ): Models\ListChannelsResponseModel {
        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri() . '/products/channels/mocs/';

        //process query parameters
        ApiHelper::appendUrlWithQueryParameters($_queryUrl, [
            'search'          => $search,
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
        return ApiHelper::mapClass($_httpRequest, $_httpResponse, $response->body, 'ListChannelsResponseModel');
    }

    /**
     * This endpoint exposes the details of a channel with support for contracts,as well as all the
     * required details for creating a contract or a campaign for each channel.
     *
     * @param string $channelId ID of the channel
     * @param string|null $acceptLanguage The language the client prefers.
     *
     * @return Models\ChannelModel Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function retrieveChannel(string $channelId, ?string $acceptLanguage = null): Models\ChannelModel
    {
        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri() . '/products/channels/mocs/{channel_id}';

        //process template parameters
        $_queryUrl = ApiHelper::appendUrlWithTemplateParameters($_queryUrl, [
            'channel_id'      => $channelId,
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
        return ApiHelper::mapClass($_httpRequest, $_httpResponse, $response->body, 'ChannelModel');
    }

    /**
     * This endpoint exposes a list of contract available to a particular customer.
     *
     * @param string $xCustomerId An identifier for the remote customer
     * @param float|null $limit Amount of contracts returned
     * @param float|null $offset Starting point
     *
     * @return Models\ListContractsResponseModel Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listContracts(
        string $xCustomerId,
        ?float $limit = null,
        ?float $offset = null
    ): Models\ListContractsResponseModel {
        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri() . '/contracts/';

        //process query parameters
        ApiHelper::appendUrlWithQueryParameters($_queryUrl, [
            'limit'         => $limit,
            'offset'        => $offset,
        ]);

        //prepare headers
        $_headers = [
            'user-agent'    => self::$userAgent,
            'Accept'        => 'application/json',
            'X-Customer-Id'   => $xCustomerId
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
        return ApiHelper::mapClass($_httpRequest, $_httpResponse, $response->body, 'ListContractsResponseModel');
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
     * @param string $xCustomerId An identifier for the remote customer
     * @param Models\PostContractModel $body
     *
     * @return Models\CreateContractResponseModel Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createContract(
        string $xCustomerId,
        Models\PostContractModel $body
    ): Models\CreateContractResponseModel {
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

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        // Enable or disable SSL certificate validation
        Request::verifyPeer(!$this->config->getSkipSslVerification());

        // and invoke the API call request to fetch the response
        try {
            $response = Request::post($_httpRequest->getQueryUrl(), $_httpRequest->getHeaders(), $_bodyJson);
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
        return ApiHelper::mapClass($_httpRequest, $_httpResponse, $response->body, 'CreateContractResponseModel');
    }

    /**
     * This endpoint deletes a contract.
     *
     * HAPI doesn't support contract editing, because job boards require the same credentials to be able
     * to delete already posted jobs via that contract at a later moment. Otherwise, deleting jobs would
     * not be possible. To edit contract credentials, the credentials need to be deleted first, and then
     * recreated. When deleted, all corresponding jobs can't be deleted anymore
     *
     * @param string $contractId
     * @param string $xCustomerId An identifier for the remote customer
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

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        // Enable or disable SSL certificate validation
        Request::verifyPeer(!$this->config->getSkipSslVerification());

        // and invoke the API call request to fetch the response
        try {
            $response = Request::delete($_httpRequest->getQueryUrl(), $_httpRequest->getHeaders());
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
    }

    /**
     * This endpoint retrieves the detail for a customer contract. It contains a reference to a channel,
     * an (encrypted) credential payload, and the facets set for the My Contracts product.
     *
     * @param string $contractId
     * @param string $xCustomerId An identifier for the remote customer
     *
     * @return Models\ContractModel Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function retrieveContract(string $contractId, string $xCustomerId): Models\ContractModel
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
        return ApiHelper::mapClass($_httpRequest, $_httpResponse, $response->body, 'ContractModel');
    }

    /**
     * This endpoint exposes a list of multiple contracts, if available to a specific customer.
     *
     * @param string[] $contractsIds
     * @param float|null $limit Amount of contracts returned
     * @param float|null $offset Starting point
     *
     * @return Models\MultipleContractsResponseModel Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function retrieveMultipleContracts(
        array $contractsIds,
        ?float $limit = null,
        ?float $offset = null
    ): Models\MultipleContractsResponseModel {
        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri() . '/contracts/multiple/{contracts_ids}/';

        //process template parameters
        $_queryUrl = ApiHelper::appendUrlWithTemplateParameters($_queryUrl, [
            'contracts_ids' => $contractsIds,
        ]);

        //process query parameters
        ApiHelper::appendUrlWithQueryParameters($_queryUrl, [
            'limit'         => $limit,
            'offset'        => $offset,
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
        return ApiHelper::mapClass($_httpRequest, $_httpResponse, $response->body, 'MultipleContractsResponseModel');
    }

    /**
     * This endpoint exposes autocomplete items given a `channel_id` and a posting requirement name.
     *
     * @param float $channelId channel_id (number, required)
     * @param string $postingRequirementName
     * @param Models\FacetAutocompleteModel $body
     *
     * @return Models\AutocompleteValuesResponseModel[] Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listAutocompleteValues(
        float $channelId,
        string $postingRequirementName,
        Models\FacetAutocompleteModel $body
    ): array {
        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri() .
            '/contracts/posting-requirements/{channel_id}/{posting-requirement-name}/';

        //process template parameters
        $_queryUrl = ApiHelper::appendUrlWithTemplateParameters($_queryUrl, [
            'channel_id'               => $channelId,
            'posting-requirement-name' => $postingRequirementName,
        ]);

        //prepare headers
        $_headers = [
            'user-agent'             => self::$userAgent,
            'Accept'                 => 'application/json',
            'Content-Type'             => 'application/json'
        ];

        //json encode body
        $_bodyJson = ApiHelper::serialize($body);

        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        // Enable or disable SSL certificate validation
        Request::verifyPeer(!$this->config->getSkipSslVerification());

        // and invoke the API call request to fetch the response
        try {
            $response = Request::post($_httpRequest->getQueryUrl(), $_httpRequest->getHeaders(), $_bodyJson);
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
}
