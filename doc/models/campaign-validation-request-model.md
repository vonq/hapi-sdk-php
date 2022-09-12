
# Campaign Validation Request Model

Vacancy validation object payload.

The `campaign` property will contain all vacancy data used to send in the campaign ordering.

## Structure

`CampaignValidationRequestModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `campaign` | `array` | Required | - | getCampaign(): array | setCampaign(array campaign): void |

## Example (as JSON)

```json
{
  "campaign": {
    "key0": {
      "key1": "val1",
      "key2": "val2"
    }
  }
}
```

