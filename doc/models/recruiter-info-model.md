
# Recruiter Info Model

Recruiter is the user creating the campaign and you may want to use this to provide filtering by recruiter for groups sharing an account.

## Structure

`RecruiterInfoModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | A vendor-related unique identification for the Recruiter | getId(): ?string | setId(?string id): void |
| `name` | `string` | Required | - | getName(): string | setName(string name): void |
| `emailAddress` | `?string` | Optional | - | getEmailAddress(): ?string | setEmailAddress(?string emailAddress): void |

## Example (as JSON)

```json
{
  "name": "John Doe"
}
```

