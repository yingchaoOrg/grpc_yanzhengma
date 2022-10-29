<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: grpcsms.proto

namespace Grpc\Sms\Request\SendVerify;

use UnexpectedValueException;

/**
 * Protobuf type <code>Grpc.Sms.Request.SendVerify.TypeCate</code>
 */
class TypeCate
{
    /**
     * 注册验证码
     *
     * Generated from protobuf enum <code>REG = 0;</code>
     */
    const REG = 0;
    /**
     *  登陆验证码
     *
     * Generated from protobuf enum <code>LOGIN = 1;</code>
     */
    const LOGIN = 1;
    /**
     * 资金操作验证码
     *
     * Generated from protobuf enum <code>FUND = 2;</code>
     */
    const FUND = 2;
    /**
     * 敏感操作权限验证
     *
     * Generated from protobuf enum <code>AUTH = 3;</code>
     */
    const AUTH = 3;

    private static $valueToName = [
        self::REG => 'REG',
        self::LOGIN => 'LOGIN',
        self::FUND => 'FUND',
        self::AUTH => 'AUTH',
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
class_alias(TypeCate::class, \Grpc\Sms\Request_SendVerify_TypeCate::class);

