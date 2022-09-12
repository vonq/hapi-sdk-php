<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPILib\Models;

use stdClass;

class PostingDetailsValidationErrorModel implements \JsonSerializable
{
    /**
     * @var string[]|null
     */
    private $title;

    /**
     * @var string[]|null
     */
    private $description;

    /**
     * @var string[]|null
     */
    private $yearsOfExperience;

    /**
     * @var string[]|null
     */
    private $employmentType;

    /**
     * @var OrganizationValidationErrorModel|null
     */
    private $organization;

    /**
     * @var ContactInfoValidationErrorModel|null
     */
    private $contactInfo;

    /**
     * @var WorkingLocationValidationErrorModel|null
     */
    private $workingLocation;

    /**
     * @var WeeklyWorkingHoursValidationErrorModel|null
     */
    private $weeklyWorkingHours;

    /**
     * @var SalaryIndicationValidationErrorModel|null
     */
    private $salaryIndication;

    /**
     * @var string[]|null
     */
    private $jobPageUrl;

    /**
     * @var string[]|null
     */
    private $applicationUrl;

    /**
     * Returns Title.
     *
     * @return string[]|null
     */
    public function getTitle(): ?array
    {
        return $this->title;
    }

    /**
     * Sets Title.
     *
     * @maps title
     *
     * @param string[]|null $title
     */
    public function setTitle(?array $title): void
    {
        $this->title = $title;
    }

    /**
     * Returns Description.
     *
     * @return string[]|null
     */
    public function getDescription(): ?array
    {
        return $this->description;
    }

    /**
     * Sets Description.
     *
     * @maps description
     *
     * @param string[]|null $description
     */
    public function setDescription(?array $description): void
    {
        $this->description = $description;
    }

    /**
     * Returns Years of Experience.
     *
     * @return string[]|null
     */
    public function getYearsOfExperience(): ?array
    {
        return $this->yearsOfExperience;
    }

    /**
     * Sets Years of Experience.
     *
     * @maps yearsOfExperience
     *
     * @param string[]|null $yearsOfExperience
     */
    public function setYearsOfExperience(?array $yearsOfExperience): void
    {
        $this->yearsOfExperience = $yearsOfExperience;
    }

    /**
     * Returns Employment Type.
     *
     * @return string[]|null
     */
    public function getEmploymentType(): ?array
    {
        return $this->employmentType;
    }

    /**
     * Sets Employment Type.
     *
     * @maps employmentType
     *
     * @param string[]|null $employmentType
     */
    public function setEmploymentType(?array $employmentType): void
    {
        $this->employmentType = $employmentType;
    }

    /**
     * Returns Organization.
     */
    public function getOrganization(): ?OrganizationValidationErrorModel
    {
        return $this->organization;
    }

    /**
     * Sets Organization.
     *
     * @maps organization
     */
    public function setOrganization(?OrganizationValidationErrorModel $organization): void
    {
        $this->organization = $organization;
    }

    /**
     * Returns Contact Info.
     */
    public function getContactInfo(): ?ContactInfoValidationErrorModel
    {
        return $this->contactInfo;
    }

    /**
     * Sets Contact Info.
     *
     * @maps contactInfo
     */
    public function setContactInfo(?ContactInfoValidationErrorModel $contactInfo): void
    {
        $this->contactInfo = $contactInfo;
    }

    /**
     * Returns Working Location.
     */
    public function getWorkingLocation(): ?WorkingLocationValidationErrorModel
    {
        return $this->workingLocation;
    }

    /**
     * Sets Working Location.
     *
     * @maps workingLocation
     */
    public function setWorkingLocation(?WorkingLocationValidationErrorModel $workingLocation): void
    {
        $this->workingLocation = $workingLocation;
    }

    /**
     * Returns Weekly Working Hours.
     */
    public function getWeeklyWorkingHours(): ?WeeklyWorkingHoursValidationErrorModel
    {
        return $this->weeklyWorkingHours;
    }

    /**
     * Sets Weekly Working Hours.
     *
     * @maps weeklyWorkingHours
     */
    public function setWeeklyWorkingHours(?WeeklyWorkingHoursValidationErrorModel $weeklyWorkingHours): void
    {
        $this->weeklyWorkingHours = $weeklyWorkingHours;
    }

    /**
     * Returns Salary Indication.
     */
    public function getSalaryIndication(): ?SalaryIndicationValidationErrorModel
    {
        return $this->salaryIndication;
    }

    /**
     * Sets Salary Indication.
     *
     * @maps salaryIndication
     */
    public function setSalaryIndication(?SalaryIndicationValidationErrorModel $salaryIndication): void
    {
        $this->salaryIndication = $salaryIndication;
    }

    /**
     * Returns Job Page Url.
     *
     * @return string[]|null
     */
    public function getJobPageUrl(): ?array
    {
        return $this->jobPageUrl;
    }

    /**
     * Sets Job Page Url.
     *
     * @maps jobPageUrl
     *
     * @param string[]|null $jobPageUrl
     */
    public function setJobPageUrl(?array $jobPageUrl): void
    {
        $this->jobPageUrl = $jobPageUrl;
    }

    /**
     * Returns Application Url.
     *
     * @return string[]|null
     */
    public function getApplicationUrl(): ?array
    {
        return $this->applicationUrl;
    }

    /**
     * Sets Application Url.
     *
     * @maps applicationUrl
     *
     * @param string[]|null $applicationUrl
     */
    public function setApplicationUrl(?array $applicationUrl): void
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
        if (isset($this->title)) {
            $json['title']              = $this->title;
        }
        if (isset($this->description)) {
            $json['description']        = $this->description;
        }
        if (isset($this->yearsOfExperience)) {
            $json['yearsOfExperience']  = $this->yearsOfExperience;
        }
        if (isset($this->employmentType)) {
            $json['employmentType']     = $this->employmentType;
        }
        if (isset($this->organization)) {
            $json['organization']       = $this->organization;
        }
        if (isset($this->contactInfo)) {
            $json['contactInfo']        = $this->contactInfo;
        }
        if (isset($this->workingLocation)) {
            $json['workingLocation']    = $this->workingLocation;
        }
        if (isset($this->weeklyWorkingHours)) {
            $json['weeklyWorkingHours'] = $this->weeklyWorkingHours;
        }
        if (isset($this->salaryIndication)) {
            $json['salaryIndication']   = $this->salaryIndication;
        }
        if (isset($this->jobPageUrl)) {
            $json['jobPageUrl']         = $this->jobPageUrl;
        }
        if (isset($this->applicationUrl)) {
            $json['applicationUrl']     = $this->applicationUrl;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
