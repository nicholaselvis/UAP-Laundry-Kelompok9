<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AbsensiKasir extends Migration
{
    public function up()
    {
        $this->forge->addField(
            [
                'id_user' => [
                    'type'           => 'INT',
                    'constraint'     => 11,
                    'unsigned'       => true,
                    'auto_increment' => true,
                ],
                'nama' => [
                    'type'          => 'VARCHAR',
                    'constraint'    => '255',
                ],
                'date' => [
                    'type' => 'DATE',
                    'null' => true,
                ],
                'time' => [
                    'type' => 'TIME',
                    'null' => true,
                ],

                'bukti_absensi' => [
                    'type'          => 'VARCHAR',
                    'constraint'    => '255',
                ],
                'created_at' => [
                    'type' => 'DATETIME',
                    'null' => true,
                ],
                'updated_at' => [
                    'type' => 'DATETIME',
                    'null' => true,
                ],
                'deleted_at' => [
                    'type' => 'DATETIME',
                    'null' => true,
                ]
            ]
        );
        $this->forge->addKey('id_user', true, true);
        $this->forge->createTable('absensi', true);
    }

    public function down()
    {
        $this->forge->dropTable('absensi', true);

    }

}
