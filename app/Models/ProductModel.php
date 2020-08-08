<?php namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model{
    protected $table = 'master_product';
    protected $primaryKey = 'id_product';
    protected $allowedFields = ['nama_barang','harga_beli','harga_jual','stock_product','src_image'];
    protected $useTimestamps = true;

    public function getProduct($id_product = FALSE)
    {
        if($id_product == FALSE){
            return $this->findAll();
        }else{
            return $this->getWhere(['id_product' => $id_product]);
        }
    }

    public function saveProduct($data_product)
    {
        $query = $this->db->table($this->table)->insert($data_product);
        return $query;
    }

    public function updateProduct($data_product,$id_product)
    {
        $query = $this->db->table($this->table)->update($data_product,['id_product' => $id_product]);
        return $query;
    }

    public function deleteProduct($id_product)
    {
        $query = $this->db->table($this->table)->delete(['id_product' => $id_product]);
        return $query;
    }

}