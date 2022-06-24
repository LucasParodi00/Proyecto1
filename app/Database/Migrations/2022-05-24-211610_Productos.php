<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Productos extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                    'type'           => 'INT',
                    'constraint'     => 5,
                    'unsigned'       => TRUE,
                    'auto_increment' => TRUE
            ],
            'stock'          => [
                'type'           => 'INT',
                'constraint'     => '10',
                'unsigned'       => TRUE
            ],
            'nombreProducto'       => [
                    'type'           => 'VARCHAR',
                    'constraint'     => '60',
            ],
            'seccion'       => [
                'type'           => 'TEXT',
                'constraint'     => '60',
            ],
            'descripcion'       => [
                'type'           => 'TEXT',
                'constraint'     => '100',
            ],

            'precio'        => [
                'type'      =>'DECIMAL',
                'constraint'=>'5,2',
            ],
           
        
    ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('productos');
    }

    public function down()
    {
        $this->forge->dropTable('productos');
    }
}
