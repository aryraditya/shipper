<?php

namespace aryraditya\Shipper\Actions;

use aryraditya\Shipper\BaseAction;

/**
 * @package aryraditya\Shipper\Actions
 *
 */
class CancelOrder extends BaseAction
{
    const ACTION = 'orders/{orderID}/cancel';

    const METHOD = 'put';

    /**
     * order ID obtained from Order Creation (string) or order tracking ID
     * @var string
     */
    public $orderID;

}