

<?php namespace App\Models;

use CodeIgniter\Model;

class UseriosModel extends Model
{
    protected $table      = 'usarios';
    protected $primaryKey = 'id_usuario';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['codigo_empleado', '_user','pass','codigo_rol','control_insert','status_usuario','ano','vehiculo_existencia'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
