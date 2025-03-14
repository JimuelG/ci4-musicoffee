<?php

namespace App\Controllers;

use App\Models\OrderItemsModel;
use App\Models\OrderModel;
use App\Models\ProductModel;

class Admin extends BaseController
{
    public function index(): string
    {
        return view('dashboard');
    }

    public function products()
    {
        $p = new ProductModel();
        $data['pr'] = $p->findAll();
        return view('products', $data);

    }

    public function addProduct()
    {
        $productModel = new ProductModel();
        
        $data = [
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'category' => $this->request->getPost('item-category'),
            'price' => $this->request->getPost('price'),
            'status' => $this->request->getPost('item-status'),
        ];

        // Handle file upload
        $file = $this->request->getFile('file');
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $allowedTypes = ['image/jpeg', 'image/png'];
            if (in_array($file->getMimeType(), $allowedTypes)) {
                $file->move(FCPATH . 'assets/images/products/', $file->getName());
                $data['pictureUrl'] = $file->getName();
            } else {
                return redirect()->back()->with('error', 'Invalid file type. Only JPG and PNG are allowed.');
            }
        }
        
        $productModel->insert($data);
        return redirect()->to(base_url('/admin/products'))->with('success', 'Product added successfully!');
    }

    public function getOrders()
    {
        $orderModel = new OrderModel();
        $orderItem = new OrderItemsModel();
        // $customerName = 'Jimuel Gaas';
        $today = date("Y-m-h");
        $orders['orders'] = $orderModel->findAll();

        return view('/admin/orders', $orders);

    }

    public function detail($id = null)
    {
        $orderItem = new OrderItemsModel();
        $orderName = new OrderModel();
        $order_id = $orderName->where("oId", $id)->first();

        if(!$order_id)
        {
            return view('admin/order_details', ['items'=>[]]);
        }
        
        $orderItems = $orderItem->where("order_id", $order_id['oId'])->findAll();
        
        $orderInfo = [
            'id' => $order_id,
            'items' => $orderItems,
            'total_price' => $order_id['total_price'],
            'name' => $order_id['customer_name']
        ];
        
        return view('/admin/order_details', $orderInfo);
        
    }

    public function edit($id = null)
    {
        $product = new ProductModel();

        $productItem['product'] = $product->where("pId", $id)->first();

        return view('/admin/edit', $productItem);
    }

    public function save()
    {
        
    }

    public function updateStatus()
    {
        $orderModel = new OrderModel();
        $orderId = $this->request->getPost('orderId');
        $newStatus = $this->request->getPost('status');

        if(!$orderId || !$newStatus ) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Invalid request']);
        }

        $update = $orderModel->update($orderId, ['status' => $newStatus]);

        if ($update) {
            if ($this->request->isAJAX()) {
                return $this->response->setJSON(['status' => 'success']);
            }
            return redirect()->to('/admin/orders')->with('message', 'Order status updated successfully');
        } else {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Failed to update status']);
        }
    }

}
