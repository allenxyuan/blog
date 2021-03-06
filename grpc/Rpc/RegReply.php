<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ai.proto

namespace Rpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *注册人脸返回值
 *
 * Generated from protobuf message <code>rpc.RegReply</code>
 */
class RegReply extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool is_success = 1;</code>
     */
    private $is_success = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $is_success
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ai::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool is_success = 1;</code>
     * @return bool
     */
    public function getIsSuccess()
    {
        return $this->is_success;
    }

    /**
     * Generated from protobuf field <code>bool is_success = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsSuccess($var)
    {
        GPBUtil::checkBool($var);
        $this->is_success = $var;

        return $this;
    }

}

