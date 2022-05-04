
# Target Group Element Model

## Structure

`TargetGroupElementModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `description` | `string` | Required | The vonq name for this target group element | getDescription(): string | setDescription(string description): void |
| `vonqId` | `string` | Required | The Vonq ID representing this concept, as indicated in the [**`Taxonomy Endpoints`**](#reference/experimental-products-search) | getVonqId(): string | setVonqId(string vonqId): void |

## Example (as JSON)

```json
{
  "description": "Element name",
  "vonqId": "23"
}
```

