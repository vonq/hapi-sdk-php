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

class CampaignsController extends BaseController
{
    public function __construct(ConfigurationInterface $config, array $authManagers, ?HttpCallBack $httpCallBack)
    {
        parent::__construct($config, $authManagers, $httpCallBack);
    }

    /**
     * Displays all the existing Campaigns already ordered for this Partner is as simple as executing a
     * `GET`
     * request against the endpoint `/campaigns`
     *
     * @param string|null $companyId CompanyId to filter the results on
     * @param int|null $limit Number of results to return per page.
     * @param int|null $offset The initial index from which to return the results.
     *
     * @return Models\PaginatedCampaignListModel Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listCampaigns(
        ?string $companyId = null,
        ?int $limit = null,
        ?int $offset = null
    ): Models\PaginatedCampaignListModel {
        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri() . '/campaigns';

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
        return ApiHelper::mapClass($_httpRequest, $_httpResponse, $response->body, 'PaginatedCampaignListModel');
    }

    /**
     * Retrieve the details of a specific Campaign. Only Campaigns created by the calling Partner can be
     * retrieved.
     *
     * @param string $campaignId ID of the campaign you want to retrieve or take action on
     *
     * @return Models\CampaignDataModel Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function retrieveCampaign(string $campaignId): Models\CampaignDataModel
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
        if ($response->code == 400) {
            throw $this->createExceptionFromJson(
                '\\HAPILib\\Exceptions\\GenericErrorException',
                'Bad Request',
                $_httpRequest,
                $_httpResponse
            );
        }

        if ($response->code == 404) {
            throw new ApiException('Not Found', $_httpRequest, $_httpResponse);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpRequest);
        return ApiHelper::mapClass($_httpRequest, $_httpResponse, $response->body, 'CampaignDataModel');
    }

    /**
     * Specific endpoint to take a campaign offline. Keep in mind that processing this might
     * take some time and it only has an effect if the campaign's status is "online".
     *
     * @param string $campaignId ID of the campaign you want to retrieve or take action on
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
                '\\HAPILib\\Exceptions\\TakeCampaignOfflineBadRequestErrorResponseException',
                '',
                $_httpRequest,
                $_httpResponse
            );
        }

        if ($response->code == 404) {
            throw $this->createExceptionFromJson(
                '\\HAPILib\\Exceptions\\TakeCampaignOfflineNotFoundErrorResponseException',
                '',
                $_httpRequest,
                $_httpResponse
            );
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpRequest);
        return ApiHelper::mapClass($_httpRequest, $_httpResponse, $response->body, 'TakeCampaignOfflineResponseModel');
    }

    /**
     * This is a specialized endpoint for Campaign statuses only. Although the Campaign Details endpoint
     * also returns the
     * status of a campaign, if you only need to get the specific status of a Campaign, this endpoint is
     * optimized for that.
     *
     * @param string $campaignId ID of the campaign you want to retrieve or take action on
     *
     * @return Models\CampaignStatusResponseModel Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function checkCampaignStatus(string $campaignId): Models\CampaignStatusResponseModel
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
        if ($response->code == 400) {
            throw $this->createExceptionFromJson(
                '\\HAPILib\\Exceptions\\GenericErrorException',
                'Bad Request',
                $_httpRequest,
                $_httpResponse
            );
        }

        if ($response->code == 404) {
            throw new ApiException('Not Found', $_httpRequest, $_httpResponse);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpRequest);
        return ApiHelper::mapClass($_httpRequest, $_httpResponse, $response->body, 'CampaignStatusResponseModel');
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
     * @param string $xCustomerId In order to identify the ATS end-user, some requests (to HAPI Job
     *        Post in particular) require this header. You need to provide this to be able to work
     *        with Contracts functionality (adding contract, retrieving channels, ordering
     *        campaigns with contracts).
     * @param Models\CampaignCreateRequestModel $body
     *
     * @return Models\LimitedCampaignModel Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function orderCampaign(
        string $xCustomerId,
        Models\CampaignCreateRequestModel $body
    ): Models\LimitedCampaignModel {
        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri() . '/campaigns/order';

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
                '\\HAPILib\\Exceptions\\OrderCampaignErrorResponseException',
                '',
                $_httpRequest,
                $_httpResponse
            );
        }

        if ($response->code == 403) {
            throw $this->createExceptionFromJson(
                '\\HAPILib\\Exceptions\\GenericErrorException',
                'Forbidden',
                $_httpRequest,
                $_httpResponse
            );
        }

        if ($response->code == 422) {
            throw $this->createExceptionFromJson(
                '\\HAPILib\\Exceptions\\OrderCampaignErrorResponseException',
                'Unprocessable Entity',
                $_httpRequest,
                $_httpResponse
            );
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpRequest);
        return ApiHelper::mapClass($_httpRequest, $_httpResponse, $response->body, 'LimitedCampaignModel');
    }

    /**
     * This endpoint allows to validate the full campaign payload prior to sending it to the ordering
     * endpoint.
     *
     * This combines the other two validation endpoints Validate vacancy info and Validate posting
     * requirements.
     *
     * Depending on the results, in case of no errors, a 200 status code will be returned; otherwise a 422
     * Unprocessable Entity response with a similarly shaped error object.
     *
     * Check our implementation guide for more explanations.
     *
     * @param string $xCustomerId In order to identify the ATS end-user, some requests (to HAPI Job
     *        Post in particular) require this header. You need to provide this to be able to work
     *        with Contracts functionality (adding contract, retrieving channels, ordering
     *        campaigns with contracts).
     * @param Models\CampaignValidationRequestModel|null $body
     *
     * @return Models\CampaignValidationModel Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function postCampaignsValidateCampaign(
        string $xCustomerId,
        ?Models\CampaignValidationRequestModel $body = null
    ): Models\CampaignValidationModel {
        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri() . '/campaigns/validate-campaign/';

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
        if ($response->code == 422) {
            throw $this->createExceptionFromJson(
                '\\HAPILib\\Exceptions\\CampaignValidationErrorException',
                'Validation error  Sample response: ```json {   "errors": {     "orderedProductsSpecs' .
                '": [       {         "credentials": {},         "posting_requirements": {           ' .
                '"titre": "The field \\"Titre\\" must have a value"         }       }     ],     "curre' .
                'ncy": ["This field is required."],     "postingDetails": {       "title": ["This fie' .
                'ld is required."],       ...     }   },   "has_errors": true } ```',
                $_httpRequest,
                $_httpResponse
            );
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpRequest);
        return ApiHelper::mapClass($_httpRequest, $_httpResponse, $response->body, 'CampaignValidationModel');
    }

    /**
     * This endpoint allows for validating the product requirements for a contract and product combination
     * that would be generally sent as part of the campaign payload to the campaign ordering endpoint.
     *
     * Depending on the results, in case of no errors, a 200 status code will be returned; otherwise a 422
     * Unprocessable Entity response with a similarly shaped error object.
     *
     * Check our implementation guide for more explanations.
     *
     * @param string $xCustomerId In order to identify the ATS end-user, some requests (to HAPI Job
     *        Post in particular) require this header. You need to provide this to be able to work
     *        with Contracts functionality (adding contract, retrieving channels, ordering
     *        campaigns with contracts).
     * @param Models\ProductValidationRequestModel|null $body
     *
     * @return Models\ProductValidationModel Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function postCampaignsValidateChannelPosting(
        string $xCustomerId,
        ?Models\ProductValidationRequestModel $body = null
    ): Models\ProductValidationModel {
        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri() . '/campaigns/validate-channel-posting/';

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
        if ($response->code == 422) {
            throw $this->createExceptionFromJson(
                '\\HAPILib\\Exceptions\\ProductValidationErrorException',
                'Validation error  Sample response: ```json {   "errors": {     "credentials": {     ' .
                '   "api_username" : "This field is required"     },     "posting_requirements": {   ' .
                '    "typeContrat": "The field \\"Type contrat\\" must have a value",       "dureeTrava' .
                'il": "The field \\"Hours\\" must have a value"     }   },   "has_errors": true } ```',
                $_httpRequest,
                $_httpResponse
            );
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpRequest);
        return ApiHelper::mapClass($_httpRequest, $_httpResponse, $response->body, 'ProductValidationModel');
    }

    /**
     * This endpoint offers the possibility to validate the campaign common fields before sending them to
     * the campaign ordering endpoint.
     *
     * Depending on the results, in case of no errors, a 200 status code will be returned; otherwise a 422
     * Unprocessable Entity response with a similarly shaped error object.
     *
     * Check our implementation guide for more explanations.
     *
     * @param string $xCustomerId In order to identify the ATS end-user, some requests (to HAPI Job
     *        Post in particular) require this header. You need to provide this to be able to work
     *        with Contracts functionality (adding contract, retrieving channels, ordering
     *        campaigns with contracts).
     * @param Models\VacancyValidationRequestModel|null $body
     *
     * @return Models\VacancyValidationModel Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function postCampaignsValidateVacancyInfo(
        string $xCustomerId,
        ?Models\VacancyValidationRequestModel $body = null
    ): Models\VacancyValidationModel {
        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri() . '/campaigns/validate-vacancy-info/';

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
        if ($response->code == 422) {
            throw new ApiException(
                'Validation error  Sample response: ```json {   "errors": {     "postingDetails": {  ' .
                '     "title": [         "This field is required."       ],       "organization": {  ' .
                '       "companyLogo": [           "The remote file does not apear to exist"         ' .
                ']       }     },     "targetGroup": {       "seniority": [         {           "vonq' .
                'Id": [             "VonqId 999 not found"           ]         }       ]     }   },  ' .
                ' "has_errors": true } ```',
                $_httpRequest,
                $_httpResponse
            );
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpRequest);
        return ApiHelper::mapClass($_httpRequest, $_httpResponse, $response->body, 'VacancyValidationModel');
    }
}
