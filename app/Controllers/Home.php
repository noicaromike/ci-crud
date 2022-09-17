<?php

namespace App\Controllers;

use App\Models\Product;

class Home extends BaseController
{
    public function index()
    {
        $products = new Product();
        $data['products'] = $products->findAll();
        return view('templates/header')
        . view('crud',$data)
        . view('templates/footer');
    }
}
