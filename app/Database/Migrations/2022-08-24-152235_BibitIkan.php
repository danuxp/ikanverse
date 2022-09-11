<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class BibitIkan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_bibit'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'auto_increment' => true
            ],
            'nama_bibit'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '225'
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
        $this->forge->addKey('id_bibit', TRUE);

        // Membuat tabel news
        $this->forge->createTable('tbl_bibitikan', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('tbl_bibitikan');
    }
}
