<?php

namespace App\Model;

use SPF;

class User extends SPF\Model
{
    /**
     * 表名
     * @var string
     */
    public $table = 'users';

    function test()
    {
        $a = model('Test');
        $key = '1234';
        $this->swoole->cache->delete($key);
        $this->db->getAffectedRows();
    }
}