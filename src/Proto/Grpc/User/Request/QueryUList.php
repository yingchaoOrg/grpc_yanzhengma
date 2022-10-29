<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: grpcuser.proto

namespace Grpc\User\Request;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *查找用户列表
 *
 * Generated from protobuf message <code>Grpc.User.Request.QueryUList</code>
 */
class QueryUList extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Grpc.Common.Page page = 1;</code>
     */
    protected $page = null;
    /**
     * 用户名,昵称查找
     *
     * Generated from protobuf field <code>string query = 2;</code>
     */
    protected $query = '';
    /**
     * uin查找
     *
     * Generated from protobuf field <code>int64 uin = 3;</code>
     */
    protected $uin = 0;
    /**
     * userid 查找
     *
     * Generated from protobuf field <code>string uid = 4;</code>
     */
    protected $uid = '';
    /**
     *使用uin列表获取
     *
     * Generated from protobuf field <code>repeated int64 uins = 5;</code>
     */
    private $uins;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Grpc\Common\Page $page
     *     @type string $query
     *           用户名,昵称查找
     *     @type int|string $uin
     *           uin查找
     *     @type string $uid
     *           userid 查找
     *     @type int[]|string[]|\Google\Protobuf\Internal\RepeatedField $uins
     *          使用uin列表获取
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Grpcuser::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Grpc.Common.Page page = 1;</code>
     * @return \Grpc\Common\Page
     */
    public function getPage()
    {
        return isset($this->page) ? $this->page : null;
    }

    public function hasPage()
    {
        return isset($this->page);
    }

    public function clearPage()
    {
        unset($this->page);
    }

    /**
     * Generated from protobuf field <code>.Grpc.Common.Page page = 1;</code>
     * @param \Grpc\Common\Page $var
     * @return $this
     */
    public function setPage($var)
    {
        GPBUtil::checkMessage($var, \Grpc\Common\Page::class);
        $this->page = $var;

        return $this;
    }

    /**
     * 用户名,昵称查找
     *
     * Generated from protobuf field <code>string query = 2;</code>
     * @return string
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * 用户名,昵称查找
     *
     * Generated from protobuf field <code>string query = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setQuery($var)
    {
        GPBUtil::checkString($var, True);
        $this->query = $var;

        return $this;
    }

    /**
     * uin查找
     *
     * Generated from protobuf field <code>int64 uin = 3;</code>
     * @return int|string
     */
    public function getUin()
    {
        return $this->uin;
    }

    /**
     * uin查找
     *
     * Generated from protobuf field <code>int64 uin = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setUin($var)
    {
        GPBUtil::checkInt64($var);
        $this->uin = $var;

        return $this;
    }

    /**
     * userid 查找
     *
     * Generated from protobuf field <code>string uid = 4;</code>
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * userid 查找
     *
     * Generated from protobuf field <code>string uid = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setUid($var)
    {
        GPBUtil::checkString($var, True);
        $this->uid = $var;

        return $this;
    }

    /**
     *使用uin列表获取
     *
     * Generated from protobuf field <code>repeated int64 uins = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUins()
    {
        return $this->uins;
    }

    /**
     *使用uin列表获取
     *
     * Generated from protobuf field <code>repeated int64 uins = 5;</code>
     * @param int[]|string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUins($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->uins = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(QueryUList::class, \Grpc\User\Request_QueryUList::class);

