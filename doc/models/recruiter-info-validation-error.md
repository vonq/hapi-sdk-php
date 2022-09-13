
# Recruiter Info Validation Error

## Structure

`RecruiterInfoValidationError`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?(string[])` | Optional | - | getId(): ?array | setId(?array id): void |
| `name` | `?(string[])` | Optional | - | getName(): ?array | setName(?array name): void |
| `emailAddress` | `?(string[])` | Optional | - | getEmailAddress(): ?array | setEmailAddress(?array emailAddress): void |

## Example (as JSON)

```json
{
  "name": [
    "This value should not be blank."
  ]
}
```

