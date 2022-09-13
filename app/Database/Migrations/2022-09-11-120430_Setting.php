<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Setting extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'auto_increment' => true
            ],
            'nama_perusahaan'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '125',
                'null' => true
            ],
            'alamat'       => [
                'type'           => 'TEXT',
                'null' => true
            ],
            'no_telp'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '15',
                'null' => true
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => true

            ],
            'instagram' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => true
            ],
            'facebook' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => true
            ]

        ]);

        // Membuat primary key
        $this->forge->addKey('id', TRUE);

        // Membuat tabel news
        $this->forge->createTable('tbl_setting', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('tbl_setting');
    }
}
