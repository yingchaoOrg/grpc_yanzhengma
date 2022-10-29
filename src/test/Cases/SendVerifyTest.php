<?php

namespace HyperfTest\Cases;

use App\Controller\LoginController;
use App\Controller\SendVerifyController;
use Grpc\Common\ResultMessage\ResultCode;
use Grpc\Sms\Request\SendVerify;
use PHPUnit\Framework\TestCase;


/**
 * 登陆测试
 *
 * @cli composer testclass test/Cases/SendVerifyTest.php
 */
class SendVerifyTest extends TestCase
{

    public function testExample()
    {
        $userLogin = new SendVerify();
        $userLogin->setPhone(13034634429);


        $login = new SendVerifyController();
        $re    = $login->handle($userLogin);
        dump($re->serializeToJsonString());
        $this->assertEquals($re->getResult()->getCode(), ResultCode::SUCCESS);
    }

}