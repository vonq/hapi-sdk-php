
# Facet Model

## Structure

`FacetModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `string` | Required | The name of the Facet. To be used as a key when ordering a Campaign, under the `orderedProductsSpecs.postingRequirements` key. | getName(): string | setName(string name): void |
| `label` | `string` | Required | The user facing label | getLabel(): string | setLabel(string label): void |
| `sort` | `string` | Required | The order in the list of vacancy fields to be displayed to the user when posting. Facets with lower `sort` values should be displayed first. | getSort(): string | setSort(string sort): void |
| `required` | `bool` | Required | Whether the Facet is required when ordering a Campaign. | getRequired(): bool | setRequired(bool required): void |
| `type` | [`string (TypeEnum)`](../../doc/models/type-enum.md) | Required | The type of UI and data structure to be used to input and store values for this Facet. | getType(): string | setType(string type): void |
| `options` | [`FacetOptionModel[]`](../../doc/models/facet-option-model.md) | Required | list of choices for this Facet's value. | getOptions(): array | setOptions(array options): void |
| `rules` | [`?(FacetRuleModel[])`](../../doc/models/facet-rule-model.md) | Optional | special validation rules that apply for this Facet's value | getRules(): ?array | setRules(?array rules): void |
| `autocomplete` | [`?AutocompleteModel`](../../doc/models/autocomplete-model.md) | Required | Used for Facets whose value choices need to be fetched through an additional call to the [List autocomplete values for posting requirements](https://vonq.stoplight.io/docs/hapi/b3A6MzM2MDEzODk-list-autocomplete-values-for-posting-requirement) endpoint. | getAutocomplete(): ?AutocompleteModel | setAutocomplete(?AutocompleteModel autocomplete): void |

## Example (as JSON)

```json
{
  "name": null,
  "label": null,
  "sort": null,
  "required": null,
  "type": "AUTOCOMPLETE",
  "options": null,
  "autocomplete": null
}
```

