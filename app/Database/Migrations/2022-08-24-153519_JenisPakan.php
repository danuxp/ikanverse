<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class JenisPakan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'auto_increment' => true
            ],
            'cara_jenispakan'       => [
                'type'           => 'TEXT',
                'null'           => null
            ],
            'id_ikan'      => [
                'type'           => 'VARCHAR',
                'constraint'     => '5',
            ],
            'id_jenis' => [
                'type'           => 'VARCHAR',
                'constraint'     => '5',
            ],
        ]);

        // Membuat primary key
        $this->forge->addKey('id', TRUE);

        // Membuat tabel news
        $this->forge->createTable('tbl_jenispakan', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('tbl_jenispakan');
    }
}
