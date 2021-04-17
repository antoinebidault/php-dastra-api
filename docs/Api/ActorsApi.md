# OpenAPI\Client\ActorsApi

All URIs are relative to https://api.dastra.eu.

Method | HTTP request | Description
------------- | ------------- | -------------
[**actorsColumns()**](ActorsApi.md#actorsColumns) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/Actors/columns | 
[**actorsCreate()**](ActorsApi.md#actorsCreate) | **POST** /v1/tenant/{tenantId}/ws/{workspaceId}/Actors | Create a new actor
[**actorsDelete()**](ActorsApi.md#actorsDelete) | **DELETE** /v1/tenant/{tenantId}/ws/{workspaceId}/Actors/{id} | Remove the actor with his id
[**actorsFind()**](ActorsApi.md#actorsFind) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/Actors/{id} | Get a single actor with his id
[**actorsList()**](ActorsApi.md#actorsList) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/Actors | Get all actors (User inserted in the record of processing activities)
[**actorsUpdate()**](ActorsApi.md#actorsUpdate) | **PUT** /v1/tenant/{tenantId}/ws/{workspaceId}/Actors/{id} | Edit the actor&#39;s properties


## `actorsColumns()`

```php
actorsColumns($tenant_id, $workspace_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ActorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $apiInstance->actorsColumns($tenant_id, $workspace_id);
} catch (Exception $e) {
    echo 'Exception when calling ActorsApi->actorsColumns: ', $e->getMessage(), PHP_EOL;
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

## `actorsCreate()`

```php
actorsCreate($tenant_id, $workspace_id, $actor_dto): \OpenAPI\Client\Model\ActorDto
```

Create a new actor

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ActorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$actor_dto = new \OpenAPI\Client\Model\ActorDto(); // \OpenAPI\Client\Model\ActorDto

try {
    $result = $apiInstance->actorsCreate($tenant_id, $workspace_id, $actor_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActorsApi->actorsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |
 **actor_dto** | [**\OpenAPI\Client\Model\ActorDto**](../Model/ActorDto.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\ActorDto**](../Model/ActorDto.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/_*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `actorsDelete()`

```php
actorsDelete($id, $tenant_id, $workspace_id)
```

Remove the actor with his id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ActorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $apiInstance->actorsDelete($id, $tenant_id, $workspace_id);
} catch (Exception $e) {
    echo 'Exception when calling ActorsApi->actorsDelete: ', $e->getMessage(), PHP_EOL;
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

## `actorsFind()`

```php
actorsFind($id, $tenant_id, $workspace_id): \OpenAPI\Client\Model\ActorDto
```

Get a single actor with his id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ActorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->actorsFind($id, $tenant_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActorsApi->actorsFind: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\ActorDto**](../Model/ActorDto.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `actorsList()`

```php
actorsList($tenant_id, $workspace_id, $page, $size, $skip, $sort_by, $asc, $include_score, $q, $tags, $referenced_as, $types): \OpenAPI\Client\Model\ActorDtoPagedList
```

Get all actors (User inserted in the record of processing activities)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ActorsApi(
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
$include_score = True; // bool
$q = 'q_example'; // string
$tags = array(56); // int[]
$referenced_as = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ActorReferencedAs(); // \OpenAPI\Client\Model\ActorReferencedAs
$types = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ActorType()); // \OpenAPI\Client\Model\ActorType[]

try {
    $result = $apiInstance->actorsList($tenant_id, $workspace_id, $page, $size, $skip, $sort_by, $asc, $include_score, $q, $tags, $referenced_as, $types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActorsApi->actorsList: ', $e->getMessage(), PHP_EOL;
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
 **include_score** | **bool**|  | [optional]
 **q** | **string**|  | [optional]
 **tags** | [**int[]**](../Model/int.md)|  | [optional]
 **referenced_as** | [**\OpenAPI\Client\Model\ActorReferencedAs**](../Model/.md)|  | [optional]
 **types** | [**\OpenAPI\Client\Model\ActorType[]**](../Model/\OpenAPI\Client\Model\ActorType.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\ActorDtoPagedList**](../Model/ActorDtoPagedList.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `actorsUpdate()`

```php
actorsUpdate($id, $tenant_id, $workspace_id, $actor_dto)
```

Edit the actor's properties

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ActorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$actor_dto = new \OpenAPI\Client\Model\ActorDto(); // \OpenAPI\Client\Model\ActorDto

try {
    $apiInstance->actorsUpdate($id, $tenant_id, $workspace_id, $actor_dto);
} catch (Exception $e) {
    echo 'Exception when calling ActorsApi->actorsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |
 **actor_dto** | [**\OpenAPI\Client\Model\ActorDto**](../Model/ActorDto.md)|  | [optional]

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
