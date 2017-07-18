<?php

// 注册自加载
spl_autoload_register('autoload');

function autoload($class)
{
    require __DIR__ . '//..//' . str_replace('\\', '/', $class) . '.php';
}

use Observer\Observable;
use Observer\ObserverExampleOne;
use Observer\ObserverExampleTwo;

/**
 * php观察者模式：
 *
 * 当一个对象的状态发生改变时
 * 所有依赖于它的对象都得到通知并被自动更新
 * 观察者观察被观察者，被观察者通知观察者
 */
// 注册一个被观察者对象
$observable = new Observable();

// 注册观察者们
$observerExampleOne = new ObserverExampleOne();
$observerExampleTwo = new ObserverExampleTwo();

// 附加观察者
$observable->attach($observerExampleOne);
$observable->attach($observerExampleTwo);

// 被观察者通知观察者们
$observable->notify();