<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPILib\Tests;

class ClientFactory
{
    public static function create(HttpCallBackCatcher $httpCallback): \HAPILib\HAPIClient
    {
        $client = (new \HAPILib\HAPIClient(static::getConfigurationFromEnvironment()))
            ->withConfiguration(static::getTestConfiguration($httpCallback));
        return $client;
    }

    public static function getTestConfiguration(HttpCallBackCatcher $httpCallback): array
    {
        return ['httpCallback' => $httpCallback];
    }

    public static function getConfigurationFromEnvironment(): array
    {
        $config = [];
        $timeout = getenv('HAPI_TIMEOUT');
        $numberOfRetries = getenv('HAPI_NUMBER_OF_RETRIES');
        $maximumRetryWaitTime = getenv('HAPI_MAXIMUM_RETRY_WAIT_TIME');
        $environment = getenv('HAPI_ENVIRONMENT');
        $xAuthToken = getenv('HAPI_X_AUTH_TOKEN');

        if ($timeout !== false && \is_numeric($timeout)) {
            $config['timeout'] = intval($timeout);
        }

        if ($numberOfRetries !== false && \is_numeric($numberOfRetries)) {
            $config['numberOfRetries'] = intval($numberOfRetries);
        }

        if ($maximumRetryWaitTime !== false && \is_numeric($maximumRetryWaitTime)) {
            $config['maximumRetryWaitTime'] = intval($maximumRetryWaitTime);
        }

        if ($environment !== false) {
            $config['environment'] = $environment;
        }

        if ($xAuthToken !== false) {
            $config['xAuthToken'] = $xAuthToken;
        }

        return $config;
    }
}
