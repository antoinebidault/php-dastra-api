# OpenAPI\Client\SecurityMeasuresApi

All URIs are relative to https://api.dastra.eu.

Method | HTTP request | Description
------------- | ------------- | -------------
[**securityMeasuresColumns()**](SecurityMeasuresApi.md#securityMeasuresColumns) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/SecurityMeasures/columns | List available column for security measure
[**securityMeasuresCreate()**](SecurityMeasuresApi.md#securityMeasuresCreate) | **POST** /v1/tenant/{tenantId}/ws/{workspaceId}/SecurityMeasures | Create a new security measure
[**securityMeasuresDelete()**](SecurityMeasuresApi.md#securityMeasuresDelete) | **DELETE** /v1/tenant/{tenantId}/ws/{workspaceId}/SecurityMeasures/{id} | Delete a security measure
[**securityMeasuresFind()**](SecurityMeasuresApi.md#securityMeasuresFind) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/SecurityMeasures/{id} | Get security measure by id
[**securityMeasuresList()**](SecurityMeasuresApi.md#securityMeasuresList) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/SecurityMeasures | 
[**securityMeasuresUpdate()**](SecurityMeasuresApi.md#securityMeasuresUpdate) | **PUT** /v1/tenant/{tenantId}/ws/{workspaceId}/SecurityMeasures/{id} | Update an existing security measure


## `securityMeasuresColumns()`

```php
securityMeasuresColumns($tenant_id, $workspace_id): \OpenAPI\Client\Model\DataTableColumn[]
```

List available column for security measure

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\SecurityMeasuresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->securityMeasuresColumns($tenant_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityMeasuresApi->securityMeasuresColumns: ', $e->getMessage(), PHP_EOL;
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

## `securityMeasuresCreate()`

```php
securityMeasuresCreate($tenant_id, $workspace_id, $security_measure_dto): \OpenAPI\Client\Model\SecurityMeasureDto
```

Create a new security measure

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\SecurityMeasuresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$security_measure_dto = new \OpenAPI\Client\Model\SecurityMeasureDto(); // \OpenAPI\Client\Model\SecurityMeasureDto

try {
    $result = $apiInstance->securityMeasuresCreate($tenant_id, $workspace_id, $security_measure_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityMeasuresApi->securityMeasuresCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |
 **security_measure_dto** | [**\OpenAPI\Client\Model\SecurityMeasureDto**](../Model/SecurityMeasureDto.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\SecurityMeasureDto**](../Model/SecurityMeasureDto.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/_*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `securityMeasuresDelete()`

```php
securityMeasuresDelete($id, $tenant_id, $workspace_id)
```

Delete a security measure

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\SecurityMeasuresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $apiInstance->securityMeasuresDelete($id, $tenant_id, $workspace_id);
} catch (Exception $e) {
    echo 'Exception when calling SecurityMeasuresApi->securityMeasuresDelete: ', $e->getMessage(), PHP_EOL;
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

## `securityMeasuresFind()`

```php
securityMeasuresFind($id, $tenant_id, $workspace_id): \OpenAPI\Client\Model\SecurityMeasureDto
```

Get security measure by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\SecurityMeasuresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->securityMeasuresFind($id, $tenant_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityMeasuresApi->securityMeasuresFind: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\SecurityMeasureDto**](../Model/SecurityMeasureDto.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `securityMeasuresList()`

```php
securityMeasuresList($tenant_id, $workspace_id, $page, $size, $skip, $sort_by, $asc, $q, $tags): \OpenAPI\Client\Model\SecurityMeasureDto[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\SecurityMeasuresApi(
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
    $result = $apiInstance->securityMeasuresList($tenant_id, $workspace_id, $page, $size, $skip, $sort_by, $asc, $q, $tags);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityMeasuresApi->securityMeasuresList: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\SecurityMeasureDto[]**](../Model/SecurityMeasureDto.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `securityMeasuresUpdate()`

```php
securityMeasuresUpdate($id, $tenant_id, $workspace_id, $security_measure_dto): \OpenAPI\Client\Model\SecurityMeasureDto
```

Update an existing security measure

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\SecurityMeasuresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$security_measure_dto = new \OpenAPI\Client\Model\SecurityMeasureDto(); // \OpenAPI\Client\Model\SecurityMeasureDto

try {
    $result = $apiInstance->securityMeasuresUpdate($id, $tenant_id, $workspace_id, $security_measure_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityMeasuresApi->securityMeasuresUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |
 **security_measure_dto** | [**\OpenAPI\Client\Model\SecurityMeasureDto**](../Model/SecurityMeasureDto.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\SecurityMeasureDto**](../Model/SecurityMeasureDto.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/_*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
