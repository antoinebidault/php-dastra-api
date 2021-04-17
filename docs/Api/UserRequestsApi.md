# OpenAPI\Client\UserRequestsApi

All URIs are relative to https://api.dastra.eu.

Method | HTTP request | Description
------------- | ------------- | -------------
[**userRequestsArchive()**](UserRequestsApi.md#userRequestsArchive) | **POST** /v1/tenant/{tenantId}/ws/{workspaceId}/UserRequests/archive/{id} | Archive an existing user request by id  It set the current state of the request to \&quot;Archived\&quot; state
[**userRequestsColumns()**](UserRequestsApi.md#userRequestsColumns) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/UserRequests/columns | 
[**userRequestsCreate()**](UserRequestsApi.md#userRequestsCreate) | **POST** /v1/tenant/{tenantId}/ws/{workspaceId}/UserRequests | 
[**userRequestsDelete()**](UserRequestsApi.md#userRequestsDelete) | **DELETE** /v1/tenant/{tenantId}/ws/{workspaceId}/UserRequests/{id} | It remove definitly
[**userRequestsExport()**](UserRequestsApi.md#userRequestsExport) | **POST** /v1/tenant/{tenantId}/ws/{workspaceId}/UserRequests/export/{format} | Export the records in any format
[**userRequestsFind()**](UserRequestsApi.md#userRequestsFind) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/UserRequests/{id} | Get an existing user request by id
[**userRequestsList()**](UserRequestsApi.md#userRequestsList) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/UserRequests | User request list
[**userRequestsPatch()**](UserRequestsApi.md#userRequestsPatch) | **PATCH** /v1/tenant/{tenantId}/ws/{workspaceId}/UserRequests/{id} | Patch an application
[**userRequestsRestore()**](UserRequestsApi.md#userRequestsRestore) | **POST** /v1/tenant/{tenantId}/ws/{workspaceId}/UserRequests/restore/{id} | 
[**userRequestsSetIdentityValidation()**](UserRequestsApi.md#userRequestsSetIdentityValidation) | **PUT** /v1/tenant/{tenantId}/ws/{workspaceId}/UserRequests/set-identity-validation/{id} | Switching the identity validation state
[**userRequestsStats()**](UserRequestsApi.md#userRequestsStats) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/UserRequests/stats | 
[**userRequestsUpdate()**](UserRequestsApi.md#userRequestsUpdate) | **PUT** /v1/tenant/{tenantId}/ws/{workspaceId}/UserRequests/{id} | Edit a user request
[**userRequestsUpdateWorkflow()**](UserRequestsApi.md#userRequestsUpdateWorkflow) | **POST** /v1/tenant/{tenantId}/ws/{workspaceId}/UserRequests/workflow | Switching the current state


## `userRequestsArchive()`

```php
userRequestsArchive($id, $tenant_id, $workspace_id)
```

Archive an existing user request by id  It set the current state of the request to \"Archived\" state

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\UserRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $apiInstance->userRequestsArchive($id, $tenant_id, $workspace_id);
} catch (Exception $e) {
    echo 'Exception when calling UserRequestsApi->userRequestsArchive: ', $e->getMessage(), PHP_EOL;
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

## `userRequestsColumns()`

```php
userRequestsColumns($tenant_id, $workspace_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\UserRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $apiInstance->userRequestsColumns($tenant_id, $workspace_id);
} catch (Exception $e) {
    echo 'Exception when calling UserRequestsApi->userRequestsColumns: ', $e->getMessage(), PHP_EOL;
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

## `userRequestsCreate()`

```php
userRequestsCreate($tenant_id, $workspace_id, $user_request_dto)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\UserRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$user_request_dto = new \OpenAPI\Client\Model\UserRequestDto(); // \OpenAPI\Client\Model\UserRequestDto

try {
    $apiInstance->userRequestsCreate($tenant_id, $workspace_id, $user_request_dto);
} catch (Exception $e) {
    echo 'Exception when calling UserRequestsApi->userRequestsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |
 **user_request_dto** | [**\OpenAPI\Client\Model\UserRequestDto**](../Model/UserRequestDto.md)|  | [optional]

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

## `userRequestsDelete()`

```php
userRequestsDelete($id, $tenant_id, $workspace_id)
```

It remove definitly

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\UserRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $apiInstance->userRequestsDelete($id, $tenant_id, $workspace_id);
} catch (Exception $e) {
    echo 'Exception when calling UserRequestsApi->userRequestsDelete: ', $e->getMessage(), PHP_EOL;
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

## `userRequestsExport()`

```php
userRequestsExport($format, $tenant_id, $workspace_id, $user_request_query)
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


$apiInstance = new OpenAPI\Client\Api\UserRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ExportFormat(); // \OpenAPI\Client\Model\ExportFormat
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$user_request_query = new \OpenAPI\Client\Model\UserRequestQuery(); // \OpenAPI\Client\Model\UserRequestQuery

try {
    $apiInstance->userRequestsExport($format, $tenant_id, $workspace_id, $user_request_query);
} catch (Exception $e) {
    echo 'Exception when calling UserRequestsApi->userRequestsExport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **format** | [**\OpenAPI\Client\Model\ExportFormat**](../Model/.md)|  |
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |
 **user_request_query** | [**\OpenAPI\Client\Model\UserRequestQuery**](../Model/UserRequestQuery.md)|  | [optional]

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

## `userRequestsFind()`

```php
userRequestsFind($id, $tenant_id, $workspace_id): \OpenAPI\Client\Model\UserRequestDto
```

Get an existing user request by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\UserRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | User request id (digits)
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->userRequestsFind($id, $tenant_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserRequestsApi->userRequestsFind: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| User request id (digits) |
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\UserRequestDto**](../Model/UserRequestDto.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userRequestsList()`

```php
userRequestsList($tenant_id, $workspace_id, $overtaking, $archived, $q, $widget_id, $states, $purposes, $area_id, $users, $ids, $tags, $page, $size, $skip, $sort_by, $asc)
```

User request list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\UserRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$overtaking = True; // bool
$archived = True; // bool
$q = 'q_example'; // string
$widget_id = 56; // int
$states = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\UserRequestState()); // \OpenAPI\Client\Model\UserRequestState[]
$purposes = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\PurposeType()); // \OpenAPI\Client\Model\PurposeType[]
$area_id = 56; // int
$users = array(56); // int[]
$ids = array(56); // int[]
$tags = array(56); // int[]
$page = 56; // int
$size = 56; // int
$skip = 56; // int
$sort_by = 'sort_by_example'; // string
$asc = True; // bool

try {
    $apiInstance->userRequestsList($tenant_id, $workspace_id, $overtaking, $archived, $q, $widget_id, $states, $purposes, $area_id, $users, $ids, $tags, $page, $size, $skip, $sort_by, $asc);
} catch (Exception $e) {
    echo 'Exception when calling UserRequestsApi->userRequestsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |
 **overtaking** | **bool**|  | [optional]
 **archived** | **bool**|  | [optional]
 **q** | **string**|  | [optional]
 **widget_id** | **int**|  | [optional]
 **states** | [**\OpenAPI\Client\Model\UserRequestState[]**](../Model/\OpenAPI\Client\Model\UserRequestState.md)|  | [optional]
 **purposes** | [**\OpenAPI\Client\Model\PurposeType[]**](../Model/\OpenAPI\Client\Model\PurposeType.md)|  | [optional]
 **area_id** | **int**|  | [optional]
 **users** | [**int[]**](../Model/int.md)|  | [optional]
 **ids** | [**int[]**](../Model/int.md)|  | [optional]
 **tags** | [**int[]**](../Model/int.md)|  | [optional]
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

## `userRequestsPatch()`

```php
userRequestsPatch($id, $tenant_id, $workspace_id, $operation)
```

Patch an application

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\UserRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$operation = array(new \OpenAPI\Client\Model\Operation()); // \OpenAPI\Client\Model\Operation[]

try {
    $apiInstance->userRequestsPatch($id, $tenant_id, $workspace_id, $operation);
} catch (Exception $e) {
    echo 'Exception when calling UserRequestsApi->userRequestsPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
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

## `userRequestsRestore()`

```php
userRequestsRestore($id, $tenant_id, $workspace_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\UserRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $apiInstance->userRequestsRestore($id, $tenant_id, $workspace_id);
} catch (Exception $e) {
    echo 'Exception when calling UserRequestsApi->userRequestsRestore: ', $e->getMessage(), PHP_EOL;
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

## `userRequestsSetIdentityValidation()`

```php
userRequestsSetIdentityValidation($id, $tenant_id, $workspace_id, $set_identity_validation_dto)
```

Switching the identity validation state

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\UserRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$set_identity_validation_dto = new \OpenAPI\Client\Model\SetIdentityValidationDto(); // \OpenAPI\Client\Model\SetIdentityValidationDto

try {
    $apiInstance->userRequestsSetIdentityValidation($id, $tenant_id, $workspace_id, $set_identity_validation_dto);
} catch (Exception $e) {
    echo 'Exception when calling UserRequestsApi->userRequestsSetIdentityValidation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |
 **set_identity_validation_dto** | [**\OpenAPI\Client\Model\SetIdentityValidationDto**](../Model/SetIdentityValidationDto.md)|  | [optional]

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

## `userRequestsStats()`

```php
userRequestsStats($tenant_id, $workspace_id, $area_id): \OpenAPI\Client\Model\UserRequestStatsDto
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\UserRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$area_id = 56; // int

try {
    $result = $apiInstance->userRequestsStats($tenant_id, $workspace_id, $area_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserRequestsApi->userRequestsStats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |
 **area_id** | **int**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\UserRequestStatsDto**](../Model/UserRequestStatsDto.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userRequestsUpdate()`

```php
userRequestsUpdate($id, $tenant_id, $workspace_id, $user_request_dto): \OpenAPI\Client\Model\UserRequestDto
```

Edit a user request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\UserRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$user_request_dto = new \OpenAPI\Client\Model\UserRequestDto(); // \OpenAPI\Client\Model\UserRequestDto

try {
    $result = $apiInstance->userRequestsUpdate($id, $tenant_id, $workspace_id, $user_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserRequestsApi->userRequestsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |
 **user_request_dto** | [**\OpenAPI\Client\Model\UserRequestDto**](../Model/UserRequestDto.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\UserRequestDto**](../Model/UserRequestDto.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/_*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userRequestsUpdateWorkflow()`

```php
userRequestsUpdateWorkflow($tenant_id, $workspace_id, $int32_workflow_update_dto)
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


$apiInstance = new OpenAPI\Client\Api\UserRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$int32_workflow_update_dto = new \OpenAPI\Client\Model\Int32WorkflowUpdateDto(); // \OpenAPI\Client\Model\Int32WorkflowUpdateDto

try {
    $apiInstance->userRequestsUpdateWorkflow($tenant_id, $workspace_id, $int32_workflow_update_dto);
} catch (Exception $e) {
    echo 'Exception when calling UserRequestsApi->userRequestsUpdateWorkflow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |
 **int32_workflow_update_dto** | [**\OpenAPI\Client\Model\Int32WorkflowUpdateDto**](../Model/Int32WorkflowUpdateDto.md)|  | [optional]

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
