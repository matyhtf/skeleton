<?php

namespace App\Controller;

use SPF;

class Home extends SPF\Controller
{
    function __construct($app)
    {
        parent::__construct($app);
        $this->session->start();
        SPF\Auth::loginRequire();
    }

    function index()
    {
        echo __METHOD__;
    }
}