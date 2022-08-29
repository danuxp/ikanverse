<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PengolahanIkan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'auto_increment' => true
            ],
            'cara_pengolahan'       => [
                'type'           => 'TEXT',
                'null'           => true
            ],
            'id_ikan'      => [
                'type'           => 'INT',
                'constraint'     => '5',
            ],
        ]);

        // Membuat primary key
        $this->forge->addKey('id', TRUE);

        // Membuat tabel news
        $this->forge->createTable('tbl_pengolahan', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('tbl_pengolahan');
    }
}
