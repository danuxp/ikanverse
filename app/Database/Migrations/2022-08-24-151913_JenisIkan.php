<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class JenisIkan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_jenis'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'auto_increment' => true
            ],
            'nama_jenis_ikan'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '100'
            ],

        ]);

        // Membuat primary key
        $this->forge->addKey('id_jenis', TRUE);

        // Membuat tabel news
        $this->forge->createTable('tbl_jenisikan', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('tbl_jenisikan');
    }
}
