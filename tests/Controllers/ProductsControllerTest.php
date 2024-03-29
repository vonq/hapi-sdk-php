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

class ProductsControllerTest extends TestCase
{
    /**
     * @var \HAPI\Controllers\ProductsController Controller instance
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
        self::$controller = ClientFactory::create(self::$httpResponse)->getProductsController();
    }


    /**
     * For a detailed tutorial on how to get started with portfolio search v2, check out our [Quickstart Tutorial](https://pkb.stoplight.io/docs/search/docs/Tutorial.md).
For an implementation demo of the product search experience, check out our [Developer Portal](http://vonq.io/pkb).
This endpoint exposes a list of Products with the options to search by Location, Job Title, Job Function and Industry.
Products are ranked by their relevancy to the search terms.
Optionally, products can filtered by Location.
Values for each parameter can be fetched by calling the other endpoints in this section.
Calling this endpoint will guarantee that the Products you see are configured for you as our Partner.
Besides the default English, German and Dutch result translations can be requested by specifying an `Accept-Language: [de|nl]` header.
     */
    public function testTestSearchProducts()
    {
        // Parameters for the API call
        $limit = null;
        $offset = null;
        $includeLocationId = null;
        $exactLocationId = null;
        $jobFunctionId = null;
        $jobTitleId = null;
        $industryId = null;
        $durationFrom = null;
        $durationTo = null;
        $name = null;
        $currency = null;
        $sortBy = Models\SortByEnum::RELEVANT;
        $recommended = null;
        $mcEnabled = null;
        $excludeRecommended = false;
        $acceptLanguage = null;
        $xCustomerId = null;

        // Set callback and perform API call
        $result = null;
        try {
            $result = self::$controller->searchProducts($limit, $offset, $includeLocationId, $exactLocationId, $jobFunctionId, $jobTitleId, $industryId, $durationFrom, $durationTo, $name, $currency, $sortBy, $recommended, $mcEnabled, $excludeRecommended, $acceptLanguage, $xCustomerId)->getResult();
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
