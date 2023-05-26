<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/errors/billing_setup_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V12\Errors;

class BillingSetupError
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�	
9google/ads/googleads/v12/errors/billing_setup_error.protogoogle.ads.googleads.v12.errors"�
BillingSetupErrorEnum"�
BillingSetupError
UNSPECIFIED 
UNKNOWN\'
#CANNOT_USE_EXISTING_AND_NEW_ACCOUNT\'
#CANNOT_REMOVE_STARTED_BILLING_SETUP2
.CANNOT_CHANGE_BILLING_TO_SAME_PAYMENTS_ACCOUNT3
/BILLING_SETUP_NOT_PERMITTED_FOR_CUSTOMER_STATUS
INVALID_PAYMENTS_ACCOUNT5
1BILLING_SETUP_NOT_PERMITTED_FOR_CUSTOMER_CATEGORY
INVALID_START_TIME_TYPE#
THIRD_PARTY_ALREADY_HAS_BILLING	
BILLING_SETUP_IN_PROGRESS

NO_SIGNUP_PERMISSION!
CHANGE_OF_BILL_TO_IN_PROGRESS
PAYMENTS_PROFILE_NOT_FOUND
PAYMENTS_ACCOUNT_NOT_FOUND
PAYMENTS_PROFILE_INELIGIBLE
PAYMENTS_ACCOUNT_INELIGIBLE$
 CUSTOMER_NEEDS_INTERNAL_APPROVAL6
2PAYMENTS_ACCOUNT_INELIGIBLE_CURRENCY_CODE_MISMATCH 
FUTURE_START_TIME_PROHIBITED0
,TOO_MANY_BILLING_SETUPS_FOR_PAYMENTS_ACCOUNTB�
#com.google.ads.googleads.v12.errorsBBillingSetupErrorProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v12/errors;errors�GAA�Google.Ads.GoogleAds.V12.Errors�Google\\Ads\\GoogleAds\\V12\\Errors�#Google::Ads::GoogleAds::V12::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

