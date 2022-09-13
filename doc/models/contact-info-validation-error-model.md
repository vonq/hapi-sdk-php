
# Contact Info Validation Error Model

## Structure

`ContactInfoValidationErrorModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `?(string[])` | Optional | - | getName(): ?array | setName(?array name): void |
| `phoneNumber` | `?(string[])` | Optional | - | getPhoneNumber(): ?array | setPhoneNumber(?array phoneNumber): void |
| `emailAddress` | `?(string[])` | Optional | - | getEmailAddress(): ?array | setEmailAddress(?array emailAddress): void |

## Example (as JSON)

```json
{
  "name": [
    "name0",
    "name1",
    "name2"
  ],
  "phoneNumber": [
    "phoneNumber5",
    "phoneNumber6"
  ],
  "emailAddress": [
    "emailAddress0",
    "emailAddress1"
  ]
}
```

