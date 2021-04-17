# # RiskDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**label** | **string** |  |
**date_creation** | [**\DateTime**](\DateTime.md) |  | [optional]
**date_update** | [**\DateTime**](\DateTime.md) |  | [optional]
**created_by** | [**\OpenAPI\Client\Model\UserLightDto**](UserLightDto.md) |  | [optional]
**enabled** | **bool** |  | [optional]
**description** | **string** |  | [optional]
**impact_score** | [**\OpenAPI\Client\Model\ImpactScore**](ImpactScore.md) |  | [optional]
**risk_score** | [**\OpenAPI\Client\Model\ProbabilityScore**](ProbabilityScore.md) |  | [optional]
**global_risk** | **int** |  | [optional] [readonly]
**global_risk_percentage** | **int** |  | [optional] [readonly]
**tags** | [**\OpenAPI\Client\Model\TagDto[]**](TagDto.md) |  | [optional]
**data_processings** | [**\OpenAPI\Client\Model\DataProcessingLightDto[]**](DataProcessingLightDto.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
