<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class usuarios extends Migration
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
            'cuit'          => [
                'type'           => 'INT',
                'constraint'     => '9',
                'unsigned'       => TRUE
            ],
            'nombreyapellido'       => [
                    'type'           => 'VARCHAR',
                    'constraint'     => '60',
            ],
            'perfil_id'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '15',
            ],
            'email'       => [
                'type'           => 'TEXT',
                'constraint'     => '30',
            ],
            'telefono'       => [
                'type'           => 'INT',
                'constraint'     => '11',
            ],
            'password'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '60',
            ],
            'localidad'       => [
                'type'           => 'TEXT',
                'constraint'     => '25',
            ],
        
    ]);
    $this->forge->addKey('id', TRUE);
    $this->forge->createTable('usuarios');
    }
 
    //--------------------------------------------------------------------
 
    public function down()
    {
        $this->forge->dropTable('usuarios');
    }
}

