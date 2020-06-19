<?php namespace App\Models;

use CodeIgniter\Model;

class IngresosModel extends Model
{
    protected $table      = 'ingresos';
    protected $primaryKey = 'id_ingreso';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['codigo_compra'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
