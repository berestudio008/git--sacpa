
<?php namespace App\Models;

use CodeIgniter\Model;

class ProductoModel extends Model
{
    protected $table      = 'producto';
    protected $primaryKey = 'codigo_producto';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['nombre', 'stock','limite_stock','costo_fabrica','costo_venta1','costo_venta2','costo_venta3','estatud_producto'];

    protected $useTimestamps = false;
    protected $createdField  = 'fecha_inicial';
    protected $createdField  = 'fecha_vencimiento';



    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
