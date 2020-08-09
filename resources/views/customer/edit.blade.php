@extends('layouts/master')

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h1>Edit Data Customer {{ $editCustomer->customer_name}}</h1>
                            </div>
                            <div class="panel-body">
                                <form action="/customer/{{ $editCustomer->customer_id }}/update" method="POST">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Customer Name</label>
                                    <input name="customer_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value=" {{ $editCustomer->customer_name}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect2">Gender</label>
                                    <select name="gender" class="form-control" id="exampleFormControlSelect2">
                                    <option selected>===Pilih Jenis Kelamin===</option>
                                    <option value="L" @if($editCustomer->gender == "L") selected @endif>Laki-laki</option>
                                    <option value="P" @if($editCustomer->gender == "P") selected @endif>Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Customer Address</label>
                                    <textarea name="customer_address" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $editCustomer->customer_address}}</textarea>
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


