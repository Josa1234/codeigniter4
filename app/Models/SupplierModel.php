<?php

namespace App\Models;

use CodeIgniter\Model;

class SupplierModel extends Model
{
    public function get_supplier()
    {
        return $this->db->table('supplier')->get()->getResultArray();
    }

    public function insert_supplier($data)
    {
        return $this->db->table('supplier')->insert($data);
    }

    public function delete_supplier($supplier_id)
    {
        return $this->db->table('supplier')->delete(array('supplier_id' => $supplier_id));
    }
}
