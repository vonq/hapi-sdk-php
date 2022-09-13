
# Posting Details Validation Error

## Structure

`PostingDetailsValidationError`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `title` | `?(string[])` | Optional | - | getTitle(): ?array | setTitle(?array title): void |
| `description` | `?(string[])` | Optional | - | getDescription(): ?array | setDescription(?array description): void |
| `yearsOfExperience` | `?(string[])` | Optional | - | getYearsOfExperience(): ?array | setYearsOfExperience(?array yearsOfExperience): void |
| `employmentType` | `?(string[])` | Optional | - | getEmploymentType(): ?array | setEmploymentType(?array employmentType): void |
| `organization` | [`?OrganizationValidationError`](../../doc/models/organization-validation-error.md) | Optional | - | getOrganization(): ?OrganizationValidationError | setOrganization(?OrganizationValidationError organization): void |
| `contactInfo` | [`?ContactInfoValidationError`](../../doc/models/contact-info-validation-error.md) | Optional | - | getContactInfo(): ?ContactInfoValidationError | setContactInfo(?ContactInfoValidationError contactInfo): void |
| `workingLocation` | [`?WorkingLocationValidationError`](../../doc/models/working-location-validation-error.md) | Optional | - | getWorkingLocation(): ?WorkingLocationValidationError | setWorkingLocation(?WorkingLocationValidationError workingLocation): void |
| `weeklyWorkingHours` | [`?WeeklyWorkingHoursValidationError`](../../doc/models/weekly-working-hours-validation-error.md) | Optional | - | getWeeklyWorkingHours(): ?WeeklyWorkingHoursValidationError | setWeeklyWorkingHours(?WeeklyWorkingHoursValidationError weeklyWorkingHours): void |
| `salaryIndication` | [`?SalaryIndicationValidationError`](../../doc/models/salary-indication-validation-error.md) | Optional | - | getSalaryIndication(): ?SalaryIndicationValidationError | setSalaryIndication(?SalaryIndicationValidationError salaryIndication): void |
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

