<?php

namespace aryraditya\Shipper\Actions;

use aryraditya\Shipper\BaseAction;

/**
 * @package aryraditya\Shipper\Actions
 *
 * @property string $oid order ID (string) or order tracking ID
 * @property string $eid external ID
 */
class GetAWB extends BaseAction {
    const ACTION = 'awbs';

    const METHOD = 'get';
}