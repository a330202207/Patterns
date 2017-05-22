<?php

/**
*
*  如果 Database 发生了改变
*  多个调用处需要跟着改变
*/
$db = new \Factory\Database();


/**
* 
* 如果使用工厂模式，只需要在 Database 方法中修改
*
*/
$db = \Factory\Factory::creactDatabase();