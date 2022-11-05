<?php

namespace App\Controller;



use Psr\SimpleCache\CacheInterface;
use YcGrpc\YZMProto\Common\ResultMessage;
use Hyperf\Di\Annotation\Inject;
/**
 *
 * 处理返回数据
 */
abstract class BaseController
{

    protected $returnClass;

    /**
     * @inject
     * @var CacheInterface
     */
    protected $cache;

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