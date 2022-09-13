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

class TaxonomyControllerTest extends TestCase
{
    /**
     * @var \HAPI\Controllers\TaxonomyController Controller instance
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
     * This endpoint returns a list of supported industry names that can be used to search for products. Results are ordered alphabetically.
Use the `id` key of any Industry in the response to search for a product.
Besides the default English, German and Dutch result translations can be requested by specifying an `Accept-Language: [de|nl]` header.
     */
    public function testTestListIndustries()
    {
        // Parameters for the API call
        $limit = 50;
        $offset = 0;
        $acceptLanguage = null;
        $xCustomerId = null;

        // Set callback and perform API call
        $result = null;
        try {
            $result = self::$controller->listIndustries($limit, $offset, $acceptLanguage, $xCustomerId)->getResult();
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
                '[{"id":48,"name":"Academic"},{"id":20,"name":"Accounting"},{"id":10,"name":"Advertis' .
                'ing"},{"id":32,"name":"Aerospace"},{"id":17,"name":"Agriculture"},{"id":5,"name":"Ar' .
                'ts & Culture"},{"id":22,"name":"Automotive"},{"id":33,"name":"Aviation"},{"id":19,"n' .
                'ame":"Banking"},{"id":16,"name":"Building and Construction"},{"id":6,"name":"Charity' .
                ' and Not for Profit"},{"id":2,"name":"Communications"},{"id":52,"name":"E-commerce"}' .
                ',{"id":24,"name":"Education"},{"id":4,"name":"Energy"},{"id":30,"name":"Engineering"' .
                '},{"id":15,"name":"Entertainment"},{"id":49,"name":"Facility Management"},{"id":9,"n' .
                'ame":"Fashion"},{"id":43,"name":"Fast Moving Consumer Goods"},{"id":21,"name":"Finan' .
                'ce"},{"id":42,"name":"Food"},{"id":29,"name":"Generic"},{"id":8,"name":"Government a' .
                'nd Public Sector"},{"id":37,"name":"Health and Safety"},{"id":12,"name":"Healthcare"' .
                '},{"id":40,"name":"Hospitality"},{"id":1,"name":"Information Technology"},{"id":18,"' .
                'name":"Insurance"},{"id":38,"name":"Language"},{"id":14,"name":"Legal"},{"id":7,"nam' .
                'e":"Leisure and Sport"},{"id":44,"name":"Logistics & Supply Chain"},{"id":3,"name":"' .
                'Manufacturing"},{"id":39,"name":"Maritime"},{"id":26,"name":"Media"},{"id":47,"name"' .
                ':"Multilingual"},{"id":31,"name":"Pharmaceuticals"},{"id":28,"name":"Property and Ho' .
                'using"},{"id":11,"name":"Real Estate"},{"id":13,"name":"Recruitment"},{"id":35,"name' .
                '":"Retail"},{"id":23,"name":"Science & Research"},{"id":41,"name":"Sustainability"},' .
                '{"id":36,"name":"Telecommunications"},{"id":27,"name":"Transport and Rail"},{"id":34' .
                ',"name":"Travel and Tourism"}]',
                self::$httpResponse->getResponse()->getRawBody(),
                false,
                true,
                false
            ),
            "Response body does not match in keys"
        );
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
        $acceptLanguage = null;
        $xCustomerId = null;

        // Set callback and perform API call
        $result = null;
        try {
            $result = self::$controller->retrieveJobFunctionsTree($acceptLanguage, $xCustomerId)->getResult();
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
     * Retrieve all Education Level possible values.
     */
    public function testTestRetrieveEducationLevels()
    {

        // Set callback and perform API call
        $result = null;
        try {
            $result = self::$controller->retrieveEducationLevels()->getResult();
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
            $result = self::$controller->retrieveSeniorities()->getResult();
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
                '[{"id":1,"name":[{"languageCode":"de_DE","value":"Geschäftsführer / C-Level"},{"lang' .
                'uageCode":"en_GB","value":"Executive/Director"},{"languageCode":"nl_NL","value":"Exe' .
                'cutive/Director"}]},{"id":2,"name":[{"languageCode":"de_DE","value":"Manager"},{"lan' .
                'guageCode":"en_GB","value":"Manager"},{"languageCode":"nl_NL","value":"Manager"}]},{' .
                '"id":3,"name":[{"languageCode":"de_DE","value":"Professional"},{"languageCode":"en_G' .
                'B","value":"Mid-Senior level"},{"languageCode":"nl_NL","value":"Professional"}]},{"i' .
                'd":4,"name":[{"languageCode":"de_DE","value":"Berufseinsteiger"},{"languageCode":"en' .
                '_GB","value":"Entry level/Graduate"},{"languageCode":"nl_NL","value":"Entry level/Gr' .
                'aduate"}]},{"id":5,"name":[{"languageCode":"de_DE","value":"Student/Trainee"},{"lang' .
                'uageCode":"en_GB","value":"Student/Trainee"},{"languageCode":"nl_NL","value":"Studen' .
                't/Trainee"}]}]',
                self::$httpResponse->getResponse()->getRawBody(),
                false,
                true,
                false
            ),
            "Response body does not match in keys"
        );
    }
}
