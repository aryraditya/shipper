<?php

namespace aryraditya\Shipper\Actions;

use aryraditya\Shipper\BaseAction;

/**
 * @package aryraditya\Shipper\Actions
 *
 * @property string $wt  weight
 * @property string $w   width
 * @property string $l   length
 * @property string $h   height
 */
class UpdateOrder extends BaseAction
{
    const ACTION = 'orders/{orderID}';

    const METHOD = 'put';

    /**
     * @var string
     */
    public $orderID;

}