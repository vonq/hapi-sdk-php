
# Facet Display Rule

## Structure

`FacetDisplayRule`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `facet` | `string` | Required | Facet from which to use the value | getFacet(): string | setFacet(string facet): void |
| `value` | `` | Optional | Value to use in the operation | getValue(): | setValue( value): void |
| `op` | [`string (OpEnum)`](../../doc/models/op-enum.md) | Required | Operation type made between the value and the facet value | getOp(): string | setOp(string op): void |

## Example (as JSON)

```json
{
  "facet": "IGB_locationtype",
  "op": null
}
```

