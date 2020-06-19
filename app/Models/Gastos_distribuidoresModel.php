<?php namespace App\Models;

use CodeIgniter\Model;

class Gastos_distribuidoresModel extends Model
{
    protected $table      = 'gastos_distribuidores';
    protected $primaryKey = 'id_gasto';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['codigo_empleado', 'monto_asignado','viaticos','peaje','pinchazo','total_gasto','status_distribucion'];

    protected $useTimestamps = false;
    protected $createdField  = 'fecha_gasto';


    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
