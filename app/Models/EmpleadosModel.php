<?php namespace App\Models;

use CodeIgniter\Model;

class EmpleadosModel extends Model
{
    protected $table      = 'empleados';
    protected $primaryKey = 'codigo_empleado';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['nombre1', 'nombre2','apellido1','apellido2','cedula_identificacion_personal','documento_identificacion_tributario','edad','codigo_seguro_social','telefono_casa','telefono_movil','direccion','correo_electronico','estado_civil','codigo_departamento','puesto_laboral','salario','motivo_baja','observaciones','status'];

    protected $useTimestamps = false;
    protected $createdField  = 'fecha_nacimiento';
    protected $updatedField  = 'fecha_inicio_laboral';
    protected $deletedField  = 'fecha_fin_labores';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
