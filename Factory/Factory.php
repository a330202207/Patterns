<?php
namespace Factory;

class Factory
{
	
	static function creactDatabase()
	{
		$db = new Database();
		return $db;
	}
}




