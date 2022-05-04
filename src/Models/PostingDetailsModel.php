<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPILib\Models;

use stdClass;

class PostingDetailsModel implements \JsonSerializable
{
    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $description;

    /**
     * @var PostingOrganizationModel
     */
    private $organization;

    /**
     * @var PostingWorkingLocationModel
     */
    private $workingLocation;

    /**
     * @var PostingContactInfoModel|null
     */
    private $contactInfo;

    /**
     * @var float
     */
    private $yearsOfExperience;

    /**
     * @var string
     */
    private $employmentType;

    /**
     * @var PostingWeeklyWorkingHoursModel
     */
    private $weeklyWorkingHours;

    /**
     * @var PostingSalaryIndicationModel
     */
    private $salaryIndication;

    /**
     * @var string
     */
    private $jobPageUrl;

    /**
     * @var string
     */
    private $applicationUrl;

    /**
     * @param string $title
     * @param string $description
     * @param PostingOrganizationModel $organization
     * @param PostingWorkingLocationModel $workingLocation
     * @param float $yearsOfExperience
     * @param string $employmentType
     * @param PostingWeeklyWorkingHoursModel $weeklyWorkingHours
     * @param PostingSalaryIndicationModel $salaryIndication
     * @param string $jobPageUrl
     * @param string $applicationUrl
     */
    public function __construct(
        string $title,
        string $description,
        PostingOrganizationModel $organization,
        PostingWorkingLocationModel $workingLocation,
        float $yearsOfExperience,
        string $employmentType,
        PostingWeeklyWorkingHoursModel $weeklyWorkingHours,
        PostingSalaryIndicationModel $salaryIndication,
        string $jobPageUrl,
        string $applicationUrl
    ) {
        $this->title = $title;
        $this->description = $description;
        $this->organization = $organization;
        $this->workingLocation = $workingLocation;
        $this->yearsOfExperience = $yearsOfExperience;
        $this->employmentType = $employmentType;
        $this->weeklyWorkingHours = $weeklyWorkingHours;
        $this->salaryIndication = $salaryIndication;
        $this->jobPageUrl = $jobPageUrl;
        $this->applicationUrl = $applicationUrl;
    }

    /**
     * Returns Title.
     * The title of the posting across the different Channels where the posting is going to be published.
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Sets Title.
     * The title of the posting across the different Channels where the posting is going to be published.
     *
     * @required
     * @maps title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * Returns Description.
     * Full description of the job posting, including all possible sections
     *
     * **Allowed tags:** `a[href|target], em, b, br, strong, i, li, ol, p, ul`
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Sets Description.
     * Full description of the job posting, including all possible sections
     *
     * **Allowed tags:** `a[href|target], em, b, br, strong, i, li, ol, p, ul`
     *
     * @required
     * @maps description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * Returns Organization.
     */
    public function getOrganization(): PostingOrganizationModel
    {
        return $this->organization;
    }

    /**
     * Sets Organization.
     *
     * @required
     * @maps organization
     */
    public function setOrganization(PostingOrganizationModel $organization): void
    {
        $this->organization = $organization;
    }

    /**
     * Returns Working Location.
     */
    public function getWorkingLocation(): PostingWorkingLocationModel
    {
        return $this->workingLocation;
    }

    /**
     * Sets Working Location.
     *
     * @required
     * @maps workingLocation
     */
    public function setWorkingLocation(PostingWorkingLocationModel $workingLocation): void
    {
        $this->workingLocation = $workingLocation;
    }

    /**
     * Returns Contact Info.
     * Contact is whom to contact about the job. This may be part of the posting info for candidates to
     * know whom they can reach out to learn more about the vacancy.
     */
    public function getContactInfo(): ?PostingContactInfoModel
    {
        return $this->contactInfo;
    }

    /**
     * Sets Contact Info.
     * Contact is whom to contact about the job. This may be part of the posting info for candidates to
     * know whom they can reach out to learn more about the vacancy.
     *
     * @maps contactInfo
     */
    public function setContactInfo(?PostingContactInfoModel $contactInfo): void
    {
        $this->contactInfo = $contactInfo;
    }

    /**
     * Returns Years of Experience.
     * Numbers of years of experience required for this position
     */
    public function getYearsOfExperience(): float
    {
        return $this->yearsOfExperience;
    }

    /**
     * Sets Years of Experience.
     * Numbers of years of experience required for this position
     *
     * @required
     * @maps yearsOfExperience
     */
    public function setYearsOfExperience(float $yearsOfExperience): void
    {
        $this->yearsOfExperience = $yearsOfExperience;
    }

    /**
     * Returns Employment Type.
     * The type of employment of the posting, whether it's a permanent position or a fixed time position
     */
    public function getEmploymentType(): string
    {
        return $this->employmentType;
    }

    /**
     * Sets Employment Type.
     * The type of employment of the posting, whether it's a permanent position or a fixed time position
     *
     * @required
     * @maps employmentType
     * @factory \HAPILib\Models\EmploymentTypeEnum::checkValue
     */
    public function setEmploymentType(string $employmentType): void
    {
        $this->employmentType = $employmentType;
    }

    /**
     * Returns Weekly Working Hours.
     */
    public function getWeeklyWorkingHours(): PostingWeeklyWorkingHoursModel
    {
        return $this->weeklyWorkingHours;
    }

    /**
     * Sets Weekly Working Hours.
     *
     * @required
     * @maps weeklyWorkingHours
     */
    public function setWeeklyWorkingHours(PostingWeeklyWorkingHoursModel $weeklyWorkingHours): void
    {
        $this->weeklyWorkingHours = $weeklyWorkingHours;
    }

    /**
     * Returns Salary Indication.
     */
    public function getSalaryIndication(): PostingSalaryIndicationModel
    {
        return $this->salaryIndication;
    }

    /**
     * Sets Salary Indication.
     *
     * @required
     * @maps salaryIndication
     */
    public function setSalaryIndication(PostingSalaryIndicationModel $salaryIndication): void
    {
        $this->salaryIndication = $salaryIndication;
    }

    /**
     * Returns Job Page Url.
     * Link to the page with the description of the job
     */
    public function getJobPageUrl(): string
    {
        return $this->jobPageUrl;
    }

    /**
     * Sets Job Page Url.
     * Link to the page with the description of the job
     *
     * @required
     * @maps jobPageUrl
     */
    public function setJobPageUrl(string $jobPageUrl): void
    {
        $this->jobPageUrl = $jobPageUrl;
    }

    /**
     * Returns Application Url.
     * Link to the page where the candidate needs to be directed when applying for a position
     */
    public function getApplicationUrl(): string
    {
        return $this->applicationUrl;
    }

    /**
     * Sets Application Url.
     * Link to the page where the candidate needs to be directed when applying for a position
     *
     * @required
     * @maps applicationUrl
     */
    public function setApplicationUrl(string $applicationUrl): void
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
        $json['organization']       = $this->organization;
        $json['workingLocation']    = $this->workingLocation;
        if (isset($this->contactInfo)) {
            $json['contactInfo']    = $this->contactInfo;
        }
        $json['yearsOfExperience']  = $this->yearsOfExperience;
        $json['employmentType']     = EmploymentTypeEnum::checkValue($this->employmentType);
        $json['weeklyWorkingHours'] = $this->weeklyWorkingHours;
        $json['salaryIndication']   = $this->salaryIndication;
        $json['jobPageUrl']         = $this->jobPageUrl;
        $json['applicationUrl']     = $this->applicationUrl;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
