<?php namespace App\Models;

use CodeIgniter\Model;

class ProveedoresModel extends Model
{
    protected $table      = 'proveedores';
    protected $primaryKey = 'codigo_proveedor';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['nombre_proveedor', 'cedula','direccion','telefono','tipo_proveedor','nombre_contacto','movil_contacto','tipo_producto','precio','correo_electronico','status_proveedores'];

    protected $useTimestamps = false;
    protected $createdField  = 'fecha_inicio';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
