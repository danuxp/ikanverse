<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Olahbibit extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'auto_increment' => true
            ],
            'olahbibit'       => [
                'type'           => 'TEXT',
                'null'           => true
            ],
            'id_bibit'      => [
                'type'           => 'INT',
                'constraint'     => '5',
            ],
        ]);

        // Membuat primary key
        $this->forge->addKey('id', TRUE);

        // Membuat tabel news
        $this->forge->createTable('tbl_olahbibit', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('tbl_olahbibit');
    }
}
