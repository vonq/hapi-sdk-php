<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPILib;

use HAPILib\Controllers;

/**
 * HAPI client class
 */
class HAPIClient implements ConfigurationInterface
{
    private $campaigns;
    private $channels;
    private $contractGroups;
    private $contracts;
    private $products;
    private $taxonomy;
    private $wallets;

    private $timeout = ConfigurationDefaults::TIMEOUT;
    private $enableRetries = ConfigurationDefaults::ENABLE_RETRIES;
    private $numberOfRetries = ConfigurationDefaults::NUMBER_OF_RETRIES;
    private $retryInterval = ConfigurationDefaults::RETRY_INTERVAL;
    private $backOffFactor = ConfigurationDefaults::BACK_OFF_FACTOR;
    private $maximumRetryWaitTime = ConfigurationDefaults::MAXIMUM_RETRY_WAIT_TIME;
    private $retryOnTimeout = ConfigurationDefaults::RETRY_ON_TIMEOUT;
    private $httpStatusCodesToRetry = ConfigurationDefaults::HTTP_STATUS_CODES_TO_RETRY;
    private $httpMethodsToRetry = ConfigurationDefaults::HTTP_METHODS_TO_RETRY;
    private $skipSslVerification = ConfigurationDefaults::SKIP_SSL_VERIFICATION;
    private $environment = ConfigurationDefaults::ENVIRONMENT;
    private $xAuthToken = ConfigurationDefaults::X_AUTH_TOKEN;
    private $customHeaderAuthenticationManager;
    private $authManagers = [];
    private $httpCallback;

    public function __construct(array $configOptions = null)
    {
        if (isset($configOptions['timeout'])) {
            $this->timeout = $configOptions['timeout'];
        }
        if (isset($configOptions['enableRetries'])) {
            $this->enableRetries = $configOptions['enableRetries'];
        }
        if (isset($configOptions['numberOfRetries'])) {
            $this->numberOfRetries = $configOptions['numberOfRetries'];
        }
        if (isset($configOptions['retryInterval'])) {
            $this->retryInterval = $configOptions['retryInterval'];
        }
        if (isset($configOptions['backOffFactor'])) {
            $this->backOffFactor = $configOptions['backOffFactor'];
        }
        if (isset($configOptions['maximumRetryWaitTime'])) {
            $this->maximumRetryWaitTime = $configOptions['maximumRetryWaitTime'];
        }
        if (isset($configOptions['retryOnTimeout'])) {
            $this->retryOnTimeout = $configOptions['retryOnTimeout'];
        }
        if (isset($configOptions['httpStatusCodesToRetry'])) {
            $this->httpStatusCodesToRetry = $configOptions['httpStatusCodesToRetry'];
        }
        if (isset($configOptions['httpMethodsToRetry'])) {
            $this->httpMethodsToRetry = $configOptions['httpMethodsToRetry'];
        }
        if (isset($configOptions['skipSslVerification'])) {
            $this->skipSslVerification = $configOptions['skipSslVerification'];
        }
        if (isset($configOptions['environment'])) {
            $this->environment = $configOptions['environment'];
        }
        if (isset($configOptions['xAuthToken'])) {
            $this->xAuthToken = $configOptions['xAuthToken'];
        }
        if (isset($configOptions['httpCallback'])) {
            $this->httpCallback = $configOptions['httpCallback'];
        }

        $this->customHeaderAuthenticationManager = new CustomHeaderAuthenticationManager($this->xAuthToken);
        $this->authManagers['global'] = $this->customHeaderAuthenticationManager;
    }

    /**
     * Get the client configuration as an associative array
     */
    public function getConfiguration(): array
    {
        $configMap = [];

        if (isset($this->timeout)) {
            $configMap['timeout'] = $this->timeout;
        }
        if (isset($this->enableRetries)) {
            $configMap['enableRetries'] = $this->enableRetries;
        }
        if (isset($this->numberOfRetries)) {
            $configMap['numberOfRetries'] = $this->numberOfRetries;
        }
        if (isset($this->retryInterval)) {
            $configMap['retryInterval'] = $this->retryInterval;
        }
        if (isset($this->backOffFactor)) {
            $configMap['backOffFactor'] = $this->backOffFactor;
        }
        if (isset($this->maximumRetryWaitTime)) {
            $configMap['maximumRetryWaitTime'] = $this->maximumRetryWaitTime;
        }
        if (isset($this->retryOnTimeout)) {
            $configMap['retryOnTimeout'] = $this->retryOnTimeout;
        }
        if (isset($this->httpStatusCodesToRetry)) {
            $configMap['httpStatusCodesToRetry'] = $this->httpStatusCodesToRetry;
        }
        if (isset($this->httpMethodsToRetry)) {
            $configMap['httpMethodsToRetry'] = $this->httpMethodsToRetry;
        }
        if (isset($this->skipSslVerification)) {
            $configMap['skipSslVerification'] = $this->skipSslVerification;
        }
        if (isset($this->environment)) {
            $configMap['environment'] = $this->environment;
        }
        if ($this->customHeaderAuthenticationManager->getXAuthToken() !== null) {
            $configMap['xAuthToken'] = $this->customHeaderAuthenticationManager->getXAuthToken();
        }
        if (isset($this->httpCallback)) {
            $configMap['httpCallback'] = $this->httpCallback;
        }

        return $configMap;
    }

    /**
     * Clone this client and override given configuration options
     */
    public function withConfiguration(array $configOptions): self
    {
        return new self(\array_merge($this->getConfiguration(), $configOptions));
    }

    public function getTimeout(): int
    {
        return $this->timeout;
    }

    public function shouldEnableRetries(): bool
    {
        return $this->enableRetries;
    }

    public function getNumberOfRetries(): int
    {
        return $this->numberOfRetries;
    }

    public function getRetryInterval(): float
    {
        return $this->retryInterval;
    }

    public function getBackOffFactor(): float
    {
        return $this->backOffFactor;
    }

    public function getMaximumRetryWaitTime(): int
    {
        return $this->maximumRetryWaitTime;
    }

    public function shouldRetryOnTimeout(): bool
    {
        return $this->retryOnTimeout;
    }

    public function getHttpStatusCodesToRetry(): array
    {
        return $this->httpStatusCodesToRetry;
    }

    public function getHttpMethodsToRetry(): array
    {
        return $this->httpMethodsToRetry;
    }

    public function getSkipSslVerification(): bool
    {
        return $this->skipSslVerification;
    }

    public function getEnvironment(): string
    {
        return $this->environment;
    }

    public function getCustomHeaderAuthenticationCredentials(): ?CustomHeaderAuthenticationCredentials
    {
        return $this->customHeaderAuthenticationManager;
    }

    /**
     * Get the base uri for a given server in the current environment
     *
     * @param  string $server Server name
     *
     * @return string         Base URI
     */
    public function getBaseUri(string $server = Server::DEFAULT_): string
    {
        return static::ENVIRONMENT_MAP[$this->environment][$server];
    }

    /**
     * Returns Campaigns Controller
     */
    public function getCampaignsController(): Controllers\CampaignsController
    {
        if ($this->campaigns == null) {
            $this->campaigns = new Controllers\CampaignsController(
                $this,
                $this->authManagers,
                $this->httpCallback
            );
        }
        return $this->campaigns;
    }

    /**
     * Returns Channels Controller
     */
    public function getChannelsController(): Controllers\ChannelsController
    {
        if ($this->channels == null) {
            $this->channels = new Controllers\ChannelsController(
                $this,
                $this->authManagers,
                $this->httpCallback
            );
        }
        return $this->channels;
    }

    /**
     * Returns Contract Groups Controller
     */
    public function getContractGroupsController(): Controllers\ContractGroupsController
    {
        if ($this->contractGroups == null) {
            $this->contractGroups = new Controllers\ContractGroupsController(
                $this,
                $this->authManagers,
                $this->httpCallback
            );
        }
        return $this->contractGroups;
    }

    /**
     * Returns Contracts Controller
     */
    public function getContractsController(): Controllers\ContractsController
    {
        if ($this->contracts == null) {
            $this->contracts = new Controllers\ContractsController(
                $this,
                $this->authManagers,
                $this->httpCallback
            );
        }
        return $this->contracts;
    }

    /**
     * Returns Products Controller
     */
    public function getProductsController(): Controllers\ProductsController
    {
        if ($this->products == null) {
            $this->products = new Controllers\ProductsController(
                $this,
                $this->authManagers,
                $this->httpCallback
            );
        }
        return $this->products;
    }

    /**
     * Returns Taxonomy Controller
     */
    public function getTaxonomyController(): Controllers\TaxonomyController
    {
        if ($this->taxonomy == null) {
            $this->taxonomy = new Controllers\TaxonomyController(
                $this,
                $this->authManagers,
                $this->httpCallback
            );
        }
        return $this->taxonomy;
    }

    /**
     * Returns Wallets Controller
     */
    public function getWalletsController(): Controllers\WalletsController
    {
        if ($this->wallets == null) {
            $this->wallets = new Controllers\WalletsController(
                $this,
                $this->authManagers,
                $this->httpCallback
            );
        }
        return $this->wallets;
    }

    /**
     * A map of all baseurls used in different environments and servers
     *
     * @var array
     */
    private const ENVIRONMENT_MAP = [
        Environment::SANDBOX => [
            Server::DEFAULT_ => 'https://marketplace-sandbox.api.vonq.com',
        ],
        Environment::PRODUCTION => [
            Server::DEFAULT_ => 'https://marketplace.api.vonq.com',
        ],
    ];
}
