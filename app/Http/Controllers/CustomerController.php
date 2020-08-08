<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modelCustomer;

class CustomerController extends Controller
{
    function index(){

        $data_customer = modelCustomer::get();
        // return $data_customer;
        return view('customer.index', compact('data_customer'));
    }
}
