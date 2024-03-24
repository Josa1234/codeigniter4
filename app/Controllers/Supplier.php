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

    public function tambah()
    {
        $data = [
            'title' => 'Tambah Data Supplier',
            'isi' => 'supplier/v_tambah'
        ];
        echo view('layout/v_wrapper', $data);
    }

    public function save()
    {
        $data = [
            'supplier_name' => $this->request->getPost('supplier_name'),
            'supplier_description' => $this->request->getPost('supplier_description'),
            'supplier_address' => $this->request->getPost('supplier_address'),
        ];
        $this->SupplierModel->insert_supplier($data);
        session()->setFlashdata('success', 'Data berhasil ditambahkan');
        return redirect()->to(base_url('supplier'));
    }

    public function delete($product_id)
    {
        $this->SupplierModel->delete_supplier($product_id);
        session()->setFlashdata('success', 'Data berhasil dihapus !!');
        return redirect()->to(base_url('supplier'));
    }
}
