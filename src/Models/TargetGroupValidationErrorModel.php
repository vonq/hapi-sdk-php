<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPILib\Models;

use stdClass;

class TargetGroupValidationErrorModel implements \JsonSerializable
{
    /**
     * @var TargetGroupPropertyValidationErrorModel[]|null
     */
    private $jobCategory;

    /**
     * @var TargetGroupPropertyValidationErrorModel[]|null
     */
    private $seniority;

    /**
     * @var TargetGroupPropertyValidationErrorModel[]|null
     */
    private $industry;

    /**
     * @var TargetGroupPropertyValidationErrorModel[]|null
     */
    private $educationLevel;

    /**
     * Returns Job Category.
     *
     * @return TargetGroupPropertyValidationErrorModel[]|null
     */
    public function getJobCategory(): ?array
    {
        return $this->jobCategory;
    }

    /**
     * Sets Job Category.
     *
     * @maps jobCategory
     *
     * @param TargetGroupPropertyValidationErrorModel[]|null $jobCategory
     */
    public function setJobCategory(?array $jobCategory): void
    {
        $this->jobCategory = $jobCategory;
    }

    /**
     * Returns Seniority.
     *
     * @return TargetGroupPropertyValidationErrorModel[]|null
     */
    public function getSeniority(): ?array
    {
        return $this->seniority;
    }

    /**
     * Sets Seniority.
     *
     * @maps seniority
     *
     * @param TargetGroupPropertyValidationErrorModel[]|null $seniority
     */
    public function setSeniority(?array $seniority): void
    {
        $this->seniority = $seniority;
    }

    /**
     * Returns Industry.
     *
     * @return TargetGroupPropertyValidationErrorModel[]|null
     */
    public function getIndustry(): ?array
    {
        return $this->industry;
    }

    /**
     * Sets Industry.
     *
     * @maps industry
     *
     * @param TargetGroupPropertyValidationErrorModel[]|null $industry
     */
    public function setIndustry(?array $industry): void
    {
        $this->industry = $industry;
    }

    /**
     * Returns Education Level.
     *
     * @return TargetGroupPropertyValidationErrorModel[]|null
     */
    public function getEducationLevel(): ?array
    {
        return $this->educationLevel;
    }

    /**
     * Sets Education Level.
     *
     * @maps educationLevel
     *
     * @param TargetGroupPropertyValidationErrorModel[]|null $educationLevel
     */
    public function setEducationLevel(?array $educationLevel): void
    {
        $this->educationLevel = $educationLevel;
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
        if (isset($this->jobCategory)) {
            $json['jobCategory']    = $this->jobCategory;
        }
        if (isset($this->seniority)) {
            $json['seniority']      = $this->seniority;
        }
        if (isset($this->industry)) {
            $json['industry']       = $this->industry;
        }
        if (isset($this->educationLevel)) {
            $json['educationLevel'] = $this->educationLevel;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
