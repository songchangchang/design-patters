<?php

require_once 'FactoryMan.php';
require_once 'FactoryWoman.php';

class client
{
    //定义静态方法 不用实例化类就可以直接调用
    public static function test()
    {
        $factoryMan = new FactoryMan();
        $man = $factoryMan->create();
        $man->say();

        $factoryWoman = new FactoryWoman();
        $woman = $factoryWoman->create();
        $woman->say();
    }
}

Client::test();