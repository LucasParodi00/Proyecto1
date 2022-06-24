<?php

namespace App\Models;
use CodeIgniter\Model;

class Carrito_Model extends Model{

    protected $table = 'compra';
    protected $primaryKey = 'id_compra';
    protected $allowedFields = ['nombreProducto', 'precio', 'cantidad', 'total'];
} 