
# Posting Details Model

## Structure

`PostingDetailsModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `title` | `string` | Required | The title of the posting across the different Channels where the posting is going to be published. | getTitle(): string | setTitle(string title): void |
| `description` | `string` | Required | Full description of the job posting, including all possible sections<br><br>**Allowed tags:** `a[href\|target], em, b, br, strong, i, li, ol, p, ul` | getDescription(): string | setDescription(string description): void |
| `organization` | [`PostingOrganizationModel`](../../doc/models/posting-organization-model.md) | Required | - | getOrganization(): PostingOrganizationModel | setOrganization(PostingOrganizationModel organization): void |
| `workingLocation` | [`PostingWorkingLocationModel`](../../doc/models/posting-working-location-model.md) | Required | - | getWorkingLocation(): PostingWorkingLocationModel | setWorkingLocation(PostingWorkingLocationModel workingLocation): void |
| `contactInfo` | [`?PostingContactInfoModel`](../../doc/models/posting-contact-info-model.md) | Optional | Contact is whom to contact about the job. This may be part of the posting info for candidates to know whom they can reach out to learn more about the vacancy. | getContactInfo(): ?PostingContactInfoModel | setContactInfo(?PostingContactInfoModel contactInfo): void |
| `yearsOfExperience` | `float` | Required | Numbers of years of experience required for this position | getYearsOfExperience(): float | setYearsOfExperience(float yearsOfExperience): void |
| `employmentType` | [`string (EmploymentTypeEnum)`](../../doc/models/employment-type-enum.md) | Required | The type of employment of the posting, whether it's a permanent position or a fixed time position | getEmploymentType(): string | setEmploymentType(string employmentType): void |
| `weeklyWorkingHours` | [`PostingWeeklyWorkingHoursModel`](../../doc/models/posting-weekly-working-hours-model.md) | Required | - | getWeeklyWorkingHours(): PostingWeeklyWorkingHoursModel | setWeeklyWorkingHours(PostingWeeklyWorkingHoursModel weeklyWorkingHours): void |
| `salaryIndication` | [`PostingSalaryIndicationModel`](../../doc/models/posting-salary-indication-model.md) | Required | - | getSalaryIndication(): PostingSalaryIndicationModel | setSalaryIndication(PostingSalaryIndicationModel salaryIndication): void |
| `jobPageUrl` | `string` | Required | Link to the page with the description of the job | getJobPageUrl(): string | setJobPageUrl(string jobPageUrl): void |
| `applicationUrl` | `string` | Required | Link to the page where the candidate needs to be directed when applying for a position | getApplicationUrl(): string | setApplicationUrl(string applicationUrl): void |

## Example (as JSON)

```json
{
  "title": "Come work for us, we're looking for amazing Software Developers",
  "description": "Are you a LEADER and a BUILDER?  Global is looking for individuals who are dynamic, sales-oriented, and who want to control their destiny.  With a full training programme and consistent support, Global will provide you with the tools to excel in this very lucrative business.",
  "organization": {
    "name": "Vonq",
    "companyLogo": "http://static.ats.com/public/vonq-company-logo.png"
  },
  "workingLocation": {
    "addressLine1": "Westblaak 175",
    "postcode": "3012 KJ",
    "city": "Rotterdam",
    "country": "The Netherlands"
  },
  "yearsOfExperience": 5,
  "employmentType": "permanent",
  "weeklyWorkingHours": {
    "to": 40
  },
  "salaryIndication": {
    "period": "yearly",
    "range": {
      "to": 60000
    }
  },
  "jobPageUrl": "http://amadeus-hospitality-it-careers.com/vacancy/software-development-manager-breda",
  "applicationUrl": "http://amadeus-hospitality-it-careers.com/vacancy/software-development-manager-breda/apply"
}
```

