
# Ordered Products Get Element

## Structure

`OrderedProductsGetElement`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `productId` | `string` | Required | Product Identification | getProductId(): string | setProductId(string productId): void |
| `status` | [`string (Status3Enum)`](../../doc/models/status-3-enum.md) | Required | Status per product | getStatus(): string | setStatus(string status): void |
| `statusDescription` | `?string` | Required | Status description, additional status information. For Contract based products, in case of posting error, this will include the raw job board error message, therefore is not always user-friendly | getStatusDescription(): ?string | setStatusDescription(?string statusDescription): void |
| `deliveredOn` | `?\DateTime` | Required | Date when the channel went online | getDeliveredOn(): ?\DateTime | setDeliveredOn(?\DateTime deliveredOn): void |
| `duration` | `?string` | Required | How long will the `Product` be online. [DEPRECATED] please instead use the `durationPeriod` | getDuration(): ?string | setDuration(?string duration): void |
| `durationPeriod` | [`Duration`](../../doc/models/duration.md) | Required | - | getDurationPeriod(): Duration | setDurationPeriod(Duration durationPeriod): void |
| `utm` | `?string` | Required | Tracking codes | getUtm(): ?string | setUtm(?string utm): void |
| `jobBoardLink` | `?string` | Required | Link to the job ad on the channel. Sometimes this link is not available from a job board, then the product homepage is returned. | getJobBoardLink(): ?string | setJobBoardLink(?string jobBoardLink): void |
| `contractId` | `?string` | Required | Contract Identifier for My Contracts product | getContractId(): ?string | setContractId(?string contractId): void |
| `postingRequirements` | [`PostingRequirements`](../../doc/models/posting-requirements.md) | Required | - | getPostingRequirements(): PostingRequirements | setPostingRequirements(PostingRequirements postingRequirements): void |

## Example (as JSON)

```json
{
  "productId": "2cbad29e-a510-52fc-bbdf-e873320e89f5",
  "status": "online",
  "statusDescription": null,
  "deliveredOn": "11/30/2020 11:00:15",
  "duration": "20 days",
  "durationPeriod": null,
  "utm": "utm_medium=social&utm_source=facebook&utm_campaign=example",
  "jobBoardLink": "http://job.ad.com/software-developer",
  "contractId": "06a8f6f0-5e0e-4614-869e-ab95a8530633",
  "postingRequirements": null
}
```

