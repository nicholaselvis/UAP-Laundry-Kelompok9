<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDaftarKasirTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'          => 'INT',
                'constraint'    => '5',
                'unsigned'      => true,
                'auto_increment'=> true,
            ],
            'nama' => [
                'type'          => 'VARCHAR',
                'constraint'    => '50',
                'null'          => true,
            ],
            'umur' => [
                'type'          => 'INT',
                'constraint'    => '10',
                'null'          => true,
            ],
            'jeniskelamin' => [
                'type'          => 'VARCHAR',
                'constraint'    => '10',
                'null'          => true,
            ]
              
        ]);

        $this->forge->addKey('id', true, true);
        $this->forge->createTable('daftar_kasir');
    }

    public function down()
    {
        $this->forge->dropTable('daftar_kasir', true);
    }
}
