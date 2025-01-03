<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Dashboard extends BaseController
{
    public $salesModel;
    public $productModel;
    public $userModel;
    public $purchasesModel;
    
    public function __construct()
    {
        $this->salesModel = new \App\Models\SalesModel();
        $this->productModel = new \App\Models\ProductModel();
        $this->userModel = new \App\Models\UserModel();
        $this->purchasesModel = new \App\Models\PurchasesModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'sales' => $this->salesModel->getTodaySales(),
            'purchases' => $this->purchasesModel->getTodayPurchases(),
        ];

        return view('dashboard', $data);
    }
}
