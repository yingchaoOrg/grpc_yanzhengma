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
use Hyperf\HttpServer\Router\Router;


Router::get('/favicon.ico', function () {
    return '';
});
Router::addServer('http', function () {
    Router::addRoute(['GET', 'POST', 'HEAD'], '/', 'App\Controller\IndexController@index');

});

Router::addServer('grpc', function () {
    Router::addGroup('/Grpc.Sms', function () {
        Router::post('/SendVerify', 'App\Controller\SendVerifyController@handle');
    });
});
