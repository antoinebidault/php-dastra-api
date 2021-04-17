# OpenAPI\Client\DataProcessingRelationshipsApi

All URIs are relative to https://api.dastra.eu.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dataProcessingRelationshipsCreate()**](DataProcessingRelationshipsApi.md#dataProcessingRelationshipsCreate) | **POST** /v1/tenant/{tenantId}/ws/{workspaceId}/DataProcessingRelationships/{id} | Saving or updating a datatreatment
[**dataProcessingRelationshipsDelete()**](DataProcessingRelationshipsApi.md#dataProcessingRelationshipsDelete) | **DELETE** /v1/tenant/{tenantId}/ws/{workspaceId}/DataProcessingRelationships/{id} | 
[**dataProcessingRelationshipsList()**](DataProcessingRelationshipsApi.md#dataProcessingRelationshipsList) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/DataProcessingRelationships/{dataProcessingId} | Get data treatment by id


## `dataProcessingRelationshipsCreate()`

```php
dataProcessingRelationshipsCreate($id, $tenant_id, $workspace_id, $data_processing_relation_ship_dto)
```

Saving or updating a datatreatment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DataProcessingRelationshipsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$data_processing_relation_ship_dto = new \OpenAPI\Client\Model\DataProcessingRelationShipDto(); // \OpenAPI\Client\Model\DataProcessingRelationShipDto

try {
    $apiInstance->dataProcessingRelationshipsCreate($id, $tenant_id, $workspace_id, $data_processing_relation_ship_dto);
} catch (Exception $e) {
    echo 'Exception when calling DataProcessingRelationshipsApi->dataProcessingRelationshipsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |
 **data_processing_relation_ship_dto** | [**\OpenAPI\Client\Model\DataProcessingRelationShipDto**](../Model/DataProcessingRelationShipDto.md)|  | [optional]

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

## `dataProcessingRelationshipsDelete()`

```php
dataProcessingRelationshipsDelete($id, $tenant_id, $workspace_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DataProcessingRelationshipsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $apiInstance->dataProcessingRelationshipsDelete($id, $tenant_id, $workspace_id);
} catch (Exception $e) {
    echo 'Exception when calling DataProcessingRelationshipsApi->dataProcessingRelationshipsDelete: ', $e->getMessage(), PHP_EOL;
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

## `dataProcessingRelationshipsList()`

```php
dataProcessingRelationshipsList($data_processing_id, $tenant_id, $workspace_id): \OpenAPI\Client\Model\DataProcessingRelationShipDto[]
```

Get data treatment by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DataProcessingRelationshipsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data_processing_id = 'data_processing_id_example'; // string | Id treatment
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->dataProcessingRelationshipsList($data_processing_id, $tenant_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataProcessingRelationshipsApi->dataProcessingRelationshipsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data_processing_id** | [**string**](../Model/.md)| Id treatment |
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\DataProcessingRelationShipDto[]**](../Model/DataProcessingRelationShipDto.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
