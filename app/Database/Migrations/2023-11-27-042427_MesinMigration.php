<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MesinMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_mesin_cuci' => [
                'type'              => 'INT',
                'constraint'        => 20,
                'unsigned'          => true,
                'auto_increment'    => true,
            ],
            'nama_mesin' => [
                'type'              => 'VARCHAR',
                'constraint'        => 50,
            ],
            'harga' => [
                'type'              => 'INT',
                'constraint'        => 20,
                'unsigned'          => true,
            ],
        ]);

        $this->forge->addKey('id_mesin_cuci', true); // Corrected primary key definition
        $this->forge->createTable('mesin_cuci');
    }

    public function down()
    {
        $this->forge->dropTable('mesin_cuci', true);
    }
}
