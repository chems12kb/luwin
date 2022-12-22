<?php
namespace App\Controllers;
 
use App\Controllers\BaseController;
use App\Models\ComprasModel;

class compras extends BaseController
{
    protected $compras;

    public function __construct()
    {
        $this->compras = new ComprasModel();
    }

    public function index($activo = 1)
    {
        $compras = $this->compras->where('activo', $activo)->findALL();
        $data = ['titulo' => 'compras', 'datos' => $compras];

        echo view('header');
        echo view('compras/compras', $data);
        echo view('footer');
    }

    public function nuevo($activo = 1)
    {
        $compras = $this->compras->where('activo', $activo)->findALL();
        $data = ['titulo' => 'compras', 'datos' => $compras];

        echo view('header');
        echo view('compras/nuevo', $data);
        echo view('footer');
    }

    public function insertar()
    {
        $this->compras->save(['codigo'=> $this->request->getPost('codigo'),
         'nombre'=> $this->request->getPost('nombre'), 
         'cantidad'=> $this->request->getPost('cantidad'), 
         'precio_compra'=> $this->request->getPost('precio_compra')]);
        return redirect()->to(base_url().'/compras/nuevo');
    }

    public function editar($id = 1)
    {
       
        $compra = $this->compras->where('id', $id)->first();
        $data = ['titulo' => 'Editar compras', 'datos' => $compra];

        echo view('header');
        echo view('compras/editar', $data);
        echo view('footer');
    }

    

   

    public function eliminar($id=1)
    {
        $this->compras->update( $id, ['activo' => 0]);
        return redirect()->to(base_url().'/compras');
    }

    public function eliminados($activo = 0)
    {
        $compras = $this->compras->where('activo', $activo)->findALL();
        $data = ['titulo' => 'compras eliminadas', 'datos' => $compras];

        echo view('header');
        echo view('compras/eliminados', $data);
        echo view('footer');
    }

    public function reingresar($id=1)
    {
        $this->compras->update( $id, ['activo' => 1]);
        return redirect()->to(base_url().'/compras');
    }

    public function ventacompletada($activo = 1)
    {
        $compras = $this->compras->where('activo', $activo)->findALL();
        $data = ['titulo' => 'compras', 'datos' => $compras];

        
        echo view('header');
        echo view('compras/boletaventa', $data);
        echo view('footer');
    }

    public function generaBoletaPdf()
    {
        $pdf = new \FPDF('P','mm','letter');
        $pdf->AddPage();
        $pdf->SetMargins(10,10,10);
        $pdf->SetTitle("Boleta de venta");
        $pdf->SetFont("Arial", 'B', 17);

        $pdf->Image("images/logo.png", 10,5, 26);

        $pdf->Cell(0,5, "DETALLES DE LA COMPRA", 0, 1, 'C');

        $pdf->Ln(27);

        $pdf->Cell(30, 10, "Codigo", 1, 0, "C");
        $pdf->Cell(80, 10, "Nombre", 1, 0, "C");
        $pdf->Cell(30, 10, "Cantidad", 1, 0, "C");
        $pdf->Cell(50, 10, "Precio", 1, 1, "C");

        $pdf->SetFont("Arial", 'b', 10);

        $datosCompras = $this->compras->getBoletaventa();
        foreach($datosCompras as $compras){
            $pdf->Cell(30, 5, $compras['codigo'], 1, 0, "C");
            $pdf->Cell(80, 5, $compras['nombre'], 1, 0, "C");
            $pdf->Cell(30, 5, $compras['cantidad'], 1, 0, "C");
            $pdf->Cell(50, 5, $compras['precio_compra'], 1, 1, "C");
        }

        $this->response->setHeader('content-type', 'application/pdf');
        $pdf->Output('Boleta .pdf','I');

    
    
    }

}

