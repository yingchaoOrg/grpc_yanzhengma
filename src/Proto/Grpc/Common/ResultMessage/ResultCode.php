<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: grpccommon.proto

namespace Grpc\Common\ResultMessage;

use UnexpectedValueException;

/**
 * Protobuf type <code>Grpc.Common.ResultMessage.ResultCode</code>
 */
class ResultCode
{
    /**
     * 成功
     *
     * Generated from protobuf enum <code>SUCCESS = 0;</code>
     */
    const SUCCESS = 0;
    /**
     * 出错
     *
     * Generated from protobuf enum <code>ERROR = 1;</code>
     */
    const ERROR = 1;
    /**
     * 没有权限
     *
     * Generated from protobuf enum <code>AUTH = 3;</code>
     */
    const AUTH = 3;
    /**
     * 警告
     *
     * Generated from protobuf enum <code>WARNING = 4;</code>
     */
    const WARNING = 4;
    /**
     * 服务器错误
     *
     * Generated from protobuf enum <code>SERVER_ERROR = 999;</code>
     */
    const SERVER_ERROR = 999;

    private static $valueToName = [
        self::SUCCESS => 'SUCCESS',
        self::ERROR => 'ERROR',
        self::AUTH => 'AUTH',
        self::WARNING => 'WARNING',
        self::SERVER_ERROR => 'SERVER_ERROR',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ResultCode::class, \Grpc\Common\ResultMessage_ResultCode::class);
