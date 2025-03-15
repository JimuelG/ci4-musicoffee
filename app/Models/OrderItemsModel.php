<?php

namespace App\Models;
use CodeIgniter\Model;

class OrderItemsModel extends Model
{
    protected $table = 'order_items';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'order_id',
        'item_name',
        'size',
        'quantity',
        'price',
        'pictureUrl'
    ];  

    public function saveOrderItems($orderId, $items)
    {
        $this->db->transStart();

        foreach ($items as $item)
        {
            $this->insert([
                'order_id' => $orderId,
                'item_name' => $item['item_name'],
                'size' => $item['size'],
                'quantity' => $item['quantity'],
                'price' => $item['price'],
                'pictureUrl' => $item['pictureUrl']
            ]);
        }

        $this->db->transComplete();
        return $this->db->transStatus();
    }
}

?>