
# Recruiter Info Model

Recruiter is the user creating the campaign and you may want to use this to provide filtering by recruiter for groups sharing an account.

## Structure

`RecruiterInfoModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `string` | Required | A vendor-related unique identification for the Recruiter | getId(): string | setId(string id): void |
| `name` | `string` | Required | - | getName(): string | setName(string name): void |
| `emailAddress` | `string` | Required | - | getEmailAddress(): string | setEmailAddress(string emailAddress): void |

## Example (as JSON)

```json
{
  "id": "af78ce39-94a8-45dc-8c68-35f4d684fa5f",
  "name": "John Doe",
  "emailAddress": "john.doe@vonq.com"
}
```

