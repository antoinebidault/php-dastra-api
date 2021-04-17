# OpenAPI\Client\ApplicationsApi

All URIs are relative to https://api.dastra.eu.

Method | HTTP request | Description
------------- | ------------- | -------------
[**applicationsColumns()**](ApplicationsApi.md#applicationsColumns) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/Applications/columns | 
[**applicationsCreate()**](ApplicationsApi.md#applicationsCreate) | **POST** /v1/tenant/{tenantId}/ws/{workspaceId}/Applications | Create a new application
[**applicationsDelete()**](ApplicationsApi.md#applicationsDelete) | **DELETE** /v1/tenant/{tenantId}/ws/{workspaceId}/Applications/{id} | 
[**applicationsFind()**](ApplicationsApi.md#applicationsFind) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/Applications/{id} | Get an application with his id
[**applicationsJsonPatchWithModelState()**](ApplicationsApi.md#applicationsJsonPatchWithModelState) | **PATCH** /v1/tenant/{tenantId}/ws/{workspaceId}/Applications/{id} | Patch an application
[**applicationsList()**](ApplicationsApi.md#applicationsList) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/Applications | Get all linked applications
[**applicationsUpdate()**](ApplicationsApi.md#applicationsUpdate) | **PUT** /v1/tenant/{tenantId}/ws/{workspaceId}/Applications/{id} | Edit an application


## `applicationsColumns()`

```php
applicationsColumns($tenant_id, $workspace_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $apiInstance->applicationsColumns($tenant_id, $workspace_id);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->applicationsColumns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
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

## `applicationsCreate()`

```php
applicationsCreate($tenant_id, $workspace_id, $application_dto)
```

Create a new application

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$application_dto = new \OpenAPI\Client\Model\ApplicationDto(); // \OpenAPI\Client\Model\ApplicationDto

try {
    $apiInstance->applicationsCreate($tenant_id, $workspace_id, $application_dto);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->applicationsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |
 **application_dto** | [**\OpenAPI\Client\Model\ApplicationDto**](../Model/ApplicationDto.md)|  | [optional]

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

## `applicationsDelete()`

```php
applicationsDelete($id, $tenant_id, $workspace_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $apiInstance->applicationsDelete($id, $tenant_id, $workspace_id);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->applicationsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
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

## `applicationsFind()`

```php
applicationsFind($id, $tenant_id, $workspace_id)
```

Get an application with his id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $apiInstance->applicationsFind($id, $tenant_id, $workspace_id);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->applicationsFind: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
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

## `applicationsJsonPatchWithModelState()`

```php
applicationsJsonPatchWithModelState($id, $tenant_id, $workspace_id, $operation)
```

Patch an application

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$operation = array(new \OpenAPI\Client\Model\Operation()); // \OpenAPI\Client\Model\Operation[]

try {
    $apiInstance->applicationsJsonPatchWithModelState($id, $tenant_id, $workspace_id, $operation);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->applicationsJsonPatchWithModelState: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |
 **operation** | [**\OpenAPI\Client\Model\Operation[]**](../Model/Operation.md)|  | [optional]

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

## `applicationsList()`

```php
applicationsList($tenant_id, $workspace_id, $page, $size, $skip, $sort_by, $asc, $q, $tags)
```

Get all linked applications

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$page = 56; // int
$size = 56; // int
$skip = 56; // int
$sort_by = 'sort_by_example'; // string
$asc = True; // bool
$q = 'q_example'; // string
$tags = array(56); // int[]

try {
    $apiInstance->applicationsList($tenant_id, $workspace_id, $page, $size, $skip, $sort_by, $asc, $q, $tags);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->applicationsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |
 **page** | **int**|  | [optional]
 **size** | **int**|  | [optional]
 **skip** | **int**|  | [optional]
 **sort_by** | **string**|  | [optional]
 **asc** | **bool**|  | [optional]
 **q** | **string**|  | [optional]
 **tags** | [**int[]**](../Model/int.md)|  | [optional]

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

## `applicationsUpdate()`

```php
applicationsUpdate($id, $tenant_id, $workspace_id, $application_dto)
```

Edit an application

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$application_dto = new \OpenAPI\Client\Model\ApplicationDto(); // \OpenAPI\Client\Model\ApplicationDto

try {
    $apiInstance->applicationsUpdate($id, $tenant_id, $workspace_id, $application_dto);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->applicationsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |
 **application_dto** | [**\OpenAPI\Client\Model\ApplicationDto**](../Model/ApplicationDto.md)|  | [optional]

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
