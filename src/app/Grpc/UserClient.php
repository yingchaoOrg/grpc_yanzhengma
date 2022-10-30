<?php

namespace App\Grpc;

use Grpc\User\Request\UserLogin;
use Grpc\User\Response\Login;
use Hyperf\GrpcClient\BaseClient;

class UserClient extends BaseClient
{



    public function login(UserLogin $argument)
    {
        return $this->_simpleRequest(
            '/Grpc.User/Login',
            $argument,
            [ Login::class, 'decode' ]
        );
    }

}
