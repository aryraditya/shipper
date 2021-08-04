<?php

namespace aryraditya\Shipper\Actions;

use aryraditya\Shipper\BaseAction;

/**
 * @package aryraditya\Shipper\Actions
 *
 * @property string $id  the ID retrieved after creating the order
 */
class GetOrderDetail extends BaseAction
{
    const ACTION = 'orders/{orderID}';

    const METHOD = 'get';

    /**
     * Shipper Order ID
     * @var string
     */
    public $orderID;

    /**
     * Get printable Label url
     * @param string|null $checksum
     *
     * @return string
     */
    public function getLabelUrl($checksum = null)
    {
        $checksum = $checksum ?: $this->getLabelChecksum();

        return 'https://shipper.id/label/sticker.php?' . http_build_query([
            'oid'   => [$this->orderID],
            'uid'   => $checksum
        ]);
    }

    /**
     * Get label checksum for order
     * @return string|null
     */
    public function getLabelChecksum()
    {
        $response = $this->response();

        return $response->data->order->detail->labelChecksum ?? null;
    }
}
