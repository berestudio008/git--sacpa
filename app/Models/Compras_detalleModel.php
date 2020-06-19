<?php namespace App\Models;

use CodeIgniter\Model;

class Compras_detalleModel extends Model
{
    protected $table      = 'compras_detalle';
    protected $primaryKey = 'id_detalle';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['codigo_compra', 'codigo_producto','cantidad_compra','costo_compra'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
  

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
