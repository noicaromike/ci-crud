<?php namespace App\Controllers;

use App\Models\Product;

class ProductController extends BaseController{


    public function create(){

        return view('templates/header')
        . view('products/add_item')
        . view('templates/footer');
    }
    public function store(){
        $products = new Product();

        $data = [
            'name' => $this->request->getPost('name'),
            'price' => $this->request->getPost('price'),
            'description' => $this->request->getPost('description'),
        ];
        $products->save($data);
        return redirect()->to(base_url('/'));
        
    }
    public function edit($id){
        $products = new Product();
        $data['products'] = $products->find($id);
        
        return view('templates/header')
        . view('products/edit',$data)
        . view('templates/footer');
    }

    public function update($id){
        $products = new Product();
        
        $data = [
            'name' => $this->request->getPost('name'),
            'price' => $this->request->getPost('price'),
            'description' => $this->request->getPost('description'),
        ];
        $products->update($id,$data);
        return redirect()->to(base_url('/'));
        
    }
    public function delete($id){
        $products = new Product();
        $products->delete($id);
        return redirect()->to(base_url('/'));

    }
}

?>