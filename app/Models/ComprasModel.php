<?php


namespace App\Models;
use CodeIgniter\Model;

class ComprasModel extends Model
{
    protected $table      = 'compras'; //se crea tablas protegidas
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['codigo', 'nombre', 'cantidad', 'precio_compra', 'activo'];

    protected $useTimestamps = true;
    protected $createdField  = 'fecha_alta';
    protected $updatedField  = '';
    protected $deletedField  = '';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function getBoletaventa(){
        $where = "activo=1";
        return $this->where($where)->findAll();
       
    }
}


?>