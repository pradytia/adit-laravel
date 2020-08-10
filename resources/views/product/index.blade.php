@extends('layouts/master')

@section('content')

    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="lnr lnr-menu"></i>Table Product</h3>
                                <div class="right">
                                @if(auth()->user()->role == 'admin')
                                    <button type="button" class="btn btn-default btn-block" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus-square"></i> ADD</button>        
                                @endif
                                </div>
							</div>
							<div class="panel-body">
                                <div class="table-responsive">
                                <table class="table table-bordered table-hover mt-5" id="product_table">
										<thead>
                                        <tr>
                                        @if(auth()->user()->role == 'admin')
                                            <th>Action</th>
                                        @endif
                                            <th>ProductID</th>
                                            <th>Product Name</th>
                                            <th>Product Description</th>
                                            <th>Product Image</th>
                                            <th>Created Date</th>
                                            <th>Updated Date</th>
                                        </tr>
										</thead>
										<tbody>
                                            @foreach($data_product as $d)
                                                <tr>
                                                    @if(auth()->user()->role == 'admin')
                                                    <td>
                                                        <a href="/product/{{ $d->product_id }}/edit"  class="btn btn-warning btn-sm btn-edit"><i class="fa fa-edit"></i></a>
                                                        <a href="/product/{{ $d->product_id }}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau hapus ?')"><i class="fa fa-trash"></i></a>
                                                    </td>
                                                    @endif
                                                    <td>{{ $d->product_id }}</td>
                                                    <td>{{ $d->product_name }}</td>
                                                    <td>{{ $d->product_description }}</td>
                                                    <td class="text-center"><img src="{{ $d->product_image }}" style="width: 50px; height: 50px;"/></td>
                                                    <td>{{ $d->created_at ? $d->created_at->format('d/M/Y') : null }}</td>
                                                    <td>{{ $d->updated_at ? $d->updated_at->format('d/M/Y') : null }}</td>
                                                </tr>
                                            @endforeach
										</tbody>
								</table>
                                </div>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
            <form action="/product/create" method="POST">
                    {{csrf_field()}}
                <div class="form-group">
                    <label>Product Name</label>
                    <input name="product_name" type="text" class="form-control" aria-describedby="emailHelp" placeholdr="Enter Product Name">
                </div>
                <div class="form-group">
                    <label>Product Description</label>
                    <textarea name="product_description" class="form-control" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label>Product Image Link</label>
                    <textarea name="product_image" class="form-control" rows="3"></textarea>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </form>
        </div>
    </div>    
</div>

@stop