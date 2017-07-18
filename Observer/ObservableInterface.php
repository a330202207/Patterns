<?php
namespace Observer;

interface ObservableInterface
{
    /**
     * 附加观察者
     * @return void
     */
    public function attach(ObserverInterface $observer);

    /**
     * 解除观察者
     * @return void
     */
    public function detach(ObserverInterface $observer);

    /**
     * 通知观察者
     * @return void
     */
    public function notify();
}