<?php

namespace aryraditya\Shipper\Actions;

use aryraditya\Shipper\BaseAction;

/**
 * Class GetProvinces
 * @package aryraditya\Shipper\Actions
 *
 * @property string $province
 * @property string $origin currently the parameter only accepts 'all'
 */
class GetCities extends BaseAction {
    const ACTION = 'cities';

    const METHOD = 'get';

}