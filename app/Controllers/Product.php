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

    public function tambah()
    {
        $data = [
            'title' => 'Tambah Data Product',
            'isi' => 'product/v_tambah'
        ];
        echo view('layout/v_wrapper', $data);
    }

    public function save()
    {
        $data = [
            'product_name' => $this->request->getPost('product_name'),
            'product_description' => $this->request->getPost('product_description'),
        ];
        $this->ProductModel->insert_product($data);
        session()->setFlashdata('success', 'Data berhasil ditambahkan');
        return redirect()->to(base_url('product'));
    }

    public function delete($product_id)
    {
        $this->ProductModel->delete_product($product_id);
        session()->setFlashdata('success', 'Data berhasil dihapus !!');
        return redirect()->to(base_url('product'));
    }
}