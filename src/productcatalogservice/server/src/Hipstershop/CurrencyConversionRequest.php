<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: demo.proto

namespace Hipstershop;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>hipstershop.CurrencyConversionRequest</code>
 */
class CurrencyConversionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.hipstershop.Money from = 1;</code>
     */
    private $from = null;
    /**
     * The 3-letter currency code defined in ISO 4217.
     *
     * Generated from protobuf field <code>string to_code = 2;</code>
     */
    private $to_code = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Hipstershop\Money $from
     *     @type string $to_code
     *           The 3-letter currency code defined in ISO 4217.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Demo::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.hipstershop.Money from = 1;</code>
     * @return \Hipstershop\Money
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * Generated from protobuf field <code>.hipstershop.Money from = 1;</code>
     * @param \Hipstershop\Money $var
     * @return $this
     */
    public function setFrom($var)
    {
        GPBUtil::checkMessage($var, \Hipstershop\Money::class);
        $this->from = $var;

        return $this;
    }

    /**
     * The 3-letter currency code defined in ISO 4217.
     *
     * Generated from protobuf field <code>string to_code = 2;</code>
     * @return string
     */
    public function getToCode()
    {
        return $this->to_code;
    }

    /**
     * The 3-letter currency code defined in ISO 4217.
     *
     * Generated from protobuf field <code>string to_code = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setToCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->to_code = $var;

        return $this;
    }

}

