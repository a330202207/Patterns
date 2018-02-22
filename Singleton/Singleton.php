<?php
namespace Singleton;

class Singleton
{

	/**
	* 自身实例
	*
	* @var object
	*/
	protected static $_instance;


	/**
	* 构造函数
	*
	*/
	private function __construct()
	{

     	}

	/**
	* 魔法方法
	* 禁止clone对象
	*
	* @return string
	*/
	public function __clone()
    	{
        	echo 'clone is forbidden';
    	}

	/**
	* 获取实例
	*
	* @return object
	*/
	static function getInstance()
	{
		if (!self::$_instance instanceof self) {
		    self::$_instance = new self;
		}
		return self::$_instance;
	}

	/**
	* 测试方法
	*
	* @return string
	*/
	public function test()
	{
		echo "这是个测试 \n";
	}
}
