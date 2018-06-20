<?php

namespace aryraditya\Shipper\Actions;

use aryraditya\Shipper\BaseAction;

/**
 * @package aryraditya\Shipper\Actions
 *
 * @property string $awbNumber  airway bill number
 */
class UpdateAWB extends BaseAction {
    const ACTION = 'awbs/{orderID}';

    const METHOD = 'get';

    /**
     * @var string
     */
    public $orderID;

}