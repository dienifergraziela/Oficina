<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CriaTabelaOrdem extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'dono' => [
                'type' => 'VARCHAR',
                'constraint' => '128',
            ],
            'problema' => [
                'type' => 'VARCHAR',
                'constraint' => '500',
            ],
            'custo' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
                'null' => true,
                'unique' => true,
            ],
            'carro' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
            ],
            'placa' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
            ],
            'pronto' => [
                'type' => 'BOOLEAN',
                'null' => false,
                'default' => false,
            ],
        ]);

        $this->forge->addKey('id')->addUniqueKey('placa');
        $this->forge->createTable('ordem');

    }

    public function down()
    {
        $this->forge->dropTable('ordem');
    }
}
