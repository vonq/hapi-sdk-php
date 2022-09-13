<?php
/*
 * HAPI
 *
 * This file was automatically generated for VONQ by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace HAPI\Tests;

use HAPI\Exceptions\ApiException;
use HAPI\Exceptions;
use HAPI\ApiHelper;
use HAPI\Models;
use PHPUnit\Framework\TestCase;

class CampaignsTrueTest extends TestCase
{
    /**
     * @var \HAPI\Trues\CampaignsTrue Controller instance
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
        self::$controller = ClientFactory::create(self::$httpResponse)->getCampaignsTrue();
    }


    /**
     * Displays all the existing Campaigns already ordered for this Partner is as simple as executing a `GET`
request against the endpoint `/campaigns`
     */
    public function testTestListCampaigns()
    {
        // Parameters for the API call
        $input = array();
        $input['companyId'] = null;
        $input['limit'] = null;
        $input['offset'] = null;

        // Set callback and perform API call
        $result = null;
        try {
            $result = self::$controller->listCampaigns($input)->getResult();
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
}
