<?php

namespace App\Models;
use CodeIgniter\Model;

class Productos_model extends Model{

    protected $table = 'productos';
    protected $primaryKey = 'id';
    protected $allowedFields = ['stock', 'nombreProducto', 'descripcion', 'precio', 'seccion', 'baja'];
} 





