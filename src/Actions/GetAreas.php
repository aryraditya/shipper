<?php

namespace aryraditya\Shipper\Actions;

use aryraditya\Shipper\BaseAction;

/**
 * Class GetProvinces
 * @package aryraditya\Shipper\Actions
 *
 * @property integer $suburb The value is obtained from Get Suburbs
 */
class GetAreas extends BaseAction {
    const ACTION = 'areas';

    const METHOD = 'get';
}