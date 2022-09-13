
# Product

## Structure

`Product`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `title` | `string` | Required | - | getTitle(): string | setTitle(string title): void |
| `locations` | [`LimitedLocation[]`](../../doc/models/limited-location.md) | Required | **Constraints**: *Unique Items Required* | getLocations(): array | setLocations(array locations): void |
| `jobFunctions` | [`LimitedJobFunction[]`](../../doc/models/limited-job-function.md) | Required | **Constraints**: *Unique Items Required* | getJobFunctions(): array | setJobFunctions(array jobFunctions): void |
| `industries` | [`Industry[]`](../../doc/models/industry.md) | Required | **Constraints**: *Unique Items Required* | getIndustries(): array | setIndustries(array industries): void |
| `description` | `?string` | Required | - | getDescription(): ?string | setDescription(?string description): void |
| `homepage` | `?string` | Required | - | getHomepage(): ?string | setHomepage(?string homepage): void |
| `logoUrl` | [`?(ProductLogo[])`](../../doc/models/product-logo.md) | Optional | - | getLogoUrl(): ?array | setLogoUrl(?array logoUrl): void |
| `logoSquareUrl` | [`?(ProductLogoWithSize[])`](../../doc/models/product-logo-with-size.md) | Required | - | getLogoSquareUrl(): ?array | setLogoSquareUrl(?array logoSquareUrl): void |
| `logoRectangleUrl` | [`?(ProductLogoWithSize[])`](../../doc/models/product-logo-with-size.md) | Required | - | getLogoRectangleUrl(): ?array | setLogoRectangleUrl(?array logoRectangleUrl): void |
| `duration` | [`DurationInDays`](../../doc/models/duration-in-days.md) | Required | - | getDuration(): DurationInDays | setDuration(DurationInDays duration): void |
| `timeToProcess` | [`DurationInHours`](../../doc/models/duration-in-hours.md) | Required | - | getTimeToProcess(): DurationInHours | setTimeToProcess(DurationInHours timeToProcess): void |
| `timeToSetup` | [`DurationInHours`](../../doc/models/duration-in-hours.md) | Required | - | getTimeToSetup(): DurationInHours | setTimeToSetup(DurationInHours timeToSetup): void |
| `productId` | `string` | Required | - | getProductId(): string | setProductId(string productId): void |
| `vonqPrice` | [`Price[]`](../../doc/models/price.md) | Required | the price to be displayed to customers | getVonqPrice(): array | setVonqPrice(array vonqPrice): void |
| `ratecardPrice` | [`Price[]`](../../doc/models/price.md) | Required | - | getRatecardPrice(): array | setRatecardPrice(array ratecardPrice): void |
| `type` | [`string (ChannelTypeEnum)`](../../doc/models/channel-type-enum.md) | Required | The type of a channel | getType(): string | setType(string type): void |
| `crossPostings` | `string[]` | Required | - | getCrossPostings(): array | setCrossPostings(array crossPostings): void |
| `channel` | [`ListChannel`](../../doc/models/list-channel.md) | Required | - | getChannel(): ListChannel | setChannel(ListChannel channel): void |
| `audienceGroup` | [`string (AudienceGroupEnum)`](../../doc/models/audience-group-enum.md) | Required | The product's audience group (niche/generic) | getAudienceGroup(): string | setAudienceGroup(string audienceGroup): void |
| `mcEnabled` | `bool` | Required | is My Contract enabled for the channel<br>**Default**: `false` | getMcEnabled(): bool | setMcEnabled(bool mcEnabled): void |
| `mcOnly` | `bool` | Required | is the product available only for My Contract order<br>**Default**: `false` | getMcOnly(): bool | setMcOnly(bool mcOnly): void |
| `allowOrders` | `bool` | Required | is the product available for order. a campaign cannot be ordered with a product having `allow_orders` set to `false`. | getAllowOrders(): bool | setAllowOrders(bool allowOrders): void |

## Example (as JSON)

```json
{
  "title": null,
  "locations": null,
  "job_functions": null,
  "industries": null,
  "description": "this is a product description",
  "homepage": null,
  "logo_square_url": null,
  "logo_rectangle_url": null,
  "duration": null,
  "time_to_process": null,
  "time_to_setup": null,
  "product_id": null,
  "vonq_price": null,
  "ratecard_price": null,
  "type": "job board",
  "cross_postings": null,
  "channel": {
    "id": 66,
    "name": null,
    "type": null,
    "url": null
  },
  "audience_group": null,
  "mc_enabled": false,
  "mc_only": false,
  "allow_orders": null
}
```

