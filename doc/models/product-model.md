
# Product Model

## Structure

`ProductModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `title` | `string` | Required | - | getTitle(): string | setTitle(string title): void |
| `locations` | [`LocationModel[]`](../../doc/models/location-model.md) | Required | **Constraints**: *Unique Items Required* | getLocations(): array | setLocations(array locations): void |
| `jobFunctions` | [`JobFunctionModel[]`](../../doc/models/job-function-model.md) | Required | **Constraints**: *Unique Items Required* | getJobFunctions(): array | setJobFunctions(array jobFunctions): void |
| `industries` | [`IndustryModel[]`](../../doc/models/industry-model.md) | Required | **Constraints**: *Unique Items Required* | getIndustries(): array | setIndustries(array industries): void |
| `description` | `?string` | Required | - | getDescription(): ?string | setDescription(?string description): void |
| `homepage` | `?string` | Required | - | getHomepage(): ?string | setHomepage(?string homepage): void |
| `logoUrl` | `?string` | Required | - | getLogoUrl(): ?string | setLogoUrl(?string logoUrl): void |
| `logoSquareUrl` | `?string` | Required | - | getLogoSquareUrl(): ?string | setLogoSquareUrl(?string logoSquareUrl): void |
| `logoRectangleUrl` | `?string` | Required | - | getLogoRectangleUrl(): ?string | setLogoRectangleUrl(?string logoRectangleUrl): void |
| `duration` | `?array` | Required | - | getDuration(): ?array | setDuration(?array duration): void |
| `timeToProcess` | [`TimeToProcessModel`](../../doc/models/time-to-process-model.md) | Required | - | getTimeToProcess(): TimeToProcessModel | setTimeToProcess(TimeToProcessModel timeToProcess): void |
| `timeToSetup` | [`TimeToSetupModel`](../../doc/models/time-to-setup-model.md) | Required | - | getTimeToSetup(): TimeToSetupModel | setTimeToSetup(TimeToSetupModel timeToSetup): void |
| `productId` | `string` | Required | - | getProductId(): string | setProductId(string productId): void |
| `vonqPrice` | [`PriceModel[]`](../../doc/models/price-model.md) | Required | the price to be displayed to customers | getVonqPrice(): array | setVonqPrice(array vonqPrice): void |
| `ratecardPrice` | [`PriceModel[]`](../../doc/models/price-model.md) | Required | - | getRatecardPrice(): array | setRatecardPrice(array ratecardPrice): void |
| `type` | [`string (ChannelTypeEnum)`](../../doc/models/channel-type-enum.md) | Required | The type of a channel | getType(): string | setType(string type): void |
| `crossPostings` | `string[]` | Required | - | getCrossPostings(): array | setCrossPostings(array crossPostings): void |
| `channel` | [`ChannelModel`](../../doc/models/channel-model.md) | Required | - | getChannel(): ChannelModel | setChannel(ChannelModel channel): void |
| `audienceGroup` | [`string (AudienceGroupEnum)`](../../doc/models/audience-group-enum.md) | Required | The product's audience group (niche/generic) | getAudienceGroup(): string | setAudienceGroup(string audienceGroup): void |
| `mcEnabled` | `bool` | Required | is My Contract enabled for the channel | getMcEnabled(): bool | setMcEnabled(bool mcEnabled): void |
| `mcOnly` | `bool` | Required | is the product available only for My Contract order | getMcOnly(): bool | setMcOnly(bool mcOnly): void |
| `allowOrders` | `bool` | Required | is the product available for order. a campaign cannot be ordered with a product having `allow_orders` set to `false`. | getAllowOrders(): bool | setAllowOrders(bool allowOrders): void |

## Example (as JSON)

```json
{
  "title": null,
  "locations": {
    "id": null,
    "fully_qualified_place_name": null,
    "canonical_name": null,
    "bounding_box": null,
    "area": null,
    "place_type": "place",
    "within": {
      "id": null,
      "fully_qualified_place_name": null,
      "canonical_name": null,
      "bounding_box": null,
      "area": null,
      "place_type": "place",
      "within": null
    }
  },
  "job_functions": null,
  "industries": null,
  "description": "this is a product description",
  "homepage": null,
  "logo_url": null,
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
    "name": "Linkedin",
    "url": "www.linkedin.com",
    "type": "job board",
    "mc_enabled": false,
    "contract_credentials": null,
    "contract_facets": null,
    "posting_requirements": {
      "name": null,
      "label": null,
      "sort": null,
      "required": null,
      "type": "AUTOCOMPLETE",
      "options": null,
      "autocomplete": null
    },
    "manual_setup_required": null,
    "setup_instructions": null,
    "feed_url": null
  },
  "audience_group": null,
  "mc_enabled": null,
  "mc_only": null,
  "allow_orders": null
}
```

