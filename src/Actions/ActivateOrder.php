<?php

namespace aryraditya\Shipper\Actions;

use aryraditya\Shipper\BaseAction;

/**
 * @package aryraditya\Shipper\Actions
 *
 * @property integer $active 0 for order deactivation and 1 for it's activation
 */
class ActivateOrder extends BaseAction
{
    const ACTION = 'activations/{orderID}';

    const METHOD = 'put';

    /**
     * Order ID
     * @var string
     */
    public $orderID;

    /**
     * default value
     * @var array
     */
    protected $_data    = [
        'active'  => 1
    ];

}
