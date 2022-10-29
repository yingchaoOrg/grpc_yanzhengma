<?php

namespace App\Controller;

use Grpc\User\Common\UserInfo;
use Grpc\User\Request\UserLogin;
use Grpc\User\Response\Login;


/**
 *
 * 登陆控制器
 */
class LoginController
{

    public function handle(UserLogin $userLogin): Login
    {
        $userinfo = new UserInfo();
        $userinfo->setUin(1);
        $re = new Login();
        $re->setUser($userinfo);

        return $re;

    }

}