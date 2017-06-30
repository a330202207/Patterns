<?php
/**
 * 
 * php原型模式
 * 用于创建对象成本过高时
 *
 * 与工厂模式作用类似，都是用来创建对象
 * 与工厂模式的实现不一样，原型模式是先创建好一个原型对象，然后通过clone原型对象来创建新的对象，这样就免去了类创建时重复的初始化操作
 * 原型模式适用于大对象的创建。创建一个大对象需要很大的开销，如果每次new就会消耗很大，原型模式仅需内存拷贝即可
 */
$prototype = new \Canvas(); 
$prototype->init();

$canvas1 = clone $prototype;
$canvas1->rect(3, 6, 4, 12);

$canvas2 = clone $prototype;
$canvas2->rect(1, 3, 2, 6);