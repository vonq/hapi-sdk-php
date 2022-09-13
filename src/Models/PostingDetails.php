<?php

declare(strict_types=1);

/*
 * VONQHiringAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VONQHiringAPILib\Models;

use stdClass;

class PostingDetails implements \JsonSerializable
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
     * @var PostingDetailsOrganization
     */
    private $organization;

    /**
     * @var PostingWorkingLocation
     */
    private $workingLocation;

    /**
     * @var PostingContactInfo
     */
    private $contactInfo;

    /**
     * @var int
     */
    private $yearsOfExperience;

    /**
     * @var string
     */
    private $employmentType;

    /**
     * @var PostingWeeklyWorkingHours
     */
    private $weeklyWorkingHours;

    /**
     * @var PostingSalaryIndication
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
     * @param PostingDetailsOrganization $organization
     * @param PostingWorkingLocation $workingLocation
     * @param PostingContactInfo $contactInfo
     * @param int $yearsOfExperience
     * @param string $employmentType
     * @param PostingWeeklyWorkingHours $weeklyWorkingHours
     * @param PostingSalaryIndication $salaryIndication
     * @param string $jobPageUrl
     * @param string $applicationUrl
     */
    public function __construct(
        string $title,
        string $description,
        PostingDetailsOrganization $organization,
        PostingWorkingLocation $workingLocation,
        PostingContactInfo $contactInfo,
        int $yearsOfExperience,
        string $employmentType,
        PostingWeeklyWorkingHours $weeklyWorkingHours,
        PostingSalaryIndication $salaryIndication,
        string $jobPageUrl,
        string $applicationUrl
    ) {
        $this->title = $title;
        $this->description = $description;
        $this->organization = $organization;
        $this->workingLocation = $workingLocation;
        $this->contactInfo = $contactInfo;
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
    public function getOrganization(): PostingDetailsOrganization
    {
        return $this->organization;
    }

    /**
     * Sets Organization.
     *
     * @required
     * @maps organization
     */
    public function setOrganization(PostingDetailsOrganization $organization): void
    {
        $this->organization = $organization;
    }

    /**
     * Returns Working Location.
     */
    public function getWorkingLocation(): PostingWorkingLocation
    {
        return $this->workingLocation;
    }

    /**
     * Sets Working Location.
     *
     * @required
     * @maps workingLocation
     */
    public function setWorkingLocation(PostingWorkingLocation $workingLocation): void
    {
        $this->workingLocation = $workingLocation;
    }

    /**
     * Returns Contact Info.
     * Contact is whom to contact about the job. This may be part of the posting info for candidates to
     * know whom they can reach out to in order to learn more about the vacancy. As a minimum, a contact
     * name is required to be able to offer a standardized check out experience for all 5000+ channels we
     * offer, and to enable fast campaign delivery.
     */
    public function getContactInfo(): PostingContactInfo
    {
        return $this->contactInfo;
    }

    /**
     * Sets Contact Info.
     * Contact is whom to contact about the job. This may be part of the posting info for candidates to
     * know whom they can reach out to in order to learn more about the vacancy. As a minimum, a contact
     * name is required to be able to offer a standardized check out experience for all 5000+ channels we
     * offer, and to enable fast campaign delivery.
     *
     * @required
     * @maps contactInfo
     */
    public function setContactInfo(PostingContactInfo $contactInfo): void
    {
        $this->contactInfo = $contactInfo;
    }

    /**
     * Returns Years of Experience.
     * Numbers of years of experience required for this position
     */
    public function getYearsOfExperience(): int
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
    public function setYearsOfExperience(int $yearsOfExperience): void
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
     * @factory \VONQHiringAPILib\Models\EmploymentTypeEnum::checkValue
     */
    public function setEmploymentType(string $employmentType): void
    {
        $this->employmentType = $employmentType;
    }

    /**
     * Returns Weekly Working Hours.
     */
    public function getWeeklyWorkingHours(): PostingWeeklyWorkingHours
    {
        return $this->weeklyWorkingHours;
    }

    /**
     * Sets Weekly Working Hours.
     *
     * @required
     * @maps weeklyWorkingHours
     */
    public function setWeeklyWorkingHours(PostingWeeklyWorkingHours $weeklyWorkingHours): void
    {
        $this->weeklyWorkingHours = $weeklyWorkingHours;
    }

    /**
     * Returns Salary Indication.
     * Most job boards require a salary indication to be provided. This is a required field to be able to
     * offer a standardized check out experience for all 5000+ channels we offer, and to enable fast
     * campaign delivery.
     */
    public function getSalaryIndication(): PostingSalaryIndication
    {
        return $this->salaryIndication;
    }

    /**
     * Sets Salary Indication.
     * Most job boards require a salary indication to be provided. This is a required field to be able to
     * offer a standardized check out experience for all 5000+ channels we offer, and to enable fast
     * campaign delivery.
     *
     * @required
     * @maps salaryIndication
     */
    public function setSalaryIndication(PostingSalaryIndication $salaryIndication): void
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
        $json['contactInfo']        = $this->contactInfo;
        $json['yearsOfExperience']  = $this->yearsOfExperience;
        $json['employmentType']     = EmploymentTypeEnum::checkValue($this->employmentType);
        $json['weeklyWorkingHours'] = $this->weeklyWorkingHours;
        $json['salaryIndication']   = $this->salaryIndication;
        $json['jobPageUrl']         = $this->jobPageUrl;
        $json['applicationUrl']     = $this->applicationUrl;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
