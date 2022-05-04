
# Target Group Model

## Structure

`TargetGroupModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `educationLevel` | [`TargetGroupElementModel[]`](../../doc/models/target-group-element-model.md) | Required | Education Level required by the Candidate. You can specify only one value. | getEducationLevel(): array | setEducationLevel(array educationLevel): void |
| `seniority` | [`TargetGroupElementModel[]`](../../doc/models/target-group-element-model.md) | Required | Seniority Level expected by the Candidate. You can specify only one value. | getSeniority(): array | setSeniority(array seniority): void |
| `industry` | [`TargetGroupElementModel[]`](../../doc/models/target-group-element-model.md) | Required | The Industry related to the Position open. You can specify only one value. | getIndustry(): array | setIndustry(array industry): void |
| `jobCategory` | [`TargetGroupElementModel[]`](../../doc/models/target-group-element-model.md) | Required | Job Category indicates the type of Position that's open. You can specify only one value. | getJobCategory(): array | setJobCategory(array jobCategory): void |

## Example (as JSON)

```json
{
  "educationLevel": {
    "description": "Element name",
    "vonqId": "23"
  },
  "seniority": {
    "description": "Element name",
    "vonqId": "23"
  },
  "industry": {
    "description": "Element name",
    "vonqId": "23"
  },
  "jobCategory": {
    "description": "Element name",
    "vonqId": "23"
  }
}
```

