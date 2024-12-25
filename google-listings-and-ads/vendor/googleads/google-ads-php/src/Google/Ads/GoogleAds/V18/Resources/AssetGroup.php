<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v18/resources/asset_group.proto

namespace Google\Ads\GoogleAds\V18\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An asset group.
 * AssetGroupAsset is used to link an asset to the asset group.
 * AssetGroupSignal is used to associate a signal to an asset group.
 *
 * Generated from protobuf message <code>google.ads.googleads.v18.resources.AssetGroup</code>
 */
class AssetGroup extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The resource name of the asset group.
     * Asset group resource names have the form:
     * `customers/{customer_id}/assetGroups/{asset_group_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Output only. The ID of the asset group.
     *
     * Generated from protobuf field <code>int64 id = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $id = 0;
    /**
     * Immutable. The campaign with which this asset group is associated.
     * The asset which is linked to the asset group.
     *
     * Generated from protobuf field <code>string campaign = 2 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $campaign = '';
    /**
     * Required. Name of the asset group. Required. It must have a minimum length
     * of 1 and maximum length of 128. It must be unique under a campaign.
     *
     * Generated from protobuf field <code>string name = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $name = '';
    /**
     * A list of final URLs after all cross domain redirects. In performance max,
     * by default, the urls are eligible for expansion unless opted out.
     *
     * Generated from protobuf field <code>repeated string final_urls = 4;</code>
     */
    private $final_urls;
    /**
     * A list of final mobile URLs after all cross domain redirects. In
     * performance max, by default, the urls are eligible for expansion
     * unless opted out.
     *
     * Generated from protobuf field <code>repeated string final_mobile_urls = 5;</code>
     */
    private $final_mobile_urls;
    /**
     * The status of the asset group.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.enums.AssetGroupStatusEnum.AssetGroupStatus status = 6;</code>
     */
    protected $status = 0;
    /**
     * Output only. The primary status of the asset group. Provides insights into
     * why an asset group is not serving or not serving optimally.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.enums.AssetGroupPrimaryStatusEnum.AssetGroupPrimaryStatus primary_status = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $primary_status = 0;
    /**
     * Output only. Provides reasons into why an asset group is not serving or not
     * serving optimally. It will be empty when the asset group is serving without
     * issues.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v18.enums.AssetGroupPrimaryStatusReasonEnum.AssetGroupPrimaryStatusReason primary_status_reasons = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $primary_status_reasons;
    /**
     * First part of text that may appear appended to the url displayed in
     * the ad.
     *
     * Generated from protobuf field <code>string path1 = 7;</code>
     */
    protected $path1 = '';
    /**
     * Second part of text that may appear appended to the url displayed in
     * the ad. This field can only be set when path1 is set.
     *
     * Generated from protobuf field <code>string path2 = 8;</code>
     */
    protected $path2 = '';
    /**
     * Output only. Overall ad strength of this asset group.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.enums.AdStrengthEnum.AdStrength ad_strength = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $ad_strength = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Immutable. The resource name of the asset group.
     *           Asset group resource names have the form:
     *           `customers/{customer_id}/assetGroups/{asset_group_id}`
     *     @type int|string $id
     *           Output only. The ID of the asset group.
     *     @type string $campaign
     *           Immutable. The campaign with which this asset group is associated.
     *           The asset which is linked to the asset group.
     *     @type string $name
     *           Required. Name of the asset group. Required. It must have a minimum length
     *           of 1 and maximum length of 128. It must be unique under a campaign.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $final_urls
     *           A list of final URLs after all cross domain redirects. In performance max,
     *           by default, the urls are eligible for expansion unless opted out.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $final_mobile_urls
     *           A list of final mobile URLs after all cross domain redirects. In
     *           performance max, by default, the urls are eligible for expansion
     *           unless opted out.
     *     @type int $status
     *           The status of the asset group.
     *     @type int $primary_status
     *           Output only. The primary status of the asset group. Provides insights into
     *           why an asset group is not serving or not serving optimally.
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $primary_status_reasons
     *           Output only. Provides reasons into why an asset group is not serving or not
     *           serving optimally. It will be empty when the asset group is serving without
     *           issues.
     *     @type string $path1
     *           First part of text that may appear appended to the url displayed in
     *           the ad.
     *     @type string $path2
     *           Second part of text that may appear appended to the url displayed in
     *           the ad. This field can only be set when path1 is set.
     *     @type int $ad_strength
     *           Output only. Overall ad strength of this asset group.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V18\Resources\AssetGroup::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The resource name of the asset group.
     * Asset group resource names have the form:
     * `customers/{customer_id}/assetGroups/{asset_group_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Immutable. The resource name of the asset group.
     * Asset group resource names have the form:
     * `customers/{customer_id}/assetGroups/{asset_group_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * Output only. The ID of the asset group.
     *
     * Generated from protobuf field <code>int64 id = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Output only. The ID of the asset group.
     *
     * Generated from protobuf field <code>int64 id = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkInt64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Immutable. The campaign with which this asset group is associated.
     * The asset which is linked to the asset group.
     *
     * Generated from protobuf field <code>string campaign = 2 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getCampaign()
    {
        return $this->campaign;
    }

    /**
     * Immutable. The campaign with which this asset group is associated.
     * The asset which is linked to the asset group.
     *
     * Generated from protobuf field <code>string campaign = 2 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setCampaign($var)
    {
        GPBUtil::checkString($var, True);
        $this->campaign = $var;

        return $this;
    }

    /**
     * Required. Name of the asset group. Required. It must have a minimum length
     * of 1 and maximum length of 128. It must be unique under a campaign.
     *
     * Generated from protobuf field <code>string name = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Name of the asset group. Required. It must have a minimum length
     * of 1 and maximum length of 128. It must be unique under a campaign.
     *
     * Generated from protobuf field <code>string name = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * A list of final URLs after all cross domain redirects. In performance max,
     * by default, the urls are eligible for expansion unless opted out.
     *
     * Generated from protobuf field <code>repeated string final_urls = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFinalUrls()
    {
        return $this->final_urls;
    }

    /**
     * A list of final URLs after all cross domain redirects. In performance max,
     * by default, the urls are eligible for expansion unless opted out.
     *
     * Generated from protobuf field <code>repeated string final_urls = 4;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFinalUrls($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->final_urls = $arr;

        return $this;
    }

    /**
     * A list of final mobile URLs after all cross domain redirects. In
     * performance max, by default, the urls are eligible for expansion
     * unless opted out.
     *
     * Generated from protobuf field <code>repeated string final_mobile_urls = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFinalMobileUrls()
    {
        return $this->final_mobile_urls;
    }

    /**
     * A list of final mobile URLs after all cross domain redirects. In
     * performance max, by default, the urls are eligible for expansion
     * unless opted out.
     *
     * Generated from protobuf field <code>repeated string final_mobile_urls = 5;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFinalMobileUrls($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->final_mobile_urls = $arr;

        return $this;
    }

    /**
     * The status of the asset group.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.enums.AssetGroupStatusEnum.AssetGroupStatus status = 6;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of the asset group.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.enums.AssetGroupStatusEnum.AssetGroupStatus status = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V18\Enums\AssetGroupStatusEnum\AssetGroupStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Output only. The primary status of the asset group. Provides insights into
     * why an asset group is not serving or not serving optimally.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.enums.AssetGroupPrimaryStatusEnum.AssetGroupPrimaryStatus primary_status = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getPrimaryStatus()
    {
        return $this->primary_status;
    }

    /**
     * Output only. The primary status of the asset group. Provides insights into
     * why an asset group is not serving or not serving optimally.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.enums.AssetGroupPrimaryStatusEnum.AssetGroupPrimaryStatus primary_status = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setPrimaryStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V18\Enums\AssetGroupPrimaryStatusEnum\AssetGroupPrimaryStatus::class);
        $this->primary_status = $var;

        return $this;
    }

    /**
     * Output only. Provides reasons into why an asset group is not serving or not
     * serving optimally. It will be empty when the asset group is serving without
     * issues.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v18.enums.AssetGroupPrimaryStatusReasonEnum.AssetGroupPrimaryStatusReason primary_status_reasons = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPrimaryStatusReasons()
    {
        return $this->primary_status_reasons;
    }

    /**
     * Output only. Provides reasons into why an asset group is not serving or not
     * serving optimally. It will be empty when the asset group is serving without
     * issues.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v18.enums.AssetGroupPrimaryStatusReasonEnum.AssetGroupPrimaryStatusReason primary_status_reasons = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPrimaryStatusReasons($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Ads\GoogleAds\V18\Enums\AssetGroupPrimaryStatusReasonEnum\AssetGroupPrimaryStatusReason::class);
        $this->primary_status_reasons = $arr;

        return $this;
    }

    /**
     * First part of text that may appear appended to the url displayed in
     * the ad.
     *
     * Generated from protobuf field <code>string path1 = 7;</code>
     * @return string
     */
    public function getPath1()
    {
        return $this->path1;
    }

    /**
     * First part of text that may appear appended to the url displayed in
     * the ad.
     *
     * Generated from protobuf field <code>string path1 = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setPath1($var)
    {
        GPBUtil::checkString($var, True);
        $this->path1 = $var;

        return $this;
    }

    /**
     * Second part of text that may appear appended to the url displayed in
     * the ad. This field can only be set when path1 is set.
     *
     * Generated from protobuf field <code>string path2 = 8;</code>
     * @return string
     */
    public function getPath2()
    {
        return $this->path2;
    }

    /**
     * Second part of text that may appear appended to the url displayed in
     * the ad. This field can only be set when path1 is set.
     *
     * Generated from protobuf field <code>string path2 = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setPath2($var)
    {
        GPBUtil::checkString($var, True);
        $this->path2 = $var;

        return $this;
    }

    /**
     * Output only. Overall ad strength of this asset group.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.enums.AdStrengthEnum.AdStrength ad_strength = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getAdStrength()
    {
        return $this->ad_strength;
    }

    /**
     * Output only. Overall ad strength of this asset group.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.enums.AdStrengthEnum.AdStrength ad_strength = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setAdStrength($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V18\Enums\AdStrengthEnum\AdStrength::class);
        $this->ad_strength = $var;

        return $this;
    }

}
