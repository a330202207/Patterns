<?php
// 注册自加载
spl_autoload_register('autoload');

function autoload($class)
{
    require __DIR__ . '//..//' . str_replace('\\', '/', $class) . '.php';
}

use Iterator\User;

/**
 * php迭代器模式：
 *
 * 在不需要了解内部实现的前提下，遍历一个聚合对象的内部元素
 * 相比传统的编程模式，迭代器模式可以隐藏遍历元素的所需的操作
 */
$user = new User();

$user->addUser('张三');
$user->addUser('李四');
$user->addUser('王五');
$user->addUser('赵六');

$iterator = $user->getIterator();

do {
    $iterator->current();
} while ($iterator->hasNext());