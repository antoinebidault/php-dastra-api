# # TaskDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional]
**archived** | **bool** |  | [optional]
**project** | [**\OpenAPI\Client\Model\ProjectDto**](ProjectDto.md) |  | [optional]
**iteration** | [**\OpenAPI\Client\Model\IterationDto**](IterationDto.md) |  | [optional]
**label** | **string** | Action label |
**description_html** | **string** | Description | [optional]
**description_plain_text** | **string** |  | [optional] [readonly]
**order** | **int** |  | [optional]
**object_id** | **string** | Object id | [optional]
**object_type** | [**\OpenAPI\Client\Model\TaskObjectType**](TaskObjectType.md) |  | [optional]
**priority** | [**\OpenAPI\Client\Model\Priority**](Priority.md) |  | [optional]
**state** | [**\OpenAPI\Client\Model\TaskState**](TaskState.md) |  | [optional]
**work_flow_step** | [**\OpenAPI\Client\Model\WorkFlowStepDto**](WorkFlowStepDto.md) |  | [optional]
**deadline** | [**\DateTime**](\DateTime.md) | Dead line | [optional]
**attachments** | [**\OpenAPI\Client\Model\AttachmentDto[]**](AttachmentDto.md) | Associated tags with colors | [optional]
**tags** | [**\OpenAPI\Client\Model\TagDto[]**](TagDto.md) | Associated tags with colors | [optional]
**owner** | [**\OpenAPI\Client\Model\UserLightDto**](UserLightDto.md) |  | [optional]
**assigned_to_user** | [**\OpenAPI\Client\Model\UserLightDto**](UserLightDto.md) |  | [optional]
**area** | [**\OpenAPI\Client\Model\AreaDto**](AreaDto.md) |  | [optional]
**area_id** | **int** |  | [optional]
**workspace_id** | **int** |  | [optional]
**date_closed** | [**\DateTime**](\DateTime.md) |  | [optional]
**date_activated** | [**\DateTime**](\DateTime.md) |  | [optional]
**date_creation** | [**\DateTime**](\DateTime.md) |  | [optional]
**date_update** | [**\DateTime**](\DateTime.md) |  | [optional]
**remaining_days** | **int** |  | [optional] [readonly]
**closing_time** | **int** | Action label | [optional] [readonly]
**additional_datas** | **array<string,mixed>** |  | [optional]
**parent_id** | **int** |  | [optional]
**children** | [**\OpenAPI\Client\Model\TaskDto[]**](TaskDto.md) |  | [optional]
**nb_sub_tasks** | **int** |  | [optional] [readonly]
**nb_sub_tasks_closed** | **int** |  | [optional] [readonly]
**object_type_details** | [**\OpenAPI\Client\Model\SelectListItemResource**](SelectListItemResource.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
