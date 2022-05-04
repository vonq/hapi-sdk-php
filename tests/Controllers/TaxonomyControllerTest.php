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

class TaxonomyControllerTest extends TestCase
{
    /**
     * @var \HAPILib\Controllers\TaxonomyController Controller instance
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
        self::$controller = ClientFactory::create(self::$httpResponse)->getTaxonomyController();
    }


    /**
     * This endpoint returns a tree-like structure of supported Job Functions that can be used to search for Products.
Use the `id` key of any Job Function in the response to search for a Product.
Each Job Function is associated with [**`Job Titles`**](b3A6MzM0NDA3MzY-job-titles) in a one-to-many fashion.
Besides the default English, German and Dutch result translations can be requested by specifying an `Accept-Language: [de|nl]` header.
     */
    public function testTestRetrieveJobFunctionsTree()
    {
        // Parameters for the API call
        $acceptLanguage = Models\AcceptLanguageEnum::EN;

        // Set callback and perform API call
        $result = null;
        try {
            $result = self::$controller->retrieveJobFunctionsTree($acceptLanguage);
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
            TestHelper::isArrayOfStringifiedJsonObjectsProperSubsetOf(
                '[{"id":8,"name":"Education","children":[{"id":5,"name":"Teaching","children":[]}]}]',
                self::$httpResponse->getResponse()->getRawBody(),
                false,
                true,
                false
            ),
            "Response body does not match in keys"
        );
    }

    /**
     * This endpoint returns a list of supported industry names that can be used to search for products. Results are ordered alphabetically.
Use the `id` key of any Industry in the response to search for a product.
Besides the default English, German and Dutch result translations can be requested by specifying an `Accept-Language: [de|nl]` header.
     */
    public function testTestListIndustries()
    {
        // Parameters for the API call
        $limit = null;
        $offset = null;
        $acceptLanguage = Models\AcceptLanguageEnum::EN;

        // Set callback and perform API call
        $result = null;
        try {
            $result = self::$controller->listIndustries($limit, $offset, $acceptLanguage);
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
     * Retrieve all Education Level possible values.
     */
    public function testTestRetrieveEducationLevels()
    {

        // Set callback and perform API call
        $result = null;
        try {
            $result = self::$controller->retrieveEducationLevels();
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
            TestHelper::isArrayOfStringifiedJsonObjectsProperSubsetOf(
                '[{"id":1,"name":[{"languageCode":"nl_NL","value":"Master / Postdoctoraal"}]}]',
                self::$httpResponse->getResponse()->getRawBody(),
                false,
                true,
                false
            ),
            "Response body does not match in keys"
        );
    }

    /**
     * Retrieve all Seniority possible values.
     */
    public function testTestRetrieveSeniorities()
    {

        // Set callback and perform API call
        $result = null;
        try {
            $result = self::$controller->retrieveSeniorities();
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
            TestHelper::isArrayOfStringifiedJsonObjectsProperSubsetOf(
                '[{"id":3,"name":[{"languageCode":"en_GB","value":"Manager"}]}]',
                self::$httpResponse->getResponse()->getRawBody(),
                false,
                true,
                false
            ),
            "Response body does not match in keys"
        );
    }
}
