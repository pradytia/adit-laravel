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

    public function edit($product_id){
        $editProduct = modelProduct::find($product_id);
        return view('product/edit', compact('editProduct'));
    }
}
