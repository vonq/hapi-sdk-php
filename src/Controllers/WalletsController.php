<?php

declare(strict_types=1);

/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPI\Controllers;

use HAPI\Exceptions\ApiException;
use HAPI\ConfigurationInterface;
use HAPI\ApiHelper;
use HAPI\Models;
use HAPI\Http\ApiResponse;
use HAPI\Http\HttpRequest;
use HAPI\Http\HttpResponse;
use HAPI\Http\HttpMethod;
use HAPI\Http\HttpContext;
use HAPI\Http\HttpCallBack;

class WalletsController extends BaseController
{
    public function __construct(ConfigurationInterface $config, array $authManagers, ?HttpCallBack $httpCallBack)
    {
        parent::__construct($config, $authManagers, $httpCallBack);
    }

    /**
     * Retrieves wallet details and balance. You must first create a wallet for your customer. See [POST
     * /wallet](HAPI-Payments.yaml/paths/~1wallet)
     *
     * @param string $xCustomerId In order to identify the ATS end-user, some requests (to HAPI Job
     *        Post in particular) require this header. You need to provide this to be able to work
     *        with Contracts functionality (adding contract, retrieving channels, ordering
     *        campaigns with contracts).
     *
     * @return ApiResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function getWallet(string $xCustomerId): ApiResponse
    {
        //check that all required arguments are provided
        if (!isset($xCustomerId)) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }

        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri() . '/wallet';

        //prepare headers
        $_headers = [
            'user-agent'    => self::$userAgent,
            'Accept'        => 'application/json',
            'X-Customer-Id'   => $xCustomerId
        ];

        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);

        // Apply authorization to request
        $this->getAuthManager('global')->apply($_httpRequest);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        // and invoke the API call request to fetch the response
        try {
            $response = self::$request->get($_httpRequest->getQueryUrl(), $_httpRequest->getHeaders());
        } catch (\Unirest\Exception $ex) {
            throw new ApiException($ex->getMessage(), $_httpRequest);
        }


        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //Error handling using HTTP status codes
        if ($response->code == 404) {
            throw $this->createExceptionFromJson(
                '\\HAPI\\Exceptions\\GenericErrorException',
                'Not Found',
                $_httpRequest,
                $_httpResponse
            );
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpRequest);
        $deserializedResponse = ApiHelper::mapClass($_httpRequest, $_httpResponse, $response->body, 'WalletModel');
        return ApiResponse::createFromContext($response->body, $deserializedResponse, $_httpContext);
    }

    /**
     * Create a wallet for the provided customer ID.
     *
     * @param string $xCustomerId In order to identify the ATS end-user, some requests (to HAPI Job
     *        Post in particular) require this header. You need to provide this to be able to work
     *        with Contracts functionality (adding contract, retrieving channels, ordering
     *        campaigns with contracts).
     * @param Models\WalletRequestModel|null $body
     *
     * @return ApiResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function postWallet(string $xCustomerId, ?Models\WalletRequestModel $body = null): ApiResponse
    {
        //check that all required arguments are provided
        if (!isset($xCustomerId)) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }

        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri() . '/wallet';

        //prepare headers
        $_headers = [
            'user-agent'    => self::$userAgent,
            'Accept'        => 'application/json',
            'X-Customer-Id'   => $xCustomerId,
            'Content-Type'    => 'application/json'
        ];

        //json encode body
        $_bodyJson = ApiHelper::serialize($body);

        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);

        // Apply authorization to request
        $this->getAuthManager('global')->apply($_httpRequest);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        // and invoke the API call request to fetch the response
        try {
            $response = self::$request->post($_httpRequest->getQueryUrl(), $_httpRequest->getHeaders(), $_bodyJson);
        } catch (\Unirest\Exception $ex) {
            throw new ApiException($ex->getMessage(), $_httpRequest);
        }


        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //Error handling using HTTP status codes
        if ($response->code == 400) {
            throw $this->createExceptionFromJson(
                '\\HAPI\\Exceptions\\WalletValidationErrorException',
                'Bad Request',
                $_httpRequest,
                $_httpResponse
            );
        }

        if ($response->code == 409) {
            throw $this->createExceptionFromJson(
                '\\HAPI\\Exceptions\\GenericErrorWithDetailException',
                'Returned when a wallet for the provided X-Customer-Id already exists.',
                $_httpRequest,
                $_httpResponse
            );
        }

        if ($response->code == 500) {
            throw $this->createExceptionFromJson(
                '\\HAPI\\Exceptions\\GenericErrorException',
                'Internal Server Error',
                $_httpRequest,
                $_httpResponse
            );
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpRequest);
        $deserializedResponse = ApiHelper::mapClass($_httpRequest, $_httpResponse, $response->body, 'WalletModel');
        return ApiResponse::createFromContext($response->body, $deserializedResponse, $_httpContext);
    }

    /**
     * Returns billing portal link where the customer can edit his billing details.
     *
     * @param string $xCustomerId In order to identify the ATS end-user, some requests (to HAPI Job
     *        Post in particular) require this header. You need to provide this to be able to work
     *        with Contracts functionality (adding contract, retrieving channels, ordering
     *        campaigns with contracts).
     * @param string|null $partnerReturnUrl if set, the billing portal page will have this link as
     *        "Return to"
     *
     * @return ApiResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function postWalletWalletIdBillingPortal(string $xCustomerId, ?string $partnerReturnUrl = null): ApiResponse
    {
        //check that all required arguments are provided
        if (!isset($xCustomerId)) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }

        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri() . '/wallet/billing-portal';

        //process query parameters
        ApiHelper::appendUrlWithQueryParameters($_queryUrl, [
            'partnerReturnUrl' => $partnerReturnUrl,
        ]);

        //prepare headers
        $_headers = [
            'user-agent'     => self::$userAgent,
            'Accept'         => 'application/json',
            'X-Customer-Id'    => $xCustomerId
        ];

        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);

        // Apply authorization to request
        $this->getAuthManager('global')->apply($_httpRequest);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        // and invoke the API call request to fetch the response
        try {
            $response = self::$request->post($_httpRequest->getQueryUrl(), $_httpRequest->getHeaders());
        } catch (\Unirest\Exception $ex) {
            throw new ApiException($ex->getMessage(), $_httpRequest);
        }


        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //Error handling using HTTP status codes
        if ($response->code == 404) {
            throw new ApiException('Not Found', $_httpRequest, $_httpResponse);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpRequest);
        $deserializedResponse = ApiHelper::mapClass(
            $_httpRequest,
            $_httpResponse,
            $response->body,
            'BillingPortalLinkModel'
        );
        return ApiResponse::createFromContext($response->body, $deserializedResponse, $_httpContext);
    }

    /**
     * Initiates a payment intent object. To make a payment, one first needs to create a payment intent.
     *
     * @param Models\PaymentIntentModel|null $body
     *
     * @return ApiResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function postWalletPaymentIntent(?Models\PaymentIntentModel $body = null): ApiResponse
    {
        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri() . '/wallet/payment-intent';

        //prepare headers
        $_headers = [
            'user-agent'    => self::$userAgent,
            'Accept'        => 'application/json',
            'Content-Type'    => 'application/json'
        ];

        //json encode body
        $_bodyJson = ApiHelper::serialize($body);

        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        // and invoke the API call request to fetch the response
        try {
            $response = self::$request->post($_httpRequest->getQueryUrl(), $_httpRequest->getHeaders(), $_bodyJson);
        } catch (\Unirest\Exception $ex) {
            throw new ApiException($ex->getMessage(), $_httpRequest);
        }


        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //Error handling using HTTP status codes
        if ($response->code == 400) {
            throw $this->createExceptionFromJson(
                '\\HAPI\\Exceptions\\GenericErrorException',
                'Bad Request',
                $_httpRequest,
                $_httpResponse
            );
        }

        if ($response->code == 422) {
            throw $this->createExceptionFromJson(
                '\\HAPI\\Exceptions\\GenericErrorWithDetailException',
                'Unprocessable Entity',
                $_httpRequest,
                $_httpResponse
            );
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpRequest);
        $deserializedResponse = ApiHelper::mapClass(
            $_httpRequest,
            $_httpResponse,
            $response->body,
            'LimitedPaymentIntentModel'
        );
        return ApiResponse::createFromContext($response->body, $deserializedResponse, $_httpContext);
    }

    /**
     * Landing page after a succesful payment operation. The user is redirected here from the payment
     * provider, after a payment attempt, if a redirect is required. Certain payment methods, such as iDEAL,
     * would trigger this redirect. See Stripe documentation for more details.
     *
     * @param string|null $target The ATS webpage where the client should be redirected.
     *
     * @return ApiResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function getWalletProcess(?string $target = null): ApiResponse
    {
        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri() . '/wallet/process';

        //process query parameters
        ApiHelper::appendUrlWithQueryParameters($_queryUrl, [
            'target' => $target,
        ]);

        //prepare headers
        $_headers = [
            'user-agent'    => self::$userAgent,
            'Accept'        => 'application/json'
        ];

        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        // and invoke the API call request to fetch the response
        try {
            $response = self::$request->get($_httpRequest->getQueryUrl(), $_httpRequest->getHeaders());
        } catch (\Unirest\Exception $ex) {
            throw new ApiException($ex->getMessage(), $_httpRequest);
        }


        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //Error handling using HTTP status codes
        if ($response->code == 400) {
            throw new ApiException('Bad Request', $_httpRequest, $_httpResponse);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpRequest);
        $deserializedResponse = $response->body;
        return ApiResponse::createFromContext($response->body, $deserializedResponse, $_httpContext);
    }

    /**
     * A webpage, meant to be used as an iframe, that contains the fields and features needed to charge the
     * customer's credit card.
     *
     * The iframe should have a minimum height of 600px and a recommended minimum width of 520px.
     *
     * The embedding window can listen to messages coming from the iframe, as a JSON encoded event object,
     * with the following format:
     *
     * ```ts
     * enum PAYMENT_STATUS {
     * REQUIRES_PAYMENT_METHOD = "requires_payment_method",
     * REQUIRES_CONFIRMATION = "requires_confirmation",
     * REQUIRES_ACTION = "requires_action",
     * PROCESSING = "processing",
     * SUCCEEDED = "succeeded",
     * CANCELED = "canceled"
     * };
     *
     * type IframeEvent = {
     * type: "payment_status" | "error",
     * payload: {
     * value: PAYMENT_STATUS,
     * message?: String, // Message that can be shown to the user
     * statusCode: Number // HTTP Status Code
     * }
     * };
     *
     * // example:
     *
     * const evt: IframeEvent = {
     * type: "payment_status",
     * payload: {
     * value: PAYMENT_STATUS.SUCCEEDED,
     * statusCode: 200
     * }
     * }
     * ````
     *
     * Example iframe inclusion:
     *
     * ```html
     * <iframe src="https://marketplace.api.vonq.com/wallet/topup.html?walletId=18043531-0688-5e7e-8d87-
     * 7cb5018b7029&partnerId=a6edc906-2f9f-5fb2-a373-
     * efac406f0ef2&amount=100000&returnUrl=https%3A%2F%2Fyourdomain.
     * com%2Fcheckout&successCallbackUrl=https%3A%2F%2Fyourdomain.com%2Fhooks%2Fsuccess" frameborder="0"
     * class="payment-iframe" allow="payment *"></iframe>
     * ```
     *
     * Example event listener:
     *
     * ```ts
     * const onPaymentStatusUpdate = (payload: EventPayload) => {
     * switch(payload.value) {
     * case PAYMENT_STATUS.SUCCEEDED:
     * // request /wallet
     * // to get new ballance and
     * // maybe remove iframe.
     * break;
     * case PAYMENT_STATUS.CANCELED:
     * // remove iframe
     * // allow the user to try again
     * }
     * }
     *
     * const onPaymentError = (payload: EventPayload) => {
     * // log this payload and investigate
     * }
     *
     *
     * window.addEventListener("message", e => {
     * if (e.origin !== "https://marketplace.api.vonq.com") {
     * return;
     * }
     * const data = JSON.parse(e.data);
     *
     * switch(data.type) {
     * case "payment_status":
     * onPaymentStatusUpdate(data.payload);
     * case "error":
     * onPaymentError(data.payload);
     * }
     * });
     * ```
     *
     * @param string $walletId The wallet ID, see `GET /wallet` endpoint.
     * @param string $partnerId Your partner ID.
     * @param int|null $amount Amount, in USD cents, that the customer wants to add to his wallet
     *        balance. If specified, the minimum top-up will be amount - wallet balance. If not
     *        specified, the minimum top-up amount will be USD 300.
     * @param string|null $returnUrl After the payment is processed, the customer is redirected to
     *        this page. It can be for example, the page he was on before starting the billing
     *        process.
     * @param string|null $successCallbackUrl Called, asynchronous, when the payment was successful.
     *
     * @return ApiResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function getWalletTopupHtml(
        string $walletId,
        string $partnerId,
        ?int $amount = null,
        ?string $returnUrl = null,
        ?string $successCallbackUrl = null
    ): ApiResponse {
        //check that all required arguments are provided
        if (!isset($walletId, $partnerId)) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }

        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri() . '/wallet/topup.html';

        //process query parameters
        ApiHelper::appendUrlWithQueryParameters($_queryUrl, [
            'walletId'           => $walletId,
            'partnerId'          => $partnerId,
            'amount'             => $amount,
            'returnUrl'          => $returnUrl,
            'successCallbackUrl' => $successCallbackUrl,
        ]);

        //prepare headers
        $_headers = [
            'user-agent'       => self::$userAgent,
            'Accept'           => 'application/json'
        ];

        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        // and invoke the API call request to fetch the response
        try {
            $response = self::$request->get($_httpRequest->getQueryUrl(), $_httpRequest->getHeaders());
        } catch (\Unirest\Exception $ex) {
            throw new ApiException($ex->getMessage(), $_httpRequest);
        }


        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //Error handling using HTTP status codes
        if ($response->code == 400) {
            throw new ApiException('Bad Request', $_httpRequest, $_httpResponse);
        }

        if ($response->code == 404) {
            throw new ApiException('Not Found', $_httpRequest, $_httpResponse);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpRequest);
        $deserializedResponse = $response->body;
        return ApiResponse::createFromContext($response->body, $deserializedResponse, $_httpContext);
    }
}
