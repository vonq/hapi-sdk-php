
# Organization Validation Error Model

## Structure

`OrganizationValidationErrorModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `?(string[])` | Optional | - | getName(): ?array | setName(?array name): void |
| `companyLogo` | `?(string[])` | Optional | - | getCompanyLogo(): ?array | setCompanyLogo(?array companyLogo): void |

## Example (as JSON)

```json
{
  "name": [
    "This value should not be blank."
  ],
  "companyLogo": [
    "This value should not be blank."
  ]
}
```

