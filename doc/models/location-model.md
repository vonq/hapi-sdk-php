
# Location Model

## Structure

`LocationModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `int` | Required | - | getId(): int | setId(int id): void |
| `fullyQualifiedPlaceName` | `string` | Required | - | getFullyQualifiedPlaceName(): string | setFullyQualifiedPlaceName(string fullyQualifiedPlaceName): void |
| `canonicalName` | `string` | Required | - | getCanonicalName(): string | setCanonicalName(string canonicalName): void |
| `boundingBox` | `float[]` | Required | The bounding box of the location on a world map | getBoundingBox(): array | setBoundingBox(array boundingBox): void |
| `area` | `?int` | Optional | Location area, in square kilometers | getArea(): ?int | setArea(?int area): void |
| `placeType` | [`string[] (PlaceTypeEnum)`](../../doc/models/place-type-enum.md) | Required | - | getPlaceType(): array | setPlaceType(array placeType): void |
| `within` | [`LocationModel`](../../doc/models/location-model.md) | Required | - | getWithin(): LocationModel | setWithin(LocationModel within): void |

## Example (as JSON)

```json
{
  "id": 112,
  "fully_qualified_place_name": "fully_qualified_place_name4",
  "canonical_name": "canonical_name4",
  "bounding_box": [
    198.25,
    198.26
  ],
  "area": null,
  "place_type": [
    "continent",
    "world",
    "place"
  ],
  "within": {
    "id": 176,
    "fully_qualified_place_name": "fully_qualified_place_name0",
    "canonical_name": "canonical_name0",
    "bounding_box": [
      109.29,
      109.3
    ],
    "area": null,
    "place_type": [
      "region",
      "district",
      "place"
    ],
    "within": {
      "id": 112,
      "fully_qualified_place_name": "fully_qualified_place_name4",
      "canonical_name": "canonical_name4",
      "bounding_box": [
        198.25,
        198.26
      ],
      "area": null,
      "place_type": [
        "continent",
        "world",
        "place"
      ],
      "within": null
    }
  }
}
```

