<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: demo.proto

namespace Hipstershop;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>hipstershop.SendOrderConfirmationRequest</code>
 */
class SendOrderConfirmationRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string email = 1;</code>
     */
    private $email = '';
    /**
     * Generated from protobuf field <code>.hipstershop.OrderResult order = 2;</code>
     */
    private $order = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $email
     *     @type \Hipstershop\OrderResult $order
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Demo::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string email = 1;</code>
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Generated from protobuf field <code>string email = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setEmail($var)
    {
        GPBUtil::checkString($var, True);
        $this->email = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.hipstershop.OrderResult order = 2;</code>
     * @return \Hipstershop\OrderResult
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Generated from protobuf field <code>.hipstershop.OrderResult order = 2;</code>
     * @param \Hipstershop\OrderResult $var
     * @return $this
     */
    public function setOrder($var)
    {
        GPBUtil::checkMessage($var, \Hipstershop\OrderResult::class);
        $this->order = $var;

        return $this;
    }

}
