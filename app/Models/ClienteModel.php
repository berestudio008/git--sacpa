<?php namespace App\Models;

use CodeIgniter\Model;

class ClienteModel extends Model
{
    protected $table      = 'cliente';
    protected $primaryKey = 'codigo_cliente';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['nombre_cliente','direccion','tipo_cliente','telefono','nombre_contacto','movil_contacto','correo_electronico','status_cliente'];

    protected $useTimestamps = false;
    protected $createdField  = 'fecha_inicio';
      protected $createdField  = 'fecha_nacimiento';



    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
