<?php
// 注册自加载
spl_autoload_register('autoload');

function autoload($class)
{
  require dirname($_SERVER['SCRIPT_FILENAME']) . '//..//' . str_replace('\\', '/', $class) . '.php';
}



use Singleton\Database;

/**
*
* 无论调用多少次，实际上到数据库只有一次连接
*/
$db = Database::getInstance();
$db = \Singleton\Database::getInstance();
$db = \Singleton\Database::getInstance();
