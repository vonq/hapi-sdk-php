# Wallets

```php
$walletsController = $client->getWalletsController();
```

## Class Name

`WalletsController`

## Methods

* [Get-Wallet](../../doc/controllers/wallets.md#get-wallet)
* [Post-Wallet](../../doc/controllers/wallets.md#post-wallet)
* [Post-Wallet-Wallet Id-Billing-Portal](../../doc/controllers/wallets.md#post-wallet-wallet-id-billing-portal)
* [Post-Wallet-Payment-Intent](../../doc/controllers/wallets.md#post-wallet-payment-intent)
* [Get-Wallet-Process](../../doc/controllers/wallets.md#get-wallet-process)
* [Get-Wallet-Topup Html](../../doc/controllers/wallets.md#get-wallet-topup-html)


# Get-Wallet

Retrieves wallet details and balance. You must first create a wallet for your customer. See [POST /wallet](HAPI-Payments.yaml/paths/~1wallet)

```php
function getWallet(string $xCustomerId): Wallet
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `xCustomerId` | `string` | Header, Required | In order to identify the ATS end-user, some requests (to HAPI Job Post in particular) require this header. You need to provide this to be able to work with Contracts functionality (adding contract, retrieving channels, ordering campaigns with contracts). |

## Response Type

[`Wallet`](../../doc/models/wallet.md)

## Example Usage

```php
$xCustomerId = 'X-Customer-Id2';

$result = $walletsController->getWallet($xCustomerId);
```

## Example Response *(as JSON)*

```json
{
  "id": "a9b6f1f6-e099-5fd5-b025-08c43067ae71",
  "balance": {
    "USD": 12500
  },
  "created_date": "2022-07-15T08:56:49+00:00",
  "has_billing_details": true
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 404 | Not Found | [`GenericErrorException`](../../doc/models/generic-error-exception.md) |


# Post-Wallet

Create a wallet for the provided customer ID.

```php
function postWallet(string $xCustomerId, ?WalletRequest $body = null): Wallet
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `xCustomerId` | `string` | Header, Required | In order to identify the ATS end-user, some requests (to HAPI Job Post in particular) require this header. You need to provide this to be able to work with Contracts functionality (adding contract, retrieving channels, ordering campaigns with contracts). |
| `body` | [`?WalletRequest`](../../doc/models/wallet-request.md) | Body, Optional | - |

## Response Type

[`Wallet`](../../doc/models/wallet.md)

## Example Usage

```php
$xCustomerId = 'X-Customer-Id2';
$body_customerName = 'VONQ';
$body = new Models\WalletRequest(
    $body_customerName
);

$result = $walletsController->postWallet($xCustomerId, $body);
```

## Example Response *(as JSON)*

```json
{
  "id": "a9b6f1f6-e099-5fd5-b225-08c43067ae71",
  "balance": {
    "USD": 0
  },
  "created_date": "2022-07-15T08:56:49+00:00",
  "has_billing_details": false
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request | [`WalletValidationErrorException`](../../doc/models/wallet-validation-error-exception.md) |
| 409 | Returned when a wallet for the provided X-Customer-Id already exists. | [`GenericErrorWithDetailException`](../../doc/models/generic-error-with-detail-exception.md) |
| 500 | Internal Server Error | [`GenericErrorException`](../../doc/models/generic-error-exception.md) |


# Post-Wallet-Wallet Id-Billing-Portal

Returns billing portal link where the customer can edit his billing details.

```php
function postWalletWalletIdBillingPortal(
    string $xCustomerId,
    ?string $partnerReturnUrl = null
): BillingPortalLink
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `xCustomerId` | `string` | Header, Required | In order to identify the ATS end-user, some requests (to HAPI Job Post in particular) require this header. You need to provide this to be able to work with Contracts functionality (adding contract, retrieving channels, ordering campaigns with contracts). |
| `partnerReturnUrl` | `?string` | Query, Optional | if set, the billing portal page will have this link as "Return to" |

## Response Type

[`BillingPortalLink`](../../doc/models/billing-portal-link.md)

## Example Usage

```php
$xCustomerId = 'X-Customer-Id2';

$result = $walletsController->postWalletWalletIdBillingPortal($xCustomerId);
```

## Example Response *(as JSON)*

```json
{
  "billingPortalLink": "https://billing.stripe.com/session/live_YWNjdF8xSVdodDBGT1RiUXI5OEtOLF9NRnBpZk80VDY0Q0JQNm9aeXR2OVNJblVoWU5ESVFS0100biwbiZ9D"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 404 | Not Found | `ApiException` |


# Post-Wallet-Payment-Intent

Initiates a payment intent object. To make a payment, one first needs to create a payment intent.

:information_source: **Note** This endpoint does not require authentication.

```php
function postWalletPaymentIntent(?PaymentIntent $body = null): LimitedPaymentIntent
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`?PaymentIntent`](../../doc/models/payment-intent.md) | Body, Optional | - |

## Response Type

[`LimitedPaymentIntent`](../../doc/models/limited-payment-intent.md)

## Example Usage

```php
$result = $walletsController->postWalletPaymentIntent();
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request | [`GenericErrorException`](../../doc/models/generic-error-exception.md) |
| 422 | Unprocessable Entity | [`GenericErrorWithDetailException`](../../doc/models/generic-error-with-detail-exception.md) |


# Get-Wallet-Process

Landing page after a succesful payment operation. The user is redirected here from the payment provider, after a payment attempt, if a redirect is required. Certain payment methods, such as iDEAL, would trigger this redirect. See Stripe documentation for more details.

:information_source: **Note** This endpoint does not require authentication.

```php
function getWalletProcess(?string $target = null): array
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `target` | `?string` | Query, Optional | The ATS webpage where the client should be redirected. |

## Response Type

`array`

## Example Usage

```php
$result = $walletsController->getWalletProcess();
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request | `ApiException` |


# Get-Wallet-Topup Html

A webpage, meant to be used as an iframe, that contains the fields and features needed to charge the customer's credit card.

The iframe should have a minimum height of 600px and a recommended minimum width of 520px.

The embedding window can listen to messages coming from the iframe, as a JSON encoded event object, with the following format:

```ts
enum PAYMENT_STATUS {
    REQUIRES_PAYMENT_METHOD = "requires_payment_method",
    REQUIRES_CONFIRMATION = "requires_confirmation",
    REQUIRES_ACTION = "requires_action",
    PROCESSING = "processing",
    SUCCEEDED = "succeeded",
    CANCELED = "canceled"
};

type IframeEvent = {
    type: "payment_status" | "error",
    payload: {
        value: PAYMENT_STATUS,
        message?: String, // Message that can be shown to the user
        statusCode: Number // HTTP Status Code
    }
};

// example:

const evt: IframeEvent = {
    type: "payment_status",
    payload: {
        value: PAYMENT_STATUS.SUCCEEDED,
        statusCode: 200
    }
}
```

Example iframe inclusion:

```html
<iframe src="https://marketplace.api.vonq.com/wallet/topup.html?walletId=18043531-0688-5e7e-8d87-7cb5018b7029&partnerId=a6edc906-2f9f-5fb2-a373-efac406f0ef2&amount=100000&returnUrl=https%3A%2F%2Fyourdomain.com%2Fcheckout&successCallbackUrl=https%3A%2F%2Fyourdomain.com%2Fhooks%2Fsuccess" frameborder="0" class="payment-iframe" allow="payment *"></iframe>
```

Example event listener:

```ts
const onPaymentStatusUpdate = (payload: EventPayload) => {
    switch(payload.value) {
        case PAYMENT_STATUS.SUCCEEDED:
            // request /wallet
            // to get new ballance and
            // maybe remove iframe.
            break;
        case PAYMENT_STATUS.CANCELED:
            // remove iframe
            // allow the user to try again
    }
}

const onPaymentError = (payload: EventPayload) => {
    // log this payload and investigate
}


window.addEventListener("message", e => {
    if (e.origin !== "https://marketplace.api.vonq.com") {
        return;
    }
    const data = JSON.parse(e.data);
    
    switch(data.type) {
        case "payment_status":
            onPaymentStatusUpdate(data.payload);
        case "error":
            onPaymentError(data.payload);
    }
});
```

:information_source: **Note** This endpoint does not require authentication.

```php
function getWalletTopupHtml(
    string $walletId,
    string $partnerId,
    ?int $amount = null,
    ?string $returnUrl = null,
    ?string $successCallbackUrl = null
): array
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `walletId` | `string` | Query, Required | The wallet ID, see `GET /wallet` endpoint. |
| `partnerId` | `string` | Query, Required | Your partner ID. |
| `amount` | `?int` | Query, Optional | Amount, in USD cents, that the customer wants to add to his wallet balance. If specified, the minimum top-up will be amount - wallet balance. If not specified, the minimum top-up amount will be USD 300.<br>**Constraints**: `>= 1`, `<= 999999` |
| `returnUrl` | `?string` | Query, Optional | After the payment is processed, the customer is redirected to this page. It can be for example, the page he was on before starting the billing process. |
| `successCallbackUrl` | `?string` | Query, Optional | Called, asynchronous, when the payment was successful. |

## Response Type

`array`

## Example Usage

```php
$walletId = '00000290-0000-0000-0000-000000000000';
$partnerId = '00000c8c-0000-0000-0000-000000000000';

$result = $walletsController->getWalletTopupHtml($walletId, $partnerId);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request | `ApiException` |
| 404 | Not Found | `ApiException` |

