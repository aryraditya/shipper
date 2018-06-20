<?php


namespace aryraditya\Shipper;


class BaseAction
{
    const ACTION = '';

    const METHOD = '';

    /**
     * @var Shipper
     */
    protected $shipper;

    /** @var Request */
    protected $client;

    /**
     * Data store
     * @var array
     */
    protected $_data = [];

    /**
     * @var string
     */
    protected $_action;

    /**
     * @var object
     */
    protected $_response;

    /**
     * Unset this property from public
     *
     * @var array
     */
    protected $unset = [
        'unset',
        'shipper',
        'client',
        '_data',
        '_action',
        '_response'
    ];

    public function __construct($shipper, $client)
    {
        $this->shipper = $shipper;
        $this->client = $client;
    }

    public function getData($name = null)
    {
        if ($name)
            return isset($this->_data[ $name ]) ? $this->_data[ $name ] : null;

        return $this->_data;
    }

    public function setData($name, $value)
    {
        $this->_data[ $name ] = $value;

        return $this;
    }

    public function getAction()
    {
        if ($this->_action === null) {
            $action = static::ACTION;
            $params = [];

            foreach ($this->properties() as $index => $value) {
                $params[ '{' . $index . '}' ] = $value;
            }

            $this->_action = strtr($action, $params);
        }

        return $this->_action;
    }

    /**
     * Get Response from Shipper
     */
    public function response()
    {
        $this->_response = $this->_response !== null ? $this->_response : $this->client->request(static::METHOD, $this->getAction(), $this->getData());

        return $this->_response;
    }

    public function __get($name)
    {
        if (property_exists($this, $name)) {
            return $this->{$name};
        }

        return $this->getData($name);
    }

    public function __set($name, $value)
    {
        if (property_exists($this, $name)) {
            $this->{$name} = $value;
        }

        return $this->setData($name, $value);
    }

    protected function properties()
    {
        $properties = get_object_vars($this);

        foreach ($this->unset as $prop) {
            unset($properties[ $prop ]);
        }

        return $properties;
    }
}