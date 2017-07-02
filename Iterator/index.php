<?php

/**
 * 迭代器模式
 *
 * 在不需要了解内部实现的前提下，遍历一个聚合对象的内部元素
 * 相比传统的编程模式，迭代器模式可以隐藏遍历元素的所需的操作
 */
$users = new \Iterator\AllUser();
foreach ($users as $user) 
{
	var_dump($user->name);
	$user->serial_no = rand(10000, 90000);
}