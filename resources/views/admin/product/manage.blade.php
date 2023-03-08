@extends('master.admin.master')

@section('body')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h4 class="h3 mb-0 text-gray-800">All Product Info</h4>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                    <div class="card-body">
                        <p class="text-center text-success">{{Session::get('message')}}</p>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Product Name</th>
                                        <th>Price</th>
                                        <th>Details</th>
                                        <th>Feature Image</th>
                                        <th>Url</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->price}}</td>
                                        <td>{{$product->details}}</td>
                                        <td> <img src="{{asset($product->image)}}" alt="" height="50" width="80"></td>
                                        <td>{{$product->url}}</td>
                                        <td>
                                            <a href="{{route('product.edit', ['id' => $product->id])}}" class="btn btn-success btn-sm mt-2" title="Edit Product">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="{{route('product.delete', ['id' => $product->id])}}" class="btn btn-danger btn-sm mt-2" title="Delete Product">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
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

@endsection
