<?php namespace App\Models;

use CodeIgniter\Model;

class DepartmentosModel extends Model
{
    protected $table      = 'departmentos';
    protected $primaryKey = 'codigo_departamento';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['  nombre_departamento', 'status_departamento'];

  

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
