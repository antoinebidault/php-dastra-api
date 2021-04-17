# OpenAPI\Client\IterationsApi

All URIs are relative to https://api.dastra.eu.

Method | HTTP request | Description
------------- | ------------- | -------------
[**iterationsCreate()**](IterationsApi.md#iterationsCreate) | **POST** /v1/tenant/{tenantId}/ws/{workspaceId}/Iterations | 
[**iterationsDelete()**](IterationsApi.md#iterationsDelete) | **DELETE** /v1/tenant/{tenantId}/ws/{workspaceId}/Iterations/{id} | Delete an iteration
[**iterationsFind()**](IterationsApi.md#iterationsFind) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/Iterations/{id} | 
[**iterationsList()**](IterationsApi.md#iterationsList) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/Iterations | 
[**iterationsUpdate()**](IterationsApi.md#iterationsUpdate) | **PUT** /v1/tenant/{tenantId}/ws/{workspaceId}/Iterations/{id} | 


## `iterationsCreate()`

```php
iterationsCreate($tenant_id, $workspace_id, $iteration_dto): \OpenAPI\Client\Model\IterationDto
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\IterationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$iteration_dto = new \OpenAPI\Client\Model\IterationDto(); // \OpenAPI\Client\Model\IterationDto

try {
    $result = $apiInstance->iterationsCreate($tenant_id, $workspace_id, $iteration_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IterationsApi->iterationsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |
 **iteration_dto** | [**\OpenAPI\Client\Model\IterationDto**](../Model/IterationDto.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\IterationDto**](../Model/IterationDto.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/_*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `iterationsDelete()`

```php
iterationsDelete($id, $tenant_id, $workspace_id)
```

Delete an iteration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\IterationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $apiInstance->iterationsDelete($id, $tenant_id, $workspace_id);
} catch (Exception $e) {
    echo 'Exception when calling IterationsApi->iterationsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `iterationsFind()`

```php
iterationsFind($id, $tenant_id, $workspace_id): \OpenAPI\Client\Model\IterationDto
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\IterationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->iterationsFind($id, $tenant_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IterationsApi->iterationsFind: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\IterationDto**](../Model/IterationDto.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `iterationsList()`

```php
iterationsList($tenant_id, $workspace_id, $past, $future, $asc): \OpenAPI\Client\Model\IterationDto[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\IterationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$past = false; // bool
$future = false; // bool
$asc = false; // bool

try {
    $result = $apiInstance->iterationsList($tenant_id, $workspace_id, $past, $future, $asc);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IterationsApi->iterationsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |
 **past** | **bool**|  | [optional] [default to false]
 **future** | **bool**|  | [optional] [default to false]
 **asc** | **bool**|  | [optional] [default to false]

### Return type

[**\OpenAPI\Client\Model\IterationDto[]**](../Model/IterationDto.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `iterationsUpdate()`

```php
iterationsUpdate($id, $tenant_id, $workspace_id, $iteration_dto)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\IterationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$iteration_dto = new \OpenAPI\Client\Model\IterationDto(); // \OpenAPI\Client\Model\IterationDto

try {
    $apiInstance->iterationsUpdate($id, $tenant_id, $workspace_id, $iteration_dto);
} catch (Exception $e) {
    echo 'Exception when calling IterationsApi->iterationsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |
 **iteration_dto** | [**\OpenAPI\Client\Model\IterationDto**](../Model/IterationDto.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/_*+json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
