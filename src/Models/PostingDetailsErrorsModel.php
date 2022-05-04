<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPILib\Models;

use stdClass;

class PostingDetailsErrorsModel implements \JsonSerializable
{
    /**
     * @var string[]
     */
    private $title;

    /**
     * @var string[]
     */
    private $description;

    /**
     * @var string[]
     */
    private $yearsOfExperience;

    /**
     * @var string[]
     */
    private $employmentType;

    /**
     * @var OrganizationModel
     */
    private $organization;

    /**
     * @var WorkingLocationModel
     */
    private $workingLocation;

    /**
     * @var WeeklyWorkingHoursModel
     */
    private $weeklyWorkingHours;

    /**
     * @var SalaryIndicationModel
     */
    private $salaryIndication;

    /**
     * @var string[]
     */
    private $jobPageUrl;

    /**
     * @var string[]
     */
    private $applicationUrl;

    /**
     * @param string[] $title
     * @param string[] $description
     * @param string[] $yearsOfExperience
     * @param string[] $employmentType
     * @param OrganizationModel $organization
     * @param WorkingLocationModel $workingLocation
     * @param WeeklyWorkingHoursModel $weeklyWorkingHours
     * @param SalaryIndicationModel $salaryIndication
     * @param string[] $jobPageUrl
     * @param string[] $applicationUrl
     */
    public function __construct(
        array $title,
        array $description,
        array $yearsOfExperience,
        array $employmentType,
        OrganizationModel $organization,
        WorkingLocationModel $workingLocation,
        WeeklyWorkingHoursModel $weeklyWorkingHours,
        SalaryIndicationModel $salaryIndication,
        array $jobPageUrl,
        array $applicationUrl
    ) {
        $this->title = $title;
        $this->description = $description;
        $this->yearsOfExperience = $yearsOfExperience;
        $this->employmentType = $employmentType;
        $this->organization = $organization;
        $this->workingLocation = $workingLocation;
        $this->weeklyWorkingHours = $weeklyWorkingHours;
        $this->salaryIndication = $salaryIndication;
        $this->jobPageUrl = $jobPageUrl;
        $this->applicationUrl = $applicationUrl;
    }

    /**
     * Returns Title.
     *
     * @return string[]
     */
    public function getTitle(): array
    {
        return $this->title;
    }

    /**
     * Sets Title.
     *
     * @required
     * @maps title
     *
     * @param string[] $title
     */
    public function setTitle(array $title): void
    {
        $this->title = $title;
    }

    /**
     * Returns Description.
     *
     * @return string[]
     */
    public function getDescription(): array
    {
        return $this->description;
    }

    /**
     * Sets Description.
     *
     * @required
     * @maps description
     *
     * @param string[] $description
     */
    public function setDescription(array $description): void
    {
        $this->description = $description;
    }

    /**
     * Returns Years of Experience.
     *
     * @return string[]
     */
    public function getYearsOfExperience(): array
    {
        return $this->yearsOfExperience;
    }

    /**
     * Sets Years of Experience.
     *
     * @required
     * @maps yearsOfExperience
     *
     * @param string[] $yearsOfExperience
     */
    public function setYearsOfExperience(array $yearsOfExperience): void
    {
        $this->yearsOfExperience = $yearsOfExperience;
    }

    /**
     * Returns Employment Type.
     *
     * @return string[]
     */
    public function getEmploymentType(): array
    {
        return $this->employmentType;
    }

    /**
     * Sets Employment Type.
     *
     * @required
     * @maps employmentType
     *
     * @param string[] $employmentType
     */
    public function setEmploymentType(array $employmentType): void
    {
        $this->employmentType = $employmentType;
    }

    /**
     * Returns Organization.
     */
    public function getOrganization(): OrganizationModel
    {
        return $this->organization;
    }

    /**
     * Sets Organization.
     *
     * @required
     * @maps organization
     */
    public function setOrganization(OrganizationModel $organization): void
    {
        $this->organization = $organization;
    }

    /**
     * Returns Working Location.
     */
    public function getWorkingLocation(): WorkingLocationModel
    {
        return $this->workingLocation;
    }

    /**
     * Sets Working Location.
     *
     * @required
     * @maps workingLocation
     */
    public function setWorkingLocation(WorkingLocationModel $workingLocation): void
    {
        $this->workingLocation = $workingLocation;
    }

    /**
     * Returns Weekly Working Hours.
     */
    public function getWeeklyWorkingHours(): WeeklyWorkingHoursModel
    {
        return $this->weeklyWorkingHours;
    }

    /**
     * Sets Weekly Working Hours.
     *
     * @required
     * @maps weeklyWorkingHours
     */
    public function setWeeklyWorkingHours(WeeklyWorkingHoursModel $weeklyWorkingHours): void
    {
        $this->weeklyWorkingHours = $weeklyWorkingHours;
    }

    /**
     * Returns Salary Indication.
     */
    public function getSalaryIndication(): SalaryIndicationModel
    {
        return $this->salaryIndication;
    }

    /**
     * Sets Salary Indication.
     *
     * @required
     * @maps salaryIndication
     */
    public function setSalaryIndication(SalaryIndicationModel $salaryIndication): void
    {
        $this->salaryIndication = $salaryIndication;
    }

    /**
     * Returns Job Page Url.
     *
     * @return string[]
     */
    public function getJobPageUrl(): array
    {
        return $this->jobPageUrl;
    }

    /**
     * Sets Job Page Url.
     *
     * @required
     * @maps jobPageUrl
     *
     * @param string[] $jobPageUrl
     */
    public function setJobPageUrl(array $jobPageUrl): void
    {
        $this->jobPageUrl = $jobPageUrl;
    }

    /**
     * Returns Application Url.
     *
     * @return string[]
     */
    public function getApplicationUrl(): array
    {
        return $this->applicationUrl;
    }

    /**
     * Sets Application Url.
     *
     * @required
     * @maps applicationUrl
     *
     * @param string[] $applicationUrl
     */
    public function setApplicationUrl(array $applicationUrl): void
    {
        $this->applicationUrl = $applicationUrl;
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
        $json['title']              = $this->title;
        $json['description']        = $this->description;
        $json['yearsOfExperience']  = $this->yearsOfExperience;
        $json['employmentType']     = $this->employmentType;
        $json['organization']       = $this->organization;
        $json['workingLocation']    = $this->workingLocation;
        $json['weeklyWorkingHours'] = $this->weeklyWorkingHours;
        $json['salaryIndication']   = $this->salaryIndication;
        $json['jobPageUrl']         = $this->jobPageUrl;
        $json['applicationUrl']     = $this->applicationUrl;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
