<?php
namespace Iterator;

class AllUser implements \Iterator
{
    protected $ids;
    protected $data = array();
    protected $index;

    function __construct()
    {
        $db = Factory::getDatabase();
        $result = $db->query("select id from user");
        $this->ids = $result->fetch_all(MYSQLI_ASSOC);
    }

    //当前元素
    function current()
    {
        $id = $this->ids[$this->index]['id'];
        return Factory::getUser($id);
    }

    //下一个元素
    function next()
    {
        $this->index ++;
    }

    //当前是否还有下一个元素
    function valid()
    {
        return $this->index < count($this->ids);
    }

    //重置迭代器
    function rewind()
    {
        $this->index = 0;
    }

    //迭代器中的位置
    function key()
    {
        return $this->index;
    }

}