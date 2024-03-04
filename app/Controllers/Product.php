<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Product extends BaseController
{
    protected $ProductModel;

    public function __construct()
    {
        $this->ProductModel = new ProductModel();
    }

    public function index()
    {
        $data = [
            'title' => 'List Data Product',
            'product' => $this->ProductModel->get_product(),
            'isi' => 'product/v_list'
        ];
        echo view('layout/v_wrapper', $data);
    }
}
