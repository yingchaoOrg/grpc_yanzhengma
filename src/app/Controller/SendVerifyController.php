<?php

namespace App\Controller;

use App\Service\Rlist;
use Grpc\Common\ResultMessage\ResultCode;
use Grpc\Sms\Request\SendVerify;
use Grpc\User\Common\UserInfo;
use Grpc\User\Request\UserLogin;
use Grpc\User\Response\Login;


/**
 * 发送验证码
 *
 */
class SendVerifyController extends BaseController
{

    public function handle(SendVerify $data): \Grpc\Sms\Response\SendVerify
    {
        $code = rand(1500, 9998);
        Rlist::add($data->getPhone(), $code);
        $reData = new \Grpc\Sms\Response\SendVerify();
        $reData->setCode($code);

        return $this->reutrnData(ResultCode::SUCCESS, '获取验证码成功', $reData);

    }

}