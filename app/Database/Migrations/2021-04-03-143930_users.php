<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'nama'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'email'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'password'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'alamat'       => [
				'type'           => 'TEXT',
			],
			'nohp'       => [
				'type'           => 'VARCHAR',
				'constraint'	 => '255'
			],
		]);

		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('users', TRUE);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('users');
	}
}
