<?php

namespace App\Service;

use Hyperf\Utils\ApplicationContext;
use Psr\SimpleCache\CacheInterface;

class Rlist
{

    static public function add($phone, $code)
    {
        /**
         * @var CacheInterface $cache
         */
        $cache = ApplicationContext::getContainer()->get(CacheInterface::class);
        $old   = (array)$cache->get('list', []);
        $old[$phone] = [ $phone, $code ];
        if (count($old) > 20) {
            $old = array_slice($old, -17);
        }
        $cache->set('list', $old);

        return $old;
    }

}