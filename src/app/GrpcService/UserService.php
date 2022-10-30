<?php

namespace App\GrpcService;

use App\Grpc\UserClient;

class UserService implements UserServiceInterface
{

    public $client;

    public function __construct()
    {
        dump(__CLASS__);
        $this->client = new UserClient(env('GRPC_USER', '127.0.0.1:32503'));
    }

}