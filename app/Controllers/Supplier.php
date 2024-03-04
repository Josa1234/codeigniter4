<?php

namespace App\Controllers;

use App\Models\SupplierModel;

class Supplier extends BaseController
{
    protected $SupplierModel;

    public function __construct()
    {
        $this->SupplierModel = new SupplierModel();
    }

    public function index()
    {
        $data = [
            'title' => 'List Data Supplier',
            'supplier' => $this->SupplierModel->get_supplier(),
            'isi' => 'supplier/v_list'
        ];
        echo view('layout/v_wrapper', $data);
    }
}
