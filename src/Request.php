<?php
/**
 * Created by PhpStorm.
 * User: 王杰
 * Mail: laraveler@163.com
 * Date: 2016/8/18
 * Time: 22:43
 */

namespace Ymwlpay\Swoole;


class Request
{
    public $swoole_http_server;
    public $kernel;

    public function __construct($host = '0.0.0.0',$port = '9002')
    {
        $this -> swoole_http_server = new swoole_http_server($host,$port);
    }


    public function onWorkerStart()
    {
        $this -> kernel = app() -> make(Kernel::class);
    }
}