<?php
class Page extends AnotherClass
{
	protected $strategy;
	function index()
	{
		echo "广告:";
		$this->strategy->showAd();
		echo "<br/>";

		echo "分类:";
		$this->strategy->showCategory();
		echo "<br/>";
	}

	//对外暴露
	function setStrategy(\Strategy\UserStrategy $strategy)
	{
		$this->strategy = $strategy;
	}
}

$page = new Page();


/**
* 
* 使用策略模式，会解耦
* 如果新增一个类，只需要下面新增加一个策略(if else)
*
*/
if (isset($_GET['female'])) 
{
	$strategy = new \Strategy\FemaleUserStrategy();
} else {
	$strategy = new \Strategy\MaleUserStrategy();
}

$page = setStrategy($strategy);