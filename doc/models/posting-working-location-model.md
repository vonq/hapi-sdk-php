
# Posting Working Location Model

## Structure

`PostingWorkingLocationModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `addressLine1` | `string` | Required | - | getAddressLine1(): string | setAddressLine1(string addressLine1): void |
| `addressLine2` | `?string` | Optional | - | getAddressLine2(): ?string | setAddressLine2(?string addressLine2): void |
| `postcode` | `string` | Required | - | getPostcode(): string | setPostcode(string postcode): void |
| `city` | `string` | Required | - | getCity(): string | setCity(string city): void |
| `country` | `string` | Required | - | getCountry(): string | setCountry(string country): void |
| `allowsRemoteWork` | `?float` | Optional | Optional parameter allowing remote work, possible values are 0 and 1, defaults to 0 | getAllowsRemoteWork(): ?float | setAllowsRemoteWork(?float allowsRemoteWork): void |

## Example (as JSON)

```json
{
  "addressLine1": "Westblaak 175",
  "postcode": "3012 KJ",
  "city": "Rotterdam",
  "country": "The Netherlands"
}
```

