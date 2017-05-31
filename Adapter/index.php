<?php


$host = '127.0.0.1';
$user = 'root';
$passwd = 'root';
$dbname = 'test';
$sql = 'show database';


/**
*
*  调用三种不同的数据库，只需要同一种方法
*  
*/
//$db = new Adapter\MySQL();
//$db = new Adapter\MySQLi();
$db = new Adapter\PDO();


$db->connect($host, $user, $passwd, $dbname);
$db->query($sql);
$db->close();