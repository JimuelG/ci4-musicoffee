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

    public function is_selected()
    {
        $p = new ProductModel();
        $data['pr'] = $p->findAll();

        // Check if a product was selected
        if ($this->request->getMethod() === 'post') {
            $data['selected_product'] = [
                'id' => $this->request->getPost('product_id'),
                'name' => $this->request->getPost('name'),
                'price' => $this->request->getPost('price'),
                'img' => $this->request->getPost('img'),
                'quantity' => 1
            ];
        }

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