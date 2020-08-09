<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modelProduct;

class ProductController extends Controller
{
    public function index(){
        $data_product = modelProduct::get();
        return view('product/index', compact('data_product'));
    }

    public function create(Request $request){

        modelProduct::create($request->all());
        alert("Data Berhasil ditambah");
        return redirect('/product');
   }

   public function delete($product_id){
        $deleteProduct = modelProduct::find($product_id);
        $deleteProduct->delete();
        return redirect('/product');

    }

    public function update(Request $request, $product_id){
        $editProduct = modelProduct::find($product_id);
        $editProduct->update($request->all());
        return redirect('/product');
    }

    public function edit($product_id){
        $editProduct = modelProduct::find($product_id);
        return view('product/edit', compact('editProduct'));
    }

}
