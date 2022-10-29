<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */

namespace App\Controller;

use App\Service\Rlist;

use function Hyperf\ViewEngine\view;

class IndexController extends AbstractController
{

    public function index()
    {
        Rlist::add('1506666' . rand(1000, 9999), rand(10000, 99999));
        $list = $this->cache->get('list', []);


        return view('index', [ 'list' => $list ]);
    }

}
