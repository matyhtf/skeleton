<?php

namespace App\Controller;

use SPF;
use SPF\Exception\InvalidParam;

class Form extends SPF\Controller
{
    function index()
    {
        $this->app->addCatcher(function ($e) {
            if ($e instanceof InvalidParam) {
                die("缺少 {$e->key} 表单.");
            } else {
                return false;
            }
        });

        $this->validate($this->request->get, array(
            'name' => 'required',
            'date' => 'date',
            'id' => 'required|int',
            'mobile' => 'required|mobile',
            'email' => 'required|email',
        ));

        var_dump($this->request->get);
    }
}