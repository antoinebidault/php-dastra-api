# OpenAPI\Client\CommentsApi

All URIs are relative to https://api.dastra.eu.

Method | HTTP request | Description
------------- | ------------- | -------------
[**commentsCount()**](CommentsApi.md#commentsCount) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/Comments/count | Count number of comments for display purposes
[**commentsCreate()**](CommentsApi.md#commentsCreate) | **POST** /v1/tenant/{tenantId}/ws/{workspaceId}/Comments | Create a new comment
[**commentsDelete()**](CommentsApi.md#commentsDelete) | **DELETE** /v1/tenant/{tenantId}/ws/{workspaceId}/Comments/{id} | Delete a comment by id
[**commentsFind()**](CommentsApi.md#commentsFind) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/Comments/{id} | Get a comment by id
[**commentsList()**](CommentsApi.md#commentsList) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/Comments | Get all comments by objectId and objectType
[**commentsUpdate()**](CommentsApi.md#commentsUpdate) | **PUT** /v1/tenant/{tenantId}/ws/{workspaceId}/Comments/{id} | Edit comment


## `commentsCount()`

```php
commentsCount($tenant_id, $workspace_id, $object_id, $object_type): int
```

Count number of comments for display purposes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$object_id = 'object_id_example'; // string
$object_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\CommentObjectType(); // \OpenAPI\Client\Model\CommentObjectType

try {
    $result = $apiInstance->commentsCount($tenant_id, $workspace_id, $object_id, $object_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentsApi->commentsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |
 **object_id** | **string**|  | [optional]
 **object_type** | [**\OpenAPI\Client\Model\CommentObjectType**](../Model/.md)|  | [optional]

### Return type

**int**

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `commentsCreate()`

```php
commentsCreate($tenant_id, $workspace_id, $comment_creation_dto): \OpenAPI\Client\Model\CommentCreationDto
```

Create a new comment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$comment_creation_dto = new \OpenAPI\Client\Model\CommentCreationDto(); // \OpenAPI\Client\Model\CommentCreationDto

try {
    $result = $apiInstance->commentsCreate($tenant_id, $workspace_id, $comment_creation_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentsApi->commentsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |
 **comment_creation_dto** | [**\OpenAPI\Client\Model\CommentCreationDto**](../Model/CommentCreationDto.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\CommentCreationDto**](../Model/CommentCreationDto.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/_*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `commentsDelete()`

```php
commentsDelete($id, $tenant_id, $workspace_id): \OpenAPI\Client\Model\CommentDto
```

Delete a comment by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->commentsDelete($id, $tenant_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentsApi->commentsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\CommentDto**](../Model/CommentDto.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `commentsFind()`

```php
commentsFind($id, $tenant_id, $workspace_id): \OpenAPI\Client\Model\CommentDto
```

Get a comment by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->commentsFind($id, $tenant_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentsApi->commentsFind: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\CommentDto**](../Model/CommentDto.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `commentsList()`

```php
commentsList($tenant_id, $workspace_id, $object_id, $object_type, $page, $size): \OpenAPI\Client\Model\CommentDto[]
```

Get all comments by objectId and objectType

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$object_id = 'object_id_example'; // string
$object_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\CommentObjectType(); // \OpenAPI\Client\Model\CommentObjectType
$page = 1; // int
$size = 20; // int

try {
    $result = $apiInstance->commentsList($tenant_id, $workspace_id, $object_id, $object_type, $page, $size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentsApi->commentsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |
 **object_id** | **string**|  | [optional]
 **object_type** | [**\OpenAPI\Client\Model\CommentObjectType**](../Model/.md)|  | [optional]
 **page** | **int**|  | [optional] [default to 1]
 **size** | **int**|  | [optional] [default to 20]

### Return type

[**\OpenAPI\Client\Model\CommentDto[]**](../Model/CommentDto.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `commentsUpdate()`

```php
commentsUpdate($id, $tenant_id, $workspace_id, $comment_dto)
```

Edit comment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$comment_dto = new \OpenAPI\Client\Model\CommentDto(); // \OpenAPI\Client\Model\CommentDto

try {
    $apiInstance->commentsUpdate($id, $tenant_id, $workspace_id, $comment_dto);
} catch (Exception $e) {
    echo 'Exception when calling CommentsApi->commentsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |
 **comment_dto** | [**\OpenAPI\Client\Model\CommentDto**](../Model/CommentDto.md)|  | [optional]

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
