<?php

namespace App\Models;
use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'pId';
    protected $allowedFields = [
        'name',
        'description',
        'category',
        'basePrice',
        'quantity',
        'pictureUrl',
        'status'
    ];
} 

?>