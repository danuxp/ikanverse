<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_user'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'auto_increment' => true
            ],
            'username'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '125'
            ],
            'password'       => [
                'type'           => 'TEXT',
            ],
            'role'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '10'
            ],



        ]);

        // Membuat primary key
        $this->forge->addKey('id_user', TRUE);

        // Membuat tabel news
        $this->forge->createTable('tbl_user', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('tbl_user');
    }
}
