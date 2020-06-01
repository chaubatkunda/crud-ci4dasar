<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Testimonial extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_testimonial'     => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => TRUE,
				'auto_increment' => TRUE
			],
			'nama'       	=> [
				'type'          => 'VARCHAR',
				'constraint'    => '100',
			],
			'deskripsi' => [
				'type'           => 'TEXT',
				'null'           => TRUE,
			],
			'image' => [
				'type'           	=> 'VARCHAR',
				'constraint'    	=> '255',
			],
		]);
		$this->forge->addKey('id_testimonial', TRUE);
		$this->forge->createTable('testimonial');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('testimonial');
	}
}
