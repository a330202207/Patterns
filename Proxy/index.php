<?php
/**
 * php代理模式：
 *
 * 在客户端与实体之间建立一个代理对象（proxy），客户端对实体进行操作全部委派给代理对象，隐藏实体的具体实现细节
 * Proxy 还可以与业务代码分离，部署到另外的服务器。业务代码中通过RPC来委派任务
 */
$proxy = new \Proxy\Proxy();
$proxy->getUserName($id);
$proxy->setUserName($id, $proxy);