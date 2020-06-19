<?php namespace App\Models;

use CodeIgniter\Model;

class Pedidos_distribuidorModel extends Model
{
    protected $table      = 'pedidos_distribuidor';
    protected $primaryKey = 'codigo_pedido_transito';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['codigo_cliente', 'codigo_empleado','tipo_pedido','cantidad','total_pedido','status_pedido'];

    protected $useTimestamps = false;
    protected $createdField  = 'fecha_pedido';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
