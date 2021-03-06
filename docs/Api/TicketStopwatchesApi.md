# Spinen\ConnectWise\Clients\Time\TicketStopwatchesApi
Spinen&#39;s PHP ConnectWise Client for Time API generated by Swagger Code Generator.

All URIs are relative to *https://api-na.myconnectwise.net/v4_6_release/apis/3.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**timeTicketstopwatchesCountGet**](TicketStopwatchesApi.md#timeTicketstopwatchesCountGet) | **GET** /time/ticketstopwatches/count | 
[**timeTicketstopwatchesGet**](TicketStopwatchesApi.md#timeTicketstopwatchesGet) | **GET** /time/ticketstopwatches | 
[**timeTicketstopwatchesIdDelete**](TicketStopwatchesApi.md#timeTicketstopwatchesIdDelete) | **DELETE** /time/ticketstopwatches/{id} | 
[**timeTicketstopwatchesIdGet**](TicketStopwatchesApi.md#timeTicketstopwatchesIdGet) | **GET** /time/ticketstopwatches/{id} | 
[**timeTicketstopwatchesIdPatch**](TicketStopwatchesApi.md#timeTicketstopwatchesIdPatch) | **PATCH** /time/ticketstopwatches/{id} | 
[**timeTicketstopwatchesIdPut**](TicketStopwatchesApi.md#timeTicketstopwatchesIdPut) | **PUT** /time/ticketstopwatches/{id} | 
[**timeTicketstopwatchesPost**](TicketStopwatchesApi.md#timeTicketstopwatchesPost) | **POST** /time/ticketstopwatches | 


# **timeTicketstopwatchesCountGet**
> \Spinen\ConnectWise\Clients\Time\Model\Count timeTicketstopwatchesCountGet($conditions)



Get Ticket Stopwatches Count

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Time\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Time\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Time\Api\TicketStopwatchesApi();
$conditions = "conditions_example"; // string | 

try {
    $result = $api_instance->timeTicketstopwatchesCountGet($conditions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketStopwatchesApi->timeTicketstopwatchesCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conditions** | **string**|  | [optional]

### Return type

[**\Spinen\ConnectWise\Clients\Time\Model\Count**](../Model/Count.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **timeTicketstopwatchesGet**
> \Spinen\ConnectWise\Clients\Time\Model\TicketStopwatch[] timeTicketstopwatchesGet($conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size)



Get Ticket Stopwatches

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Time\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Time\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Time\Api\TicketStopwatchesApi();
$conditions = "conditions_example"; // string | 
$order_by = "order_by_example"; // string | 
$childconditions = "childconditions_example"; // string | 
$customfieldconditions = "customfieldconditions_example"; // string | 
$page = 56; // int | 
$page_size = 56; // int | 

try {
    $result = $api_instance->timeTicketstopwatchesGet($conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketStopwatchesApi->timeTicketstopwatchesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conditions** | **string**|  | [optional]
 **order_by** | **string**|  | [optional]
 **childconditions** | **string**|  | [optional]
 **customfieldconditions** | **string**|  | [optional]
 **page** | **int**|  | [optional]
 **page_size** | **int**|  | [optional]

### Return type

[**\Spinen\ConnectWise\Clients\Time\Model\TicketStopwatch[]**](../Model/TicketStopwatch.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **timeTicketstopwatchesIdDelete**
> timeTicketstopwatchesIdDelete($id)



Delete Ticket Stopwatch By Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Time\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Time\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Time\Api\TicketStopwatchesApi();
$id = 56; // int | 

try {
    $api_instance->timeTicketstopwatchesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TicketStopwatchesApi->timeTicketstopwatchesIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **timeTicketstopwatchesIdGet**
> \Spinen\ConnectWise\Clients\Time\Model\TicketStopwatch timeTicketstopwatchesIdGet($id)



Get Ticket Stopwatch By Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Time\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Time\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Time\Api\TicketStopwatchesApi();
$id = 56; // int | 

try {
    $result = $api_instance->timeTicketstopwatchesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketStopwatchesApi->timeTicketstopwatchesIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Spinen\ConnectWise\Clients\Time\Model\TicketStopwatch**](../Model/TicketStopwatch.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **timeTicketstopwatchesIdPatch**
> \Spinen\ConnectWise\Clients\Time\Model\TicketStopwatch timeTicketstopwatchesIdPatch($id, $operations)



Update Ticket Stopwatch

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Time\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Time\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Time\Api\TicketStopwatchesApi();
$id = 56; // int | 
$operations = array(new PatchOperation()); // \Spinen\ConnectWise\Clients\Time\Model\PatchOperation[] | 

try {
    $result = $api_instance->timeTicketstopwatchesIdPatch($id, $operations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketStopwatchesApi->timeTicketstopwatchesIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **operations** | [**\Spinen\ConnectWise\Clients\Time\Model\PatchOperation[]**](../Model/PatchOperation.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Time\Model\TicketStopwatch**](../Model/TicketStopwatch.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **timeTicketstopwatchesIdPut**
> \Spinen\ConnectWise\Clients\Time\Model\TicketStopwatch timeTicketstopwatchesIdPut($id, $ticket_stopwatch)



Replace Ticket Stopwatch

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Time\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Time\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Time\Api\TicketStopwatchesApi();
$id = 56; // int | 
$ticket_stopwatch = new \Spinen\ConnectWise\Clients\Time\Model\TicketStopwatch(); // \Spinen\ConnectWise\Clients\Time\Model\TicketStopwatch | 

try {
    $result = $api_instance->timeTicketstopwatchesIdPut($id, $ticket_stopwatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketStopwatchesApi->timeTicketstopwatchesIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **ticket_stopwatch** | [**\Spinen\ConnectWise\Clients\Time\Model\TicketStopwatch**](../Model/\Spinen\ConnectWise\Clients\Time\Model\TicketStopwatch.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Time\Model\TicketStopwatch**](../Model/TicketStopwatch.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **timeTicketstopwatchesPost**
> \Spinen\ConnectWise\Clients\Time\Model\TicketStopwatch timeTicketstopwatchesPost($ticket_stopwatch)



Create Ticket Stopwatch

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Time\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Time\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Time\Api\TicketStopwatchesApi();
$ticket_stopwatch = new \Spinen\ConnectWise\Clients\Time\Model\TicketStopwatch(); // \Spinen\ConnectWise\Clients\Time\Model\TicketStopwatch | 

try {
    $result = $api_instance->timeTicketstopwatchesPost($ticket_stopwatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketStopwatchesApi->timeTicketstopwatchesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ticket_stopwatch** | [**\Spinen\ConnectWise\Clients\Time\Model\TicketStopwatch**](../Model/\Spinen\ConnectWise\Clients\Time\Model\TicketStopwatch.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Time\Model\TicketStopwatch**](../Model/TicketStopwatch.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

