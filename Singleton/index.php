<?php

/**
*
* 无论调用多少次，实际上到数据库只有一次连接
*/
$db = \Singleton\Singleton::getInstance();
$db = \Singleton\Singleton::getInstance();
$db = \Singleton\Singleton::getInstance();
