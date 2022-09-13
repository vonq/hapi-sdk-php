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
use HAPI\Http\ApiResponse;
use HAPI\Http\HttpRequest;
use HAPI\Http\HttpResponse;
use HAPI\Http\HttpMethod;
use HAPI\Http\HttpContext;
use HAPI\Http\HttpCallBack;

class CampaignsTrue extends BaseTrue
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
     * @param array $options Array with all options for search
     *
     * @return ApiResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listCampaigns(array $options): ApiResponse
    {
        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri() . '/campaigns';

        //process query parameters
        ApiHelper::appendUrlWithQueryParameters($_queryUrl, [
            'companyId' => $this->val($options, 'companyId'),
            'limit'     => $this->val($options, 'limit'),
            'offset'    => $this->val($options, 'offset'),
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
            'PaginatedCampaignListModel'
        );
        return ApiResponse::createFromContext($response->body, $deserializedResponse, $_httpContext);
    }

    /**
     * Retrieve the details of a specific Campaign. Only Campaigns created by the calling Partner can be
     * retrieved.
     *
     * @param string $campaignId ID of the campaign you want to retrieve or take action on
     *
     * @return ApiResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function retrieveCampaign(string $campaignId): ApiResponse
    {
        //check that all required arguments are provided
        if (!isset($campaignId)) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }

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
            throw new ApiException('Not Found', $_httpRequest, $_httpResponse);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpRequest);
        $deserializedResponse = ApiHelper::mapClass(
            $_httpRequest,
            $_httpResponse,
            $response->body,
            'CampaignDataModel'
        );
        return ApiResponse::createFromContext($response->body, $deserializedResponse, $_httpContext);
    }

    /**
     * Specific endpoint to take a campaign offline. Keep in mind that processing this might
     * take some time and it only has an effect if the campaign's status is "online".
     *
     * @param array $options Array with all options for search
     *
     * @return ApiResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function takeCampaignOffline(array $options): ApiResponse
    {
        //check that all required arguments are provided
        if (!isset($options['campaignId'], $options['body'])) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }

        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri() . '/campaigns/{campaignId}/cancellation';

        //process template parameters
        $_queryUrl = ApiHelper::appendUrlWithTemplateParameters($_queryUrl, [
            'campaignId'   => $this->val($options, 'campaignId'),
        ]);

        //prepare headers
        $_headers = [
            'user-agent'    => self::$userAgent,
            'Accept'        => 'application/json',
            'Content-Type'    => 'application/json'
        ];

        //json encode body
        $_bodyJson = ApiHelper::serialize($this->val($options, 'body'));

        $_httpRequest = new HttpRequest(HttpMethod::PUT, $_headers, $_queryUrl);

        // Apply authorization to request
        $this->getAuthManager('global')->apply($_httpRequest);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

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
                '\\HAPI\\Exceptions\\TakeCampaignOfflineBadRequestErrorResponseException',
                '',
                $_httpRequest,
                $_httpResponse
            );
        }

        if ($response->code == 404) {
            throw $this->createExceptionFromJson(
                '\\HAPI\\Exceptions\\TakeCampaignOfflineNotFoundErrorResponseException',
                '',
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
            'TakeCampaignOfflineResponseModel'
        );
        return ApiResponse::createFromContext($response->body, $deserializedResponse, $_httpContext);
    }

    /**
     * This is a specialized endpoint for Campaign statuses only. Although the Campaign Details endpoint
     * also returns the
     * status of a campaign, if you only need to get the specific status of a Campaign, this endpoint is
     * optimized for that.
     *
     * @param string $campaignId ID of the campaign you want to retrieve or take action on
     *
     * @return ApiResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function checkCampaignStatus(string $campaignId): ApiResponse
    {
        //check that all required arguments are provided
        if (!isset($campaignId)) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }

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
            throw new ApiException('Not Found', $_httpRequest, $_httpResponse);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpRequest);
        $deserializedResponse = ApiHelper::mapClass(
            $_httpRequest,
            $_httpResponse,
            $response->body,
            'CampaignStatusResponseModel'
        );
        return ApiResponse::createFromContext($response->body, $deserializedResponse, $_httpContext);
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
     * @param array $options Array with all options for search
     *
     * @return ApiResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function orderCampaign(array $options): ApiResponse
    {
        //check that all required arguments are provided
        if (!isset($options['xCustomerId'], $options['body'])) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }

        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri() . '/campaigns/order';

        //prepare headers
        $_headers = [
            'user-agent'    => self::$userAgent,
            'Accept'        => 'application/json',
            'X-Customer-Id'   => $this->val($options, 'xCustomerId'),
            'Content-Type'    => 'application/json'
        ];

        //json encode body
        $_bodyJson = ApiHelper::serialize($this->val($options, 'body'));

        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);

        // Apply authorization to request
        $this->getAuthManager('global')->apply($_httpRequest);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

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
                '\\HAPI\\Exceptions\\OrderCampaignErrorResponseException',
                '',
                $_httpRequest,
                $_httpResponse
            );
        }

        if ($response->code == 403) {
            throw $this->createExceptionFromJson(
                '\\HAPI\\Exceptions\\GenericErrorException',
                'Forbidden',
                $_httpRequest,
                $_httpResponse
            );
        }

        if ($response->code == 422) {
            throw $this->createExceptionFromJson(
                '\\HAPI\\Exceptions\\OrderCampaignErrorResponseException',
                'Unprocessable Entity',
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
            'LimitedCampaignModel'
        );
        return ApiResponse::createFromContext($response->body, $deserializedResponse, $_httpContext);
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
     * @param array $options Array with all options for search
     *
     * @return ApiResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function postCampaignsValidateCampaign(array $options): ApiResponse
    {
        //check that all required arguments are provided
        if (!isset($options['xCustomerId'])) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }

        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri() . '/campaigns/validate-campaign/';

        //prepare headers
        $_headers = [
            'user-agent'    => self::$userAgent,
            'Accept'        => 'application/json',
            'X-Customer-Id'   => $this->val($options, 'xCustomerId'),
            'Content-Type'    => 'application/json'
        ];

        //json encode body
        $_bodyJson = ApiHelper::serialize($this->val($options, 'body'));

        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);

        // Apply authorization to request
        $this->getAuthManager('global')->apply($_httpRequest);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

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
                '\\HAPI\\Exceptions\\CampaignValidationErrorException',
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
        $deserializedResponse = ApiHelper::mapClass(
            $_httpRequest,
            $_httpResponse,
            $response->body,
            'CampaignValidationModel'
        );
        return ApiResponse::createFromContext($response->body, $deserializedResponse, $_httpContext);
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
     * @param array $options Array with all options for search
     *
     * @return ApiResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function postCampaignsValidateChannelPosting(array $options): ApiResponse
    {
        //check that all required arguments are provided
        if (!isset($options['xCustomerId'])) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }

        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri() . '/campaigns/validate-channel-posting/';

        //prepare headers
        $_headers = [
            'user-agent'    => self::$userAgent,
            'Accept'        => 'application/json',
            'X-Customer-Id'   => $this->val($options, 'xCustomerId'),
            'Content-Type'    => 'application/json'
        ];

        //json encode body
        $_bodyJson = ApiHelper::serialize($this->val($options, 'body'));

        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);

        // Apply authorization to request
        $this->getAuthManager('global')->apply($_httpRequest);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

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
                '\\HAPI\\Exceptions\\ProductValidationErrorException',
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
        $deserializedResponse = ApiHelper::mapClass(
            $_httpRequest,
            $_httpResponse,
            $response->body,
            'ProductValidationModel'
        );
        return ApiResponse::createFromContext($response->body, $deserializedResponse, $_httpContext);
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
     * @param array $options Array with all options for search
     *
     * @return ApiResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function postCampaignsValidateVacancyInfo(array $options): ApiResponse
    {
        //check that all required arguments are provided
        if (!isset($options['xCustomerId'])) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }

        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri() . '/campaigns/validate-vacancy-info/';

        //prepare headers
        $_headers = [
            'user-agent'    => self::$userAgent,
            'Accept'        => 'application/json',
            'X-Customer-Id'   => $this->val($options, 'xCustomerId'),
            'Content-Type'    => 'application/json'
        ];

        //json encode body
        $_bodyJson = ApiHelper::serialize($this->val($options, 'body'));

        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);

        // Apply authorization to request
        $this->getAuthManager('global')->apply($_httpRequest);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

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
        $deserializedResponse = ApiHelper::mapClass(
            $_httpRequest,
            $_httpResponse,
            $response->body,
            'VacancyValidationModel'
        );
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
