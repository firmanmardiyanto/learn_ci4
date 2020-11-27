<?php

namespace App\Controllers;

class Siswa extends BaseController
{
    public function index()
    {
        return view('formSiswa');
    }

    public function save()
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'valid_email' => 'Format Email Harus Valid'
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ]
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        } else {
            print_r($this->request->getVar());
        }
    }

    public function profil()
    {
        echo 'Ini adalah method profil di controller Siswa';
    }

    public function dataSiswa($nama, $usia)
    {
        echo "Nama Siswa Adalah $nama, usia $usia";
    }

    public function siswaDataId($id)
    {
        echo "Ini adalah method dengan nama siswaDataId dengan ID $id";
    }

    public function siswaDataName($name)
    {
        echo "Ini adalah method dengan nama siswaDataName dengan Name $name";
    }
}
