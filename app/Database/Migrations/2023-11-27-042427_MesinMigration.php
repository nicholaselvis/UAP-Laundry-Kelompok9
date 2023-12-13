<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MesinMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_mesin' => [
                'type'              => 'INT',
                'constraint'        => 20,
                'unsigned'          => true,
                'auto_increment'    => true,
            ],
            'no_mesin' => [
                'type'              => 'VARCHAR',
                'constraint'        => 50,
            ],
            'harga' => [
                'type'              => 'INT',
                'constraint'        => 20,
                'unsigned'          => true,
            ],
            'id_transaksi' => [ // Added foreign key column
                'type'              => 'INT',
                'constraint'        => 20,
                'unsigned'          => true,
            ],
        ]);

        $this->forge->addKey('id_mesin', true);
        
        // Added foreign key
        $this->forge->addForeignKey('id_transaksi', 'transaksi_laundry', 'id_transaksi', 'CASCADE', 'CASCADE');
        
        $this->forge->createTable('mesin_cuci');
    }

    public function down()
    {
        $this->forge->dropTable('mesin_cuci', true);
    }
}
