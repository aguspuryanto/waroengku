<?php

namespace App\Models;

use CodeIgniter\Model;

class Purchases extends Model
{
    protected $table            = 'purchases';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;

    protected $allowedFields    = [
        'purchase_number',
        'supplier_id',
        'total_amount',
        'purchase_date',
        'status',
        'created_at',
        'updated_at',
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    /**
     * Retrieve all purchases with supplier details.
     *
     * @return array
     */
    public function getPurchasesWithSupplier()
    {
        return $this->select('purchases.*, suppliers.name as supplier_name')
                    ->join('suppliers', 'suppliers.id = purchases.supplier_id')
                    ->findAll();
    }

    /**
     * Retrieve purchase by ID with supplier details.
     *
     * @param int $id
     * @return array|null
     */
    public function getPurchaseById($id)
    {
        return $this->select('purchases.*, suppliers.name as supplier_name')
                    ->join('suppliers', 'suppliers.id = purchases.supplier_id')
                    ->where('purchases.id', $id)
                    ->first();
    }

    /**
     * Retrieve all purchase records for the current day.
     *
     * @return array
     */
    public function getTodayPurchases()
    {
        $today = date('Y-m-d');
        return $this->where('DATE(purchase_date)', $today)->findAll();
    }
}
