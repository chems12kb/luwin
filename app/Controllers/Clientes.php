<?php
namespace App\Controllers;
 
use App\Controllers\BaseController;
use App\Models\ClientesModel;

class clientes extends BaseController
{
    protected $clientes;

    public function __construct()
    {
        $this->clientes = new ClientesModel();
    }

    public function index($activo = 1)
    {
        $clientes = $this->clientes->where('activo', $activo)->findALL();
        $data = ['titulo' => 'clientes', 'datos' => $clientes];

        echo view('header');
        echo view('clientes/clientes', $data);
        echo view('footer');
    }

    public function nuevo($activo = 1)
    {
        $clientes = $this->clientes->where('activo', $activo)->findALL();
        $data = ['titulo' => 'clientes', 'datos' => $clientes];

        echo view('header');
        echo view('clientes/nuevo', $data);
        echo view('footer');
    }

    public function insertar()
    {
        $this->clientes->save(['nombre'=> $this->request->getPost('nombre'), 'direccion'=> $this->request->getPost('direccion'), 'telefono'=> $this->request->getPost('telefono'), 'correo'=> $this->request->getPost('correo')]);
        return redirect()->to(base_url().'/clientes');
    }

    public function editar($id = 1)
    {
       
        $cliente = $this->clientes->where('id', $id)->first();
        $data = ['titulo' => 'Editar clientes', 'datos' => $cliente];

        echo view('header');
        echo view('clientes/editar', $data);
        echo view('footer');
    }

    public function editarr($id = 2)
    {
       
        $cliente = $this->clientes->where('id', $id)->first();
        $data = ['titulo' => 'Editar clientes', 'datos' => $cliente];

        echo view('header');
        echo view('clientes/editar', $data);
        echo view('footer');
    }

    public function actualizar()
    {
        $this->clientes->update( $this->request->getPost('id'), ['nombre'=> $this->request->getPost('nombre'), 'direccion'=> $this->request->getPost('direccion'), 'telefono'=> $this->request->getPost('telefono'), 'correo'=> $this->request->getPost('correo')]);
        return redirect()->to(base_url().'/clientes');
    }

    public function eliminar($id=1)
    {
        $this->clientes->update( $id, ['activo' => 0]);
        return redirect()->to(base_url().'/clientes');
    }

    public function eliminados($activo = 0)
    {
        $clientes = $this->clientes->where('activo', $activo)->findALL();
        $data = ['titulo' => 'clientes eliminadas', 'datos' => $clientes];

        echo view('header');
        echo view('clientes/eliminados', $data);
        echo view('footer');
    }

    public function reingresar($id=1)
    {
        $this->clientes->update( $id, ['activo' => 1]);
        return redirect()->to(base_url().'/clientes');
    }

    public function mostrarclientes($activo = 1)
    {
        $clientes = $this->clientes->where('activo', $activo)->findALL();
        $data = ['titulo' => 'clientes', 'datos' => $clientes];

        
        echo view('header');
        echo view('clientes/ver_clientes', $data);
        echo view('footer');
    }

    public function generaclientesPdf()
    {
        $pdf = new \FPDF('P','mm','letter');
        $pdf->AddPage();
        $pdf->SetMargins(10,10,10);
        $pdf->SetTitle("clientezz");
        $pdf->SetFont("Arial", 'B', 15);

        $pdf->Image("images/logo.png", 10,5, 26);

        $pdf->Cell(0,5, "Reporte de clientes", 0, 1, 'C');

        $pdf->Ln(27);

        $pdf->Cell(80, 10, "Nombre", 1, 0, "C");
        $pdf->Cell(40, 10, "Direccion", 1, 0, "C");
        $pdf->Cell(25, 10, "Contacto", 1, 0, "C");
        $pdf->Cell(45, 10, "Email", 1, 1, "C");

        $pdf->SetFont("Arial", 'b', 10);

        $datosClientes = $this->clientes->getClientesMinimo();
        foreach($datosClientes as $clientes){
            $pdf->Cell(80, 5, $clientes['nombre'], 1, 0, "C");
            $pdf->Cell(40, 5, $clientes['direccion'], 1, 0, "C");
            $pdf->Cell(25, 5, $clientes['telefono'], 1, 0, "C");
            $pdf->Cell(45, 5, $clientes['correo'], 1, 1, "C");
        }

        $this->response->setHeader('content-type', 'application/pdf');
        $pdf->Output('ClientesMinimo.pdf','I');
       
    }

}

