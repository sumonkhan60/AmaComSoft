@extends('master.admin.master')

@section('body')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Service</h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">Please Fill All Field</div>
                <div class="card-body">
                    <p class="text-center text-success">{{Session::get('message')}}</p>
                    <form action="{{route('service.new')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="" class="col-md-3">Service Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="name"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-md-3">Image</label>
                            <div class="col-md-9">
                                <input type="file" class="form-control-file" name="image"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-md-3">Description</label>
                            <div class="col-md-9">
                                <textarea id="mytextarea" class="form-control" name="description"></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-success" name="btn" value="Create New Service"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
      tinymce.init({
        selector: '#mytextarea'
      });
    </script>
@endsection
