<?php

namespace aryraditya\Shipper\Actions;

use aryraditya\Shipper\BaseAction;

/**
 * Class GetProvinces
 * @package aryraditya\Shipper\Actions
 *
 * @property string $phoneNumber phone number with country code
 * @property string $email can be empty string
 * @property string $password
 * @property string $fullName
 * @property string $companyName
 * @property string $address
 * @property string $direction
 * @property string $cityID obtained from Get Cities
 * @property string $postcode
 * @property integer $isCustomAWB 1 to use custom AWB and 0 to use courier's AWB
 * @property integer $merchantLogo URL for Merchant Logo (Min 480x294px, Max 960x588px, 5MB)
 * @property integer $isAutoTrack 1 to auto track the orders and 0 to manually track those
 */
class CreateMerchant extends BaseAction {
    const ACTION = 'merchants';

    const METHOD = 'post';

    protected $_data = [
        'email' => '',
        'isCustomAWB' => 0,
        'isAutoTrack' => 1,
    ];
}