<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */

namespace App\Controller;




use Grpc\Yanzhengma\Request\VerifyCode;
use Hyperf\HttpMessage\Stream\SwooleStream;
use Hyperf\HttpServer\Response;
use Psr\Http\Message\ResponseInterface;

class IndexController extends AbstractController
{
    public function index2( )
    {
        return [time()];
    }

    /**
     * @param Response $response
     * @return ResponseInterface
     */
    public function index( VerifyCode $verifyCode)
    {
        $sk = $verifyCode->getSk();


        $response = $this->response;
        $config = new \EasySwoole\VerifyCode\Conf();
        $code   = new \EasySwoole\VerifyCode\VerifyCode($config);


        //系统验证码
        $result   = $code->DrawCode();
        $img_code = $result->getImageCode();
        $mine     = $result->getImageMime();



        return $result->getImageByte();

    }

}
