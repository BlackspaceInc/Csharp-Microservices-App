<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: demo.proto

namespace Hipstershop;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>hipstershop.Address</code>
 */
class Address extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string street_address = 1;</code>
     */
    private $street_address = '';
    /**
     * Generated from protobuf field <code>string city = 2;</code>
     */
    private $city = '';
    /**
     * Generated from protobuf field <code>string state = 3;</code>
     */
    private $state = '';
    /**
     * Generated from protobuf field <code>string country = 4;</code>
     */
    private $country = '';
    /**
     * Generated from protobuf field <code>int32 zip_code = 5;</code>
     */
    private $zip_code = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $street_address
     *     @type string $city
     *     @type string $state
     *     @type string $country
     *     @type int $zip_code
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Demo::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string street_address = 1;</code>
     * @return string
     */
    public function getStreetAddress()
    {
        return $this->street_address;
    }

    /**
     * Generated from protobuf field <code>string street_address = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setStreetAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->street_address = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string city = 2;</code>
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Generated from protobuf field <code>string city = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCity($var)
    {
        GPBUtil::checkString($var, True);
        $this->city = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string state = 3;</code>
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Generated from protobuf field <code>string state = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkString($var, True);
        $this->state = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string country = 4;</code>
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Generated from protobuf field <code>string country = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setCountry($var)
    {
        GPBUtil::checkString($var, True);
        $this->country = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 zip_code = 5;</code>
     * @return int
     */
    public function getZipCode()
    {
        return $this->zip_code;
    }

    /**
     * Generated from protobuf field <code>int32 zip_code = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setZipCode($var)
    {
        GPBUtil::checkInt32($var);
        $this->zip_code = $var;

        return $this;
    }

}
