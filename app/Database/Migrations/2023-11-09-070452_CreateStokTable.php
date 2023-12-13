<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateStokTable extends Migration
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
            'nama_barang' => [
                'type'          => 'VARCHAR',
                'constraint'    => '50',
                'null'          => true,
            ],
            'jumlah' => [
                'type'          => 'INT',
                'constraint'    => '10',
                'null'          => true,
            ]
        ]);

        $this->forge->addKey('id', true, true);
        $this->forge->createTable('stok');
    }

    public function down()
    {
        $this->forge->dropTable('stok', true);
    }
}
