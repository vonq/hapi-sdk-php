<?php
/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPILib\Tests;

use HAPILib\Exceptions\ApiException;
use HAPILib\Exceptions;
use HAPILib\ApiHelper;
use HAPILib\Models;
use PHPUnit\Framework\TestCase;

class WalletsControllerTest extends TestCase
{
    /**
     * @var \HAPILib\Controllers\WalletsController Controller instance
     */
    protected static $controller;

    /**
     * @var HttpCallBackCatcher Callback
     */
    protected static $httpResponse;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        self::$httpResponse = new HttpCallBackCatcher();
        self::$controller = ClientFactory::create(self::$httpResponse)->getWalletsController();
    }


    /**
     * Initiates a payment intent object. To make a payment, one first needs to create a payment intent.
     */
    public function testTestPostWalletPaymentIntent()
    {
        // Parameters for the API call
        $body = null;

        // Set callback and perform API call
        $result = null;
        try {
            $result = self::$controller->postWalletPaymentIntent($body);
        } catch (ApiException $e) {
        }

        // Test response code
        $this->assertEquals(
            200,
            self::$httpResponse->getResponse()->getStatusCode(),
            "Status is not 200"
        );

        // Test headers
        $headers = [];
        $headers['Content-Type'] = 'application/json' ;
        
        $this->assertTrue(
            TestHelper::areHeadersProperSubsetOf($headers, self::$httpResponse->getResponse()->getHeaders(), true),
            "Headers do not match"
        );
    }

    /**
     * Landing page after a succesful payment operation. The user is redirected here from the payment provider, after a payment attempt, if a redirect is required. Certain payment methods, such as iDEAL, would trigger this redirect. See Stripe documentation for more details.
     */
    public function testTestGetWalletProcess()
    {
        // Parameters for the API call
        $target = null;

        // Set callback and perform API call
        $result = null;
        try {
            $result = self::$controller->getWalletProcess($target);
        } catch (ApiException $e) {
        }

        // Test response code
        $this->assertEquals(
            200,
            self::$httpResponse->getResponse()->getStatusCode(),
            "Status is not 200"
        );

        // Test headers
        $headers = [];
        $headers['Content-Type'] = 'text/html' ;
        
        $this->assertTrue(
            TestHelper::areHeadersProperSubsetOf($headers, self::$httpResponse->getResponse()->getHeaders(), true),
            "Headers do not match"
        );
    }
}
