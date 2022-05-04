
# Working Location Model

## Structure

`WorkingLocationModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `addressLine1` | `string[]` | Required | - | getAddressLine1(): array | setAddressLine1(array addressLine1): void |
| `postcode` | `string[]` | Required | - | getPostcode(): array | setPostcode(array postcode): void |
| `city` | `string[]` | Required | - | getCity(): array | setCity(array city): void |
| `country` | `string[]` | Required | - | getCountry(): array | setCountry(array country): void |

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

