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

class ChannelsController extends BaseController
{
    public function __construct(ConfigurationInterface $config, array $authManagers, ?HttpCallBack $httpCallBack)
    {
        parent::__construct($config, $authManagers, $httpCallBack);
    }

    /**
     * This endpoint exposes a list of channels with support for contracts. For all of the required details
     * for creating a contract or a campaign for each channel, please call the "Retrieve details for
     * channel with support for contracts".
     *
     * @param string $xCustomerId In order to identify the ATS end-user, some requests (to HAPI Job
     *        Post in particular) require this header. You need to provide this to be able to work
     *        with Contracts functionality (adding contract, retrieving channels, ordering
     *        campaigns with contracts).
     * @param string|null $search A search term
     * @param int|null $limit Number of results to return per page
     * @param int|null $offset The initial index from which to return the results
     * @param string|null $acceptLanguage The language the client prefers
     *
     * @return ApiResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listChannels(
        string $xCustomerId,
        ?string $search = null,
        ?int $limit = 25,
        ?int $offset = 0,
        ?string $acceptLanguage = null
    ): ApiResponse {
        //check that all required arguments are provided
        if (!isset($xCustomerId)) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }

        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri() . '/products/channels/mocs/';

        //process query parameters
        ApiHelper::appendUrlWithQueryParameters($_queryUrl, [
            'search'          => $search,
            'limit'           => (null != $limit) ?
                $limit : 25,
            'offset'          => (null != $offset) ?
                $offset : 0,
        ]);

        //prepare headers
        $_headers = [
            'user-agent'    => self::$userAgent,
            'Accept'        => 'application/json',
            'X-Customer-Id'   => $xCustomerId,
            'Accept-Language' => Models\AcceptLanguageEnum::checkValue($acceptLanguage)
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
            'PaginatedListChannelListModel'
        );
        return ApiResponse::createFromContext($response->body, $deserializedResponse, $_httpContext);
    }

    /**
     * This endpoint exposes the details of a channel with support for contracts,as well as all the
     * required details for creating a contract or a campaign for each channel.
     *
     * @param int $channelId ID of the channel
     * @param string $xCustomerId In order to identify the ATS end-user, some requests (to HAPI Job
     *        Post in particular) require this header. You need to provide this to be able to work
     *        with Contracts functionality (adding contract, retrieving channels, ordering
     *        campaigns with contracts).
     * @param string|null $acceptLanguage The language the client prefers
     *
     * @return ApiResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function retrieveChannel(int $channelId, string $xCustomerId, ?string $acceptLanguage = null): ApiResponse
    {
        //check that all required arguments are provided
        if (!isset($channelId, $xCustomerId)) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }

        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri() . '/products/channels/mocs/{channelId}';

        //process template parameters
        $_queryUrl = ApiHelper::appendUrlWithTemplateParameters($_queryUrl, [
            'channelId'       => $channelId,
        ]);

        //prepare headers
        $_headers = [
            'user-agent'    => self::$userAgent,
            'Accept'        => 'application/json',
            'X-Customer-Id'   => $xCustomerId,
            'Accept-Language' => Models\AcceptLanguageEnum::checkValue($acceptLanguage)
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
            'LimitedChannelModel'
        );
        return ApiResponse::createFromContext($response->body, $deserializedResponse, $_httpContext);
    }
}
