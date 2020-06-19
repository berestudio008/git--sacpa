
<?php namespace App\Models;

use CodeIgniter\Model;

class Caja_chicaModel extends Model
{
    protected $table      = 'caja_chica';
    protected $primaryKey = 'codigo_caja_chica';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['valor_caja_chica', 'tipo_caja_chica','codigo_departamento','status_caja','abono','valor_pendiente'];

    protected $useTimestamps = false;
    protected $createdField  = 'fecha_creacion';
    


    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
