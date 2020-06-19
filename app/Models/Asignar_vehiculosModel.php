<?php namespace App\Models;

use CodeIgniter\Model;

class Asignar_vehiculosModel extends Model
{
    protected $table      = 'Asignar_vehiculosModel';
    protected $primaryKey = 'id_asignacion';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['codigo_vehiculo','codigo_empleado', 'status_asignacion'];

    protected $useTimestamps = false;
    protected $createdField  = 'fecha_asignacion';
    

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
