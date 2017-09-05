# TimeEntry

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**company** | [**\Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\CompanyReference**](CompanyReference.md) | If chargeToId is not specified, we asume you enter time against the company specified | [optional] 
**charge_to_id** | **int** | If chargeToId is not specified, we asume you enter time against the company specified | [optional] 
**charge_to_type** | **string** | If chargeToId is not specified, we asume you enter time against the company specified | [optional] 
**member** | [**\Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\MemberReference**](MemberReference.md) |  | [optional] 
**location_id** | **int** |  | [optional] 
**business_unit_id** | **int** |  | [optional] 
**work_type** | [**\Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\WorkTypeReference**](WorkTypeReference.md) |  | [optional] 
**work_role** | [**\Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\WorkRoleReference**](WorkRoleReference.md) |  | [optional] 
**agreement** | [**\Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\AgreementReference**](AgreementReference.md) |  | [optional] 
**time_start** | [**\DateTime**](\DateTime.md) |  | 
**time_end** | [**\DateTime**](\DateTime.md) |  | [optional] 
**hours_deduct** | **double** |  | [optional] 
**actual_hours** | **double** |  | [optional] 
**billable_option** | **string** |  | [optional] 
**notes** | **string** |  | [optional] 
**internal_notes** | **string** |  | [optional] 
**add_to_detail_description_flag** | **bool** |  | [optional] 
**add_to_internal_analysis_flag** | **bool** |  | [optional] 
**add_to_resolution_flag** | **bool** |  | [optional] 
**email_resource_flag** | **bool** | This is an action flag. To update this value use the /service/tickets endpoint automaticEmailResourceFlag field | [optional] 
**email_contact_flag** | **bool** | This is an action flag. To update this value use the /service/tickets endpoint automaticEmailContactFlag field | [optional] 
**email_cc_flag** | **bool** | This is an action flag. To update this value use the /service/tickets endpoint automaticEmailCcFlag field | [optional] 
**email_cc** | **string** | To update this value use the /service/tickets endpoint automaticEmailCc field | [optional] 
**hours_billed** | **double** |  | [optional] 
**entered_by** | **string** |  | [optional] 
**date_entered** | [**\DateTime**](\DateTime.md) |  | [optional] 
**invoice** | [**\Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\InvoiceReference**](InvoiceReference.md) |  | [optional] 
**hourly_rate** | **double** | This field may only be Updated, it is defaulted on Create | [optional] 
**_info** | [**\Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\Metadata**](Metadata.md) | Metadata of the entity | [optional] 
**custom_fields** | [**\Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\CustomFieldValue[]**](CustomFieldValue.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


