@extends('admin.master')
@section('content')

    <div class="row mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4> Location Edit</h4>    <a href="{{route('admin.location.index')}}" class="float-right btn btn-success"> Location List </a>
                </div>
                <div class="card-body">
                    <form action="{{route('admin.location.update',$location->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <label for="name">name</label>
                            <input type="text" name="name" class="form-control" id="name"
                                placeholder="Enter Status name" value="{{$location->name}}">
                        </div>

                        
                        <div class="mb-3">
                               <input type="submit" class="btn btn-success" value="Update">
                        </div>

                    </form>
                </div>
                <div class="card-footer">

                </div>
            </div>
        </div>
    </div>
@endsection
