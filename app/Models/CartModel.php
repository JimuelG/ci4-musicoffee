<?php

namespace App\Models;
use CodeIgniter\Model;

class CartModel extends Model
{
    protected $table = 'cart';
    protected $primaryKey = 'cId';
    protected $allowedFields = [
        'customer_name',
        'item_name',
        'size',
        'price',
        'quantity',
        'pictureUrl',
        'status'
    ];

    public function getOrdersByCustomer($customerName, $date = null)
    {
        if ($date === null)
        {
            $date = date("Y-m-d");
        }

        return $this->where('customer_name', $customerName)
                    ->where('DATE(cCreated_at)', $date);
    }
} 

?>