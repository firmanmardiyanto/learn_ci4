<?php

namespace App\Controllers;

class Web extends BaseController
{

    function __construct()
    {
        helper('url');
    }

    public function index()
    {
        $data = array(
            'judul' => "Halaman Depan",
        );
        echo view('belajar/v_header', $data);
        echo view('belajar/v_index', $data);
        echo view('belajar/v_footer', $data);
    }
}
