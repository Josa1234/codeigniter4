<?php

namespace App\Models;

use CodeIgniter\Model;

class PenjualanModel extends Model
{
    public function get_product()
    {
        return $this->db->table('penjualan')->get()->getResultArray();
    }

    public function insert_penjualan($data)
    {
        return $this->db->table('penjualan')->insert($data);
    }

    public function edit_penjualan($id_penjualan)
    {
        return $this->db->table('penjualan')->where('id_penjualan', $id_penjualan)->get()->getRowArray();
    }

    public function update_penjualan($data, $id_penjualan)
    {
        return $this->db->table('penjualan')->update($data, array('id_penjualan' => $id_penjualan));
    }

    public function delete_penjualan($id_penjualan)
    {
        return $this->db->table('penjualan')->delete(array('id_penjualan' => $id_penjualan));
    }
}
