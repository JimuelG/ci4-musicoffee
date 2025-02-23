<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Menu extends BaseController
{
    public function index()
    {
        $p = new ProductModel();
        $data['pr'] = $p->findAll();
        return view('menu', $data);
    }
}


?>