
# Posting Details Validation Error Model

## Structure

`PostingDetailsValidationErrorModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `title` | `?(string[])` | Optional | - | getTitle(): ?array | setTitle(?array title): void |
| `description` | `?(string[])` | Optional | - | getDescription(): ?array | setDescription(?array description): void |
| `yearsOfExperience` | `?(string[])` | Optional | - | getYearsOfExperience(): ?array | setYearsOfExperience(?array yearsOfExperience): void |
| `employmentType` | `?(string[])` | Optional | - | getEmploymentType(): ?array | setEmploymentType(?array employmentType): void |
| `organization` | [`?OrganizationValidationErrorModel`](../../doc/models/organization-validation-error-model.md) | Optional | - | getOrganization(): ?OrganizationValidationErrorModel | setOrganization(?OrganizationValidationErrorModel organization): void |
| `contactInfo` | [`?ContactInfoValidationErrorModel`](../../doc/models/contact-info-validation-error-model.md) | Optional | - | getContactInfo(): ?ContactInfoValidationErrorModel | setContactInfo(?ContactInfoValidationErrorModel contactInfo): void |
| `workingLocation` | [`?WorkingLocationValidationErrorModel`](../../doc/models/working-location-validation-error-model.md) | Optional | - | getWorkingLocation(): ?WorkingLocationValidationErrorModel | setWorkingLocation(?WorkingLocationValidationErrorModel workingLocation): void |
| `weeklyWorkingHours` | [`?WeeklyWorkingHoursValidationErrorModel`](../../doc/models/weekly-working-hours-validation-error-model.md) | Optional | - | getWeeklyWorkingHours(): ?WeeklyWorkingHoursValidationErrorModel | setWeeklyWorkingHours(?WeeklyWorkingHoursValidationErrorModel weeklyWorkingHours): void |
| `salaryIndication` | [`?SalaryIndicationValidationErrorModel`](../../doc/models/salary-indication-validation-error-model.md) | Optional | - | getSalaryIndication(): ?SalaryIndicationValidationErrorModel | setSalaryIndication(?SalaryIndicationValidationErrorModel salaryIndication): void |
| `jobPageUrl` | `?(string[])` | Optional | - | getJobPageUrl(): ?array | setJobPageUrl(?array jobPageUrl): void |
| `applicationUrl` | `?(string[])` | Optional | - | getApplicationUrl(): ?array | setApplicationUrl(?array applicationUrl): void |

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

