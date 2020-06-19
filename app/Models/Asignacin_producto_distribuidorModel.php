<?php namespace App\Models;

use CodeIgniter\Model;


class Asignacin_producto_distribuidorModel extends Model
{
    protected $table      = 'asignacin_producto_distribuidor';
    protected $primaryKey = 'id_asignacion_distribuidor';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['codigo_empleado','subtotal','total', 'codigo_producto','cantidad_asignada'];

    protected $useTimestamps = false;
    protected $createdField  = 'fecha_asignacion';



    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
