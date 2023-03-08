@extends('master.admin.master')

@section('body')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Update Marketing</h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <p class="text-center text-success">{{Session::get('message')}}</p>
                    <form action="{{route('marketing.update', ['id' => $marketing->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="" class="col-md-3">Service Name</label>
                            <div class="col-md-9">
                                <input type="text" value="{{$marketing->name}}" class="form-control" name="name"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-md-3">Price</label>
                            <div class="col-md-9">
                                <input type="text" value="{{$marketing->price}}" class="form-control" name="price"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-md-3">Details</label>
                            <div class="col-md-9">
                                <textarea id="mytextarea" class="form-control" name="details">
                                    {{ $marketing->details }}
                                </textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-md-3">Image</label>
                            <div class="col-md-9">
                                <input type="file" class="form-control-file mb-3" name="image"/>
                                <img src="{{asset($marketing->image)}}" alt="" height="100" width="150" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-success" name="btn" value="Update Marketing"/>
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
