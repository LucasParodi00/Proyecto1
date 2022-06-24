<?php

namespace App\Models;

use CodeIgniter\Model;

class Galeria_Model extends Model
{
    protected $DBGroup              = 'default';
    protected $table                = 'galeria';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $protectFields        = true;
    protected $allowedFields        = ['nombre', 'nameImg'];

    // Dates
    protected $useTimestamps        = false;
    protected $dateFormat           = 'datetime';
    protected $createdField         = 'created_at';
    protected $updatedField         = 'updated_at';
}