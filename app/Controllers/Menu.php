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

    public function addCart()
    {
        $c = new CartModel();
        $request = service('request');
        
        $customerName = "Jimuel Gaas";
        $itemName = $request->getPost('productName');
        $size = $request->getPost('productSize');
        $quantity = $request->getPost('quantity');
        $totalPrice = $request->getPost('totalPrice');
        $pictureUrl = $request->getPost('productImg');

        $c->insert([
            'customer_name' => $customerName,
            'item_name' => $itemName,
            'size' => $size,
            'price' => $totalPrice,
            'quantity' => $quantity,
            'pictureUrl' => $pictureUrl
        ]);
        
        return $this->response->setJSON(['status' => 'success']);
    }

    public function cart()
    {
        $c = new CartModel();
        $request = service("request");

        $customerName = "Jimuel Gaas";

        $today = date("Y-m-d");

        $cartItem = $c->where('customer_name', $customerName)
                      ->where('DATE(cCreated_at)', $today)
                      ->findAll();
        var_dump($cartItem);
        // return $this->response->setJSON(['status' => 'success', 'cart' => $cartItem]);
    }
}


?>