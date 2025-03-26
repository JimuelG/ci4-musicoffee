<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Home extends BaseController
{
    public function index(): string
    {
        return view('index');
    }

    public function home()
    {
        return "hello";
    }

    public function product()
    {
        $p = new ProductModel();
        $data = $p->findAll();
        echo "<pre>";
        var_dump($data);
        echo "</pre>";
    }

    public function contact()
    {
        return view('contact');
    }

    public function about()
    {
        return view('about');
    }
    
}
