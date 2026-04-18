<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;
use CodeIgniter\HTTP\ResponseInterface;

class Product extends BaseController
{
    public function index()
    {
        if (session()->get('isLoggedIn') == false) {
            return redirect()->to('/login');
        }

        $products = new ProductModel();

        if ($products->countAllResults() == 0) {
            return view('Pages/products', [
                'error' => 'No products found!'
            ]);
        }

        return view('Pages/products', [
            'products' => $products->findAll()
        ]);
    }

    public function show($id)
    {
        $products = new ProductModel();
        $data = $products->find($id);

        if (!$data) {
            return redirect()->to('/products')->with('error', 'Product not found');
        }


        return view('Pages/product_detail', [
            'product' => $data
        ]);
    }

    public function create()
    {   
        if (session()->get('isLoggedIn') == false) {
            return redirect()->to('/login');
        }

    return view('Pages/product_create');
    }

    public function store()
    {
        $product = new ProductModel();
        
        if (!$this->validate($product->getValidationRules())) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $imageFile = $this->request->getFile('product_image');
        $imageName = $imageFile->getRandomName();
        $imageFile->move(ROOTPATH . 'public/uploads/products', $imageName);

        $insertData = $product->skipValidation(true)->save([
            'name' => $this->request->getPost('product_name'),
            'price' => $this->request->getPost('price'),
            'stock' => $this->request->getPost('stock'),
            'image' => $imageName
        ]);

        if (!$insertData) {
            return redirect()->back()->withInput()->with('error', 'Failed to create product');
        }

        return redirect()->to('/products')->with('success', 'Product created successfully');
    }
}
