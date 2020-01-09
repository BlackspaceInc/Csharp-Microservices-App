<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: demo.proto

namespace Hipstershop;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>hipstershop.CreditCardInfo</code>
 */
class CreditCardInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string credit_card_number = 1;</code>
     */
    private $credit_card_number = '';
    /**
     * Generated from protobuf field <code>int32 credit_card_cvv = 2;</code>
     */
    private $credit_card_cvv = 0;
    /**
     * Generated from protobuf field <code>int32 credit_card_expiration_year = 3;</code>
     */
    private $credit_card_expiration_year = 0;
    /**
     * Generated from protobuf field <code>int32 credit_card_expiration_month = 4;</code>
     */
    private $credit_card_expiration_month = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $credit_card_number
     *     @type int $credit_card_cvv
     *     @type int $credit_card_expiration_year
     *     @type int $credit_card_expiration_month
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Demo::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string credit_card_number = 1;</code>
     * @return string
     */
    public function getCreditCardNumber()
    {
        return $this->credit_card_number;
    }

    /**
     * Generated from protobuf field <code>string credit_card_number = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCreditCardNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->credit_card_number = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 credit_card_cvv = 2;</code>
     * @return int
     */
    public function getCreditCardCvv()
    {
        return $this->credit_card_cvv;
    }

    /**
     * Generated from protobuf field <code>int32 credit_card_cvv = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setCreditCardCvv($var)
    {
        GPBUtil::checkInt32($var);
        $this->credit_card_cvv = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 credit_card_expiration_year = 3;</code>
     * @return int
     */
    public function getCreditCardExpirationYear()
    {
        return $this->credit_card_expiration_year;
    }

    /**
     * Generated from protobuf field <code>int32 credit_card_expiration_year = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setCreditCardExpirationYear($var)
    {
        GPBUtil::checkInt32($var);
        $this->credit_card_expiration_year = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 credit_card_expiration_month = 4;</code>
     * @return int
     */
    public function getCreditCardExpirationMonth()
    {
        return $this->credit_card_expiration_month;
    }

    /**
     * Generated from protobuf field <code>int32 credit_card_expiration_month = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setCreditCardExpirationMonth($var)
    {
        GPBUtil::checkInt32($var);
        $this->credit_card_expiration_month = $var;

        return $this;
    }

}
