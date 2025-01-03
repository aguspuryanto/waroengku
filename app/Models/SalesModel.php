<?php

namespace App\Models;

use CodeIgniter\Model;

class SalesModel extends Model
{
    protected $table = 'sales'; // Nama tabel di database
    protected $primaryKey = 'id'; // Primary key tabel

    protected $useAutoIncrement = true;

    // Kolom yang dapat diisi (fillable fields)
    protected $allowedFields = [
        'invoice_number', // Nomor faktur atau invoice
        'customer_id',    // ID pelanggan
        'total_amount',   // Total jumlah penjualan
        'payment_status', // Status pembayaran (e.g., Paid, Unpaid)
        'sale_date',      // Tanggal penjualan
        'created_at',
        'updated_at'
    ];

    // Aktifkan fitur timestamps untuk created_at dan updated_at
    protected $useTimestamps = true;

    // Format timestamps
    protected $dateFormat = 'datetime';

    // Validasi data (opsional, sesuai kebutuhan)
    protected $validationRules = [
        'invoice_number' => 'required|max_length[20]',
        'customer_id'    => 'required|integer',
        'total_amount'   => 'required|decimal',
        'payment_status' => 'required|in_list[Paid,Unpaid,Pending]',
        'sale_date'      => 'required|valid_date',
    ];

    protected $validationMessages = [
        'invoice_number' => [
            'required'   => 'Invoice number is required.',
            'max_length' => 'Invoice number cannot exceed 20 characters.',
        ],
        'customer_id' => [
            'required' => 'Customer ID is required.',
            'integer'  => 'Customer ID must be an integer.',
        ],
        'total_amount' => [
            'required' => 'Total amount is required.',
            'decimal'  => 'Total amount must be a valid decimal number.',
        ],
        'payment_status' => [
            'required' => 'Payment status is required.',
            'in_list'  => 'Payment status must be one of: Paid, Unpaid, Pending.',
        ],
        'sale_date' => [
            'required'   => 'Sale date is required.',
            'valid_date' => 'Sale date must be a valid date.',
        ],
    ];

    // Callback methods (opsional, sesuai kebutuhan)
    protected $beforeInsert = ['beforeInsertHandler'];
    protected $beforeUpdate = ['beforeUpdateHandler'];

    // Contoh handler callback sebelum insert
    protected function beforeInsertHandler(array $data)
    {
        // Tambahkan logika custom sebelum data dimasukkan
        return $data;
    }

    // Contoh handler callback sebelum update
    protected function beforeUpdateHandler(array $data)
    {
        // Tambahkan logika custom sebelum data diperbarui
        return $data;
    }

    /**
     * Retrieve all sales records for the current day.
     *
     * @return array
     */
    public function getTodaySales()
    {
        $today = date('Y-m-d');
        return $this->where('DATE(sale_date)', $today)->findAll();
    }

    /**
     * Fungsi custom untuk mendapatkan penjualan berdasarkan status pembayaran.
     */
    public function getSalesByPaymentStatus(string $status)
    {
        return $this->where('payment_status', $status)->findAll();
    }

    /**
     * Fungsi custom untuk mendapatkan total penjualan.
     */
    public function getTotalSales(): float
    {
        return $this->selectSum('total_amount')->get()->getRow()->total_amount;
    }
}
