<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Product extends BaseController
{
    protected $ProductModel;

    public function __construct()
    {
        helper('form');
        $this->ProductModel = new ProductModel();
    }

    public function index()
    {
        if (!$this->validate([])) {
            $data = [
                'title' => 'List Data Product',
                'product' => $this->ProductModel->get_product(),
                'validation' => $this->validator,
                'isi' => 'product/v_list'
            ];
            echo view('layout/v_wrapper', $data);
        }
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
        if ($this->request->getMethod() !== 'post') {
            return redirect()->to(base_url('product/index'));
        }
        $validated = $this->validate([
            'image' => 'uploaded[image],
            mime_in[gambar,image/jpg,image/gif,image/jpeg,image/png],
            max_size[gambar,2000]'
        ]);
        if (!$validated) {
            return $this->index();
        } else {
            $file_gambar = $this->request->getFile('image');
            $file_gambar->move(ROOTPATH   . 'public/images');
            $data = [
                'product_name' => $this->request->getPost('product_name'),
                'product_description' => $this->request->getPost('product_description'),
                'image' => $file_gambar->getName(),
            ];
            $this->ProductModel->insert_product($data);
            session()->setFlashdata('success', 'Data berhasil ditambahkan');
            return redirect()->to(base_url('product'));
        }
    }

    public function edit($product_id)
    {
        $data = [
            'title' => 'Edit Data Product',
            'product' => $this->ProductModel->edit_product($product_id),
            'isi' => 'product/v_edit'
        ];
        echo view('layout/v_wrapper', $data);
    }

    public function update($product_id)
    {
        $data = [
            'product_name' => $this->request->getPost('product_name'),
            'product_description' => $this->request->getPost('product_description'),
        ];
        $this->ProductModel->update_product($data, $product_id);
        session()->setFlashdata('success', 'Data berhasil di update');
        return redirect()->to(base_url('product'));
    }

    public function delete($product_id)
    {
        $this->ProductModel->delete_product($product_id);
        session()->setFlashdata('success', 'Data berhasil dihapus !!');
        return redirect()->to(base_url('product'));
    }
}
