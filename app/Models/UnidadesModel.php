<?php


namespace App\Models;
use CodeIgniter\Model;

class UnidadesModel extends Model
{
    protected $table      = 'unidades'; //se crea tablas protegidas
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['codigo', 'nombre', 'precio_compra', 'descripcion', 'marca', 'activo'];

    protected $useTimestamps = true;
    protected $createdField  = 'fecha_alta';
    protected $updatedField  = 'fecha_edit';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
    
    public function getProductosMinimo(){
        $where = "activo=1";
        return $this->where($where)->findAll();
       
    }
}

?>