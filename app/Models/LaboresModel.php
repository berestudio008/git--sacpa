<?php namespace App\Models;

use CodeIgniter\Model;

class LaboresModel extends Model
{
    protected $table      = 'labores';
    protected $primaryKey = 'codigo_labor';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['codigo_departamento', 'nombre_labor','status_labor'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
