<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPI;

/**
 * Interface for defining the behavior of Authentication.
 */
interface CustomHeaderAuthenticationCredentials
{
    /**
     * String value for xAuthToken.
     */
    public function getXAuthToken(): string;

    /**
     * Checks if provided credentials match with existing ones.
     *
     * @param string $xAuthToken In order to interact with the API, every request needs to have an
     *        API Token.  The key will be supplied by VONQ to our partners.
     */
    public function equals(string $xAuthToken): bool;
}
