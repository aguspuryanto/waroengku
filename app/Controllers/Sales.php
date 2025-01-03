<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Sales extends BaseController
{
    public function index()
    {
        //
    }

    public function create() {
        $product = $this->productModel->find($this->request->getPost('product_id'));
        $quantity = $this->request->getPost('quantity');
        $this->salesModel->save([
            'product_id' => $product['id'],
            'quantity' => $quantity,
            'total_price' => $product['price_sell'] * $quantity
        ]);
        $this->productModel->decreaseStock($product['id'], $quantity);
        return redirect()->to('/sales');
    }
    
}
