<?php

namespace aryraditya\Shipper\Actions;

use aryraditya\Shipper\BaseAction;

/**
 * Class GetProvinces
 * @package aryraditya\Shipper\Actions
 *
 * @property integer $city The value is obtained from Get Cities
 */
class GetSuburbs extends BaseAction {
    const ACTION = 'suburbs';

    const METHOD = 'get';
}