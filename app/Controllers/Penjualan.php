<?php

namespace App\Controllers;

use App\Models\PenjualanModel;

class Penjualan extends BaseController
{
    protected $PenjualanModel;

    public function __construct()
    {
        $this->PenjualanModel = new PenjualanModel();
    }

    public function index()
    {
        $data = [
            'title' => 'List Data Penjualan',
            'penjualan' => $this->PenjualanModel->get_product(),
            'isi' => 'penjualan/v_list'
        ];
        echo view('layout/v_wrapper', $data);
    }

    public function tambah()
    {
        $data = [
            'title' => 'Tambah Data Penjualan',
            'isi' => 'penjualan/v_tambah'
        ];
        echo view('layout/v_wrapper', $data);
    }

    public function save()
    {
        $data = [
            'no_faktur' => $this->request->getPost('no_faktur'),
            'nama_pembeli' => $this->request->getPost('nama_pembeli'),
            'product_id' => $this->request->getPost('product_id'),
            'jumlah' => $this->request->getPost('jumlah'),
            'harga_satuan' => $this->request->getPost('harga_satuan'),
            'total_bayar' => $this->request->getPost('total_bayar'),
        ];
        $this->PenjualanModel->insert_penjualan($data);
        session()->setFlashdata('success', 'Data berhasil ditambahkan');
        return redirect()->to(base_url('penjualan'));
    }

    public function edit($id_penjualan)
    {
        $data = [
            'title' => 'Edit Data Penjualan',
            'penjualan' => $this->PenjualanModel->edit_penjualan($id_penjualan),
            'isi' => 'penjualan/v_edit'
        ];
        echo view('layout/v_wrapper', $data);
    }

    public function update($id_penjualan)
    {
        $data = [
            'no_faktur' => $this->request->getPost('no_faktur'),
            'nama_pembeli' => $this->request->getPost('nama_pembeli'),
            'product_id' => $this->request->getPost('product_id'),
            'jumlah' => $this->request->getPost('jumlah'),
            'harga_satuan' => $this->request->getPost('harga_satuan'),
            'total_bayar' => $this->request->getPost('total_bayar'),
        ];
        $this->PenjualanModel->update_penjualan($data, $id_penjualan);
        session()->setFlashdata('success', 'Data berhasil di update');
        return redirect()->to(base_url('penjualan'));
    }

    public function delete($id_penjualan)
    {
        $this->PenjualanModel->delete_penjualan($id_penjualan);
        session()->setFlashdata('success', 'Data berhasil dihapus !!');
        return redirect()->to(base_url('penjualan'));
    }
}
