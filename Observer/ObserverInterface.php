<?php
namespace Observer;

interface ObserverInterface
{
    /**
     * 行为
     * @return void
     */
    public function doSomething(ObservableInterface $observable);
}