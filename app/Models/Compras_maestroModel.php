
<?php namespace App\Models;

use CodeIgniter\Model;

class Compras_maestroModel extends Model
{
    protected $table      = 'compras_maestro';
    protected $primaryKey = 'codigo_compra';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['codigo_proveedor', 'tipo_compra','cantidad','total_compra','abono_compra','total_deuda','status_ingreso'];



    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
    protected $createdField  = 'fecha_compra';

}
