# OpenAPI\Client\DataProcessingsApi

All URIs are relative to https://api.dastra.eu.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dataProcessingsArchive()**](DataProcessingsApi.md#dataProcessingsArchive) | **POST** /v1/tenant/{tenantId}/ws/{workspaceId}/DataProcessings/archive/{id} | Register insights
[**dataProcessingsColumns()**](DataProcessingsApi.md#dataProcessingsColumns) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/DataProcessings/columns | 
[**dataProcessingsCreate()**](DataProcessingsApi.md#dataProcessingsCreate) | **POST** /v1/tenant/{tenantId}/ws/{workspaceId}/DataProcessings | Creating a record of processing
[**dataProcessingsDelete()**](DataProcessingsApi.md#dataProcessingsDelete) | **DELETE** /v1/tenant/{tenantId}/ws/{workspaceId}/DataProcessings/{id} | 
[**dataProcessingsDuplicate()**](DataProcessingsApi.md#dataProcessingsDuplicate) | **POST** /v1/tenant/{tenantId}/ws/{workspaceId}/DataProcessings/{id}/duplicate | Duplicate a data treatment object
[**dataProcessingsExport()**](DataProcessingsApi.md#dataProcessingsExport) | **POST** /v1/tenant/{tenantId}/ws/{workspaceId}/DataProcessings/export/{format} | Export the records in any format
[**dataProcessingsFind()**](DataProcessingsApi.md#dataProcessingsFind) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/DataProcessings/{id} | Get data processing record by id
[**dataProcessingsInsights()**](DataProcessingsApi.md#dataProcessingsInsights) | **POST** /v1/tenant/{tenantId}/ws/{workspaceId}/DataProcessings/insights | 
[**dataProcessingsList()**](DataProcessingsApi.md#dataProcessingsList) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/DataProcessings | Get data treatments (Paginated)
[**dataProcessingsListPurposes()**](DataProcessingsApi.md#dataProcessingsListPurposes) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/DataProcessings/purposes/{id} | 
[**dataProcessingsNodes()**](DataProcessingsApi.md#dataProcessingsNodes) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/DataProcessings/nodes | Get data treatments (Paginated)
[**dataProcessingsPatchDataTreatment()**](DataProcessingsApi.md#dataProcessingsPatchDataTreatment) | **PATCH** /v1/tenant/{tenantId}/ws/{workspaceId}/DataProcessings/{id} | Patching a data processing with his id
[**dataProcessingsPersonCategories()**](DataProcessingsApi.md#dataProcessingsPersonCategories) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/DataProcessings/person-categories | Return the organizational security measures types  to generates the selectList
[**dataProcessingsRestore()**](DataProcessingsApi.md#dataProcessingsRestore) | **POST** /v1/tenant/{tenantId}/ws/{workspaceId}/DataProcessings/restore/{id} | registerInsights              DataTreatment Archiving
[**dataProcessingsRestoreHistory()**](DataProcessingsApi.md#dataProcessingsRestoreHistory) | **POST** /v1/tenant/{tenantId}/ws/{workspaceId}/DataProcessings/restore-history | 
[**dataProcessingsStats()**](DataProcessingsApi.md#dataProcessingsStats) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/DataProcessings/stats | 
[**dataProcessingsSwitchWorkflowStep()**](DataProcessingsApi.md#dataProcessingsSwitchWorkflowStep) | **POST** /v1/tenant/{tenantId}/ws/{workspaceId}/DataProcessings/workflow | Switching the current state
[**dataProcessingsTree()**](DataProcessingsApi.md#dataProcessingsTree) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/DataProcessings/tree | Get data treatments (Paginated)
[**dataProcessingsUpdate()**](DataProcessingsApi.md#dataProcessingsUpdate) | **PUT** /v1/tenant/{tenantId}/ws/{workspaceId}/DataProcessings | Saving or updating a data processing record


## `dataProcessingsArchive()`

```php
dataProcessingsArchive($id, $tenant_id, $workspace_id)
```

Register insights

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DataProcessingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $apiInstance->dataProcessingsArchive($id, $tenant_id, $workspace_id);
} catch (Exception $e) {
    echo 'Exception when calling DataProcessingsApi->dataProcessingsArchive: ', $e->getMessage(), PHP_EOL;
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

## `dataProcessingsColumns()`

```php
dataProcessingsColumns($tenant_id, $workspace_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DataProcessingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $apiInstance->dataProcessingsColumns($tenant_id, $workspace_id);
} catch (Exception $e) {
    echo 'Exception when calling DataProcessingsApi->dataProcessingsColumns: ', $e->getMessage(), PHP_EOL;
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

## `dataProcessingsCreate()`

```php
dataProcessingsCreate($tenant_id, $workspace_id, $data_processing_creation_dto)
```

Creating a record of processing

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DataProcessingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$data_processing_creation_dto = new \OpenAPI\Client\Model\DataProcessingCreationDto(); // \OpenAPI\Client\Model\DataProcessingCreationDto

try {
    $apiInstance->dataProcessingsCreate($tenant_id, $workspace_id, $data_processing_creation_dto);
} catch (Exception $e) {
    echo 'Exception when calling DataProcessingsApi->dataProcessingsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |
 **data_processing_creation_dto** | [**\OpenAPI\Client\Model\DataProcessingCreationDto**](../Model/DataProcessingCreationDto.md)|  | [optional]

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

## `dataProcessingsDelete()`

```php
dataProcessingsDelete($id, $tenant_id, $workspace_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DataProcessingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $apiInstance->dataProcessingsDelete($id, $tenant_id, $workspace_id);
} catch (Exception $e) {
    echo 'Exception when calling DataProcessingsApi->dataProcessingsDelete: ', $e->getMessage(), PHP_EOL;
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

## `dataProcessingsDuplicate()`

```php
dataProcessingsDuplicate($id, $workspace_id, $tenant_id)
```

Duplicate a data treatment object

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DataProcessingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$workspace_id = 56; // int
$tenant_id = 'tenant_id_example'; // string

try {
    $apiInstance->dataProcessingsDuplicate($id, $workspace_id, $tenant_id);
} catch (Exception $e) {
    echo 'Exception when calling DataProcessingsApi->dataProcessingsDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **workspace_id** | **int**|  |
 **tenant_id** | **string**|  |

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

## `dataProcessingsExport()`

```php
dataProcessingsExport($format, $tenant_id, $workspace_id, $template, $data_processing_query)
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


$apiInstance = new OpenAPI\Client\Api\DataProcessingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ExportFormat(); // \OpenAPI\Client\Model\ExportFormat
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$template = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\TemplateExportProcessing(); // \OpenAPI\Client\Model\TemplateExportProcessing
$data_processing_query = new \OpenAPI\Client\Model\DataProcessingQuery(); // \OpenAPI\Client\Model\DataProcessingQuery

try {
    $apiInstance->dataProcessingsExport($format, $tenant_id, $workspace_id, $template, $data_processing_query);
} catch (Exception $e) {
    echo 'Exception when calling DataProcessingsApi->dataProcessingsExport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **format** | [**\OpenAPI\Client\Model\ExportFormat**](../Model/.md)|  |
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |
 **template** | [**\OpenAPI\Client\Model\TemplateExportProcessing**](../Model/.md)|  | [optional]
 **data_processing_query** | [**\OpenAPI\Client\Model\DataProcessingQuery**](../Model/DataProcessingQuery.md)|  | [optional]

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

## `dataProcessingsFind()`

```php
dataProcessingsFind($id, $tenant_id, $workspace_id): \OpenAPI\Client\Model\DataProcessingDto
```

Get data processing record by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DataProcessingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Id treatment
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->dataProcessingsFind($id, $tenant_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataProcessingsApi->dataProcessingsFind: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Id treatment |
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\DataProcessingDto**](../Model/DataProcessingDto.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataProcessingsInsights()`

```php
dataProcessingsInsights($tenant_id, $workspace_id, $data_processing_dto)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DataProcessingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$data_processing_dto = new \OpenAPI\Client\Model\DataProcessingDto(); // \OpenAPI\Client\Model\DataProcessingDto

try {
    $apiInstance->dataProcessingsInsights($tenant_id, $workspace_id, $data_processing_dto);
} catch (Exception $e) {
    echo 'Exception when calling DataProcessingsApi->dataProcessingsInsights: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |
 **data_processing_dto** | [**\OpenAPI\Client\Model\DataProcessingDto**](../Model/DataProcessingDto.md)|  | [optional]

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

## `dataProcessingsList()`

```php
dataProcessingsList($tenant_id, $workspace_id, $data_set_id, $actor_id, $customer_id, $security_measure_id, $area_id, $archived, $tags, $states, $types, $q, $ids, $page, $size, $skip, $sort_by, $asc): \OpenAPI\Client\Model\DataProcessingDtoPagedList
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


$apiInstance = new OpenAPI\Client\Api\DataProcessingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$data_set_id = 'data_set_id_example'; // string
$actor_id = 56; // int
$customer_id = 56; // int
$security_measure_id = 56; // int
$area_id = 56; // int
$archived = True; // bool
$tags = array(56); // int[]
$states = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\DataProcessingState()); // \OpenAPI\Client\Model\DataProcessingState[]
$types = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ProcessingType()); // \OpenAPI\Client\Model\ProcessingType[]
$q = 'q_example'; // string
$ids = array('ids_example'); // string[]
$page = 56; // int
$size = 56; // int
$skip = 56; // int
$sort_by = 'sort_by_example'; // string
$asc = True; // bool

try {
    $result = $apiInstance->dataProcessingsList($tenant_id, $workspace_id, $data_set_id, $actor_id, $customer_id, $security_measure_id, $area_id, $archived, $tags, $states, $types, $q, $ids, $page, $size, $skip, $sort_by, $asc);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataProcessingsApi->dataProcessingsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |
 **data_set_id** | [**string**](../Model/.md)|  | [optional]
 **actor_id** | **int**|  | [optional]
 **customer_id** | **int**|  | [optional]
 **security_measure_id** | **int**|  | [optional]
 **area_id** | **int**|  | [optional]
 **archived** | **bool**|  | [optional]
 **tags** | [**int[]**](../Model/int.md)|  | [optional]
 **states** | [**\OpenAPI\Client\Model\DataProcessingState[]**](../Model/\OpenAPI\Client\Model\DataProcessingState.md)|  | [optional]
 **types** | [**\OpenAPI\Client\Model\ProcessingType[]**](../Model/\OpenAPI\Client\Model\ProcessingType.md)|  | [optional]
 **q** | **string**|  | [optional]
 **ids** | [**string[]**](../Model/string.md)|  | [optional]
 **page** | **int**|  | [optional]
 **size** | **int**|  | [optional]
 **skip** | **int**|  | [optional]
 **sort_by** | **string**|  | [optional]
 **asc** | **bool**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\DataProcessingDtoPagedList**](../Model/DataProcessingDtoPagedList.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataProcessingsListPurposes()`

```php
dataProcessingsListPurposes($id, $tenant_id, $workspace_id): \OpenAPI\Client\Model\PurposeDto
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DataProcessingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->dataProcessingsListPurposes($id, $tenant_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataProcessingsApi->dataProcessingsListPurposes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\PurposeDto**](../Model/PurposeDto.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataProcessingsNodes()`

```php
dataProcessingsNodes($tenant_id, $workspace_id, $data_set_id, $actor_id, $customer_id, $security_measure_id, $area_id, $archived, $tags, $states, $types, $q, $ids, $page, $size, $skip, $sort_by, $asc): \OpenAPI\Client\Model\RecordNodes
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


$apiInstance = new OpenAPI\Client\Api\DataProcessingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$data_set_id = 'data_set_id_example'; // string
$actor_id = 56; // int
$customer_id = 56; // int
$security_measure_id = 56; // int
$area_id = 56; // int
$archived = True; // bool
$tags = array(56); // int[]
$states = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\DataProcessingState()); // \OpenAPI\Client\Model\DataProcessingState[]
$types = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ProcessingType()); // \OpenAPI\Client\Model\ProcessingType[]
$q = 'q_example'; // string
$ids = array('ids_example'); // string[]
$page = 56; // int
$size = 56; // int
$skip = 56; // int
$sort_by = 'sort_by_example'; // string
$asc = True; // bool

try {
    $result = $apiInstance->dataProcessingsNodes($tenant_id, $workspace_id, $data_set_id, $actor_id, $customer_id, $security_measure_id, $area_id, $archived, $tags, $states, $types, $q, $ids, $page, $size, $skip, $sort_by, $asc);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataProcessingsApi->dataProcessingsNodes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |
 **data_set_id** | [**string**](../Model/.md)|  | [optional]
 **actor_id** | **int**|  | [optional]
 **customer_id** | **int**|  | [optional]
 **security_measure_id** | **int**|  | [optional]
 **area_id** | **int**|  | [optional]
 **archived** | **bool**|  | [optional]
 **tags** | [**int[]**](../Model/int.md)|  | [optional]
 **states** | [**\OpenAPI\Client\Model\DataProcessingState[]**](../Model/\OpenAPI\Client\Model\DataProcessingState.md)|  | [optional]
 **types** | [**\OpenAPI\Client\Model\ProcessingType[]**](../Model/\OpenAPI\Client\Model\ProcessingType.md)|  | [optional]
 **q** | **string**|  | [optional]
 **ids** | [**string[]**](../Model/string.md)|  | [optional]
 **page** | **int**|  | [optional]
 **size** | **int**|  | [optional]
 **skip** | **int**|  | [optional]
 **sort_by** | **string**|  | [optional]
 **asc** | **bool**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\RecordNodes**](../Model/RecordNodes.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataProcessingsPatchDataTreatment()`

```php
dataProcessingsPatchDataTreatment($id, $tenant_id, $workspace_id, $operation)
```

Patching a data processing with his id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DataProcessingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$operation = array(new \OpenAPI\Client\Model\Operation()); // \OpenAPI\Client\Model\Operation[]

try {
    $apiInstance->dataProcessingsPatchDataTreatment($id, $tenant_id, $workspace_id, $operation);
} catch (Exception $e) {
    echo 'Exception when calling DataProcessingsApi->dataProcessingsPatchDataTreatment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
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

## `dataProcessingsPersonCategories()`

```php
dataProcessingsPersonCategories($tenant_id, $workspace_id)
```

Return the organizational security measures types  to generates the selectList

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DataProcessingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $apiInstance->dataProcessingsPersonCategories($tenant_id, $workspace_id);
} catch (Exception $e) {
    echo 'Exception when calling DataProcessingsApi->dataProcessingsPersonCategories: ', $e->getMessage(), PHP_EOL;
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

## `dataProcessingsRestore()`

```php
dataProcessingsRestore($id, $tenant_id, $workspace_id)
```

registerInsights              DataTreatment Archiving

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DataProcessingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $apiInstance->dataProcessingsRestore($id, $tenant_id, $workspace_id);
} catch (Exception $e) {
    echo 'Exception when calling DataProcessingsApi->dataProcessingsRestore: ', $e->getMessage(), PHP_EOL;
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

## `dataProcessingsRestoreHistory()`

```php
dataProcessingsRestoreHistory($tenant_id, $workspace_id, $data_processing_restore_dto)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DataProcessingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$data_processing_restore_dto = new \OpenAPI\Client\Model\DataProcessingRestoreDto(); // \OpenAPI\Client\Model\DataProcessingRestoreDto

try {
    $apiInstance->dataProcessingsRestoreHistory($tenant_id, $workspace_id, $data_processing_restore_dto);
} catch (Exception $e) {
    echo 'Exception when calling DataProcessingsApi->dataProcessingsRestoreHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |
 **data_processing_restore_dto** | [**\OpenAPI\Client\Model\DataProcessingRestoreDto**](../Model/DataProcessingRestoreDto.md)|  | [optional]

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

## `dataProcessingsStats()`

```php
dataProcessingsStats($tenant_id, $workspace_id, $area_id): \OpenAPI\Client\Model\DataProcessingStatsDto
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DataProcessingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$area_id = 56; // int

try {
    $result = $apiInstance->dataProcessingsStats($tenant_id, $workspace_id, $area_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataProcessingsApi->dataProcessingsStats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |
 **area_id** | **int**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\DataProcessingStatsDto**](../Model/DataProcessingStatsDto.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataProcessingsSwitchWorkflowStep()`

```php
dataProcessingsSwitchWorkflowStep($tenant_id, $workspace_id, $guid_workflow_update_dto)
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


$apiInstance = new OpenAPI\Client\Api\DataProcessingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$guid_workflow_update_dto = new \OpenAPI\Client\Model\GuidWorkflowUpdateDto(); // \OpenAPI\Client\Model\GuidWorkflowUpdateDto

try {
    $apiInstance->dataProcessingsSwitchWorkflowStep($tenant_id, $workspace_id, $guid_workflow_update_dto);
} catch (Exception $e) {
    echo 'Exception when calling DataProcessingsApi->dataProcessingsSwitchWorkflowStep: ', $e->getMessage(), PHP_EOL;
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

## `dataProcessingsTree()`

```php
dataProcessingsTree($tenant_id, $workspace_id, $area_id, $states, $types, $archived): \OpenAPI\Client\Model\DataProcessingTreeDto
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


$apiInstance = new OpenAPI\Client\Api\DataProcessingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$area_id = 56; // int
$states = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\DataProcessingState()); // \OpenAPI\Client\Model\DataProcessingState[]
$types = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ProcessingType()); // \OpenAPI\Client\Model\ProcessingType[]
$archived = false; // bool

try {
    $result = $apiInstance->dataProcessingsTree($tenant_id, $workspace_id, $area_id, $states, $types, $archived);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataProcessingsApi->dataProcessingsTree: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |
 **area_id** | **int**|  | [optional]
 **states** | [**\OpenAPI\Client\Model\DataProcessingState[]**](../Model/\OpenAPI\Client\Model\DataProcessingState.md)|  | [optional]
 **types** | [**\OpenAPI\Client\Model\ProcessingType[]**](../Model/\OpenAPI\Client\Model\ProcessingType.md)|  | [optional]
 **archived** | **bool**|  | [optional] [default to false]

### Return type

[**\OpenAPI\Client\Model\DataProcessingTreeDto**](../Model/DataProcessingTreeDto.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataProcessingsUpdate()`

```php
dataProcessingsUpdate($tenant_id, $workspace_id, $data_processing_dto)
```

Saving or updating a data processing record

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DataProcessingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$data_processing_dto = new \OpenAPI\Client\Model\DataProcessingDto(); // \OpenAPI\Client\Model\DataProcessingDto

try {
    $apiInstance->dataProcessingsUpdate($tenant_id, $workspace_id, $data_processing_dto);
} catch (Exception $e) {
    echo 'Exception when calling DataProcessingsApi->dataProcessingsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |
 **data_processing_dto** | [**\OpenAPI\Client\Model\DataProcessingDto**](../Model/DataProcessingDto.md)|  | [optional]

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
