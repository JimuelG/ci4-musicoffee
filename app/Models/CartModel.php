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
} 

?>