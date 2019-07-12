<?php
namespace App\Controller;

use SPF;

class Event extends SPF\Controller
{
    function test()
    {
        echo "event trigger\n";
        $res = $this->event->trigger("hello", array($this->redis->getIncreaseId('queue'), "hello world", __DIR__));
        echo "event trigger\n";
    }
}