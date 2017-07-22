<?php

// 注册自加载
spl_autoload_register('autoload');

function autoload($class)
{
    require __DIR__ . '//..//' . str_replace('\\', '/', $class) . '.php';
}

$host = '127.0.0.1';
$user = 'root';
$passwd = 'root';
$dbname = 'mytest';
$sql = 'show database';

use Adapter\MySQLi;
use Adapter\PDO;

/**
 *  php适配器模式：
 *
 *  把实现了不同接口的对象通过适配器的方式组合起来放在一个新的环境
 */
$db = new MySQLi();
//调用两种种不同的数据库，只需要同一种方法
//$db = new PDO();


$db->connect($host, $user, $passwd, $dbname);
$db->query($sql);
//var_dump($db);
$db->close();