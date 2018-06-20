<?php

namespace aryraditya\Shipper\Actions;

use aryraditya\Shipper\BaseAction;

/**
 * Class UpdateMerchant
 * @package aryraditya\Shipper\Actions
 *
 * @property string $phoneNumber phone number with country code
 * @property string $fullName
 * @property string $companyName
 * @property integer $apiKey set to '1' to Updated API Key will be generated automatically by the system
 */
class UpdateMerchant extends BaseAction {
    const ACTION = 'merchants/{merchantID}';

    const METHOD = 'put';

    /**
     * Merchant ID
     * @var string
     */
    public $merchantID;

}