<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPI\Http;

/**
 * Holds the result of an API call.
 */
class ApiResponse
{
    /**
     * @var HttpRequest
     */
    private $request;

    /**
     * @var int|null
     */
    private $statusCode = null;

    /**
     * @var string|null
     */
    private $reasonPhrase = null;

    /**
     * @var array|null
     */
    private $headers = null;

    /**
     * @var mixed
     */
    private $result = null;

    /**
     * @var mixed
     */
    private $body = null;

    /**
     * Create a new instance of this class with the given context and result.
     *
     * @param mixed $result Deserialized result from the response
     * @param HttpContext $context Http context
     */
    public static function createFromContext($decodedBody, $result, HttpContext $context): self
    {
        $request = $context->getRequest();
        $statusCode = $context->getResponse()->getStatusCode();
        $reasonPhrase = null; // TODO
        $headers = $context->getResponse()->getHeaders();
        $body = $context->getResponse()->getRawBody();

        return new self($request, $statusCode, $reasonPhrase, $headers, $result, $body);
    }

    /**
     * @param HttpRequest $request
     * @param int|null $statusCode
     * @param string|null $reasonPhrase
     * @param array|null $headers
     * @param mixed $result
     * @param mixed $body
     */
    public function __construct(
        HttpRequest $request,
        ?int $statusCode,
        ?string $reasonPhrase,
        ?array $headers,
        $result,
        $body
    ) {
        $this->request = $request;
        $this->statusCode = $statusCode;
        $this->reasonPhrase = $reasonPhrase;
        $this->headers = $headers;
        $this->result = $result;
        $this->body = $body;
    }

    /**
     * Returns the original request that resulted in this response.
     */
    public function getRequest(): HttpRequest
    {
        return $this->request;
    }

    /**
     * Returns the response status code.
     */
    public function getStatusCode(): ?int
    {
        return $this->statusCode;
    }

    /**
     * Returns the HTTP reason phrase from the response.
     */
    public function getReasonPhrase(): ?string
    {
        return $this->reasonPhrase;
    }

    /**
     * Returns the response headers.
     */
    public function getHeaders(): ?array
    {
        return $this->headers;
    }

    /**
     * Returns the response data.
     *
     * @return mixed
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Returns the original body from the response.
     *
     * @return mixed
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Is response OK?
     */
    public function isSuccess(): bool
    {
        return isset($this->statusCode) && $this->statusCode >= 200 && $this->statusCode < 300;
    }

    /**
     * Is response missing or not OK?
     */
    public function isError(): bool
    {
        return !$this->isSuccess();
    }
}
