<?php

// 注册自加载
spl_autoload_register('autoload');

function autoload($class)
{
    require __DIR__ . '//..//' . str_replace('\\', '/', $class) . '.php';
}

use Register\Register;
use Register\Factory;

/**
 *
 * php注册器模式：
 *
 * 把很多类的实例，起个别名，然后按照 key，value的形式放在注册器类里，以便之后统一调用
 *
 * 只需要构造一次，只需要在注册器上拿到
 */
$db = Factory::creactDatabase();

$db1 = Register::get('db1');

//var_dump($db1);