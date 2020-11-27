<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddEmailPegawai extends Migration
{
	public function up()
	{
		$this->forge->addColumn('pegawai', [
			'email' => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
				'after'          => 'alamat'
			]
		]);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropColumn('pegawai', 'email');
	}
}
