<?php

namespace App\Controllers;

class Welcome extends BaseController
{
    function __construct()
    {
        helper('html');
    }

    public function index()
    {
        $list = [
            'red',
            'blue',
            'green',
            'yellow'
        ];

        $attributes = [
            'class' => 'boldlist',
            'id'    => 'mylist'
        ];

        echo ul($list, $attributes);
    }
}
