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

    public function saveOrder($customerName, $items, $totalPrice)
    {
        $this->db->transStart();

        $this->insert([
            'customer_name' => $customerName,
            'total_price' => $totalPrice,
            'status' => 'pending',
        ]);

        $orderId = $this->insertId();

        $orderModel = new OrderModel();

        foreach ($items as $item)
        {
            $orderModel->insert([
                'order_id' => $orderId,
                'item_name' => $item['item_name'],
                'size' => $item['size'],
                'quantity' => $item['quantity'],
                'price' => $item['price']
            ]);
        }

        $this->db->transComplete();
        return $orderId;
    }
}

?>