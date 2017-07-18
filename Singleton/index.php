<?php

// 注册自加载
spl_autoload_register('autoload');

function autoload($class)
{
    require __DIR__ . '//..//' . str_replace('\\', '/', $class) . '.php';
}

use Singleton\Singleton;

/**
* 单例模式：
* 单例类只能有一个实例
* 单例类必须自己创建自己的唯一实例
* 单例类必须给所有其他对象提供这一实例
*/
$instance = Singleton::getInstance();

//无论调用多少次，实际上只实例了一次
$instance->test();
$instance->test();

// clone对象试试
$dbClone = clone $instance;