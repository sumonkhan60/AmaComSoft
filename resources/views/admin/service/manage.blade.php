@extends('master.admin.master')

@section('body')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h4 class="h3 mb-0 text-gray-800">All Service Info</h4>
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
                                        <th>Feature Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($services as $service)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$service->name}}</td>
                                        <td> <img src="{{asset($service->image)}}" alt="" height="50" width="80"></td>
                                        <td>
                                            <a href="{{route('service.edit', ['id' => $service->id])}}" class="btn btn-success btn-sm mt-2" title="Edit Service">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="{{route('service.delete', ['id' => $service->id])}}" class="btn btn-danger btn-sm mt-2" title="Delete Service">
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
