<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPI\Http;

/**
 * HTTP response received
 */
class HttpResponse
{
    /**
     * Status code of response
     *
     * @var int
     */
    private $statusCode;

    /**
     * Headers received
     *
     * @var array
     */
    private $headers;

    /**
     * Raw body of the response
     *
     * @var string
     */
    private $rawBody;

    /**
     * Create a new instance of a HttpResponse
     *
     * @param int    $statusCode Response code
     * @param array  $headers    Map of headers
     * @param string $rawBody    Raw response body
     */
    public function __construct(int $statusCode, array $headers, string $rawBody)
    {
        $this->statusCode = $statusCode;
        $this->headers = $headers;
        $this->rawBody = $rawBody;
    }

    /**
     * Get status code
     *
     * @return int Status code
     */
    public function getStatusCode(): int
    {
        return $this->statusCode;
    }

    /**
     * Get headers
     *
     * @return array Map of headers
     */
    public function getHeaders(): array
    {
        return $this->headers;
    }

    /**
     * Get raw response body
     *
     * @return string Raw body
     */
    public function getRawBody(): string
    {
        return $this->rawBody;
    }
}
