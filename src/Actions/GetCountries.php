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
class GetCountries extends BaseAction {
    const ACTION = 'countries';

    const METHOD = 'get';

}