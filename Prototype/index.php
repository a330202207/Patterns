<?php

// 注册自加载
spl_autoload_register('autoload');

function autoload($class)
{
    require __DIR__ . '//..//' . str_replace('\\', '/', $class) . '.php';
}

use Prototype\Canvas;

/**
 * php原型模式：
 *
 * 动态的添加修改类的功能
 * 一个类提供了一项功能，如果要在修改并添加额外的功能，传统编程模式，需要写一个子类继承它，并重新实现类的方法
 * 使用装饰器模式，仅需在运行时添加一个装饰器对象就可实现，可以实现最大的灵活性
 */
$prototype = new Canvas();
$prototype->init();


$canvas1 = clone $prototype;
$canvas1->rect(3, 6, 4, 12);
$canvas1->draw();

echo "=====================<br />";

$canvas2 = clone $prototype;
$canvas2->rect(1, 3, 2, 6);
$canvas2->draw();