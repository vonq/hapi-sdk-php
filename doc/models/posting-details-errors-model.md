
# Posting Details Errors Model

## Structure

`PostingDetailsErrorsModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `title` | `string[]` | Required | - | getTitle(): array | setTitle(array title): void |
| `description` | `string[]` | Required | - | getDescription(): array | setDescription(array description): void |
| `yearsOfExperience` | `string[]` | Required | - | getYearsOfExperience(): array | setYearsOfExperience(array yearsOfExperience): void |
| `employmentType` | `string[]` | Required | - | getEmploymentType(): array | setEmploymentType(array employmentType): void |
| `organization` | [`OrganizationModel`](../../doc/models/organization-model.md) | Required | - | getOrganization(): OrganizationModel | setOrganization(OrganizationModel organization): void |
| `workingLocation` | [`WorkingLocationModel`](../../doc/models/working-location-model.md) | Required | - | getWorkingLocation(): WorkingLocationModel | setWorkingLocation(WorkingLocationModel workingLocation): void |
| `weeklyWorkingHours` | [`WeeklyWorkingHoursModel`](../../doc/models/weekly-working-hours-model.md) | Required | - | getWeeklyWorkingHours(): WeeklyWorkingHoursModel | setWeeklyWorkingHours(WeeklyWorkingHoursModel weeklyWorkingHours): void |
| `salaryIndication` | [`SalaryIndicationModel`](../../doc/models/salary-indication-model.md) | Required | - | getSalaryIndication(): SalaryIndicationModel | setSalaryIndication(SalaryIndicationModel salaryIndication): void |
| `jobPageUrl` | `string[]` | Required | - | getJobPageUrl(): array | setJobPageUrl(array jobPageUrl): void |
| `applicationUrl` | `string[]` | Required | - | getApplicationUrl(): array | setApplicationUrl(array applicationUrl): void |

## Example (as JSON)

```json
{
  "title": [
    "A Title of the Posting is required"
  ],
  "description": [
    "A Description of the Posting is required"
  ],
  "yearsOfExperience": [
    "This value should not be blank."
  ],
  "employmentType": [
    "A Posting needs a type of employment"
  ],
  "organization": {
    "name": [
      "This value should not be blank."
    ],
    "companyLogo": [
      "This value should not be blank."
    ]
  },
  "workingLocation": {
    "addressLine1": [
      "This value should not be blank."
    ],
    "postcode": [
      "This value should not be blank."
    ],
    "city": [
      "This value should not be blank."
    ],
    "country": [
      "This value should not be blank."
    ]
  },
  "weeklyWorkingHours": {
    "to": [
      "This value should not be blank."
    ]
  },
  "salaryIndication": {
    "period": [
      "A SalaryIndication needs a period"
    ],
    "range": {
      "to": [
        "This value should not be blank."
      ]
    }
  },
  "jobPageUrl": [
    "This value should not be blank."
  ],
  "applicationUrl": [
    "This value should not be blank."
  ]
}
```

