<?php

namespace aryraditya\Shipper\Actions;

use aryraditya\Shipper\BaseAction;

/**
 * Class GetMerchant
 * @package aryraditya\Shipper\Actions
 *
 * @property integer $phone phone number of Merchant in International Format (+62xxx)
 */
class GetMerchant extends BaseAction {
    const ACTION = 'merchants';

    const METHOD = 'get';
}