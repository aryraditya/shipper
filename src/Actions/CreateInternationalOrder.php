<?php

namespace aryraditya\Shipper\Actions;

use aryraditya\Shipper\BaseAction;

/**
 * @package aryraditya\Shipper\Actions
 *
 * @property integer $o                      origin area ID
 * @property integer $d                      destination area ID
 * @property float   $wt                     package weight in kg
 * @property integer $l                      package’s length (integer in centimeter e.g 10 )
 * @property integer $w                      package’s width (integer in centimeter e.g 10 )
 * @property integer $h                      package’s height (integer in centimeter e.g 10 )
 * @property double  $v                      package’s value/price (integer in IDR e.g. 100000 )
 * @property integer $logistic               either 1 for regular delivery or 2 or express one
 * @property integer $rateID                 rate ID as you choose from rate search result
 * @property string  $consignerName          [optional] consigner's name
 * @property string  $consignerPhone         [optional] consigner’s phone number (string with country code),
 * @property string  $originAddress          origin address
 * @property string  $originDirection        hints of the location e.g. in front of drug store K-12, etc (string - can
 *           be empty)
 * @property string  $destinationAddress     destination address
 * @property string  $destinationDirection   hints of the location e.g. in front of drug store K-12, etc (string - can
 *           be empty)
 * @property string  $destinationArea        Destination area (can be empty)
 * @property string  $destinationSuburb      Destination suburb (can be empty)
 * @property string  $destinationCity        Destination city (can be empty)
 * @property string  $destinationProvince    Destination area (can be empty)
 * @property string  $destinationPostcode    Destination postcode (can be empty)
 * @property string  $consigneeName          consignee’s name
 * @property string  $consigneePhoneNumber   consignee’s phone number (string with country code)
 * @property string  $itemName               item name
 * @property string  $contents               item description
 * @property integer $useInsurance           is Insurance needed? ( 1 for yes; 0 for no) . If compulsory insurance is
 *           flagged by system, then this does not make any difference.
 * @property string  $externalID             the merchant’s self-tailored order ID. Unique
 * @property integer $packageType            package type ID ( 1 for documents; 2 for small packages [DEFAULT]; and 3
 *           for medium-sized packages)
 * @property string  $paymentType            payment type for the user’s orders. Valid values are currently 'cash' and
 *           the
 *           default value is 'postpay'
 *
 */
class CreateInternationalOrder extends BaseAction
{
    const ACTION = 'orders/internationals';

    const METHOD = 'post';

    protected $_data = [
        'l' => 10,
        'w' => 10,
        'h' => 10,
    ];

}