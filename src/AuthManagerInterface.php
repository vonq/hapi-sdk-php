<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPI;

use HAPI\Http\HttpRequest;

/**
 * Interface for defining the behavior of Authentication Classes.
 */
interface AuthManagerInterface
{
    /**
     * Adds authentication to the given HttpRequest.
     */
    public function apply(HttpRequest $httpRequest);
}
