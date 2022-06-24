<?php

namespace App\Models;

use CodeIgniter\Model; 

class Ventas_Model extends Model
{
    protected $table      = 'ventas';
    protected $primaryKey = 'id_venta';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['email_usuario', 'descripcion_venta', 'precio_total', 'usuario', 'cantidad', 'sub_total','precio'];

    protected $useTimestamps = false;
    protected $createdField  = 'fecha_venta';
    protected $updatedField  = '';
    protected $deletedField  = '';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}