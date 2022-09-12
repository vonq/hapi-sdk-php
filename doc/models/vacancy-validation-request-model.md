
# Vacancy Validation Request Model

Vacancy info validation object payload.

The `vacancy` property will contain all vacancy data used to send in the campaign ordering except for `orderedProducts` and `orderedProductsSpecs` props.

## Structure

`VacancyValidationRequestModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `vacancy` | `array` | Required | - | getVacancy(): array | setVacancy(array vacancy): void |

## Example (as JSON)

```json
{
  "vacancy": {
    "key0": {
      "key1": "val1",
      "key2": "val2"
    },
    "key1": {
      "key1": "val1",
      "key2": "val2"
    }
  }
}
```

