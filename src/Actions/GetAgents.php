<?php

namespace aryraditya\Shipper\Actions;

use aryraditya\Shipper\BaseAction;

/**
 * Class GetAgents
 * @package aryraditya\Shipper\Actions
 *
 * @property integer $suburbId The value is obtained from Get Suburbs
 */
class GetAgents extends BaseAction {
    const ACTION = 'agents';

    const METHOD = 'get';
}