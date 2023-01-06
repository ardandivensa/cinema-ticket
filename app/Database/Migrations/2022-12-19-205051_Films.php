<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Films extends Migration
{
    public function up()
    {
        // Membuat kolom/field untuk tabel films
        $this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'title'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'category'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true,
			],
			'producer'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true,
			],
			'director'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true,
			],
			'writer'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true,
			],
			'production'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true,
			],
			'content' => [
				'type'           => 'TEXT',
				'null'           => true,
			],
			'thumbnail'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true,
			],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'
			// 'author'      => [
			// 	'type'           => 'VARCHAR',
			// 	'constraint'     => 100,
			// 	'default'        => 'John Doe',
			// ],
			// 'status'      => [
			// 	'type'           => 'ENUM',
			// 	'constraint'     => ['published', 'draft'],
			// 	'default'        => 'draft',
			// ],
		]);

        // Membuat primary key
        $this->forge->addKey('id', TRUE);
        // Membuat tabel films
        $this->forge->createTable('films', TRUE);
    }

    public function down()
    {
        // menghapus tabel films
		$this->forge->dropTable('films');
    }
}
