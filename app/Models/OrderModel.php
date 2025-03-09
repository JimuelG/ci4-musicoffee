<?php

namespace App\Models;
use CodeIgniter\Model;

class OrderModel extends Model
{
    protected $table = 'orders';
    protected $primaryKey = 'oId';
    protected $allowedFields = [
        'customer_name',
        'total_price',
        'status',
    ];  

    public function saveOrder($customerName, $totalPrice)
    {
        $this->db->transStart();

        $this->insert([
            'customer_name' => $customerName,
            'total_price' => $totalPrice,
            'status' => 'pending'
        ]);

        $orderId = $this->insertID();

        $this->db->transComplete();
        return $orderId;

    }
}

?>