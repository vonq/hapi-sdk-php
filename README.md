
# Getting Started with VONQ Hiring API

## Introduction

The VONQ Hiring API aims to provide all the basic VONQ Services through a comprehensive [RESTful](https://en.wikipedia.org/wiki/Representational_state_transfer) API. Systems would be able to
consume these services to list available VONQ Products and create Campaigns based on those Products.

### Overview

Our latest API version is currently version 2. It offers more search facets and filters,
a new recommendation engine, and a richer, evolving set of taxonomies so your users can find the most relevant,
best-performing products for their vacancies.

#### Schema

The API can be accessed at `https://marketplace.api.vonq.com` and is HTTPS-only. All requests must be
encoded in JSON, and all responses will be encoded in JSON as well.

#### Environments

We currently support two different environments for the Hiring API. The `Production` environment is
connected to our other `Production` backend services. That means that any order sent to this
environment is considered final and processed.

At the same time we support a `Sandbox` environment, accessible via `https://marketplace-sandbox.api.vonq.com`. You can safely test your API implementation here.
None of the orders sent to this environment are considered final, so they will not be executed nor charged. This
environment requires a different API Token to operate, which will be provided to you when available.

#### HTTP Methods

Whenever possible, the Hiring API uses RESTful `HTTP` methods for its actions.
| HTTP Method | Description                                      |
|:----------|--------------------------------------------------|
| `GET`     | Retrieve one or several Resources                |
| `POST`    | Create a new Resource. Eg: Create a new Campaign |
| `PATCH`   | Change part of the structure of a Resource       |

#### Pagination

Lists of multiple Resources will automatically paginate every 50 items by default. You can retrieve more elements by
specifying a value for the `offset` parameter (the default `offset` is 0). If you need to change the
number of elements returned by the default pagination, you can do so using the `limit` query parameter.

Example:

```

curl https://marketplace.api.vonq.com/portfolio?limit=100&offset=400

```

#### User-Agent

We recommend that every request made to the Hiring API includes a `User-Agent` header. This is not a mandatory
requirement at the moment, but this may change in the future. Specifying your User-Agent will allow us to provide you with more effective support.

#### Error Codes

The Hiring API uses standard HTTP Status codes for its responses to inform your system how the Hiring API handled your request.
Response codes in the range of `2xx` represent success codes (Eg, `201 Created`).
Codes in the `4xx` range indicates an error on the request performed, usually because the payload used doesn't contain
all the necessary information or is in an invalid format (Eg, `400 Bad Request`).
The error codes in the `5xx` range mean that an error occurred in the Hiring API and we were not able to handle your request.
It can also happen when our services are temporarily not available (Eg, `500 Internal Server Error`). These should be rare. We log these errors and investigate them as soon as possible.

The following Response coded are shared amongst all endpoints:

+ Response 400 (application/json)
  
        {
            "requestBody": "The request does not contain valid JSON."
        }

+ Response 401 (application/json)
  
        {
            "authentication": "Authentication Required"
        }

+ Response 401 (application/json)
  
        {
            "authentication": "Username could not be found."
        }

+ Response 500 (application/json)

#### Caching

We recommend avoiding using cached versions of portfolio and taxonomy data since it is subject to regular updates. Campaign ordeproducts  invalid taxonomy will be rejected.
If you do need to use caching, we recommend refreshing it daily.

#### Rate Limits

To prevent abuse and ensure service stability, all the API requests are rate limited. Rate limits specify
the maximum number of API calls (60) that can be made in 60 seconds. These limits reset every 60 seconds.
User of the API can make up to 60 request per 60 seconds.

If a user encounters the rate limit, HAPI will send a '429 Too many requests' error message.

## Building

The generated code has dependencies over external libraries like UniRest and JsonMapper. JsonMapper requires docblock annotations like `@var`, `@maps`, and `@factory` to map JSON responses with our class definitions. Hence the docblocks in generated code cannot be disabled by deactivating the PHP configurations like `opcache.save_comments`. These dependencies are defined in the `composer.json` file that comes with the SDK. To resolve these dependencies, we use the Composer package manager which requires PHP greater than or equal to 7.2 installed in your system. Visit [https://getcomposer.org/download/](https://getcomposer.org/download/) to download the installer file for Composer and run it in your system. Open command prompt and type `composer --version`. This should display the current version of the Composer installed if the installation was successful.

* Using command line, navigate to the directory containing the generated files (including `composer.json`) for the SDK.
* Run the command `composer install`. This should install all the required dependencies and create the `vendor` directory in your project directory.

![Building SDK - Step 1](https://apidocs.io/illustration/php?workspaceFolder=HAPI&step=installDependencies)

### Configuring CURL Certificate Path in php.ini

:information_source: **Note** This is for Windows users only.

CURL used to include a list of accepted CAs, but no longer bundles ANY CA certs. So by default it will reject all SSL certificates as unverifiable. You will have to get your CA's cert and point curl at it. The steps are as follows:

1. Download the certificate bundle (.pem file) from [https://curl.haxx.se/docs/caextract.html](https://curl.haxx.se/docs/caextract.html) on to your system.
2. Add curl.cainfo = "PATH_TO/cacert.pem" to your php.ini file located in your php installation. “PATH_TO” must be an absolute path containing the .pem file.

```
[curl]; A default value for the CURLOPT_CAINFO option. This is required to be an
; absolute path.
curl.cainfo = PATH_TO/cacert.pem
```

## Installation

The following section explains how to use the HAPI library in a new project.

### 1. Open Project in an IDE

Open an IDE for PHP like PhpStorm. The basic workflow presented here is also applicable if you prefer using a different editor or IDE.

![Open project in PHPStorm - Step 1](https://apidocs.io/illustration/php?workspaceFolder=HAPI&step=openIDE)

Click on `Open` in PhpStorm to browse to your generated SDK directory and then click `OK`.

![Open project in PHPStorm - Step 2](https://apidocs.io/illustration/php?workspaceFolder=HAPI&step=openProject0)

### 2. Add a new Test Project

Create a new directory by right clicking on the solution name as shown below:

![Add a new project in PHPStorm - Step 1](https://apidocs.io/illustration/php?workspaceFolder=HAPI&step=createDirectory)

Name the directory as "test".

![Add a new project in PHPStorm - Step 2](https://apidocs.io/illustration/php?workspaceFolder=HAPI&step=nameDirectory)

Add a PHP file to this project.

![Add a new project in PHPStorm - Step 3](https://apidocs.io/illustration/php?workspaceFolder=HAPI&step=createFile)

Name it "testSDK".

![Add a new project in PHPStorm - Step 4](https://apidocs.io/illustration/php?workspaceFolder=HAPI&step=nameFile)

Depending on your project setup, you might need to include composer's autoloader in your PHP code to enable auto loading of classes.

```php
require_once "vendor/autoload.php";
```

It is important that the path inside require_once correctly points to the file `autoload.php` inside the vendor directory created during dependency installations.

![Add a new project in PHPStorm - Step 5](https://apidocs.io/illustration/php?workspaceFolder=HAPI&step=projectFiles)

After this you can add code to initialize the client library and acquire the instance of a Controller class. Sample code to initialize the client library and use the Controller methods is given in the subsequent sections.

### 3. Run the Test Project

To run your project you must set the Interpreter for your project. Interpreter is the PHP engine installed on your computer.

Open `Settings` from `File` menu.

![Run Test Project - Step 1](https://apidocs.io/illustration/php?workspaceFolder=HAPI&step=openSettings)

Select `PHP` from within `Languages & Frameworks`.

![Run Test Project - Step 2](https://apidocs.io/illustration/php?workspaceFolder=HAPI&step=setInterpreter0)

Browse for Interpreters near the `Interpreter` option and choose your interpreter.

![Run Test Project - Step 3](https://apidocs.io/illustration/php?workspaceFolder=HAPI&step=setInterpreter1)

Once the interpreter is selected, click `OK`.

![Run Test Project - Step 4](https://apidocs.io/illustration/php?workspaceFolder=HAPI&step=setInterpreter2)

To run your project, right click on your PHP file inside your Test project and click on `Run`.

![Run Test Project - Step 5](https://apidocs.io/illustration/php?workspaceFolder=HAPI&step=runProject)

## Test the SDK

Unit tests in this SDK can be run using PHPUnit.

1. First install the dependencies using composer including the `require-dev` dependencies.
2. Run `vendor\bin\phpunit --verbose` from commandline to execute tests. If you have installed PHPUnit globally, run tests using `phpunit --verbose` instead.

You can change the PHPUnit test configuration in the `phpunit.xml` file.

## Initialize the API Client

**_Note:_** Documentation for the client can be found [here.](doc/client.md)

The following parameters are configurable for the API Client:

| Parameter | Type | Description |
|  --- | --- | --- |
| `environment` | Environment | The API environment. <br> **Default: `Environment.PRODUCTION`** |
| `timeout` | `int` | Timeout for API calls in seconds.<br>*Default*: `0` |
| `enableRetries` | `bool` | Whether to enable retries and backoff feature.<br>*Default*: `false` |
| `numberOfRetries` | `int` | The number of retries to make.<br>*Default*: `0` |
| `retryInterval` | `float` | The retry time interval between the endpoint calls.<br>*Default*: `1` |
| `backOffFactor` | `float` | Exponential backoff factor to increase interval between retries.<br>*Default*: `2` |
| `maximumRetryWaitTime` | `int` | The maximum wait time in seconds for overall retrying requests.<br>*Default*: `0` |
| `retryOnTimeout` | `bool` | Whether to retry on request timeout.<br>*Default*: `true` |
| `httpStatusCodesToRetry` | `array` | Http status codes to retry against.<br>*Default*: `408, 413, 429, 500, 502, 503, 504, 521, 522, 524` |
| `httpMethodsToRetry` | `array` | Http methods to retry against.<br>*Default*: `'GET', 'PUT'` |
| `skipSslVerification` | `bool` | Set to true to allow skipping ssl certificate verification<br>*Default*: `false` |
| `xAuthToken` | `string` | In order to interact with the API, every request needs to have an API Token.  The key will be supplied by VONQ to our partners. |

The API client can be initialized as follows:

```php
$client = new HAPILib\HAPIClient([
    // Set authentication parameters
    'xAuthToken' => 'X-Auth-Token',

    // Set the environment
    'environment' => 'production',

    // Specifies whether to skip SSL certificate verification
    'skipSslVerification' => true,
]);
```

## Environments

The SDK can be configured to use a different environment for making API calls. Available environments are:

### Fields

| Name | Description |
|  --- | --- |
| production | **Default** Production |
| sandbox | Sandbox |

## Authorization

This API uses `Custom Header Signature`.

## List of APIs

* [Campaigns](doc/controllers/campaigns.md)
* [Channels](doc/controllers/channels.md)
* [Contract Groups](doc/controllers/contract-groups.md)
* [Contracts](doc/controllers/contracts.md)
* [Products](doc/controllers/products.md)
* [Taxonomy](doc/controllers/taxonomy.md)
* [Wallets](doc/controllers/wallets.md)

## Classes Documentation

* [ApiException](doc/api-exception.md)
* [HttpRequest](doc/http-request.md)
* [HttpResponse](doc/http-response.md)

