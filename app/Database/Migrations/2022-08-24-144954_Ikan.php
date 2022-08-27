<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Ikan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_ikan'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'auto_increment' => true
            ],
            'nama_ikan'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '155'
            ],
            'harga'      => [
                'type'           => 'VARCHAR',
                'constraint'     => '50',
            ],
            'gambar' => [
                'type'           => 'TEXT',
                'null'           => true,
            ],
            'tersedia'      => [
                'type'           => 'INT',
                'constraint'     => '1',
                'null'        => true
            ],
            'stok'      => [
                'type'           => 'VARCHAR',
                'constraint'     => '20',
            ],
            'id_jenis' => [
                'type' => 'INT',
                'contraint' => 5
            ]
        ]);

        // Membuat primary key
        $this->forge->addKey('id_ikan', TRUE);

        // Membuat tabel news
        $this->forge->createTable('tbl_ikan', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('tbl_ikan');
    }
}
