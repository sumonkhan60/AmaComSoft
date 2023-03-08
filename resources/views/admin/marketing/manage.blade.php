@extends('master.admin.master')

@section('body')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h4 class="h3 mb-0 text-gray-800">All Digital Service Info</h4>
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
                                        <th>Service Name</th>
                                        <th>Price</th>
                                        <th>Details</th>
                                        <th>Feature Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($marketings as $marketing)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$marketing->name}}</td>
                                        <td>{{$marketing->price}}</td>
                                        <td>{{$marketing->details}}</td>
                                        <td> <img src="{{asset($marketing->image)}}" alt="" height="50" width="80"></td>
                                        <td>
                                            <a href="{{route('marketing.edit', ['id' => $marketing->id])}}" class="btn btn-success btn-sm mt-2" title="Edit Marketing">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="{{route('marketing.delete', ['id' => $marketing->id])}}" class="btn btn-danger btn-sm mt-2" title="Delete Marketing">
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
