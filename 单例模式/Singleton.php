<?php
/**
 * Created by PhpStorm.
 * User: songchangchang1296
 * Date: 2019/2/21
 * Time: 14:22
 */

class Singleton
{
    /**
     * 定义私有静态变量
     */
    private static $instance;

    /**
     * 定义私有构造函数  保证外部不能直接new实例化它
     */
    private function __construct()
    {

    }

    /**
     * 定义公有静态方法 返回此类的唯一实例 （静态保证了外部调用的时候不需要实例化就可以直接调用）
     */
    public static function getInstance()
    {
        //判断变量是否已经被实例化过  保证只被实例化过一次
        if (is_null(self::$instance)) {
            self::$instance = new Singleton();
        }
    }

    /**
     * 防止用户克隆实例
     */
    public function __clone()
    {
        die('Clone is not allowed');
    }

    /**
     * 测试
     */
    public function test()
    {
        echo 'Singleton Test ok';
    }
}