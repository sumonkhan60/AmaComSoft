@extends('master.admin.master')

@section('body')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Update Category</h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">Please Fill All Field</div>
                <div class="card-body">
                    <p class="text-center text-success">{{Session::get('message')}}</p>
                    <form action="{{route('category.update', ['id' => $category->id])}}" method="post">
                        @csrf
                        <div class="row mb-3">
                            <label for="" class="col-md-3">Category Name</label>
                            <div class="col-md-9">
                                <input type="text" value="{{$category->name}}" class="form-control" name="name"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-success" name="btn" value="Update Category Info"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
