# OpenAPI\Client\UserRequestMessagesApi

All URIs are relative to https://api.dastra.eu.

Method | HTTP request | Description
------------- | ------------- | -------------
[**userRequestMessagesCreate()**](UserRequestMessagesApi.md#userRequestMessagesCreate) | **POST** /v1/tenant/{tenantId}/ws/{workspaceId}/UserRequestMessages | 
[**userRequestMessagesDelete()**](UserRequestMessagesApi.md#userRequestMessagesDelete) | **DELETE** /v1/tenant/{tenantId}/ws/{workspaceId}/UserRequestMessages/{id} | Delete customer request
[**userRequestMessagesDeleteAttachment()**](UserRequestMessagesApi.md#userRequestMessagesDeleteAttachment) | **DELETE** /v1/tenant/{tenantId}/ws/{workspaceId}/UserRequestMessages/attachments/{id} | Remove attachment linked to the request
[**userRequestMessagesDownloadFile()**](UserRequestMessagesApi.md#userRequestMessagesDownloadFile) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/UserRequestMessages/download/{id} | Simple doc upload
[**userRequestMessagesFind()**](UserRequestMessagesApi.md#userRequestMessagesFind) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/UserRequestMessages/{id} | 
[**userRequestMessagesList()**](UserRequestMessagesApi.md#userRequestMessagesList) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/UserRequestMessages | Customer request
[**userRequestMessagesUpdate()**](UserRequestMessagesApi.md#userRequestMessagesUpdate) | **PUT** /v1/tenant/{tenantId}/ws/{workspaceId}/UserRequestMessages/{id} | Edit a user request


## `userRequestMessagesCreate()`

```php
userRequestMessagesCreate($tenant_id, $workspace_id, $message, $files, $user_request_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\UserRequestMessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$message = 'message_example'; // string
$files = "/path/to/file.txt"; // \SplFileObject[]
$user_request_id = 56; // int

try {
    $apiInstance->userRequestMessagesCreate($tenant_id, $workspace_id, $message, $files, $user_request_id);
} catch (Exception $e) {
    echo 'Exception when calling UserRequestMessagesApi->userRequestMessagesCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |
 **message** | **string**|  |
 **files** | **\SplFileObject[]**|  | [optional]
 **user_request_id** | **int**|  | [optional]

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userRequestMessagesDelete()`

```php
userRequestMessagesDelete($id, $tenant_id, $workspace_id)
```

Delete customer request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\UserRequestMessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $apiInstance->userRequestMessagesDelete($id, $tenant_id, $workspace_id);
} catch (Exception $e) {
    echo 'Exception when calling UserRequestMessagesApi->userRequestMessagesDelete: ', $e->getMessage(), PHP_EOL;
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

## `userRequestMessagesDeleteAttachment()`

```php
userRequestMessagesDeleteAttachment($id, $tenant_id, $workspace_id)
```

Remove attachment linked to the request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\UserRequestMessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $apiInstance->userRequestMessagesDeleteAttachment($id, $tenant_id, $workspace_id);
} catch (Exception $e) {
    echo 'Exception when calling UserRequestMessagesApi->userRequestMessagesDeleteAttachment: ', $e->getMessage(), PHP_EOL;
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

## `userRequestMessagesDownloadFile()`

```php
userRequestMessagesDownloadFile($id, $tenant_id, $workspace_id, $save_as)
```

Simple doc upload

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\UserRequestMessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$save_as = false; // bool

try {
    $apiInstance->userRequestMessagesDownloadFile($id, $tenant_id, $workspace_id, $save_as);
} catch (Exception $e) {
    echo 'Exception when calling UserRequestMessagesApi->userRequestMessagesDownloadFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |
 **save_as** | **bool**|  | [optional] [default to false]

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

## `userRequestMessagesFind()`

```php
userRequestMessagesFind($id, $tenant_id, $workspace_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\UserRequestMessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $apiInstance->userRequestMessagesFind($id, $tenant_id, $workspace_id);
} catch (Exception $e) {
    echo 'Exception when calling UserRequestMessagesApi->userRequestMessagesFind: ', $e->getMessage(), PHP_EOL;
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

## `userRequestMessagesList()`

```php
userRequestMessagesList($tenant_id, $workspace_id, $page, $size, $skip, $sort_by, $asc, $user_request_id, $start, $end, $user_id, $q)
```

Customer request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\UserRequestMessagesApi(
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
$user_request_id = 56; // int
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start date
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End date
$user_id = 56; // int | Specific userId (optional)
$q = 'q_example'; // string

try {
    $apiInstance->userRequestMessagesList($tenant_id, $workspace_id, $page, $size, $skip, $sort_by, $asc, $user_request_id, $start, $end, $user_id, $q);
} catch (Exception $e) {
    echo 'Exception when calling UserRequestMessagesApi->userRequestMessagesList: ', $e->getMessage(), PHP_EOL;
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
 **user_request_id** | **int**|  | [optional]
 **start** | **\DateTime**| Start date | [optional]
 **end** | **\DateTime**| End date | [optional]
 **user_id** | **int**| Specific userId (optional) | [optional]
 **q** | **string**|  | [optional]

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

## `userRequestMessagesUpdate()`

```php
userRequestMessagesUpdate($id, $tenant_id, $workspace_id, $message, $id2, $files, $date_update, $date_creation, $date_send, $date_viewed, $user_id, $user_family_name, $user_given_name, $user_color, $user_display_name, $user_company_name, $user_avatar_url, $user_tenant_id, $user_request_id, $attachments_lifetime_in_hours, $attachments)
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


$apiInstance = new OpenAPI\Client\Api\UserRequestMessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$message = 'message_example'; // string
$id2 = 'id_example'; // string
$files = "/path/to/file.txt"; // \SplFileObject[]
$date_update = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$date_creation = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$date_send = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$date_viewed = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$user_id = 56; // int
$user_family_name = 'user_family_name_example'; // string
$user_given_name = 'user_given_name_example'; // string
$user_color = 'user_color_example'; // string
$user_display_name = 'user_display_name_example'; // string
$user_company_name = 'user_company_name_example'; // string
$user_avatar_url = 'user_avatar_url_example'; // string
$user_tenant_id = 56; // int
$user_request_id = 56; // int
$attachments_lifetime_in_hours = 56; // int | Secured attachment lifetime for client  Default : 7 days
$attachments = new \OpenAPI\Client\Model\UserRequestAttachmentDto(); // \OpenAPI\Client\Model\UserRequestAttachmentDto[]

try {
    $apiInstance->userRequestMessagesUpdate($id, $tenant_id, $workspace_id, $message, $id2, $files, $date_update, $date_creation, $date_send, $date_viewed, $user_id, $user_family_name, $user_given_name, $user_color, $user_display_name, $user_company_name, $user_avatar_url, $user_tenant_id, $user_request_id, $attachments_lifetime_in_hours, $attachments);
} catch (Exception $e) {
    echo 'Exception when calling UserRequestMessagesApi->userRequestMessagesUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |
 **message** | **string**|  |
 **id2** | [**string**](../Model/string.md)|  | [optional]
 **files** | **\SplFileObject[]**|  | [optional]
 **date_update** | **\DateTime**|  | [optional]
 **date_creation** | **\DateTime**|  | [optional]
 **date_send** | **\DateTime**|  | [optional]
 **date_viewed** | **\DateTime**|  | [optional]
 **user_id** | **int**|  | [optional]
 **user_family_name** | **string**|  | [optional]
 **user_given_name** | **string**|  | [optional]
 **user_color** | **string**|  | [optional]
 **user_display_name** | **string**|  | [optional]
 **user_company_name** | **string**|  | [optional]
 **user_avatar_url** | **string**|  | [optional]
 **user_tenant_id** | **int**|  | [optional]
 **user_request_id** | **int**|  | [optional]
 **attachments_lifetime_in_hours** | **int**| Secured attachment lifetime for client  Default : 7 days | [optional]
 **attachments** | [**\OpenAPI\Client\Model\UserRequestAttachmentDto[]**](../Model/\OpenAPI\Client\Model\UserRequestAttachmentDto.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
