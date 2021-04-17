# # UserRequestDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**closed_by_user** | [**\OpenAPI\Client\Model\UserLightDto**](UserLightDto.md) |  | [optional]
**area** | [**\OpenAPI\Client\Model\AreaDto**](AreaDto.md) |  | [optional]
**creator** | [**\OpenAPI\Client\Model\UserLightDto**](UserLightDto.md) |  | [optional]
**operator** | [**\OpenAPI\Client\Model\UserLightDto**](UserLightDto.md) |  | [optional]
**attachments** | [**\OpenAPI\Client\Model\UserRequestAttachmentDto[]**](UserRequestAttachmentDto.md) |  | [optional]
**tags** | [**\OpenAPI\Client\Model\TagDto[]**](TagDto.md) |  | [optional]
**id** | **int** |  | [optional]
**title** | **string** |  |
**locale** | **string** |  |
**archived** | **bool** |  | [optional]
**complex** | **bool** | Wether it&#39;s a complex demand or not | [optional]
**date_closed** | [**\DateTime**](\DateTime.md) |  | [optional]
**area_id** | **int** |  |
**state** | [**\OpenAPI\Client\Model\UserRequestState**](UserRequestState.md) |  | [optional]
**description** | **string** |  | [optional]
**message** | **string** |  | [optional]
**email** | **string** |  | [optional]
**phone_number** | **string** |  | [optional]
**given_name** | **string** |  | [optional]
**family_name** | **string** |  | [optional]
**date_creation** | [**\DateTime**](\DateTime.md) |  | [optional]
**date_update** | [**\DateTime**](\DateTime.md) |  | [optional]
**work_flow_step** | [**\OpenAPI\Client\Model\WorkFlowStepDto**](WorkFlowStepDto.md) |  | [optional]
**channel** | [**\OpenAPI\Client\Model\UserRequestSource**](UserRequestSource.md) |  | [optional]
**ref_id** | **string** |  | [optional]
**user_id** | **string** |  | [optional]
**purpose** | [**\OpenAPI\Client\Model\PurposeType**](PurposeType.md) |  |
**closed_reason** | [**\OpenAPI\Client\Model\ClosedReason**](ClosedReason.md) |  | [optional]
**closed_reason_description** | **string** |  | [optional]
**expiry_time** | [**\DateTime**](\DateTime.md) |  | [optional]
**address** | **string** |  | [optional]
**zip_code** | **string** |  | [optional]
**city** | **string** |  | [optional]
**country_code** | **string** |  | [optional]
**nb_messages** | **int** |  | [optional]
**nb_messages_not_viewed** | **int** |  | [optional]
**remaining_days** | **int** |  | [optional] [readonly]
**closing_time** | **int** |  | [optional] [readonly]
**additional_datas** | **mixed** |  | [optional]
**user_notified** | **bool** |  | [optional]
**date_user_notified** | [**\DateTime**](\DateTime.md) |  | [optional]
**send_notification** | **bool** |  | [optional]
**email_validation_date** | [**\DateTime**](\DateTime.md) |  | [optional]
**mail_validated** | **bool** |  | [optional]
**referrer_url** | **string** |  | [optional]
**demand_id** | **string** |  | [optional]
**identity_validated** | **bool** |  | [optional] [readonly]
**date_identity_validated** | [**\DateTime**](\DateTime.md) |  | [optional]
**widget_id** | **int** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
