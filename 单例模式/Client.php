<?php
/**
 * Created by PhpStorm.
 * User: songchangchang1296
 * Date: 2019/2/21
 * Time: 14:42
 */
require_once 'Singleton.php';

class Client
{
    public function main()
    {
        $instance = Singleton::getInstance();
        $instance->test();
    }
}

$demo = new Client();
$demo->main();