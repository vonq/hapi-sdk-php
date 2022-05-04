<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPILib\Models;

use stdClass;

class TargetGroupModel implements \JsonSerializable
{
    /**
     * @var TargetGroupElementModel[]
     */
    private $educationLevel;

    /**
     * @var TargetGroupElementModel[]
     */
    private $seniority;

    /**
     * @var TargetGroupElementModel[]
     */
    private $industry;

    /**
     * @var TargetGroupElementModel[]
     */
    private $jobCategory;

    /**
     * @param TargetGroupElementModel[] $educationLevel
     * @param TargetGroupElementModel[] $seniority
     * @param TargetGroupElementModel[] $industry
     * @param TargetGroupElementModel[] $jobCategory
     */
    public function __construct(array $educationLevel, array $seniority, array $industry, array $jobCategory)
    {
        $this->educationLevel = $educationLevel;
        $this->seniority = $seniority;
        $this->industry = $industry;
        $this->jobCategory = $jobCategory;
    }

    /**
     * Returns Education Level.
     * Education Level required by the Candidate. You can specify only one value.
     *
     * @return TargetGroupElementModel[]
     */
    public function getEducationLevel(): array
    {
        return $this->educationLevel;
    }

    /**
     * Sets Education Level.
     * Education Level required by the Candidate. You can specify only one value.
     *
     * @required
     * @maps educationLevel
     *
     * @param TargetGroupElementModel[] $educationLevel
     */
    public function setEducationLevel(array $educationLevel): void
    {
        $this->educationLevel = $educationLevel;
    }

    /**
     * Returns Seniority.
     * Seniority Level expected by the Candidate. You can specify only one value.
     *
     * @return TargetGroupElementModel[]
     */
    public function getSeniority(): array
    {
        return $this->seniority;
    }

    /**
     * Sets Seniority.
     * Seniority Level expected by the Candidate. You can specify only one value.
     *
     * @required
     * @maps seniority
     *
     * @param TargetGroupElementModel[] $seniority
     */
    public function setSeniority(array $seniority): void
    {
        $this->seniority = $seniority;
    }

    /**
     * Returns Industry.
     * The Industry related to the Position open. You can specify only one value.
     *
     * @return TargetGroupElementModel[]
     */
    public function getIndustry(): array
    {
        return $this->industry;
    }

    /**
     * Sets Industry.
     * The Industry related to the Position open. You can specify only one value.
     *
     * @required
     * @maps industry
     *
     * @param TargetGroupElementModel[] $industry
     */
    public function setIndustry(array $industry): void
    {
        $this->industry = $industry;
    }

    /**
     * Returns Job Category.
     * Job Category indicates the type of Position that's open. You can specify only one value.
     *
     * @return TargetGroupElementModel[]
     */
    public function getJobCategory(): array
    {
        return $this->jobCategory;
    }

    /**
     * Sets Job Category.
     * Job Category indicates the type of Position that's open. You can specify only one value.
     *
     * @required
     * @maps jobCategory
     *
     * @param TargetGroupElementModel[] $jobCategory
     */
    public function setJobCategory(array $jobCategory): void
    {
        $this->jobCategory = $jobCategory;
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
        $json['educationLevel'] = $this->educationLevel;
        $json['seniority']      = $this->seniority;
        $json['industry']       = $this->industry;
        $json['jobCategory']    = $this->jobCategory;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
