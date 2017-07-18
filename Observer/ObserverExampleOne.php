<?php
namespace Observer;

class ObserverExampleOne implements ObserverInterface
{
    /**
     * 行为
     * @return mixed
     */
    public function doSomething(ObservableInterface $observable)
    {
        echo $observable->_name . "通知了观察者1 \n";
    }
}