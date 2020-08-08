<?php namespace App\Database\Seeds;
 
class ProductSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            'nama_barang'  => 'Kulkas 2 Pintu',
            'harga_beli'      => 20000,
            'harga_jual'     => 50000,
            'stock_product'  => 2,
            'src_image'    => '/sd/asd/sddd/',
        ];
        $this->db->table('master_product')->insert($data);
    }
} 