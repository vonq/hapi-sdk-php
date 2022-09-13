
# Working Location Validation Error

## Structure

`WorkingLocationValidationError`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `addressLine1` | `?(string[])` | Optional | - | getAddressLine1(): ?array | setAddressLine1(?array addressLine1): void |
| `addressLine2` | `?(string[])` | Optional | - | getAddressLine2(): ?array | setAddressLine2(?array addressLine2): void |
| `postcode` | `?(string[])` | Optional | - | getPostcode(): ?array | setPostcode(?array postcode): void |
| `city` | `?(string[])` | Optional | - | getCity(): ?array | setCity(?array city): void |
| `country` | `?(string[])` | Optional | - | getCountry(): ?array | setCountry(?array country): void |
| `allowsRemoteWork` | `?(string[])` | Optional | - | getAllowsRemoteWork(): ?array | setAllowsRemoteWork(?array allowsRemoteWork): void |

## Example (as JSON)

```json
{
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
}
```

