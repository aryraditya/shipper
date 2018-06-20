<?php

namespace aryraditya\Shipper\Actions;

use aryraditya\Shipper\BaseAction;

/**
 * @package aryraditya\Shipper\Actions
 *
 */
class GetLogisticsInCity extends BaseAction {
    const ACTION = 'logistics/{cityID}';

    const METHOD = 'get';

    /**
     * @var string
     */
    public $cityID;
}