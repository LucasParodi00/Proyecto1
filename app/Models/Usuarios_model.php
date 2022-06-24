<?php
namespace App\Models;
use CodeIgniter\Model;




class Usuarios_model extends Model
{
	protected $table = 'usuarios';
    protected $primaryKey = 'id';
    protected $allowedFields = ['cuit', 'nombreyapellido', 'perfil_id', 'email', 'password','telefono', 'localidad', 'baja', 'rango'];
}