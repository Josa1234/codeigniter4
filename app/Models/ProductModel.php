<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    public function get_product()
    {
        return $this->db->table('product')->get()->getResultArray();
    }

    public function insert_product($data)
    {
        return $this->db->table('product')->insert($data);
    }

    public function delete_product($product_id)
    {
        return $this->db->table('product')->delete(array('product_id' => $product_id));
    }
}
