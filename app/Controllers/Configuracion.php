<?php
namespace App\Controllers;
 
use App\Controllers\BaseController;
use App\Models\ConfiguracionModel;

class Configuracion extends BaseController
{
    protected $configuracion;

    public function __construct()
    {
        $this->configuracion = new ConfiguracionModel();
    }

    public function index()
    {
        echo view('header');
        echo view('configuracion/configuracion');
        echo view('footer');
    }


}

