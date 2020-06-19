<?php namespace App\Models;

use CodeIgniter\Model;

class InventarioModel extends Model
{
    protected $table      = 'inventario';
    protected $primaryKey = 'codigo_producto';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['codigo_barra', 'nombre_producto','media_producto','stock','costo_unidad','porcentage_ganancial','precio_venta1','ganancial_fijo','precio_venta2','precio_venta','status_producto','obserbaciones'];

    protected $useTimestamps = false;
    protected $createdField  = 'fecha_vencimiento';
    protected $updatedField  = 'fecha_inicial';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
