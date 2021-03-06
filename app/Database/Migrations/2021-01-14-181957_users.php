<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
	public function up(){
		$this->forge->addField([
			'id' => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => TRUE,
				'auto_increment' => TRUE
			],
			'name'=> [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'email' => [
				'type'           => 'TEXT',
				'null'           => TRUE,
			],
			'mobile'=> [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
	]);
		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('users');
	}

	
	public function down()
	{
		$this->forge->dropTable('users');
	}
}
