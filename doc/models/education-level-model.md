
# Education Level Model

## Structure

`EducationLevelModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?int` | Optional | Internal Identification for an Education Level | getId(): ?int | setId(?int id): void |
| `name` | [`?(TaxonomyNameModel[])`](../../doc/models/taxonomy-name-model.md) | Optional | - | getName(): ?array | setName(?array name): void |

## Example (as JSON)

```json
{
  "id": 1,
  "name": [
    {
      "languageCode": "nl_NL",
      "value": "Master / Postdoctoraal"
    }
  ]
}
```

