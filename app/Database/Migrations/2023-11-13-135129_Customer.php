<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Customer extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_customer' => [
                'type'              => 'INT',
                'constraint'        => 20,
                'unsigned'          => true,
                'auto_increment'    => true,
            ],
            'nama_customer' => [
                'type'              => 'VARCHAR',
                'constraint'        => 50,
            ],
            'no_wa' => [
                'type'              => 'INT',
                'constraint'        => 20,
                'unsigned'          => true,
            ],
            
        ]);

        $this->forge->addKey('id_customer', true);
        $this->forge->createTable('customer');
    }

    public function down()
    {
        $this->forge->dropTable('customer', true);
    }
}
