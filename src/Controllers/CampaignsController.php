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

class CampaignsController extends BaseController
{
    public function __construct(ConfigurationInterface $config, array $authManagers, ?HttpCallBack $httpCallBack)
    {
        parent::__construct($config, $authManagers, $httpCallBack);
    }

    /**
     * Once your Customer has decided on a list of Channels they would like to buy, you can send the list
     * along with
     * publishing information as a `POST` request in order to create a `Campaign`. In return, you'll
     * receive
     * the id of the newly created `Campaign` along with the URL where you can access that Campaign
     * information.
     * For "My Contracts" type of Products, there is no expiration. The vacancy can be taken offline either
     * by the job board or manually, by calling the "[Take a campaign offline](https://vonq.stoplight.
     * io/docs/hapi/b3A6MzM0NDA3MzQ-take-a-campaign-offline)" endpoint.
     *
     * #### Target group
     *
     * You should use the following endpoints for the target group information:
     *
     * - [**`Industry`**](b3A6MzM0NDA3Mzg-industry-names)
     *
     * - [**`Job Function`**](b3A6MzM0NDA3MzU-job-functions)
     *
     * - [**`Education Level`**](b3A6MzM0NDA3Mzk-retrieve-education-level-taxonomy)
     *
     * - [**`Seniority`**](b3A6MzM0NDA3NDA-retrieve-seniority-taxonomy)
     *
     * @param Models\CampaignOrderModel $body
     * @param string|null $companyId
     * @param string|null $limit
     * @param string|null $offset
     * @param string|null $xCustomerId The ID of the end-user creating the order. Only required if
     *        you are using HAPI Job Post and creating orders with contracts.
     *
     * @return Models\OrderCampaignSuccessResponseModel Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function orderCampaign(
        Models\CampaignOrderModel $body,
        ?string $companyId = null,
        ?string $limit = null,
        ?string $offset = null,
        ?string $xCustomerId = null
    ): Models\OrderCampaignSuccessResponseModel {
        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri() . '/campaigns/order';

        //process query parameters
        ApiHelper::appendUrlWithQueryParameters($_queryUrl, [
            'companyId'     => $companyId,
            'limit'         => $limit,
            'offset'        => $offset,
        ]);

        //prepare headers
        $_headers = [
            'user-agent'    => self::$userAgent,
            'Accept'        => 'application/json',
            'Content-Type'    => 'application/json',
            'X-Customer-Id'   => $xCustomerId
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
            throw $this->createExceptionFromJson(
                '\\HAPILib\\Exceptions\\OrderCampaignErrorResponseException',
                '',
                $_httpRequest,
                $_httpResponse
            );
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpRequest);
        return ApiHelper::mapClass($_httpRequest, $_httpResponse, $response->body, 'OrderCampaignSuccessResponseModel');
    }

    /**
     * Displays all the existing Campaigns already ordered for this Partner is as simple as executing a
     * `GET`
     * request against the endpoint `/campaigns`
     *
     * @param string $companyId CompanyId to filter the results on
     * @param float|null $limit Amount of products returned
     * @param float|null $offset Starting point
     *
     * @return Models\ResultSet1Model Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listCampaigns(
        string $companyId,
        ?float $limit = null,
        ?float $offset = null
    ): Models\ResultSet1Model {
        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri() . '/campaings';

        //process query parameters
        ApiHelper::appendUrlWithQueryParameters($_queryUrl, [
            'companyId' => $companyId,
            'limit'     => $limit,
            'offset'    => $offset,
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
        return ApiHelper::mapClass($_httpRequest, $_httpResponse, $response->body, 'ResultSet1Model');
    }

    /**
     * Retrieve the details of a specific Campaign. Only Campaigns created by the calling Partner can be
     * retrieved.
     *
     * @param string $campaignId Id of the Campaign that you want to retrieve
     *
     * @return Models\ListCampaignResponseModel Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function retrieveCampaign(string $campaignId): Models\ListCampaignResponseModel
    {
        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri() . '/campaigns/{campaignId}';

        //process template parameters
        $_queryUrl = ApiHelper::appendUrlWithTemplateParameters($_queryUrl, [
            'campaignId' => $campaignId,
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
        return ApiHelper::mapClass($_httpRequest, $_httpResponse, $response->body, 'ListCampaignResponseModel');
    }

    /**
     * This is a specialized endpoint for Campaign statuses only. Although the Campaign Details endpoint
     * also returns the
     * status of a campaign, if you only need to get the specific status of a Campaign, this endpoint is
     * optimized for that.
     *
     * @param string $campaignId Id of the Campaign you want the status of
     *
     * @return Models\CheckCampaignStatusresponseModel Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function checkCampaignStatus(string $campaignId): Models\CheckCampaignStatusresponseModel
    {
        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri() . '/campaigns/{campaignId}/status';

        //process template parameters
        $_queryUrl = ApiHelper::appendUrlWithTemplateParameters($_queryUrl, [
            'campaignId' => $campaignId,
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
        return ApiHelper::mapClass($_httpRequest, $_httpResponse, $response->body, 'CheckCampaignStatusresponseModel');
    }

    /**
     * Specific endpoint to take a campaign offline. Keep in mind that processing this might
     * take some time and it only has an effect if the campaign's status is "online".
     *
     * @param string $campaignId Id of the Campaign you want to take offline
     * @param Models\TakeCampaignOfflineRequestModel $body
     *
     * @return Models\TakeCampaignOfflineResponseModel Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function takeCampaignOffline(
        string $campaignId,
        Models\TakeCampaignOfflineRequestModel $body
    ): Models\TakeCampaignOfflineResponseModel {
        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri() . '/campaigns/{campaignId}/cancellation';

        //process template parameters
        $_queryUrl = ApiHelper::appendUrlWithTemplateParameters($_queryUrl, [
            'campaignId'   => $campaignId,
        ]);

        //prepare headers
        $_headers = [
            'user-agent'    => self::$userAgent,
            'Accept'        => 'application/json',
            'Content-Type'    => 'application/json'
        ];

        //json encode body
        $_bodyJson = ApiHelper::serialize($body);

        $_httpRequest = new HttpRequest(HttpMethod::PUT, $_headers, $_queryUrl);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        // Enable or disable SSL certificate validation
        Request::verifyPeer(!$this->config->getSkipSslVerification());

        // and invoke the API call request to fetch the response
        try {
            $response = Request::put($_httpRequest->getQueryUrl(), $_httpRequest->getHeaders(), $_bodyJson);
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
                '\\HAPILib\\Exceptions\\TakeCampaignOfflineErrorResponse2Exception',
                '',
                $_httpRequest,
                $_httpResponse
            );
        }

        if ($response->code == 404) {
            throw $this->createExceptionFromJson(
                '\\HAPILib\\Exceptions\\TakeCampaignOfflineErrorResponseException',
                '',
                $_httpRequest,
                $_httpResponse
            );
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpRequest);
        return ApiHelper::mapClass($_httpRequest, $_httpResponse, $response->body, 'TakeCampaignOfflineResponseModel');
    }
}
