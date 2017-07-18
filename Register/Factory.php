<?php
namespace Register;

class Factory
{
	static function creactDatabase()
	{
		$db = Database::getInstance();
		//将 db 映射到全局树上，db1为别名
		Register::set('db1', $db);
		return $db;
	}
}




