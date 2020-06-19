<?php namespace App\Models;

use CodeIgniter\Model;

class PrivilegiosModel extends Model
{
    protected $table      = 'privilegios';
    protected $primaryKey = 'id_privilegio';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['codigo_usuario', 'codigo_rol','codigo_modulo'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
