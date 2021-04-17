# OpenAPI\Client\DataBreachsApi

All URIs are relative to https://api.dastra.eu.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dataBreachsArchive()**](DataBreachsApi.md#dataBreachsArchive) | **POST** /v1/tenant/{tenantId}/ws/{workspaceId}/DataBreachs/archive/{id} | 
[**dataBreachsColumns()**](DataBreachsApi.md#dataBreachsColumns) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/DataBreachs/columns | 
[**dataBreachsCreate()**](DataBreachsApi.md#dataBreachsCreate) | **POST** /v1/tenant/{tenantId}/ws/{workspaceId}/DataBreachs | 
[**dataBreachsDelete()**](DataBreachsApi.md#dataBreachsDelete) | **DELETE** /v1/tenant/{tenantId}/ws/{workspaceId}/DataBreachs/{id} | 
[**dataBreachsExport()**](DataBreachsApi.md#dataBreachsExport) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/DataBreachs/export/{format} | Export the records in any format
[**dataBreachsFind()**](DataBreachsApi.md#dataBreachsFind) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/DataBreachs/{id} | 
[**dataBreachsList()**](DataBreachsApi.md#dataBreachsList) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/DataBreachs | Get the databreach list
[**dataBreachsRestore()**](DataBreachsApi.md#dataBreachsRestore) | **POST** /v1/tenant/{tenantId}/ws/{workspaceId}/DataBreachs/restore/{id} | 
[**dataBreachsUpdate()**](DataBreachsApi.md#dataBreachsUpdate) | **PUT** /v1/tenant/{tenantId}/ws/{workspaceId}/DataBreachs/{id} | Put a databreach
[**dataBreachsUpdateWorkflow()**](DataBreachsApi.md#dataBreachsUpdateWorkflow) | **POST** /v1/tenant/{tenantId}/ws/{workspaceId}/DataBreachs/workflow | Switching the current state


## `dataBreachsArchive()`

```php
dataBreachsArchive($id, $tenant_id, $workspace_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DataBreachsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $apiInstance->dataBreachsArchive($id, $tenant_id, $workspace_id);
} catch (Exception $e) {
    echo 'Exception when calling DataBreachsApi->dataBreachsArchive: ', $e->getMessage(), PHP_EOL;
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

## `dataBreachsColumns()`

```php
dataBreachsColumns($tenant_id, $workspace_id): \OpenAPI\Client\Model\DataTableColumn[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DataBreachsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->dataBreachsColumns($tenant_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataBreachsApi->dataBreachsColumns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\DataTableColumn[]**](../Model/DataTableColumn.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataBreachsCreate()`

```php
dataBreachsCreate($tenant_id, $workspace_id, $data_breach_dto)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DataBreachsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$data_breach_dto = new \OpenAPI\Client\Model\DataBreachDto(); // \OpenAPI\Client\Model\DataBreachDto

try {
    $apiInstance->dataBreachsCreate($tenant_id, $workspace_id, $data_breach_dto);
} catch (Exception $e) {
    echo 'Exception when calling DataBreachsApi->dataBreachsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |
 **data_breach_dto** | [**\OpenAPI\Client\Model\DataBreachDto**](../Model/DataBreachDto.md)|  | [optional]

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

## `dataBreachsDelete()`

```php
dataBreachsDelete($id, $tenant_id, $workspace_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DataBreachsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $apiInstance->dataBreachsDelete($id, $tenant_id, $workspace_id);
} catch (Exception $e) {
    echo 'Exception when calling DataBreachsApi->dataBreachsDelete: ', $e->getMessage(), PHP_EOL;
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

## `dataBreachsExport()`

```php
dataBreachsExport($format, $tenant_id, $workspace_id, $tags, $states, $types, $q, $archived, $area_id, $ids, $page, $size, $skip, $sort_by, $asc)
```

Export the records in any format

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DataBreachsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ExportFormat(); // \OpenAPI\Client\Model\ExportFormat | Format
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$tags = array(56); // int[]
$states = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\DataBreachState()); // \OpenAPI\Client\Model\DataBreachState[]
$types = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\DataBreachType()); // \OpenAPI\Client\Model\DataBreachType[]
$q = 'q_example'; // string
$archived = True; // bool
$area_id = 56; // int
$ids = array('ids_example'); // string[]
$page = 56; // int
$size = 56; // int
$skip = 56; // int
$sort_by = 'sort_by_example'; // string
$asc = True; // bool

try {
    $apiInstance->dataBreachsExport($format, $tenant_id, $workspace_id, $tags, $states, $types, $q, $archived, $area_id, $ids, $page, $size, $skip, $sort_by, $asc);
} catch (Exception $e) {
    echo 'Exception when calling DataBreachsApi->dataBreachsExport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **format** | [**\OpenAPI\Client\Model\ExportFormat**](../Model/.md)| Format |
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |
 **tags** | [**int[]**](../Model/int.md)|  | [optional]
 **states** | [**\OpenAPI\Client\Model\DataBreachState[]**](../Model/\OpenAPI\Client\Model\DataBreachState.md)|  | [optional]
 **types** | [**\OpenAPI\Client\Model\DataBreachType[]**](../Model/\OpenAPI\Client\Model\DataBreachType.md)|  | [optional]
 **q** | **string**|  | [optional]
 **archived** | **bool**|  | [optional]
 **area_id** | **int**|  | [optional]
 **ids** | [**string[]**](../Model/string.md)|  | [optional]
 **page** | **int**|  | [optional]
 **size** | **int**|  | [optional]
 **skip** | **int**|  | [optional]
 **sort_by** | **string**|  | [optional]
 **asc** | **bool**|  | [optional]

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

## `dataBreachsFind()`

```php
dataBreachsFind($id, $tenant_id, $workspace_id): \OpenAPI\Client\Model\DataBreachDto
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DataBreachsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->dataBreachsFind($id, $tenant_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataBreachsApi->dataBreachsFind: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\DataBreachDto**](../Model/DataBreachDto.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataBreachsList()`

```php
dataBreachsList($tenant_id, $workspace_id, $tags, $states, $types, $q, $archived, $area_id, $ids, $page, $size, $skip, $sort_by, $asc): \OpenAPI\Client\Model\DataBreachDtoPagedList
```

Get the databreach list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DataBreachsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$tags = array(56); // int[]
$states = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\DataBreachState()); // \OpenAPI\Client\Model\DataBreachState[]
$types = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\DataBreachType()); // \OpenAPI\Client\Model\DataBreachType[]
$q = 'q_example'; // string
$archived = True; // bool
$area_id = 56; // int
$ids = array('ids_example'); // string[]
$page = 56; // int
$size = 56; // int
$skip = 56; // int
$sort_by = 'sort_by_example'; // string
$asc = True; // bool

try {
    $result = $apiInstance->dataBreachsList($tenant_id, $workspace_id, $tags, $states, $types, $q, $archived, $area_id, $ids, $page, $size, $skip, $sort_by, $asc);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataBreachsApi->dataBreachsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |
 **tags** | [**int[]**](../Model/int.md)|  | [optional]
 **states** | [**\OpenAPI\Client\Model\DataBreachState[]**](../Model/\OpenAPI\Client\Model\DataBreachState.md)|  | [optional]
 **types** | [**\OpenAPI\Client\Model\DataBreachType[]**](../Model/\OpenAPI\Client\Model\DataBreachType.md)|  | [optional]
 **q** | **string**|  | [optional]
 **archived** | **bool**|  | [optional]
 **area_id** | **int**|  | [optional]
 **ids** | [**string[]**](../Model/string.md)|  | [optional]
 **page** | **int**|  | [optional]
 **size** | **int**|  | [optional]
 **skip** | **int**|  | [optional]
 **sort_by** | **string**|  | [optional]
 **asc** | **bool**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\DataBreachDtoPagedList**](../Model/DataBreachDtoPagedList.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataBreachsRestore()`

```php
dataBreachsRestore($id, $tenant_id, $workspace_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DataBreachsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $apiInstance->dataBreachsRestore($id, $tenant_id, $workspace_id);
} catch (Exception $e) {
    echo 'Exception when calling DataBreachsApi->dataBreachsRestore: ', $e->getMessage(), PHP_EOL;
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

## `dataBreachsUpdate()`

```php
dataBreachsUpdate($id, $tenant_id, $workspace_id, $data_breach_dto): \OpenAPI\Client\Model\DataBreachDto
```

Put a databreach

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DataBreachsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$data_breach_dto = new \OpenAPI\Client\Model\DataBreachDto(); // \OpenAPI\Client\Model\DataBreachDto

try {
    $result = $apiInstance->dataBreachsUpdate($id, $tenant_id, $workspace_id, $data_breach_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataBreachsApi->dataBreachsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |
 **data_breach_dto** | [**\OpenAPI\Client\Model\DataBreachDto**](../Model/DataBreachDto.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\DataBreachDto**](../Model/DataBreachDto.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/_*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataBreachsUpdateWorkflow()`

```php
dataBreachsUpdateWorkflow($tenant_id, $workspace_id, $guid_workflow_update_dto)
```

Switching the current state

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DataBreachsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$guid_workflow_update_dto = new \OpenAPI\Client\Model\GuidWorkflowUpdateDto(); // \OpenAPI\Client\Model\GuidWorkflowUpdateDto

try {
    $apiInstance->dataBreachsUpdateWorkflow($tenant_id, $workspace_id, $guid_workflow_update_dto);
} catch (Exception $e) {
    echo 'Exception when calling DataBreachsApi->dataBreachsUpdateWorkflow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |
 **guid_workflow_update_dto** | [**\OpenAPI\Client\Model\GuidWorkflowUpdateDto**](../Model/GuidWorkflowUpdateDto.md)|  | [optional]

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
