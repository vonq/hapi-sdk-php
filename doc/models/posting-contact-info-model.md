
# Posting Contact Info Model

Contact is whom to contact about the job. This may be part of the posting info for candidates to know whom they can reach out to learn more about the vacancy.

## Structure

`PostingContactInfoModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `string` | Required | - | getName(): string | setName(string name): void |
| `phoneNumber` | `?string` | Optional | - | getPhoneNumber(): ?string | setPhoneNumber(?string phoneNumber): void |
| `emailAddress` | `?string` | Optional | - | getEmailAddress(): ?string | setEmailAddress(?string emailAddress): void |

## Example (as JSON)

```json
{
  "name": "Janet Doe"
}
```

