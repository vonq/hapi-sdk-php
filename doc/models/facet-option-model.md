
# Facet Option Model

## Structure

`FacetOptionModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `mDefault` | `string` | Required | Whether the option should be the default choice when rendering the SELECT. | getMDefault(): string | setMDefault(string mDefault): void |
| `key` | `string` | Required | The value to be used when setting the value of the facet when this option is selected. | getKey(): string | setKey(string key): void |
| `label` | `string` | Required | The option's user-friendly label | getLabel(): string | setLabel(string label): void |
| `sort` | `string` | Required | The order of the option in the list of options. lower value means higher rank. | getSort(): string | setSort(string sort): void |
| `show` | [`?(FacetOptionShowFacetsModel[])`](../../doc/models/facet-option-show-facets-model.md) | Optional | References to Facets that becomes required when this option is selected | getShow(): ?array | setShow(?array show): void |

## Example (as JSON)

```json
{
  "default": "default0",
  "key": "key0",
  "label": "label0",
  "sort": "sort8",
  "show": null
}
```

