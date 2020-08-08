<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ProductModel;
use CodeIgniter\API\ResponseTrait;
class product extends Controller{
    use ResponseTrait;
    public function index()
    {
        $modelProduct = new ProductModel();
        $data['product'] = $modelProduct->getProduct();
        echo view('product_view',$data);
    }

    public function viewProduct($id_product){
        $modelProduct = new ProductModel();
        $response = [
            'status'   => 201,
            'error'    => null,
            'messages' => $modelProduct->getProduct($id_product)->getResult()
        ];
        return $this->respondCreated($response);
    }

    public function save()
    {
        $modelProduct = new ProductModel();
        $data = [
            'nama_barang' => $this->request->getPost('nama_barang'),
            'harga_jual' => $this->request->getPost('harga_jual'),
            'harga_beli' => $this->request->getPost('harga_beli'),
            'stock_product' => $this->request->getPost('stock_product'),
            'src_image' => $this->request->getPost('src_image')
        ];
        $modelProduct->saveProduct($data);
        $response = [
            'status'   => 201,
            'error'    => null,
            'messages' => [
                'success' => 'Data Saved'
            ]
        ];
        return $this->respondCreated($response);
        // $this->session->set_flashdata('msg', 'Data Berhasil di Inputkan');
        return redirect()->to('/product');
    }

    public function update($id_product)
    {
        $modelProduct = new ProductModel();
        $data = [
            'nama_barang' => $this->request->getPost('nama_barang'),
            'harga_jual' => $this->request->getPost('harga_jual'),
            'harga_beli' => $this->request->getPost('harga_beli'),
            'stock_product' => $this->request->getPost('stock_product'),
            'src_image' => $this->request->getPost('src_image')
        ];
        $modelProduct->updateProduct($data,$id_product);
        $response = [
            'status'   => 201,
            'error'    => null,
            'messages' => [
                'success' => 'Data Updated'
            ]
        ];
        return $this->respondCreated($response);
    }

    public function delete($id_product)
    {
        $modelProduct = new ProductModel();
        $modelProduct->deleteProduct($id_product);
        $response = [
            'status'   => 201,
            'error'    => null,
            'messages' => [
                'success' => 'Data Deleted'
            ]
        ];
        return $this->respondCreated($response);
    }
}