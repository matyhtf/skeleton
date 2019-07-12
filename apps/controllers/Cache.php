<?php

namespace App\Controller;

use SPF;

class Cache extends SPF\Controller
{
    function get()
    {
        return $this->json($this->cache->get("test"));
    }

    function set()
    {
        return $this->json($this->cache->set("test", "value", 3600));
    }

    function del()
    {
        return $this->json($this->cache->delete("test"));
    }
}
