# OpenAPI\Client\ProjectsApi

All URIs are relative to https://api.dastra.eu.

Method | HTTP request | Description
------------- | ------------- | -------------
[**projectsArchiveProject()**](ProjectsApi.md#projectsArchiveProject) | **POST** /v1/tenant/{tenantId}/ws/{workspaceId}/Projects/archive/{id} | 
[**projectsCreate()**](ProjectsApi.md#projectsCreate) | **POST** /v1/tenant/{tenantId}/ws/{workspaceId}/Projects | 
[**projectsFind()**](ProjectsApi.md#projectsFind) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/Projects/{id} | 
[**projectsList()**](ProjectsApi.md#projectsList) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/Projects | 
[**projectsUpdate()**](ProjectsApi.md#projectsUpdate) | **PUT** /v1/tenant/{tenantId}/ws/{workspaceId}/Projects/{id} | 


## `projectsArchiveProject()`

```php
projectsArchiveProject($id, $tenant_id, $workspace_id): \OpenAPI\Client\Model\ProjectDto
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->projectsArchiveProject($id, $tenant_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsArchiveProject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\ProjectDto**](../Model/ProjectDto.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectsCreate()`

```php
projectsCreate($tenant_id, $workspace_id, $project_dto): \OpenAPI\Client\Model\ProjectDto
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$project_dto = new \OpenAPI\Client\Model\ProjectDto(); // \OpenAPI\Client\Model\ProjectDto

try {
    $result = $apiInstance->projectsCreate($tenant_id, $workspace_id, $project_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |
 **project_dto** | [**\OpenAPI\Client\Model\ProjectDto**](../Model/ProjectDto.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\ProjectDto**](../Model/ProjectDto.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/_*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectsFind()`

```php
projectsFind($id, $tenant_id, $workspace_id): \OpenAPI\Client\Model\ProjectDto
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->projectsFind($id, $tenant_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsFind: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\ProjectDto**](../Model/ProjectDto.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectsList()`

```php
projectsList($tenant_id, $workspace_id, $archived): \OpenAPI\Client\Model\ProjectDto[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$archived = false; // bool

try {
    $result = $apiInstance->projectsList($tenant_id, $workspace_id, $archived);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |
 **archived** | **bool**|  | [optional] [default to false]

### Return type

[**\OpenAPI\Client\Model\ProjectDto[]**](../Model/ProjectDto.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectsUpdate()`

```php
projectsUpdate($id, $tenant_id, $workspace_id, $project_dto)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$project_dto = new \OpenAPI\Client\Model\ProjectDto(); // \OpenAPI\Client\Model\ProjectDto

try {
    $apiInstance->projectsUpdate($id, $tenant_id, $workspace_id, $project_dto);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |
 **project_dto** | [**\OpenAPI\Client\Model\ProjectDto**](../Model/ProjectDto.md)|  | [optional]

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
