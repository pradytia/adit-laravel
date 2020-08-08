<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;

class ContentsController extends Controller
{
    function index(){
        $data = Content::get();
        return view('contents/index', compact('data'));
    }
}
