<?php
namespace App\Controllers;
 
use App\Controllers\BaseController;
use App\Models\UnidadesModel;

class Unidades extends BaseController
{
    protected $unidades;

    public function __construct()
    {
        $this->unidades = new UnidadesModel();
    }

    public function index($activo = 1)
    {
        $unidades = $this->unidades->where('activo', $activo)->findALL();
        $data = ['titulo' => 'unidades', 'datos' => $unidades];

        echo view('header');
        echo view('unidades/unidades', $data);
        echo view('footer');
    }

    public function index2($activo = 1)
    {
        $unidades = $this->unidades->where('activo', $activo)->findALL();
        $data = ['titulo' => 'unidades', 'datos' => $unidades];

        
        echo view('header');
        echo view('unidades/iniciop', $data);
        echo view('footer');
    }

    public function nuevo($activo = 1)
    {
        $unidades = $this->unidades->where('activo', $activo)->findALL();
        $data = ['titulo' => 'unidades', 'datos' => $unidades];

        echo view('header');
        echo view('unidades/nuevo', $data);
        echo view('footer');
    }

    public function insertar()
    {
        $this->unidades->save(['codigo'=> $this->request->getPost('codigo'), 'nombre'=> $this->request->getPost('nombre'), 'precio_compra'=> $this->request->getPost('precio_compra'), 'descripcion'=> $this->request->getPost('descripcion'), 'marca'=> $this->request->getPost('marca')]);
        
        $id = $this->unidades->insertID();

        $validacion = $this->validate([
                'img_producto' => [
                    'uploaded[img_producto]',
                    'mime_in[img_producto,image/jpg,image/jpeg]',
                    'max_size[img_producto, 4096]'
                ]
                ]);

        if($validacion){
            $ruta_logo = "images/productos/".$id.".jpg";

            if(file_exists($ruta_logo)){
                unlink($ruta_logo);
            }

            $img = $this->request->getFile('img_producto');
            $img->move('./images/productos',$id.'.jpg' );
        } else {
            echo 'ERROR en la validacion';
            exit;
        }

        return redirect()->to(base_url().'/unidades');
    }

    public function editar($id )
    {
       
        $unidad = $this->unidades->where('id', $id)->first();
        $data = ['titulo' => 'Editar unidades', 'datos' => $unidad];

        echo view('header');
        echo view('unidades/editar', $data);
        echo view('footer');
    }

    public function actualizar()
    {
        $this->unidades->update( $this->request->getPost('id'), ['codigo'=> $this->request->getPost('codigo'), 'nombre'=> $this->request->getPost('nombre'), 'precio_compra'=> $this->request->getPost('precio_compra'), 'descripcion'=> $this->request->getPost('descripcion'), 'marca'=> $this->request->getPost('marca')]);
        return redirect()->to(base_url().'/unidades');
    }

    public function eliminar($id)
    {
        $this->unidades->update( $id, ['activo' => 0]);
        return redirect()->to(base_url().'/unidades');
    }

    public function eliminados($activo = 0)
    {
        $unidades = $this->unidades->where('activo', $activo)->findALL();
        $data = ['titulo' => 'unidades eliminadas', 'datos' => $unidades];

        echo view('header');
        echo view('unidades/eliminados', $data);
        echo view('footer');
    }

    public function reingresar($id)
    {
        $this->unidades->update( $id, ['activo' => 1]);
        return redirect()->to(base_url().'/unidades');
    }


    public function mostrarMinimos($activo = 1)
    {
        $unidades = $this->unidades->where('activo', $activo)->findALL();
        $data = ['titulo' => 'unidades', 'datos' => $unidades];

        
        echo view('header');
        echo view('unidades/ver_minimos', $data);
        echo view('footer');
    }

    public function generaMinimosPdf()
    {
        $pdf = new \FPDF('P','mm','letter');
        $pdf->AddPage();
        $pdf->SetMargins(10,10,10);
        $pdf->SetTitle("Producto con stock minimo");
        $pdf->SetFont("Arial", 'B', 12);

        $pdf->Image("images/logo.png", 10,5, 26);

        $pdf->Cell(0,5, "Reporte de productoszzz", 0, 1, 'C');

        $pdf->Ln(27);

        $pdf->Cell(20, 10, "Codigo", 1, 0, "C");
        $pdf->Cell(40, 10, "Nombre", 1, 0, "C");
        $pdf->Cell(20, 10, "Precio", 1, 0, "C");
        $pdf->Cell(90, 10, "Descripcion", 1, 0, "C");
        $pdf->Cell(20, 10, "Marca", 1, 1, "C");

        $pdf->SetFont("Arial", 'b', 10);

        $datosUnidades = $this->unidades->getProductosMinimo();
        foreach($datosUnidades as $producto){
            $pdf->Cell(20, 5, $producto['codigo'], 1, 0, "C");
            $pdf->Cell(40, 5, $producto['nombre'], 1, 0, "C");
            $pdf->Cell(20, 5, $producto['precio_compra'], 1, 0, "C");
            $pdf->Cell(90, 5, $producto['descripcion'], 1, 0, "C");
            $pdf->Cell(20, 5, $producto['marca'], 1, 1, "C");
        }

        $this->response->setHeader('content-type', 'application/pdf');
        $pdf->Output('ProductoMinimo.pdf','I');

    
    
    }







    public function buscarPorCodigo($codigo)
    {
        $this->unidades->select('*');
        $this->unidades->where('codigo', $codigo);
        $this->unidades->where('activo', 1);
        $datos = $this->unidades->get()->getRow();

        $res['existe'] = false;
        $res['datos'] = '';
        $res['error'] ='';

        if($datos){
            $res['datos'] = $datos;
            $res['existe'] = true;
        } else {
            $res['error'] = 'No existe el producto';
            $res['existe'] = false;
        }

        echo json_encode($res);
        
    }


}

