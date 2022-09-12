
# Facet Model

## Structure

`FacetModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `string` | Required | The name of the Facet. To be used as a key when ordering a Campaign, under the `orderedProductsSpecs.postingRequirements` key. | getName(): string | setName(string name): void |
| `label` | `string` | Required | The user facing label | getLabel(): string | setLabel(string label): void |
| `sort` | `string` | Required | The order in the list of vacancy fields to be displayed to the user when posting. Facets with lower `sort` values should be displayed first. | getSort(): string | setSort(string sort): void |
| `required` | `bool` | Required | Whether the Facet is required when ordering a Campaign. 0 and 1 are equivalent to `true` or `false` | getRequired(): bool | setRequired(bool required): void |
| `type` | [`string (FacetTypeEnum)`](../../doc/models/facet-type-enum.md) | Required | The type of UI and data structure to be used to input and store values for this Facet. | getType(): string | setType(string type): void |
| `options` | [`OptionsFacetModel[]`](../../doc/models/options-facet-model.md) | Required | list of choices for this Facet's value. | getOptions(): array | setOptions(array options): void |
| `rules` | [`?(RuleModel[])`](../../doc/models/rule-model.md) | Optional | special validation rules that apply for this Facet's value | getRules(): ?array | setRules(?array rules): void |
| `autocomplete` | [`?CustomFacetModel`](../../doc/models/custom-facet-model.md) | Optional | - | getAutocomplete(): ?CustomFacetModel | setAutocomplete(?CustomFacetModel autocomplete): void |
| `displayRules` | [`?FacetDisplayRulesModel`](../../doc/models/facet-display-rules-model.md) | Optional | List of rules used to decide if this facet should be displayed or not.<br><br>The facet is displayed when the display rules object is null or if there is a match with at least one of the show rules.<br>Else the facet is not displayed and should not be shown to the user nor facet data be sent to the endpoint. | getDisplayRules(): ?FacetDisplayRulesModel | setDisplayRules(?FacetDisplayRulesModel displayRules): void |

## Example (as JSON)

```json
{
  "name": null,
  "label": null,
  "sort": null,
  "required": null,
  "type": "AUTOCOMPLETE",
  "options": null
}
```

