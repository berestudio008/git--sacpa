<?php namespace App\Models;

use CodeIgniter\Model;

class CardexModel extends Model
{
    protected $table      = 'cardex';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['id_movimiento', 'tipo_documento','codigo_producto','ingreso','salida'];

    protected $useTimestamps = false;
    protected $createdField  = 'fecha_movimiento';
  


    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
