# OpenAPI\Client\TasksApi

All URIs are relative to https://api.dastra.eu.

Method | HTTP request | Description
------------- | ------------- | -------------
[**tasksArchive()**](TasksApi.md#tasksArchive) | **POST** /v1/tenant/{tenantId}/ws/{workspaceId}/Tasks/{id}/archive | 
[**tasksBurnDownChart()**](TasksApi.md#tasksBurnDownChart) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/Tasks/burn-down-chart | 
[**tasksColumns()**](TasksApi.md#tasksColumns) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/Tasks/columns | Columns available for table display
[**tasksCreate()**](TasksApi.md#tasksCreate) | **POST** /v1/tenant/{tenantId}/ws/{workspaceId}/Tasks | Task creation
[**tasksCumulativeFlowChart()**](TasksApi.md#tasksCumulativeFlowChart) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/Tasks/cumulative-flow-chart | 
[**tasksDelete()**](TasksApi.md#tasksDelete) | **DELETE** /v1/tenant/{tenantId}/ws/{workspaceId}/Tasks/{id} | 
[**tasksExport()**](TasksApi.md#tasksExport) | **POST** /v1/tenant/{tenantId}/ws/{workspaceId}/Tasks/export/{format} | Export the records in any format
[**tasksFind()**](TasksApi.md#tasksFind) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/Tasks/{id} | Get a single task by id
[**tasksList()**](TasksApi.md#tasksList) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/Tasks | 
[**tasksListGrouped()**](TasksApi.md#tasksListGrouped) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/Tasks/grouped | Get tasks grouped by workflow steps
[**tasksPatch()**](TasksApi.md#tasksPatch) | **PATCH** /v1/tenant/{tenantId}/ws/{workspaceId}/Tasks/{id} | 
[**tasksReporting()**](TasksApi.md#tasksReporting) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/Tasks/task-reporting | 
[**tasksSortOrder()**](TasksApi.md#tasksSortOrder) | **POST** /v1/tenant/{tenantId}/ws/{workspaceId}/Tasks/sortOrder | Switching the current state of the element  Using this system   https://stackoverflow.com/questions/398425/maintaining-sort-order-of-database-table-rows
[**tasksStats()**](TasksApi.md#tasksStats) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/Tasks/stats | 
[**tasksUpdate()**](TasksApi.md#tasksUpdate) | **PUT** /v1/tenant/{tenantId}/ws/{workspaceId}/Tasks/{id} | Task update
[**tasksUpdateWorkflow()**](TasksApi.md#tasksUpdateWorkflow) | **POST** /v1/tenant/{tenantId}/ws/{workspaceId}/Tasks/workflow | Switching the current state of the element
[**tasksVelocityChart()**](TasksApi.md#tasksVelocityChart) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/Tasks/velocity-chart | 
[**tasksWorkflowStats()**](TasksApi.md#tasksWorkflowStats) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/Tasks/workflow-stats | Get the workflow stats


## `tasksArchive()`

```php
tasksArchive($id, $tenant_id, $workspace_id, $archive_payload)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$archive_payload = new \OpenAPI\Client\Model\ArchivePayload(); // \OpenAPI\Client\Model\ArchivePayload

try {
    $apiInstance->tasksArchive($id, $tenant_id, $workspace_id, $archive_payload);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->tasksArchive: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |
 **archive_payload** | [**\OpenAPI\Client\Model\ArchivePayload**](../Model/ArchivePayload.md)|  | [optional]

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

## `tasksBurnDownChart()`

```php
tasksBurnDownChart($tenant_id, $workspace_id, $project_id, $start, $end, $iteration_id, $area_id, $object_id, $object_type): \OpenAPI\Client\Model\TaskStatsDto
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$project_id = 'project_id_example'; // string
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$iteration_id = 'iteration_id_example'; // string
$area_id = 56; // int
$object_id = 'object_id_example'; // string
$object_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\TaskObjectType(); // \OpenAPI\Client\Model\TaskObjectType

try {
    $result = $apiInstance->tasksBurnDownChart($tenant_id, $workspace_id, $project_id, $start, $end, $iteration_id, $area_id, $object_id, $object_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->tasksBurnDownChart: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |
 **project_id** | [**string**](../Model/.md)|  | [optional]
 **start** | **\DateTime**|  | [optional]
 **end** | **\DateTime**|  | [optional]
 **iteration_id** | [**string**](../Model/.md)|  | [optional]
 **area_id** | **int**|  | [optional]
 **object_id** | **string**|  | [optional]
 **object_type** | [**\OpenAPI\Client\Model\TaskObjectType**](../Model/.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\TaskStatsDto**](../Model/TaskStatsDto.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tasksColumns()`

```php
tasksColumns($tenant_id, $workspace_id)
```

Columns available for table display

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $apiInstance->tasksColumns($tenant_id, $workspace_id);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->tasksColumns: ', $e->getMessage(), PHP_EOL;
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

## `tasksCreate()`

```php
tasksCreate($tenant_id, $workspace_id, $task_dto)
```

Task creation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$task_dto = new \OpenAPI\Client\Model\TaskDto(); // \OpenAPI\Client\Model\TaskDto

try {
    $apiInstance->tasksCreate($tenant_id, $workspace_id, $task_dto);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->tasksCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |
 **task_dto** | [**\OpenAPI\Client\Model\TaskDto**](../Model/TaskDto.md)|  | [optional]

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

## `tasksCumulativeFlowChart()`

```php
tasksCumulativeFlowChart($tenant_id, $workspace_id, $project_id, $area_id, $nb_days): \OpenAPI\Client\Model\TaskStatsDto
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$project_id = 'project_id_example'; // string
$area_id = 56; // int
$nb_days = 180; // int

try {
    $result = $apiInstance->tasksCumulativeFlowChart($tenant_id, $workspace_id, $project_id, $area_id, $nb_days);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->tasksCumulativeFlowChart: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |
 **project_id** | [**string**](../Model/.md)|  | [optional]
 **area_id** | **int**|  | [optional]
 **nb_days** | **int**|  | [optional] [default to 180]

### Return type

[**\OpenAPI\Client\Model\TaskStatsDto**](../Model/TaskStatsDto.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tasksDelete()`

```php
tasksDelete($id, $tenant_id, $workspace_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $apiInstance->tasksDelete($id, $tenant_id, $workspace_id);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->tasksDelete: ', $e->getMessage(), PHP_EOL;
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

## `tasksExport()`

```php
tasksExport($format, $tenant_id, $workspace_id, $task_query)
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


$apiInstance = new OpenAPI\Client\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ExportFormat(); // \OpenAPI\Client\Model\ExportFormat
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$task_query = new \OpenAPI\Client\Model\TaskQuery(); // \OpenAPI\Client\Model\TaskQuery

try {
    $apiInstance->tasksExport($format, $tenant_id, $workspace_id, $task_query);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->tasksExport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **format** | [**\OpenAPI\Client\Model\ExportFormat**](../Model/.md)|  |
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |
 **task_query** | [**\OpenAPI\Client\Model\TaskQuery**](../Model/TaskQuery.md)|  | [optional]

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

## `tasksFind()`

```php
tasksFind($id, $tenant_id, $workspace_id)
```

Get a single task by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $apiInstance->tasksFind($id, $tenant_id, $workspace_id);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->tasksFind: ', $e->getMessage(), PHP_EOL;
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

## `tasksList()`

```php
tasksList($tenant_id, $workspace_id, $tags, $users, $object_types, $object_ids, $prios, $states, $workflows, $area_id, $project_id, $iteration, $q, $overtaking, $start, $end, $archived, $exclude_done, $include_children, $parent_id, $page, $size, $skip, $sort_by, $asc)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$tags = array(56); // int[]
$users = array(56); // int[]
$object_types = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\TaskObjectType()); // \OpenAPI\Client\Model\TaskObjectType[]
$object_ids = array('object_ids_example'); // string[]
$prios = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\Priority()); // \OpenAPI\Client\Model\Priority[]
$states = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\TaskState()); // \OpenAPI\Client\Model\TaskState[]
$workflows = array(56); // int[]
$area_id = 56; // int
$project_id = 'project_id_example'; // string
$iteration = 'iteration_example'; // string
$q = 'q_example'; // string
$overtaking = True; // bool
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$archived = True; // bool
$exclude_done = True; // bool
$include_children = True; // bool
$parent_id = 56; // int
$page = 56; // int
$size = 56; // int
$skip = 56; // int
$sort_by = 'sort_by_example'; // string
$asc = True; // bool

try {
    $apiInstance->tasksList($tenant_id, $workspace_id, $tags, $users, $object_types, $object_ids, $prios, $states, $workflows, $area_id, $project_id, $iteration, $q, $overtaking, $start, $end, $archived, $exclude_done, $include_children, $parent_id, $page, $size, $skip, $sort_by, $asc);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->tasksList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |
 **tags** | [**int[]**](../Model/int.md)|  | [optional]
 **users** | [**int[]**](../Model/int.md)|  | [optional]
 **object_types** | [**\OpenAPI\Client\Model\TaskObjectType[]**](../Model/\OpenAPI\Client\Model\TaskObjectType.md)|  | [optional]
 **object_ids** | [**string[]**](../Model/string.md)|  | [optional]
 **prios** | [**\OpenAPI\Client\Model\Priority[]**](../Model/\OpenAPI\Client\Model\Priority.md)|  | [optional]
 **states** | [**\OpenAPI\Client\Model\TaskState[]**](../Model/\OpenAPI\Client\Model\TaskState.md)|  | [optional]
 **workflows** | [**int[]**](../Model/int.md)|  | [optional]
 **area_id** | **int**|  | [optional]
 **project_id** | **string**|  | [optional]
 **iteration** | [**string**](../Model/.md)|  | [optional]
 **q** | **string**|  | [optional]
 **overtaking** | **bool**|  | [optional]
 **start** | **\DateTime**|  | [optional]
 **end** | **\DateTime**|  | [optional]
 **archived** | **bool**|  | [optional]
 **exclude_done** | **bool**|  | [optional]
 **include_children** | **bool**|  | [optional]
 **parent_id** | **int**|  | [optional]
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

## `tasksListGrouped()`

```php
tasksListGrouped($tenant_id, $workspace_id, $tags, $users, $object_types, $object_ids, $prios, $states, $workflows, $area_id, $project_id, $iteration, $q, $overtaking, $start, $end, $archived, $exclude_done, $include_children, $parent_id, $page, $size, $skip, $sort_by, $asc)
```

Get tasks grouped by workflow steps

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$tags = array(56); // int[]
$users = array(56); // int[]
$object_types = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\TaskObjectType()); // \OpenAPI\Client\Model\TaskObjectType[]
$object_ids = array('object_ids_example'); // string[]
$prios = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\Priority()); // \OpenAPI\Client\Model\Priority[]
$states = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\TaskState()); // \OpenAPI\Client\Model\TaskState[]
$workflows = array(56); // int[]
$area_id = 56; // int
$project_id = 'project_id_example'; // string
$iteration = 'iteration_example'; // string
$q = 'q_example'; // string
$overtaking = True; // bool
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$archived = True; // bool
$exclude_done = True; // bool
$include_children = True; // bool
$parent_id = 56; // int
$page = 56; // int
$size = 56; // int
$skip = 56; // int
$sort_by = 'sort_by_example'; // string
$asc = True; // bool

try {
    $apiInstance->tasksListGrouped($tenant_id, $workspace_id, $tags, $users, $object_types, $object_ids, $prios, $states, $workflows, $area_id, $project_id, $iteration, $q, $overtaking, $start, $end, $archived, $exclude_done, $include_children, $parent_id, $page, $size, $skip, $sort_by, $asc);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->tasksListGrouped: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |
 **tags** | [**int[]**](../Model/int.md)|  | [optional]
 **users** | [**int[]**](../Model/int.md)|  | [optional]
 **object_types** | [**\OpenAPI\Client\Model\TaskObjectType[]**](../Model/\OpenAPI\Client\Model\TaskObjectType.md)|  | [optional]
 **object_ids** | [**string[]**](../Model/string.md)|  | [optional]
 **prios** | [**\OpenAPI\Client\Model\Priority[]**](../Model/\OpenAPI\Client\Model\Priority.md)|  | [optional]
 **states** | [**\OpenAPI\Client\Model\TaskState[]**](../Model/\OpenAPI\Client\Model\TaskState.md)|  | [optional]
 **workflows** | [**int[]**](../Model/int.md)|  | [optional]
 **area_id** | **int**|  | [optional]
 **project_id** | **string**|  | [optional]
 **iteration** | [**string**](../Model/.md)|  | [optional]
 **q** | **string**|  | [optional]
 **overtaking** | **bool**|  | [optional]
 **start** | **\DateTime**|  | [optional]
 **end** | **\DateTime**|  | [optional]
 **archived** | **bool**|  | [optional]
 **exclude_done** | **bool**|  | [optional]
 **include_children** | **bool**|  | [optional]
 **parent_id** | **int**|  | [optional]
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

## `tasksPatch()`

```php
tasksPatch($id, $tenant_id, $workspace_id, $operation)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\TasksApi(
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
    $apiInstance->tasksPatch($id, $tenant_id, $workspace_id, $operation);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->tasksPatch: ', $e->getMessage(), PHP_EOL;
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

## `tasksReporting()`

```php
tasksReporting($tenant_id, $workspace_id, $project_id, $iteration_id, $area_id, $object_id, $object_type): \OpenAPI\Client\Model\TaskStatsDto
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$project_id = 'project_id_example'; // string
$iteration_id = 'iteration_id_example'; // string
$area_id = 56; // int
$object_id = 'object_id_example'; // string
$object_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\TaskObjectType(); // \OpenAPI\Client\Model\TaskObjectType

try {
    $result = $apiInstance->tasksReporting($tenant_id, $workspace_id, $project_id, $iteration_id, $area_id, $object_id, $object_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->tasksReporting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |
 **project_id** | [**string**](../Model/.md)|  | [optional]
 **iteration_id** | [**string**](../Model/.md)|  | [optional]
 **area_id** | **int**|  | [optional]
 **object_id** | **string**|  | [optional]
 **object_type** | [**\OpenAPI\Client\Model\TaskObjectType**](../Model/.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\TaskStatsDto**](../Model/TaskStatsDto.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tasksSortOrder()`

```php
tasksSortOrder($tenant_id, $workspace_id, $int32_sort_query_dto)
```

Switching the current state of the element  Using this system   https://stackoverflow.com/questions/398425/maintaining-sort-order-of-database-table-rows

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$int32_sort_query_dto = new \OpenAPI\Client\Model\Int32SortQueryDto(); // \OpenAPI\Client\Model\Int32SortQueryDto

try {
    $apiInstance->tasksSortOrder($tenant_id, $workspace_id, $int32_sort_query_dto);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->tasksSortOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |
 **int32_sort_query_dto** | [**\OpenAPI\Client\Model\Int32SortQueryDto**](../Model/Int32SortQueryDto.md)|  | [optional]

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

## `tasksStats()`

```php
tasksStats($tenant_id, $workspace_id, $area_id): \OpenAPI\Client\Model\TaskStatsDto
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$area_id = 56; // int

try {
    $result = $apiInstance->tasksStats($tenant_id, $workspace_id, $area_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->tasksStats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |
 **area_id** | **int**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\TaskStatsDto**](../Model/TaskStatsDto.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tasksUpdate()`

```php
tasksUpdate($id, $tenant_id, $workspace_id, $task_dto)
```

Task update

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$task_dto = new \OpenAPI\Client\Model\TaskDto(); // \OpenAPI\Client\Model\TaskDto

try {
    $apiInstance->tasksUpdate($id, $tenant_id, $workspace_id, $task_dto);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->tasksUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |
 **task_dto** | [**\OpenAPI\Client\Model\TaskDto**](../Model/TaskDto.md)|  | [optional]

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

## `tasksUpdateWorkflow()`

```php
tasksUpdateWorkflow($tenant_id, $workspace_id, $int32_workflow_update_dto)
```

Switching the current state of the element

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$int32_workflow_update_dto = new \OpenAPI\Client\Model\Int32WorkflowUpdateDto(); // \OpenAPI\Client\Model\Int32WorkflowUpdateDto

try {
    $apiInstance->tasksUpdateWorkflow($tenant_id, $workspace_id, $int32_workflow_update_dto);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->tasksUpdateWorkflow: ', $e->getMessage(), PHP_EOL;
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

## `tasksVelocityChart()`

```php
tasksVelocityChart($tenant_id, $workspace_id, $project_id, $area_id, $nb_iterations): \OpenAPI\Client\Model\TaskStatsDto
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$project_id = 'project_id_example'; // string
$area_id = 56; // int
$nb_iterations = 10; // int

try {
    $result = $apiInstance->tasksVelocityChart($tenant_id, $workspace_id, $project_id, $area_id, $nb_iterations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->tasksVelocityChart: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |
 **project_id** | [**string**](../Model/.md)|  | [optional]
 **area_id** | **int**|  | [optional]
 **nb_iterations** | **int**|  | [optional] [default to 10]

### Return type

[**\OpenAPI\Client\Model\TaskStatsDto**](../Model/TaskStatsDto.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tasksWorkflowStats()`

```php
tasksWorkflowStats($tenant_id, $workspace_id, $task_query)
```

Get the workflow stats

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$task_query = new \OpenAPI\Client\Model\TaskQuery(); // \OpenAPI\Client\Model\TaskQuery

try {
    $apiInstance->tasksWorkflowStats($tenant_id, $workspace_id, $task_query);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->tasksWorkflowStats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **string**|  |
 **workspace_id** | **string**|  |
 **task_query** | [**\OpenAPI\Client\Model\TaskQuery**](../Model/TaskQuery.md)|  | [optional]

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
