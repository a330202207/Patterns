<?php
namespace Strategy;

class Page
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
    function setStrategy(UserStrategy $strategy)
    {
        $this->strategy = $strategy;
    }
}