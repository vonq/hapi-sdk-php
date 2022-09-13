<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPI\Models;

use stdClass;

class JobTitleModel implements \JsonSerializable
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var LimitedJobFunctionModel
     */
    private $jobFunction;

    /**
     * @param int $id
     * @param string $name
     * @param LimitedJobFunctionModel $jobFunction
     */
    public function __construct(int $id, string $name, LimitedJobFunctionModel $jobFunction)
    {
        $this->id = $id;
        $this->name = $name;
        $this->jobFunction = $jobFunction;
    }

    /**
     * Returns Id.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Sets Id.
     *
     * @required
     * @maps id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Name.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     *
     * @required
     * @maps name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Job Function.
     * JobFunction object that doesn't
     * follow nested relationships
     */
    public function getJobFunction(): LimitedJobFunctionModel
    {
        return $this->jobFunction;
    }

    /**
     * Sets Job Function.
     * JobFunction object that doesn't
     * follow nested relationships
     *
     * @required
     * @maps job_function
     */
    public function setJobFunction(LimitedJobFunctionModel $jobFunction): void
    {
        $this->jobFunction = $jobFunction;
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

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['id']           = $this->id;
        $json['name']         = $this->name;
        $json['job_function'] = $this->jobFunction;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
