# OpenAPI\Client\WorkFlowsApi

All URIs are relative to https://api.dastra.eu.

Method | HTTP request | Description
------------- | ------------- | -------------
[**workFlowsFind()**](WorkFlowsApi.md#workFlowsFind) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/WorkFlows/{type} | Get workflows
[**workFlowsList()**](WorkFlowsApi.md#workFlowsList) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/WorkFlows | Get the complete
[**workFlowsUpdate()**](WorkFlowsApi.md#workFlowsUpdate) | **PUT** /v1/tenant/{tenantId}/ws/{workspaceId}/WorkFlows | Save workflow steps in database


## `workFlowsFind()`

```php
workFlowsFind($type, $tenant_id, $workspace_id)
```

Get workflows

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\WorkFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\WorkFlowType(); // \OpenAPI\Client\Model\WorkFlowType
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $apiInstance->workFlowsFind($type, $tenant_id, $workspace_id);
} catch (Exception $e) {
    echo 'Exception when calling WorkFlowsApi->workFlowsFind: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | [**\OpenAPI\Client\Model\WorkFlowType**](../Model/.md)|  |
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

## `workFlowsList()`

```php
workFlowsList($tenant_id, $workspace_id)
```

Get the complete

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\WorkFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $apiInstance->workFlowsList($tenant_id, $workspace_id);
} catch (Exception $e) {
    echo 'Exception when calling WorkFlowsApi->workFlowsList: ', $e->getMessage(), PHP_EOL;
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

## `workFlowsUpdate()`

```php
workFlowsUpdate($tenant_id, $workspace_id, $work_flow_step_dto)
```

Save workflow steps in database

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\WorkFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$work_flow_step_dto = array(new \OpenAPI\Client\Model\WorkFlowStepDto()); // \OpenAPI\Client\Model\WorkFlowStepDto[]

try {
    $apiInstance->workFlowsUpdate($tenant_id, $workspace_id, $work_flow_step_dto);
} catch (Exception $e) {
    echo 'Exception when calling WorkFlowsApi->workFlowsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |
 **work_flow_step_dto** | [**\OpenAPI\Client\Model\WorkFlowStepDto[]**](../Model/WorkFlowStepDto.md)|  | [optional]

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
