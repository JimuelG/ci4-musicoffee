<?php

namespace App\Controllers;

use App\Models\CartModel;
use App\Models\OrderModel;
use App\Models\OrderItemsModel;
use App\Models\ProductModel;

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

    public function checkout()
    {
        date_default_timezone_set("Asia/Manila");

        $cartModel = new CartModel();
        $orderModel = new OrderModel();
        $orderItemsModel = new OrderItemsModel();

        $customerName = 'Jimuel Gaas';
        $today = date("Y-m-d");

        $cartItems = $cartModel->getOrdersByCustomer($customerName,$today)->findAll();

        if (empty($cartItems))
        {   
            return $this->response->setJSON(['status' => 'error', 'message' => 'Cart is empty']);
        }

        $totalPrice = array_reduce($cartItems, function ($sum, $item){
            return $sum + ($item['price'] * $item['quantity']);
        }, 0);

        $orderId = $orderModel->saveOrder($customerName, $totalPrice);

        if (!$orderId) {
            return $this->response->setJSON(['status'=> 'error', 'message' => 'Failed to create order']);
        }

        $orderItemsSaved = $orderItemsModel->saveOrderItems($orderId, $cartItems);

        if (!$orderItemsSaved)
        {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Failed to save order']);
        }
        
        $cartModel->where('customer_name', $customerName)->delete();
        
        return $this->response->setJSON(['status' => 'success', 'order_id' => $orderId]);
    }

    public function updateCart()
    {
        $cartModel = new CartModel();
        $cartData = $this->request->getPost('cart');

        if(!$cartData) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'No cart data provided']);
        }

        foreach ($cartData as $item)
        {
            $cartModel->update($item['cId'], ['quantity' => $item['quantity']]);
        }

        return $this->response->setJSON(['status' => 'success', 'message' => 'Cart updated successfully']);
    }

    public function getOrders()
    {
        $orderModel = new OrderModel();
        $customerName = 'Jimuel Gaas';

        $orders = $orderModel->where('customer_name', $customerName)->findAll();

        return view('orders', ['orders' => $orders]);
    }

}


?>