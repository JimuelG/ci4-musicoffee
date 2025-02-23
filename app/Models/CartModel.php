<?php

namespace App\Models;
use CodeIgniter\Model;

class CartModel extends Model
{
    protected $table = 'cart';
    protected $primaryKey = 'cId';
    protected $allowedFields = [
        'name',
        'size',
        'addOn',
        'price',
        'quantity',
        'pictureUrl',
        'status'
    ];
} 

?>