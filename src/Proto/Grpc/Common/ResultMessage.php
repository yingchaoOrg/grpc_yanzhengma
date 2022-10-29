<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: grpccommon.proto

namespace Grpc\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * 返回消息
 *
 * Generated from protobuf message <code>Grpc.Common.ResultMessage</code>
 */
class ResultMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Grpc.Common.ResultMessage.ResultCode code = 1;</code>
     */
    protected $code = 0;
    /**
     * Generated from protobuf field <code>string msg = 2;</code>
     */
    protected $msg = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $code
     *     @type string $msg
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Grpccommon::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Grpc.Common.ResultMessage.ResultCode code = 1;</code>
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Generated from protobuf field <code>.Grpc.Common.ResultMessage.ResultCode code = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCode($var)
    {
        GPBUtil::checkEnum($var, \Grpc\Common\ResultMessage\ResultCode::class);
        $this->code = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string msg = 2;</code>
     * @return string
     */
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     * Generated from protobuf field <code>string msg = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setMsg($var)
    {
        GPBUtil::checkString($var, True);
        $this->msg = $var;

        return $this;
    }

}

