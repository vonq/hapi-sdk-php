<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPI\Exceptions;

class GenericErrorWithDetailException extends \HAPI\Exceptions\ApiException
{
    /**
     * @var string
     */
    private $detail;

    /**
     * @param string $reason
     * @param \HAPI\Http\HttpRequest $request
     * @param \HAPI\Http\HttpResponse $response
     * @param string $detail
     */
    public function __construct(
        string $reason,
        \HAPI\Http\HttpRequest $request,
        \HAPI\Http\HttpResponse $response,
        string $detail
    ) {
        parent::__construct($reason, $request, $response);
        $this->detail = $detail;
    }

    /**
     * Returns Detail.
     */
    public function getDetail(): string
    {
        return $this->detail;
    }

    /**
     * Sets Detail.
     *
     * @required
     * @maps detail
     */
    public function setDetail(string $detail): void
    {
        $this->detail = $detail;
    }

    private $additionalProperties = [];

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function addAdditionalProperty(string $name, $value)
    {
        $this->additionalProperties[$name] = $value;
    }
}
