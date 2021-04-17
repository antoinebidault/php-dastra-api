# # AttachmentDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional]
**order** | **int** |  | [optional]
**size** | **int** |  | [optional]
**built_in** | **bool** |  | [optional]
**label** | **string** |  |
**area_id** | **int** |  | [optional]
**slug** | **string** |  | [optional]
**file_name** | **string** |  | [optional]
**extension** | **string** |  | [optional]
**color** | **string** |  | [optional]
**data** | **string** |  | [optional]
**document_content** | **string** |  | [optional]
**parent_id** | **int** |  | [optional]
**deleted** | **bool** |  | [optional]
**nb_download** | **int** |  | [optional]
**nb_files** | **int** |  | [optional]
**date_creation** | [**\DateTime**](\DateTime.md) |  | [optional]
**date_update** | [**\DateTime**](\DateTime.md) |  | [optional]
**date_deleted** | [**\DateTime**](\DateTime.md) |  | [optional]
**deleted_by** | [**\OpenAPI\Client\Model\UserLightDto**](UserLightDto.md) |  | [optional]
**creator** | [**\OpenAPI\Client\Model\UserLightDto**](UserLightDto.md) |  | [optional]
**type** | [**\OpenAPI\Client\Model\AttachmentType**](AttachmentType.md) |  | [optional]
**is_folder** | **bool** |  | [optional] [readonly]
**is_editable** | **bool** |  | [optional] [readonly]
**children** | [**\OpenAPI\Client\Model\AttachmentDto[]**](AttachmentDto.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
