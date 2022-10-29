<?php

namespace App\Controller;


use Grpc\Common\ResultMessage;
use Grpc\User\Response\Login;

/**
 *
 * 处理返回数据
 */
abstract class BaseController
{

    protected $returnClass;

    /**
     * @param int $code
     * @param string $message
     * @param Login $data
     * @return Login
     */
    public function reutrnData($code, $message, $data = null)
    {
        if (is_null($data)) {
            $data = new $this->returnClass;
        }
        $res = new ResultMessage();
        $res->setCode($code);
        $res->setMsg($message);
        $data->setResult($res);

        return $data;

    }


}