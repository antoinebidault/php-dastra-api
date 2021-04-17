# OpenAPI\Client\DataTransfersApi

All URIs are relative to https://api.dastra.eu.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dataTransfersList()**](DataTransfersApi.md#dataTransfersList) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/DataTransfers | Get data treatments (Paginated)


## `dataTransfersList()`

```php
dataTransfersList($tenant_id, $workspace_id, $area_id): object
```

Get data treatments (Paginated)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DataTransfersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$area_id = 56; // int

try {
    $result = $apiInstance->dataTransfersList($tenant_id, $workspace_id, $area_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataTransfersApi->dataTransfersList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |
 **area_id** | **int**|  | [optional]

### Return type

**object**

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
