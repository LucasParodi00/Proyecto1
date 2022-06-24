<?php

namespace App\Models;
use CodeIgniter\Model;

class Consulta_Model extends Model{
    protected $table = 'consultas';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombreCompleto', 'email', 'telefono', 'asunto', 'mensaje', 'contestado', 'respuesta'];
} 