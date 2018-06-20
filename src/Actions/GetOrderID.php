<?php

namespace aryraditya\Shipper\Actions;

use aryraditya\Shipper\BaseAction;

/**
 * @package aryraditya\Shipper\Actions
 *
 * @property string $id  the ID retrieved after creating the order
 */
class GetOrderID extends BaseAction
{
    const ACTION = 'orders';

    const METHOD = 'get';
}