<?php namespace App\Models;

use CodeIgniter\Model;

class Pedidos_oficinasModel extends Model
{
    protected $table      = 'pedidos_oficinas';
    protected $primaryKey = 'codigo_pedido_oficina';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['codigo_cliente', 'nombres','apellidos','direccion','codigo_vendedor','tipo_pedido','cantidad','total_pedido','estatud_pedido'];

    protected $useTimestamps = false;
    protected $createdField  = 'fecha_pedido';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
