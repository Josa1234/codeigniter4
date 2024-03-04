<?php

namespace App\Models;

use CodeIgniter\Model;

class SupplierModel extends Model
{
    public function get_supplier()
    {
        return $this->db->table('supplier')->get()->getResultArray();
    }
}
