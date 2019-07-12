<?php
namespace App\Controller;
use SPF\Controller;

class Ajax extends Controller
{
    public $is_ajax = true;

    function test()
    {
        return array('json' => 'swoole');
    }
}