<?php

// 注册自加载
spl_autoload_register('autoload');

function autoload($class)
{
    require __DIR__ . '//..//' . str_replace('\\', '/', $class) . '.php';
}

use Factory\Factory;

/**
 * php工厂模式：
 *
 * 创建对象时不会对客户端暴露创建逻辑，并且是通过使用一个共同的接口来指向新创建的对象
 * 如果 Database 发生了改变
 * 多个调用处需要跟着改变
 */
$db = new \Factory\Database();
$db->test();

/**
*
* 如果使用工厂模式，只需要在 Database 方法中修改
*
*/
$db = Factory::creactDatabase();
$db->test();
