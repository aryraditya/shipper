<?php

namespace aryraditya\Shipper\Actions;

use aryraditya\Shipper\BaseAction;

/**
 * @package aryraditya\Shipper\Actions
 *
 * @property string $oid order ID (string) or order tracking ID
 * @property string $eid external ID
 */
class GenerateAWB extends BaseAction {
    const ACTION = 'awbs/generate';

    const METHOD = 'get';
}