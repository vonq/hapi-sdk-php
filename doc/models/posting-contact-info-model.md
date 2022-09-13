
# Posting Contact Info Model

Contact is whom to contact about the job. This may be part of the posting info for candidates to know whom they can reach out to in order to learn more about the vacancy. As a minimum, a contact name is required to be able to offer a standardized check out experience for all 5000+ channels we offer, and to enable fast campaign delivery.

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
  "name": "Janet Doe",
  "phoneNumber": "+31 6 5555 5555",
  "emailAddress": "janet.doe@vonq.com"
}
```

