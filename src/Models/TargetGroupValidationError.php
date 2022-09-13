<?php

declare(strict_types=1);

/*
 * VONQHiringAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VONQHiringAPILib\Models;

use stdClass;

class TargetGroupValidationError implements \JsonSerializable
{
    /**
     * @var TargetGroupPropertyValidationError[]|null
     */
    private $jobCategory;

    /**
     * @var TargetGroupPropertyValidationError[]|null
     */
    private $seniority;

    /**
     * @var TargetGroupPropertyValidationError[]|null
     */
    private $industry;

    /**
     * @var TargetGroupPropertyValidationError[]|null
     */
    private $educationLevel;

    /**
     * Returns Job Category.
     *
     * @return TargetGroupPropertyValidationError[]|null
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
     * @param TargetGroupPropertyValidationError[]|null $jobCategory
     */
    public function setJobCategory(?array $jobCategory): void
    {
        $this->jobCategory = $jobCategory;
    }

    /**
     * Returns Seniority.
     *
     * @return TargetGroupPropertyValidationError[]|null
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
     * @param TargetGroupPropertyValidationError[]|null $seniority
     */
    public function setSeniority(?array $seniority): void
    {
        $this->seniority = $seniority;
    }

    /**
     * Returns Industry.
     *
     * @return TargetGroupPropertyValidationError[]|null
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
     * @param TargetGroupPropertyValidationError[]|null $industry
     */
    public function setIndustry(?array $industry): void
    {
        $this->industry = $industry;
    }

    /**
     * Returns Education Level.
     *
     * @return TargetGroupPropertyValidationError[]|null
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
     * @param TargetGroupPropertyValidationError[]|null $educationLevel
     */
    public function setEducationLevel(?array $educationLevel): void
    {
        $this->educationLevel = $educationLevel;
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

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
