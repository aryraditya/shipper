<?php

namespace aryraditya\Shipper\Actions;

use aryraditya\Shipper\BaseAction;

/**
 * Class GetInternationalRates
 * @package aryraditya\Shipper\Actions
 *
 * @property integer $d destination country ID. Obtained from Get Countries
 * @property float $wt package weight in kg
 * @property integer $l package’s length (integer in centimeter e.g 10 )
 * @property integer $w package’s width (integer in centimeter e.g 10 )
 * @property integer $h package’s height (integer in centimeter e.g 10 )
 * @property double $v package’s value/price (integer in IDR e.g. 100000 )
 * @property integer $type package type ID ( 1 for documents; 2 for small packages [DEFAULT]; and 3 for medium-sized packages)
 * @property integer $order is this a Rate Checking only or is this for a valid Transaction Order? ( 1 for yes; 0 for no [default value]) (integer)
 */
class GetInternationalRates extends BaseAction {
    const ACTION = 'intlRates';

    const METHOD = 'get';

}