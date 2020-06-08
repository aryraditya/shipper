<?php

namespace aryraditya\Shipper\Actions;

use aryraditya\Shipper\BaseAction;

/**
 * @package aryraditya\Shipper\Actions
 *
 * @property array $orderIds Tracking id (7 char)
 */
class CancelPickup extends BaseAction
{
    const ACTION = 'pickup/cancel';

    const METHOD = 'put';

}