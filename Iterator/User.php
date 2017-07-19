<?php
namespace Iterator;


class User
{
    /**
     * 用户集合
     * @var
     */
    private $_users = [];
    /**
     * 魔法方法
     *
     * @param  string $name 属性名称
     * @return mixed
     */
    public function __get($name = '')
    {
        $name = '_' . $name;
        return $this->$name;
    }
    /**
     * 添加用户
     * @param string $name
     */
    public function addUser($name = '')
    {
        $this->_users[] = $name;
    }
    /**
     * 获取用户迭代器
     *
     * @return mixed
     */
    public function getIterator()
    {
        return new UserIterator($this);
    }
}