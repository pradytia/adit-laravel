<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modelCustomer;
use Alert;

class CustomerController extends Controller
{
    public function index(){

        $data_customer = modelCustomer::get();
        return view('customer/index', compact('data_customer'));
    }

    public function create(Request $request){

         modelCustomer::create($request->all());
        //  Alert::success('Data berhasil di tambah', 'Success');
        //  alert()->success('Data berhasil di tambah', 'Success')->persistent('Close');
        alert("Data Berhasil ditambah");
         return redirect('/customer');
    }

    public function delete($customer_id){
        $delCustomer = modelCustomer::find($customer_id);
        $delCustomer->delete();
        return redirect('/customer');

    }

    public function edit($customer_id){
        $editCustomer = modelCustomer::find($customer_id);
        return view('customer/edit', compact('editCustomer'));
    }

    public function update(Request $request, $customer_id){
        $editCustomer = modelCustomer::find($customer_id);
        $editCustomer->update($request->all());
        return redirect('/customer');
    }
}
