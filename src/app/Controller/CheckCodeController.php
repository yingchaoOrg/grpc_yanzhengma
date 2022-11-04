<?php

namespace App\Controller;


use YcGrpc\YZMProto\Common\ResultMessage\ResultCode;
use YcGrpc\YZMProto\Request\CheckCode;

/**
 *
 * 验证验证码
 *
 */
class CheckCodeController extends BaseController
{
    protected $returnClass= \YcGrpc\YZMProto\Response\CheckCode::class;

    public function index(CheckCode $checkCode): \YcGrpc\YZMProto\Response\CheckCode
    {
        $sk = $checkCode->getSk();
        $code = $checkCode->getCode();
        if(empty($code)){
            return $this->reutrnData(ResultCode::ERROR,'验证码不能为空！');
        }



        $old = $this->cache->get('yan' . $sk);

        $rr = new \YcGrpc\YZMProto\Response\CheckCode();
        $rr->setCheckResult($old == $code);

        return $this->reutrnData(ResultCode::SUCCESS,'',$rr);
    }

}