<?php

namespace App\Controllers;

use App\Models\CartModel;
use App\Models\ProductModel;

class Order extends BaseController
{

    public function index()
    {
        return view('orders');
    }
}

?>