<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index(): string
    {
        return view('dashboard');
    }

    public function products()
    {
        return view('products');

    }

}
