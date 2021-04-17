# OpenAPI\Client\UserTasksApi

All URIs are relative to https://api.dastra.eu.

Method | HTTP request | Description
------------- | ------------- | -------------
[**userTasksGet()**](UserTasksApi.md#userTasksGet) | **GET** /v1/tenant/{tenantId}/UserTasks | Get the assigned user tasks


## `userTasksGet()`

```php
userTasksGet($tenant_id, $task_query)
```

Get the assigned user tasks

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\UserTasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$task_query = new \OpenAPI\Client\Model\TaskQuery(); // \OpenAPI\Client\Model\TaskQuery

try {
    $apiInstance->userTasksGet($tenant_id, $task_query);
} catch (Exception $e) {
    echo 'Exception when calling UserTasksApi->userTasksGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **string**|  |
 **task_query** | [**\OpenAPI\Client\Model\TaskQuery**](../Model/TaskQuery.md)|  | [optional]

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
