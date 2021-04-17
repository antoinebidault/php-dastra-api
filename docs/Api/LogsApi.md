# OpenAPI\Client\LogsApi

All URIs are relative to https://api.dastra.eu.

Method | HTTP request | Description
------------- | ------------- | -------------
[**logsExport()**](LogsApi.md#logsExport) | **GET** /v1/tenant/{tenantId}/Logs/export | Download logs as csv
[**logsHistory()**](LogsApi.md#logsHistory) | **GET** /v1/tenant/{tenantId}/Logs/history | 
[**logsList()**](LogsApi.md#logsList) | **GET** /v1/tenant/{tenantId}/Logs | Get logs


## `logsExport()`

```php
logsExport($tenant_id, $page, $size, $workspace_id, $start, $end, $type_query, $user_excluded, $user_id, $type, $channels, $ref_id)
```

Download logs as csv

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\LogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$page = 56; // int
$size = 56; // int
$workspace_id = 56; // int
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$type_query = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\TypeQuery(); // \OpenAPI\Client\Model\TypeQuery
$user_excluded = True; // bool
$user_id = 56; // int
$type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\LogObjectType(); // \OpenAPI\Client\Model\LogObjectType
$channels = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\NotificationChannel()); // \OpenAPI\Client\Model\NotificationChannel[]
$ref_id = 'ref_id_example'; // string

try {
    $apiInstance->logsExport($tenant_id, $page, $size, $workspace_id, $start, $end, $type_query, $user_excluded, $user_id, $type, $channels, $ref_id);
} catch (Exception $e) {
    echo 'Exception when calling LogsApi->logsExport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **string**|  |
 **page** | **int**|  | [optional]
 **size** | **int**|  | [optional]
 **workspace_id** | **int**|  | [optional]
 **start** | **\DateTime**|  | [optional]
 **end** | **\DateTime**|  | [optional]
 **type_query** | [**\OpenAPI\Client\Model\TypeQuery**](../Model/.md)|  | [optional]
 **user_excluded** | **bool**|  | [optional]
 **user_id** | **int**|  | [optional]
 **type** | [**\OpenAPI\Client\Model\LogObjectType**](../Model/.md)|  | [optional]
 **channels** | [**\OpenAPI\Client\Model\NotificationChannel[]**](../Model/\OpenAPI\Client\Model\NotificationChannel.md)|  | [optional]
 **ref_id** | **string**|  | [optional]

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

## `logsHistory()`

```php
logsHistory($tenant_id, $user_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\LogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$user_id = 56; // int

try {
    $apiInstance->logsHistory($tenant_id, $user_id);
} catch (Exception $e) {
    echo 'Exception when calling LogsApi->logsHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **string**|  |
 **user_id** | **int**|  | [optional]

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

## `logsList()`

```php
logsList($tenant_id, $page, $size, $workspace_id, $start, $end, $type_query, $user_excluded, $user_id, $type, $channels, $ref_id): \OpenAPI\Client\Model\LogDto[]
```

Get logs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\LogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$page = 56; // int
$size = 56; // int
$workspace_id = 56; // int
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$type_query = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\TypeQuery(); // \OpenAPI\Client\Model\TypeQuery
$user_excluded = True; // bool
$user_id = 56; // int
$type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\LogObjectType(); // \OpenAPI\Client\Model\LogObjectType
$channels = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\NotificationChannel()); // \OpenAPI\Client\Model\NotificationChannel[]
$ref_id = 'ref_id_example'; // string

try {
    $result = $apiInstance->logsList($tenant_id, $page, $size, $workspace_id, $start, $end, $type_query, $user_excluded, $user_id, $type, $channels, $ref_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogsApi->logsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **string**|  |
 **page** | **int**|  | [optional]
 **size** | **int**|  | [optional]
 **workspace_id** | **int**|  | [optional]
 **start** | **\DateTime**|  | [optional]
 **end** | **\DateTime**|  | [optional]
 **type_query** | [**\OpenAPI\Client\Model\TypeQuery**](../Model/.md)|  | [optional]
 **user_excluded** | **bool**|  | [optional]
 **user_id** | **int**|  | [optional]
 **type** | [**\OpenAPI\Client\Model\LogObjectType**](../Model/.md)|  | [optional]
 **channels** | [**\OpenAPI\Client\Model\NotificationChannel[]**](../Model/\OpenAPI\Client\Model\NotificationChannel.md)|  | [optional]
 **ref_id** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\LogDto[]**](../Model/LogDto.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
