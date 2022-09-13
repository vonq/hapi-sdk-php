
# Facet Display Rules Model

List of rules used to decide if this facet should be displayed or not.

The facet is displayed when the display rules object is null or if there is a match with at least one of the show rules.
Else the facet is not displayed and should not be shown to the user nor facet data be sent to the endpoint.

## Structure

`FacetDisplayRulesModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `show` | [`FacetDisplayRuleModel[]`](../../doc/models/facet-display-rule-model.md) | Required | - | getShow(): array | setShow(array show): void |

## Example (as JSON)

```json
{
  "show": [
    {
      "facet": "IGB_locationtype"
    }
  ]
}
```

