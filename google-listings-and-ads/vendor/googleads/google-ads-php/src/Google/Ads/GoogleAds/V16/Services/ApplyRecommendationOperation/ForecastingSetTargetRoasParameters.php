<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v16/services/recommendation_service.proto

namespace Google\Ads\GoogleAds\V16\Services\ApplyRecommendationOperation;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Parameters to use when applying a forecasting set target roas
 * recommendation.
 *
 * Generated from protobuf message <code>google.ads.googleads.v16.services.ApplyRecommendationOperation.ForecastingSetTargetRoasParameters</code>
 */
class ForecastingSetTargetRoasParameters extends \Google\Protobuf\Internal\Message
{
    /**
     * New target ROAS (revenue per unit of spend) to set for a campaign
     * resource.
     * The value is between 0.01 and 1000.0, inclusive.
     *
     * Generated from protobuf field <code>optional double target_roas = 1;</code>
     */
    protected $target_roas = null;
    /**
     * New campaign budget amount to set for a campaign resource.
     *
     * Generated from protobuf field <code>optional int64 campaign_budget_amount_micros = 2;</code>
     */
    protected $campaign_budget_amount_micros = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $target_roas
     *           New target ROAS (revenue per unit of spend) to set for a campaign
     *           resource.
     *           The value is between 0.01 and 1000.0, inclusive.
     *     @type int|string $campaign_budget_amount_micros
     *           New campaign budget amount to set for a campaign resource.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V16\Services\RecommendationService::initOnce();
        parent::__construct($data);
    }

    /**
     * New target ROAS (revenue per unit of spend) to set for a campaign
     * resource.
     * The value is between 0.01 and 1000.0, inclusive.
     *
     * Generated from protobuf field <code>optional double target_roas = 1;</code>
     * @return float
     */
    public function getTargetRoas()
    {
        return isset($this->target_roas) ? $this->target_roas : 0.0;
    }

    public function hasTargetRoas()
    {
        return isset($this->target_roas);
    }

    public function clearTargetRoas()
    {
        unset($this->target_roas);
    }

    /**
     * New target ROAS (revenue per unit of spend) to set for a campaign
     * resource.
     * The value is between 0.01 and 1000.0, inclusive.
     *
     * Generated from protobuf field <code>optional double target_roas = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setTargetRoas($var)
    {
        GPBUtil::checkDouble($var);
        $this->target_roas = $var;

        return $this;
    }

    /**
     * New campaign budget amount to set for a campaign resource.
     *
     * Generated from protobuf field <code>optional int64 campaign_budget_amount_micros = 2;</code>
     * @return int|string
     */
    public function getCampaignBudgetAmountMicros()
    {
        return isset($this->campaign_budget_amount_micros) ? $this->campaign_budget_amount_micros : 0;
    }

    public function hasCampaignBudgetAmountMicros()
    {
        return isset($this->campaign_budget_amount_micros);
    }

    public function clearCampaignBudgetAmountMicros()
    {
        unset($this->campaign_budget_amount_micros);
    }

    /**
     * New campaign budget amount to set for a campaign resource.
     *
     * Generated from protobuf field <code>optional int64 campaign_budget_amount_micros = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCampaignBudgetAmountMicros($var)
    {
        GPBUtil::checkInt64($var);
        $this->campaign_budget_amount_micros = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ForecastingSetTargetRoasParameters::class, \Google\Ads\GoogleAds\V16\Services\ApplyRecommendationOperation_ForecastingSetTargetRoasParameters::class);

