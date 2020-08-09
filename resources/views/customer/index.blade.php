@extends('layouts/master')

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                    <div class="panel">
								<div class="panel-heading">
                                    <h3 class="panel-title"><i class="lnr lnr-menu"></i>Table Customer</h3>
                                    <div class="right">
                                    @if(auth()->user()->role == 'admin')
                                        <button type="button" class="btn btn-default btn-block" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus-square"></i> ADD</button>
                                    @endif
                                    </div>
								</div>
								<div class="panel-body">
                                    <div class="table-responsive">
                                    <table class="table table-bordered table-hover mt-5" id="customer_table">
										<thead>
                                        <tr>
                                        @if(auth()->user()->role == 'admin')
                                            <th>Action</th>
                                        @endif
                                            <th>CustomerID</th>
                                            <th>Customer_Name</th>
                                            <th>Customer_Address</th>
                                            <th>Gender</th>
                                            <th>Created Date</th>
                                            <th>Updated Date</th>
                                        </tr>
										</thead>
										<tbody>
                                            @foreach($data_customer as $d)
                                                <tr>
                                                @if(auth()->user()->role == 'admin')
                                                    <td>
                                                        <a href="/customer/{{ $d->customer_id }}/edit"  class="btn btn-warning btn-sm btn-edit"><i class="fa fa-edit"></i></a>
                                                        <a href="/customer/{{ $d->customer_id }}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau hapus ?')"><i class="fa fa-trash"></i></a>
                                                    </td>
                                                @endif
                                                    <td>{{ $d->customer_id }}</td>
                                                    <td>{{ $d->customer_name }}</td>
                                                    <td>{{ $d->customer_address }}</td>
                                                    <td>{{ $d->gender }}</td>
                                                    <td>{{ $d->created_at->format('d/M/Y') }}</td>
                                                    <td>{{ $d->updated_at->format('d/M/Y') }}</td>
                                                </tr>
                                            @endforeach
										</tbody>
									</table>
                                    </div>
								</div>
								<!-- <div class="panel-footer">
									<div class="row">
										<div class="col-md-6"><span class="panel-note"><i class="fa fa-clock-o"></i> Last 24 hours</span></div>
										<div class="col-md-6 text-right"><a href="#" class="btn btn-primary">View All Purchases</a></div>
									</div>
								</div> -->
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
                <h5 class="modal-title" id="exampleModalLabel">Modal Customer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
            <form action="/customer/create" method="POST">
                    {{csrf_field()}}
                <div class="form-group">
                    <label for="exampleInputEmail1">Customer Name</label>
                    <input name="customer_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholdr="Enter Name">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect2">Gender</label>
                    <select name="gender" class="form-control" id="exampleFormControlSelect2">
                    <option selected>===Pilih Jenis Kelamin===</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Customer Address</label>
                    <textarea name="customer_address" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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


