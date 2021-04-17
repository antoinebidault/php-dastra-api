# OpenAPI\Client\RisksApi

All URIs are relative to https://api.dastra.eu.

Method | HTTP request | Description
------------- | ------------- | -------------
[**risksColumns()**](RisksApi.md#risksColumns) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/Risks/columns | 
[**risksCreate()**](RisksApi.md#risksCreate) | **POST** /v1/tenant/{tenantId}/ws/{workspaceId}/Risks | 
[**risksDelete()**](RisksApi.md#risksDelete) | **DELETE** /v1/tenant/{tenantId}/ws/{workspaceId}/Risks/{id} | 
[**risksFind()**](RisksApi.md#risksFind) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/Risks/{id} | Find a risk by his id
[**risksList()**](RisksApi.md#risksList) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/Risks | List all risks
[**risksStats()**](RisksApi.md#risksStats) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/Risks/stats | 
[**risksUpdate()**](RisksApi.md#risksUpdate) | **PUT** /v1/tenant/{tenantId}/ws/{workspaceId}/Risks/{id} | 


## `risksColumns()`

```php
risksColumns($tenant_id, $workspace_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RisksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $apiInstance->risksColumns($tenant_id, $workspace_id);
} catch (Exception $e) {
    echo 'Exception when calling RisksApi->risksColumns: ', $e->getMessage(), PHP_EOL;
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

## `risksCreate()`

```php
risksCreate($tenant_id, $workspace_id, $risk_dto): \OpenAPI\Client\Model\RiskDto
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RisksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$risk_dto = new \OpenAPI\Client\Model\RiskDto(); // \OpenAPI\Client\Model\RiskDto

try {
    $result = $apiInstance->risksCreate($tenant_id, $workspace_id, $risk_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RisksApi->risksCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |
 **risk_dto** | [**\OpenAPI\Client\Model\RiskDto**](../Model/RiskDto.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\RiskDto**](../Model/RiskDto.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/_*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `risksDelete()`

```php
risksDelete($id, $tenant_id, $workspace_id): \OpenAPI\Client\Model\RiskDto
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RisksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->risksDelete($id, $tenant_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RisksApi->risksDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\RiskDto**](../Model/RiskDto.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `risksFind()`

```php
risksFind($id, $tenant_id, $workspace_id): \OpenAPI\Client\Model\RiskDto
```

Find a risk by his id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RisksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->risksFind($id, $tenant_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RisksApi->risksFind: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\RiskDto**](../Model/RiskDto.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `risksList()`

```php
risksList($tenant_id, $workspace_id, $data_processings, $enabled, $tags, $risks, $impacts, $page, $size, $skip, $sort_by, $asc): \OpenAPI\Client\Model\RiskDto[]
```

List all risks

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RisksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$data_processings = array('data_processings_example'); // string[]
$enabled = True; // bool
$tags = array(56); // int[]
$risks = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ProbabilityScore()); // \OpenAPI\Client\Model\ProbabilityScore[]
$impacts = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImpactScore()); // \OpenAPI\Client\Model\ImpactScore[]
$page = 56; // int
$size = 56; // int
$skip = 56; // int
$sort_by = 'sort_by_example'; // string
$asc = True; // bool

try {
    $result = $apiInstance->risksList($tenant_id, $workspace_id, $data_processings, $enabled, $tags, $risks, $impacts, $page, $size, $skip, $sort_by, $asc);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RisksApi->risksList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |
 **data_processings** | [**string[]**](../Model/string.md)|  | [optional]
 **enabled** | **bool**|  | [optional]
 **tags** | [**int[]**](../Model/int.md)|  | [optional]
 **risks** | [**\OpenAPI\Client\Model\ProbabilityScore[]**](../Model/\OpenAPI\Client\Model\ProbabilityScore.md)|  | [optional]
 **impacts** | [**\OpenAPI\Client\Model\ImpactScore[]**](../Model/\OpenAPI\Client\Model\ImpactScore.md)|  | [optional]
 **page** | **int**|  | [optional]
 **size** | **int**|  | [optional]
 **skip** | **int**|  | [optional]
 **sort_by** | **string**|  | [optional]
 **asc** | **bool**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\RiskDto[]**](../Model/RiskDto.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `risksStats()`

```php
risksStats($tenant_id, $workspace_id): \OpenAPI\Client\Model\RiskStatDto
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RisksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->risksStats($tenant_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RisksApi->risksStats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\RiskStatDto**](../Model/RiskStatDto.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `risksUpdate()`

```php
risksUpdate($id, $tenant_id, $workspace_id, $risk_dto)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RisksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$risk_dto = new \OpenAPI\Client\Model\RiskDto(); // \OpenAPI\Client\Model\RiskDto

try {
    $apiInstance->risksUpdate($id, $tenant_id, $workspace_id, $risk_dto);
} catch (Exception $e) {
    echo 'Exception when calling RisksApi->risksUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |
 **risk_dto** | [**\OpenAPI\Client\Model\RiskDto**](../Model/RiskDto.md)|  | [optional]

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
