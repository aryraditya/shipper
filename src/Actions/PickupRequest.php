<?php

namespace aryraditya\Shipper\Actions;

use aryraditya\Shipper\BaseAction;

/**
 * @package aryraditya\Shipper\Actions
 *
 * @property array $orderIds Tracking id (7 char)
 * @property \DateTime $datePickup Date time string with format ​YYYY-MM-DD HH:mm:ss
 * @property int $agentId Agent id from get Yes agent by suburb
 */
class PickupRequest extends BaseAction
{
    const ACTION = 'pickup';

    const METHOD = 'post';
}
