
# Ordered Products Get Element Model

## Structure

`OrderedProductsGetElementModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `productId` | `?string` | Optional | Product Identification | getProductId(): ?string | setProductId(?string productId): void |
| `status` | `?string` | Optional | Status per product | getStatus(): ?string | setStatus(?string status): void |
| `statusDescription` | `?string` | Optional | Status description, additional status information | getStatusDescription(): ?string | setStatusDescription(?string statusDescription): void |
| `deliveredOn` | `?string` | Optional | Date when the channel went online | getDeliveredOn(): ?string | setDeliveredOn(?string deliveredOn): void |
| `duration` | `?string` | Optional | How long will the `Product` be online. [DEPRECATED] please instead use the `durationPeriod` | getDuration(): ?string | setDuration(?string duration): void |
| `durationPeriod` | [`?DurationModel`](../../doc/models/duration-model.md) | Optional | - | getDurationPeriod(): ?DurationModel | setDurationPeriod(?DurationModel durationPeriod): void |
| `utm` | `?string` | Optional | Tracking codes | getUtm(): ?string | setUtm(?string utm): void |
| `jobBoardLink` | `?string` | Optional | Link to the job ad on the channel. Sometimes this link is not available from a job board, then the product homepage is returned. | getJobBoardLink(): ?string | setJobBoardLink(?string jobBoardLink): void |
| `contractId` | `?string` | Optional | Contract Identifier for My Contracts product | getContractId(): ?string | setContractId(?string contractId): void |
| `postingRequirements` | [`?PostingRequirementsModel`](../../doc/models/posting-requirements-model.md) | Optional | - | getPostingRequirements(): ?PostingRequirementsModel | setPostingRequirements(?PostingRequirementsModel postingRequirements): void |

## Example (as JSON)

```json
{
  "productId": null,
  "status": null,
  "statusDescription": null,
  "deliveredOn": null,
  "duration": null,
  "durationPeriod": null,
  "utm": null,
  "jobBoardLink": null,
  "contractId": null,
  "postingRequirements": null
}
```

