<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPI\Controllers;

use HAPI\Http\HttpCallBack;
use HAPI\Http\HttpResponse;
use HAPI\ApiHelper;
use HAPI\Http\HttpRequest;
use HAPI\Exceptions\ApiException;
use HAPI\ConfigurationInterface;
use HAPI\AuthManagerInterface;
use Unirest\Request;

/**
 * Base controller
 */
class BaseController
{
    /**
     * Configuration instance
     *
     * @var ConfigurationInterface
     */
    protected $config;

    /**
     * List of auth managers for this controller.
     *
     * @var array
     */
    private $authManagers = [];

    /**
     * HttpCallBack instance associated with this controller
     *
     * @var HttpCallBack|null
     */
    private $httpCallBack;

    /**
     * UniRest Request instance associated with this controller
     *
     * @var Request|null
     */
    protected static $request;


    /**
     * User-Agent header value to be sent with API calls.
     *
     * @var string
     */
    protected static $userAgent = 'HAPI SDK';

    /**
     * Constructor that sets the timeout of requests
     */
    protected function __construct(ConfigurationInterface $config, array $authManagers, ?HttpCallBack $httpCallBack)
    {
        $this->config = $config;
        $this->authManagers = $authManagers;
        $this->httpCallBack = $httpCallBack;

        if (is_null(self::$request)) {
            self::$request = new Request();
        }

        self::$request->timeout($config->getTimeout());
        self::$request->enableRetries($config->shouldEnableRetries());
        self::$request->maxNumberOfRetries($config->getNumberOfRetries());
        self::$request->retryInterval($config->getRetryInterval());
        self::$request->backoffFactor($config->getBackOffFactor());
        self::$request->maximumRetryWaitTime($config->getMaximumRetryWaitTime());
        self::$request->retryOnTimeout($config->shouldRetryOnTimeout());
        self::$request->httpMethodsToRetry($config->getHttpMethodsToRetry());
        self::$request->httpStatusCodesToRetry($config->getHttpStatusCodesToRetry());
    }

    /**
     * Get auth manager for the provided namespace key.
     *
     * @param  string   $key         Namespace key
     * @return AuthManagerInterface  The AuthManager set for this key.
     */
    protected function getAuthManager(string $key): AuthManagerInterface
    {
        return $this->authManagers[$key];
    }

    /**
     * Get HttpCallBack for this controller
     *
     * @return HttpCallBack|null The HttpCallBack object set for this controller
     */
    public function getHttpCallBack(): ?HttpCallBack
    {
        return $this->httpCallBack;
    }

    /**
     * Validate response or throw exception based on the status code
     */
    protected function validateResponse(HttpResponse $response, HttpRequest $request): void
    {
        if (($response->getStatusCode() < 200) || ($response->getStatusCode() > 208)) { //[200,208] = HTTP OK
            throw new ApiException('HTTP Response Not OK', $request, $response);
        }
    }

    /**
     * Create and get ApiException-derived exception instance
     */
    protected function createExceptionFromJson(
        string $type,
        string $reason,
        HttpRequest $request,
        HttpResponse $response
    ) {
        $body = json_decode($response->getRawBody());

        if ($body === null) {
            return new ApiException($reason, $request, $response);
        } else {
            $body->reason = $reason;
            $body->request = $request;
            $body->response = $response;
        }

        return ApiHelper::getJsonMapper()->mapClass($body, $type);
    }
}
