
# Facet Rule Model

## Structure

`FacetRuleModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `rule` | [`string (RuleEnum)`](../../doc/models/rule-enum.md) | Required | - | getRule(): string | setRule(string rule): void |
| `data` | `string` | Required | the value used for the rule | getData(): string | setData(string data): void |

## Example (as JSON)

```json
{
  "rule": "date",
  "data": null
}
```

