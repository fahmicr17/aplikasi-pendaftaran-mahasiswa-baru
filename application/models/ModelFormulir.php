<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelFormulir extends CI_Controller
{
    protected $table      = 'formulir';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $useTimestamps = true;
}
