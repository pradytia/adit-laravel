@extends('layouts/master')

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h1>Edit Data Product {{ $editProduct->customer_name}}</h1>
                            </div>
                            <div class="panel-body">
                                <form action="/customer/{{ $editProduct->product_id }}/update" method="POST">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Product Name</label>
                                    <input name="product_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value=" {{ $editProduct->product_name}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Product Description</label>
                                    <textarea name="product_description" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $editProduct->product_description}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Product Image Link</label>
                                    <textarea name="product_image" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $editProduct->product_image}}</textarea>
                                </div>
                            </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-warning">Update</button>
                                </div>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop


