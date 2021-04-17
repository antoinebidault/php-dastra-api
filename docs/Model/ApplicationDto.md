# # ApplicationDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional]
**label** | **string** |  |
**description** | **string** |  | [optional]
**host_name** | **string** |  | [optional]
**logo_url** | **string** |  | [optional]
**application_state** | [**\OpenAPI\Client\Model\ApplicationState**](ApplicationState.md) |  | [optional]
**application_type** | [**\OpenAPI\Client\Model\ApplicationType**](ApplicationType.md) |  | [optional]
**hosting_type** | [**\OpenAPI\Client\Model\HostingType**](HostingType.md) |  | [optional]
**development_type** | [**\OpenAPI\Client\Model\DevelopmentType**](DevelopmentType.md) |  | [optional]
**support_type** | [**\OpenAPI\Client\Model\SupportType**](SupportType.md) |  | [optional]
**availability** | **int** |  | [optional]
**integrity** | **int** |  | [optional]
**confidentiality** | **int** |  | [optional]
**proof** | **int** |  | [optional]
**sensibility** | **int** |  | [optional] [readonly]
**purposes** | **string[]** |  | [optional]
**tags** | [**\OpenAPI\Client\Model\TagDto[]**](TagDto.md) |  | [optional]
**readonly** | **bool** |  | [optional]
**date_creation** | [**\DateTime**](\DateTime.md) |  | [optional]
**date_update** | [**\DateTime**](\DateTime.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
