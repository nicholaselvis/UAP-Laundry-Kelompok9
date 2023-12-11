<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class JenisLayanan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_jenis_layanan' => [
                'type'              => 'INT',
                'constraint'        => 20,
                'unsigned'          => true,
                'auto_increment'    => true,
            ],
            'nama_layanan' => [
                'type'              => 'VARCHAR',
                'constraint'        => 50,
            ],
            'harga' => [
                'type'              => 'INT',
                'constraint'        => 20,
                'unsigned'          => true,
            ],
        ]);

        $this->forge->addKey('id_jenis_layanan', true); // Corrected primary key definition
        $this->forge->createTable('jenis_layanan');
    }

    public function down()
    {
        $this->forge->dropTable('jenis_layanan', true);
    }
}