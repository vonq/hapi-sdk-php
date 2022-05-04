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
use HAPILib\Utils\DateTimeHelper;
use PHPUnit\Framework\TestCase;

class ContractsControllerTest extends TestCase
{
    /**
     * @var \HAPILib\Controllers\ContractsController Controller instance
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
        self::$controller = ClientFactory::create(self::$httpResponse)->getContractsController();
    }


    /**
     * This endpoint exposes a list of channels with support for contracts. For all of the required details for creating a contract or a campaign for each channel, please call the "Retrieve details for channel with support for contracts".
     */
    public function testTestListChannels()
    {
        // Parameters for the API call
        $search = null;
        $limit = null;
        $offset = null;
        $acceptLanguage = Models\AcceptLanguageEnum::EN;

        // Set callback and perform API call
        $result = null;
        try {
            $result = self::$controller->listChannels($search, $limit, $offset, $acceptLanguage);
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

        // Test whether the captured response is as we expected
        $this->assertNotNull($result, "Result does not exist");

        $this->assertTrue(
            TestHelper::isJsonObjectProperSubsetOf(
                '{"count":0,"next":"string","previous":"string","results":[{"mc_enabled":true,"id":0,' .
                '"name":"string","url":"string","type":"string"}]}',
                self::$httpResponse->getResponse()->getRawBody(),
                false,
                true,
                false
            ),
            "Response body does not match in keys"
        );
    }
}
