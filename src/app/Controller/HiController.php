<?php

namespace App\Controller;

use Grpc\HiReply;
use Grpc\HiUser;

class HiController
{

    public function sayHello(HiUser $user)
    {
        $message = new HiReply();
        $message->setMessage("Hello World".time());
        $message->setUser($user);

        return $message;
    }


}