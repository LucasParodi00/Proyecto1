<?php

namespace App\Models;
use CodeIgniter\Model;

class VentaDetalle_Model extends Model{
    protected $table = 'venta_detalle';
    protected $primaryKey = 'id_venta';
    protected $allowedFields = ['factura_id','producto_id_venta', 'precio', 'cantidad'];
} 