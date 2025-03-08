<?php

namespace App\Controllers;

use App\Models\CartModel;
use App\Models\ProductModel;
use App\Models\OrderModel;

class Menu extends BaseController
{
    public function index()
    {
        date_default_timezone_set("Asia/Manila");
        $p = new ProductModel();
        $o = new CartModel();

        $customerName = "Jimuel Gaas";
        $today = date("Y-m-d");

        $cartCount = $o->getOrdersByCustomer($customerName,$today)->countAllResults();

        $data['pr'] = $p->findAll();
        $data['cart_count'] = $cartCount;

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
        $productPrice = $request->getPost('productPrice');
        $pictureUrl = $request->getPost('productImg');

        $c->insert([
            'customer_name' => $customerName,
            'item_name' => $itemName,
            'size' => $size,
            'price' => $productPrice,
            'quantity' => $quantity,
            'pictureUrl' => $pictureUrl
        ]);
        
        return $this->response->setJSON(['status' => 'success']);
    }

    public function orders()
    {
        date_default_timezone_set("Asia/Manila");
        $o = new CartModel();

        $customerName = "Jimuel Gaas";
        $today = date("Y-m-d");

        $orderItem['or'] = $o->getOrdersByCustomer($customerName, $today)->findAll();

        return view('orders', $orderItem);
    }

    public function checkout()
    {
        $c = new CartModel();
        $o = new OrderModel();

        $request = service('request');
        $customerName = 'Jimuel Gaas';
        $items = $request->getPost('items');
        $totalPrice = $request->getPost('totalPrice');

        if(!$items || empty($items))
        {
            return $this->response->setJSON(['status' => 'error', 'mesage' => 'Cart is empty']);
        }

        $orderId = $o->saveOrder($customerName, $items, $totalPrice);

        return $this->response->setJSON(['status' => 'success', 'order_id' => $orderId]);

    }

    public function remove()
    {
        $c = new CartModel();
        $request = service('request');

        $cartId = $request->getPost('id');

        if ($c->delete($cartId))
        {
            return $this->response->setJSON(['status' => 'success']);
        } else {
            return $this->response->setJSON(['status' => 'error']);
        }
    }
}


?>