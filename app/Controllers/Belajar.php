<?php

namespace App\Controllers;

class Belajar extends BaseController
{
    public function index()
    {
        echo "ini method index di belajar controller";
    }

    public function halo()
    {

        $data['nama_web'] = "FirmanCoding";
        return view('belajar/view_belajar', $data);
    }
}
