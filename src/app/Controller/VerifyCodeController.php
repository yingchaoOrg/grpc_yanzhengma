<?php

namespace App\Controller;


use YcGrpc\YZMProto\Common\ResultMessage\ResultCode;
use YcGrpc\YZMProto\Request\VerifyCode;

/**
 * 获取验证码
 */
class VerifyCodeController extends BaseController
{

    public function index(VerifyCode $verifyCode): \YcGrpc\YZMProto\Response\VerifyCode
    {
        $sk = $verifyCode->getSk();


        $config = new \EasySwoole\VerifyCode\Conf();
        $code   = new \EasySwoole\VerifyCode\VerifyCode($config);


        //系统验证码
        $result   = $code->DrawCode();
        $img_code = $result->getImageCode();
        $mine     = $result->getImageMime();
        $this->cache->set('yan' . $sk, $img_code, 600);

        $rr = new \YcGrpc\YZMProto\Response\VerifyCode();
        $rr->setData($result->getImageByte());
        $rr->setMine($mine);

        return $this->reutrnData(ResultCode::SUCCESS, '', $rr);
    }

}