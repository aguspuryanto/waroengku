<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Laporan extends BaseController
{
    public function index()
    {
        //
    }

    public function salesReport() {
        $data = $this->salesModel->getAll();
        $pdf = new \TCPDF();
        $pdf->AddPage();
        $pdf->writeHTML(view('reports/sales', ['sales' => $data]));
        $pdf->Output('sales_report.pdf', 'D');
    }    
}
