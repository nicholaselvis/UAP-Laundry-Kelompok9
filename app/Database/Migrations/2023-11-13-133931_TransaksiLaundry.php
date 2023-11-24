<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TransaksiLaundry extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_transaksi' => [
                'type'              => 'INT',
                'constraint'        => 20,
                'unsigned'          => true,
                'auto_increment'    => true,
            ],
            'id_customer' => [
                'type'              => 'INT',
                'constraint'        => 20,
                'unsigned'          => true,
            ],
            'id_jenis_layanan' => [
                'type'              => 'INT',
                'constraint'        => 20,
                'unsigned'          => true,
            ],
            'kapasitas_pesanan' => [
                'type'              => 'INT',
                'constraint'        => 20,
                'unsigned'          => true,
            ],
            'total_transaksi' => [
                'type'              => 'INT',
                'constraint'        => 20,
                'unsigned'          => true,
            ],
            'created_at' => [
                'type'              => 'DATETIME',
                'null'              => true,
            ],
            'updated_at' => [
                'type'              => 'DATETIME',
                'null'              => true,
            ],
            'deleted_at' => [
                'type'              => 'DATETIME',
                'null'              => true,
            ],
        ]);

        $this->forge->addKey('id_transaksi', true, true);
        $this->forge->createTable('transaksi_laundry');
    }

    public function down()
    {
        $this->forge->dropTable('transaksi_laundry', true);
    }
}
