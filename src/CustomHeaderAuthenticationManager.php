<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPILib;

use HAPILib\Http\HttpRequest;

/**
 * Utility class for authorization and token management.
 */
class CustomHeaderAuthenticationManager implements AuthManagerInterface, CustomHeaderAuthenticationCredentials
{
    private $xAuthToken;

    /**
     * Returns an instance of this class.
     *
     * @param string $xAuthToken In order to interact with the API, every request needs to have an
     *        API Token.  The key will be supplied by VONQ to our partners.
     */
    public function __construct(string $xAuthToken)
    {
        $this->xAuthToken = $xAuthToken;
    }

    /**
     * String value for xAuthToken.
     */
    public function getXAuthToken(): string
    {
        return $this->xAuthToken;
    }

    /**
     * Checks if provided credentials match with existing ones.
     *
     * @param string $xAuthToken In order to interact with the API, every request needs to have an
     *        API Token.  The key will be supplied by VONQ to our partners.
     */
    public function equals(string $xAuthToken): bool
    {
        return $xAuthToken == $this->xAuthToken;
    }

    /**
     * Adds authentication to the given HttpRequest.
     */
    public function apply(HttpRequest $httpRequest)
    {
        $httpRequest->addHeader('X-Auth-Token', $this->xAuthToken);
    }
}
