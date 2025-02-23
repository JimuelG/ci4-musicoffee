<?php

namespace App\Controllers;

use App\Models\CartModel;
use App\Models\ProductModel;

class Menu extends BaseController
{
    public function index()
    {
        $p = new ProductModel();
        $data['pr'] = $p->findAll();
        return view('menu', $data);
    }

    public function cart()
    {
        $c = new CartModel();
        $data['cr'] = $c->findAll();
        return $data;
    }
}


?>