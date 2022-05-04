
# Location Model

Location(id, canonical_name, desq_name_en, desq_country_code, country_code, mapbox_id, mapbox_text, mapbox_placename, mapbox_context, mapbox_place_type, mapbox_shortcode, mapbox_within)

## Structure

`LocationModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `float` | Required | - | getId(): float | setId(float id): void |
| `fullyQualifiedPlaceName` | `string` | Required | - | getFullyQualifiedPlaceName(): string | setFullyQualifiedPlaceName(string fullyQualifiedPlaceName): void |
| `canonicalName` | `string` | Required | - | getCanonicalName(): string | setCanonicalName(string canonicalName): void |
| `boundingBox` | `float[]` | Required | - | getBoundingBox(): array | setBoundingBox(array boundingBox): void |
| `area` | `float` | Required | - | getArea(): float | setArea(float area): void |
| `placeType` | [`string (PlaceTypeEnum)`](../../doc/models/place-type-enum.md) | Required | - | getPlaceType(): string | setPlaceType(string placeType): void |
| `within` | [`LocationModel`](../../doc/models/location-model.md) | Required | - | getWithin(): LocationModel | setWithin(LocationModel within): void |

## Example (as JSON)

```json
{
  "id": null,
  "fully_qualified_place_name": null,
  "canonical_name": null,
  "bounding_box": null,
  "area": null,
  "place_type": "place",
  "within": {
    "id": null,
    "fully_qualified_place_name": null,
    "canonical_name": null,
    "bounding_box": null,
    "area": null,
    "place_type": "place",
    "within": null
  }
}
```

