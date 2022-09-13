
# Target Group Validation Error Model

## Structure

`TargetGroupValidationErrorModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `jobCategory` | [`?(TargetGroupPropertyValidationErrorModel[])`](../../doc/models/target-group-property-validation-error-model.md) | Optional | - | getJobCategory(): ?array | setJobCategory(?array jobCategory): void |
| `seniority` | [`?(TargetGroupPropertyValidationErrorModel[])`](../../doc/models/target-group-property-validation-error-model.md) | Optional | - | getSeniority(): ?array | setSeniority(?array seniority): void |
| `industry` | [`?(TargetGroupPropertyValidationErrorModel[])`](../../doc/models/target-group-property-validation-error-model.md) | Optional | - | getIndustry(): ?array | setIndustry(?array industry): void |
| `educationLevel` | [`?(TargetGroupPropertyValidationErrorModel[])`](../../doc/models/target-group-property-validation-error-model.md) | Optional | - | getEducationLevel(): ?array | setEducationLevel(?array educationLevel): void |

## Example (as JSON)

```json
{
  "jobCategory": [
    {
      "vonqId": [
        "vonqId4",
        "vonqId5"
      ],
      "description": [
        "description7",
        "description8"
      ]
    }
  ],
  "seniority": [
    {
      "vonqId": [
        "vonqId3",
        "vonqId4",
        "vonqId5"
      ],
      "description": [
        "description6",
        "description5"
      ]
    },
    {
      "vonqId": [
        "vonqId4"
      ],
      "description": [
        "description7"
      ]
    },
    {
      "vonqId": [
        "vonqId5",
        "vonqId6"
      ],
      "description": [
        "description8",
        "description7",
        "description6"
      ]
    }
  ],
  "industry": [
    {
      "vonqId": [
        "vonqId2",
        "vonqId3"
      ],
      "description": [
        "description5",
        "description6",
        "description7"
      ]
    },
    {
      "vonqId": [
        "vonqId3",
        "vonqId4",
        "vonqId5"
      ],
      "description": [
        "description4",
        "description5"
      ]
    }
  ],
  "educationLevel": [
    {
      "vonqId": [
        "vonqId4",
        "vonqId5"
      ],
      "description": [
        "description7",
        "description8"
      ]
    }
  ]
}
```

