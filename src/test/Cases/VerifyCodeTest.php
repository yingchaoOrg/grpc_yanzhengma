<?php

namespace HyperfTest\Cases;

use App\Controller\LoginController;
use App\Controller\SendVerifyController;
use Grpc\Common\ResultMessage\ResultCode;
use Grpc\Sms\Request\SendVerify;
use PHPUnit\Framework\TestCase;
use YcGrpc\YZMService\Service;


/**
 * 登陆测试
 *
 * @cli composer testclass test/Cases/VerifyCodeTest.php
 */
class VerifyCodeTest extends TestCase
{

    public function testExample()
    {
        $sk = time();
        $server = new Service();
        $reply  =  $server->verifyCode($sk);
        $this->assertEquals('image/png',$reply->getMine());
        dump($reply->getMine());
        dump($reply->getCode());
        $code = $reply->getCode();
        $reply = $server->checkCode($sk,$code.'1');
        $this->assertFalse($reply->getCheckResult());

    }

    public function testExample2()
    {
        $sk = time();
        $server = new Service();
        $reply  =  $server->verifyCode($sk);
        $this->assertEquals('image/png',$reply->getMine());
        dump($reply->getMine());
        dump($reply->getCode());
        $code = $reply->getCode();
        $reply = $server->checkCode($sk,$code);
        $this->assertTrue($reply->getCheckResult());

    }

}