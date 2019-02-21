<?php
/**
 * Created by PhpStorm.
 * User: songchangchang1296
 * Date: 2019/2/21
 * Time: 14:42
 */
use danli\Singleton;

class Client
{
    public static function main()
    {
        $instance = Singleton::getInstance();
        $instance->test();
    }
}

Client::main();