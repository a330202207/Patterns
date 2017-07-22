<?php
// 注册自加载
spl_autoload_register('autoload');

function autoload($class)
{
    require __DIR__ . '//..//' . str_replace('\\', '/', $class) . '.php';
}


use Strategy\Page;
use Strategy\FemaleUserStrategy;
use Strategy\MaleUserStrategy;

$page = new Page();


/**
*
* 使用策略模式，会解耦
* 如果新增一个类，只需要下面新增加一个策略(if else)
*
*/
if (isset($_GET['female'])) {
	$strategy = new FemaleUserStrategy();
} else {
	$strategy = new MaleUserStrategy();
}

$page->setStrategy($strategy);
$page->index();
