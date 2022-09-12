
# Product Model

## Structure

`ProductModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `title` | `string` | Required | - | getTitle(): string | setTitle(string title): void |
| `locations` | [`LimitedLocationModel[]`](../../doc/models/limited-location-model.md) | Required | **Constraints**: *Unique Items Required* | getLocations(): array | setLocations(array locations): void |
| `jobFunctions` | [`LimitedJobFunctionModel[]`](../../doc/models/limited-job-function-model.md) | Required | **Constraints**: *Unique Items Required* | getJobFunctions(): array | setJobFunctions(array jobFunctions): void |
| `industries` | [`IndustryModel[]`](../../doc/models/industry-model.md) | Required | **Constraints**: *Unique Items Required* | getIndustries(): array | setIndustries(array industries): void |
| `description` | `?string` | Required | - | getDescription(): ?string | setDescription(?string description): void |
| `homepage` | `?string` | Required | - | getHomepage(): ?string | setHomepage(?string homepage): void |
| `logoUrl` | [`?(ProductLogoModel[])`](../../doc/models/product-logo-model.md) | Optional | - | getLogoUrl(): ?array | setLogoUrl(?array logoUrl): void |
| `logoSquareUrl` | [`ProductLogoWithSizeModel[]`](../../doc/models/product-logo-with-size-model.md) | Required | - | getLogoSquareUrl(): array | setLogoSquareUrl(array logoSquareUrl): void |
| `logoRectangleUrl` | [`ProductLogoWithSizeModel[]`](../../doc/models/product-logo-with-size-model.md) | Required | - | getLogoRectangleUrl(): array | setLogoRectangleUrl(array logoRectangleUrl): void |
| `duration` | [`DurationInDaysModel`](../../doc/models/duration-in-days-model.md) | Required | - | getDuration(): DurationInDaysModel | setDuration(DurationInDaysModel duration): void |
| `timeToProcess` | [`DurationInHoursModel`](../../doc/models/duration-in-hours-model.md) | Required | - | getTimeToProcess(): DurationInHoursModel | setTimeToProcess(DurationInHoursModel timeToProcess): void |
| `timeToSetup` | [`DurationInHoursModel`](../../doc/models/duration-in-hours-model.md) | Required | - | getTimeToSetup(): DurationInHoursModel | setTimeToSetup(DurationInHoursModel timeToSetup): void |
| `productId` | `string` | Required | - | getProductId(): string | setProductId(string productId): void |
| `vonqPrice` | [`PriceModel[]`](../../doc/models/price-model.md) | Required | the price to be displayed to customers | getVonqPrice(): array | setVonqPrice(array vonqPrice): void |
| `ratecardPrice` | [`PriceModel[]`](../../doc/models/price-model.md) | Required | - | getRatecardPrice(): array | setRatecardPrice(array ratecardPrice): void |
| `type` | [`string (ChannelTypeEnum)`](../../doc/models/channel-type-enum.md) | Required | The type of a channel | getType(): string | setType(string type): void |
| `crossPostings` | `string[]` | Required | - | getCrossPostings(): array | setCrossPostings(array crossPostings): void |
| `channel` | [`ListChannelModel`](../../doc/models/list-channel-model.md) | Required | - | getChannel(): ListChannelModel | setChannel(ListChannelModel channel): void |
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

