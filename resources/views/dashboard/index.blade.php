@extends('layouts/master')

@section('content')

    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <h1 class="text-center">Hai {{auth()->user()->name}},<br/> Selamat Datang Di Toko Kelontong </h1>
            </div>
        </div>
    </div>
@stop