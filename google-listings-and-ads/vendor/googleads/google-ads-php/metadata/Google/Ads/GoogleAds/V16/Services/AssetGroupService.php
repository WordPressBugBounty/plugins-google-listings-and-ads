<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v16/services/asset_group_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V16\Services;

class AssetGroupService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Api\LaunchStage::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
0google/ads/googleads/v16/enums/ad_strength.protogoogle.ads.googleads.v16.enums"�
AdStrengthEnum"s

AdStrength
UNSPECIFIED 
UNKNOWN
PENDING

NO_ADS
POOR
AVERAGE
GOOD
	EXCELLENTB�
"com.google.ads.googleads.v16.enumsBAdStrengthProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
Fgoogle/ads/googleads/v16/enums/asset_group_primary_status_reason.protogoogle.ads.googleads.v16.enums"�
!AssetGroupPrimaryStatusReasonEnum"�
AssetGroupPrimaryStatusReason
UNSPECIFIED 
UNKNOWN
ASSET_GROUP_PAUSED
ASSET_GROUP_REMOVED
CAMPAIGN_REMOVED
CAMPAIGN_PAUSED
CAMPAIGN_PENDING
CAMPAIGN_ENDED
ASSET_GROUP_LIMITED
ASSET_GROUP_DISAPPROVED	
ASSET_GROUP_UNDER_REVIEW
B�
"com.google.ads.googleads.v16.enumsB"AssetGroupPrimaryStatusReasonProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
?google/ads/googleads/v16/enums/asset_group_primary_status.protogoogle.ads.googleads.v16.enums"�
AssetGroupPrimaryStatusEnum"�
AssetGroupPrimaryStatus
UNSPECIFIED 
UNKNOWN
ELIGIBLE

PAUSED
REMOVED
NOT_ELIGIBLE
LIMITED
PENDINGB�
"com.google.ads.googleads.v16.enumsBAssetGroupPrimaryStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
7google/ads/googleads/v16/enums/asset_group_status.protogoogle.ads.googleads.v16.enums"n
AssetGroupStatusEnum"V
AssetGroupStatus
UNSPECIFIED 
UNKNOWN
ENABLED

PAUSED
REMOVEDB�
"com.google.ads.googleads.v16.enumsBAssetGroupStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�

4google/ads/googleads/v16/resources/asset_group.proto"google.ads.googleads.v16.resources?google/ads/googleads/v16/enums/asset_group_primary_status.protoFgoogle/ads/googleads/v16/enums/asset_group_primary_status_reason.proto7google/ads/googleads/v16/enums/asset_group_status.protogoogle/api/field_behavior.protogoogle/api/resource.proto"�

AssetGroupB
resource_name (	B+�A�A%
#googleads.googleapis.com/AssetGroup
id	 (B�A;
campaign (	B)�A�A#
!googleads.googleapis.com/Campaign
name (	B�A

final_urls (	
final_mobile_urls (	U
status (2E.google.ads.googleads.v16.enums.AssetGroupStatusEnum.AssetGroupStatusp
primary_status (2S.google.ads.googleads.v16.enums.AssetGroupPrimaryStatusEnum.AssetGroupPrimaryStatusB�A�
primary_status_reasons (2_.google.ads.googleads.v16.enums.AssetGroupPrimaryStatusReasonEnum.AssetGroupPrimaryStatusReasonB�A
path1 (	
path2 (	S
ad_strength
 (29.google.ads.googleads.v16.enums.AdStrengthEnum.AdStrengthB�A:^�A[
#googleads.googleapis.com/AssetGroup4customers/{customer_id}/assetGroups/{asset_group_id}B�
&com.google.ads.googleads.v16.resourcesBAssetGroupProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v16/resources;resources�GAA�"Google.Ads.GoogleAds.V16.Resources�"Google\\Ads\\GoogleAds\\V16\\Resources�&Google::Ads::GoogleAds::V16::Resourcesbproto3
�
;google/ads/googleads/v16/services/asset_group_service.proto!google.ads.googleads.v16.servicesgoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto google/protobuf/field_mask.protogoogle/rpc/status.proto"�
MutateAssetGroupsRequest
customer_id (	B�AO

operations (26.google.ads.googleads.v16.services.AssetGroupOperationB�A
validate_only ("�
AssetGroupOperation/
update_mask (2.google.protobuf.FieldMask@
create (2..google.ads.googleads.v16.resources.AssetGroupH @
update (2..google.ads.googleads.v16.resources.AssetGroupH :
remove (	B(�A%
#googleads.googleapis.com/AssetGroupH B
	operation"�
MutateAssetGroupsResponseJ
results (29.google.ads.googleads.v16.services.MutateAssetGroupResult1
partial_failure_error (2.google.rpc.Status"Y
MutateAssetGroupResult?
resource_name (	B(�A%
#googleads.googleapis.com/AssetGroup2�
AssetGroupService�
MutateAssetGroups;.google.ads.googleads.v16.services.MutateAssetGroupsRequest<.google.ads.googleads.v16.services.MutateAssetGroupsResponse"U�Acustomer_id,operations���6"1/v16/customers/{customer_id=*}/assetGroups:mutate:*E�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
%com.google.ads.googleads.v16.servicesBAssetGroupServiceProtoPZIgoogle.golang.org/genproto/googleapis/ads/googleads/v16/services;services�GAA�!Google.Ads.GoogleAds.V16.Services�!Google\\Ads\\GoogleAds\\V16\\Services�%Google::Ads::GoogleAds::V16::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

