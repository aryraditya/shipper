<?php

namespace aryraditya\Shipper;
use aryraditya\Shipper\Actions\ActivateOrder;
use aryraditya\Shipper\Actions\CancelOrder;
use aryraditya\Shipper\Actions\CreateDomesticOrder;
use aryraditya\Shipper\Actions\CreateMerchant;
use aryraditya\Shipper\Actions\GenerateAWB;
use aryraditya\Shipper\Actions\GetAreas;
use aryraditya\Shipper\Actions\GetAWB;
use aryraditya\Shipper\Actions\GetCities;
use aryraditya\Shipper\Actions\GetDomesticRates;
use aryraditya\Shipper\Actions\GetInternationalRates;
use aryraditya\Shipper\Actions\GetLogisticsInCity;
use aryraditya\Shipper\Actions\GetMerchant;
use aryraditya\Shipper\Actions\GetOrderDetail;
use aryraditya\Shipper\Actions\GetOrderID;
use aryraditya\Shipper\Actions\GetProvinces;
use aryraditya\Shipper\Actions\GetSuburbs;
use aryraditya\Shipper\Actions\GetTrackingStatus;
use aryraditya\Shipper\Actions\UpdateAWB;
use aryraditya\Shipper\Actions\UpdateMerchant;
use aryraditya\Shipper\Actions\UpdateOrder;

/**
 * Class Shipper
 * @package aryraditya\Shipper
 *
 * @method ActivateOrder ActivateOrder
 * @method CancelOrder CancelOrder
 * @method CreateDomesticOrder CreateDomesticOrder
 * @method CreateMerchant CreateMerchant
 * @method GenerateAWB GenerateAWB
 * @method GetAreas GetAreas
 * @method GetAWB GetAWB
 * @method GetCities GetCities
 * @method GetDomesticRates GetDomesticRates
 * @method GetInternationalRates GetInternationalRates
 * @method GetLogisticsInCity GetLogisticsInCity
 * @method GetMerchant GetMerchant
 * @method GetOrderDetail GetOrderDetail
 * @method GetOrderID GetOrderID
 * @method GetProvinces GetProvinces
 * @method GetSuburbs GetSuburbs
 * @method GetTrackingStatus GetTrackingStatus
 * @method UpdateAWB UpdateAWB
 * @method UpdateMerchant UpdateMerchant
 * @method UpdateOrder UpdateOrder
 */
class Shipper
{
    public $key;

    public $baseUrl;

    public $throwErrors;

    const URL_PROD  = 'https://api.shipper.id/prod/public/v1/';

    const URL_SANDBOX   = 'https://api.shipper.id/sandbox/public/v1/';

    /**
     * Shipper constructor.
     *
     * @param string|null $key
     * @param string|null $baseUrl
     * @param bool $throwErrors
     */
    public function __construct($key = null, $baseUrl = null, $throwErrors = false)
    {
        $this->setKey($key);
        $this->setBaseUrl($baseUrl);
        $this->setThrowErrors($throwErrors);
    }

    /**
     * Set Shipper API Key
     * @param string $value
     *
     * @return $this
     */
    public function setKey($value)
    {
        $this->key      = $value;
        return $this;
    }

    /**
     * Set Shipper Base URL
     * @param string $value
     *
     * @return $this
     */
    public function setBaseUrl($value)
    {
        $this->baseUrl  = $value ?: static::URL_PROD;
        return $this;
    }

    /**
     * Set whether to throw errors
     * @param bool $value
     *
     * @return $this
     */
    public function setThrowErrors($value)
    {
        $this->throwErrors = $value;
        return $this;
    }

    /**
     * Shipper Client Request
     *
     * @return Request
     */
    public function client()
    {
        return new Request($this->key, $this->baseUrl, $this->throwErrors);
    }

    /**
     * @param $name
     * @param $arguments
     *
     * @return \stdClass
     */
    public function __call($name, $arguments)
    {
        $class = __NAMESPACE__ . '\\Actions\\' .$name;
        return class_exists($class) ? new $class($this, $this->client()) : new \stdClass();
    }
}