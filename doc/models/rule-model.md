
# Rule Model

## Structure

`RuleModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `rule` | [`string (RuleEnum)`](../../doc/models/rule-enum.md) | Required | lower/higher: value for this facet should be lower/higher than or equal to the value for referred facet<br><br>before/after: value for this facet should be before/after than or equal to the value for referred facet. Both facets are dates<br><br>url: value should be a valid URL<br><br>be-pc: Belgium postal code<br><br>belgium/de/dutch-city: Belgium/German/Dutch city<br><br>nl-pc, np-pc-straat: Dutch postal code, for nl-pc PO-boxes are not valid<br><br>isodateoptional: date formatted "Y-m-d", "Y-md H:i" or "Y-m-d H:i:s"<br><br>maxlengthcombined: (only used for type TEXTEXPAND) maximum length for all inputs combined to one string<br><br>separator: (only used for type TEXTEXPAND) string used to combine<br><br>maxlevels: maximum depth of a HIER<br><br>propertyId: only used internally<br><br>pushvalue: only used internally<br><br>validator:notEmptyIf: facet depends on vacancyvalue (exposed in API by required-tag in<br>[OptionsFacet](https://vonq.stoplight.io/docs/hapi/branches/2.1/6f1768e932ab5-facet-option) ) | getRule(): string | setRule(string rule): void |
| `data` | `string` | Required | the value used for the rule | getData(): string | setData(string data): void |

## Example (as JSON)

```json
{
  "rule": "date",
  "data": null
}
```

