<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class PegawaiSeeder extends Seeder
{
	public function run()
	{
		$data = [
			[
				'nama'          =>  'Anton Prakarsa',
				'jenis_kelamin' =>  'pria',
				'no_telp'       =>  '081234555678',
				'tanggal_lahir' =>  '1990-01-01',
				'alamat'        =>  'Jl.Mawar No. 70 Wonoayu Sidoarjo',
				'email'         =>  'budi.prakarsa@gmail.com',
				'created_at' => Time::now()
			],
			[
				'nama'          =>  'Dita Anggraini',
				'jenis_kelamin' =>  'wanita',
				'no_telp'       =>  '08787654321',
				'tanggal_lahir' =>  '1992-11-11',
				'alamat'        =>  'Jl.Melati No. 150 Buduran Sidoarjo',
				'email'         =>  'dita.anggraini@gmail.com',
				'created_at' => Time::now()
			]
		];
		$this->db->table('pegawai')->insertBatch($data);
	}
}
