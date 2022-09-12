
# Options Facet Model

## Structure

`OptionsFacetModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `mDefault` | `string` | Required | Whether the option should be the default choice when rendering the SELECT. | getMDefault(): string | setMDefault(string mDefault): void |
| `key` | `string` | Required | The value to be used when setting the value of the facet when this option is selected. | getKey(): string | setKey(string key): void |
| `label` | `string` | Required | The option's user-friendly label | getLabel(): string | setLabel(string label): void |
| `labels` | `?array` | Optional | - | getLabels(): ?array | setLabels(?array labels): void |
| `sort` | `string` | Required | The order of the option in the list of options. lower value means higher rank. | getSort(): string | setSort(string sort): void |
| `parent` | `?string` | Optional | References to Facets that becomes required when this option is selected | getParent(): ?string | setParent(?string parent): void |
| `requires` | `?(array[])` | Optional | - | getRequires(): ?array | setRequires(?array requires): void |

## Example (as JSON)

```json
{
  "default": "default0",
  "key": "key0",
  "label": "label0",
  "labels": null,
  "sort": "sort8",
  "parent": null,
  "requires": null
}
```

