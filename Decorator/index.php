<?php

// 注册自加载
spl_autoload_register('autoload');

function autoload($class)
{
    require __DIR__ . '//..//' . str_replace('\\', '/', $class) . '.php';
}

use Decorator\Canvas;
use Decorator\ColorDrawDecorator;
use Decorator\SizeDrawDecorator;

/**
 * php装饰器模式
 *
 * 动态的添加修改类的功能
 * 一个类提供了一项功能，如果要在修改并添加额外的功能，传统编程模式，需要写一个子类继承它，并重新实现类的方法
 * 使用装饰器模式，仅需在运行时添加一个装饰器对象就可实现，可以实现最大的灵活性
 * 和适配器的区别：适配器是连接两个接口，装饰器是对现有的对象包装
 */
$prototype = new Canvas();
$prototype->init();

$canvas = clone $prototype;

$canvas->addDecorator(new ColorDrawDecorator('green'));	//改变颜色
$canvas->addDecorator(new SizeDrawDecorator('10px'));		//改变大小

$canvas->rect(3, 6, 4, 12);
$canvas->draw();	
