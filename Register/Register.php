<?php
namespace Register;

class Register
{
    // 树的枝干-用于储存树上的果实（实例）
    protected static $objects;

    /**
     * 将实例插入注册树中
     *
     * @param $alias 对象别名-注册树中的名称
     * @param $object 对象实例
     */
    static function set($alias, $object)
    {
        self::$objects[$alias] = $object;
    }


    /**
     * 从注册树中读取实例
     *
     * @param $alias 对象别名-注册树中的名称
     *
     * @return mixed 返回的对象实例
     */
    static function get($alias)
    {
        if (!isset(self::$objects[$alias]))
        {
            echo '您要找的对象实例不存在!<br>';
        }

        return self::$objects[$alias];
    }

    /**
     * 销毁注册树中的实例
     *
     * @param $alias 对象别名-注册树中的名称
     */
    function _unset($alias)
    {
        unset(self::$objects[$alias]);
    }
}