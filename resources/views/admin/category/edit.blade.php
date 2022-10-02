@extends('admin.master')
@section('content')
    <div class="row mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4> Category Create</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('admin.category.update',$category->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <label for="name">name</label>
                            <input type="text" name="name" class="form-control" id="name" value="{{$category->name}}" placeholder="Enter Category name">
                        </div>

                        <div class="mb-3">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" class="form-control" rows="4"> {{$category->description}} </textarea>
                        </div>

                        <div class="mb-3">
                            <label for="formFile" class="form-label">Image</label>
                            <input class="form-control" type="file" id="formFile" name="image">
                             <img src="{{asset($category->image)}}" class="float-right" alt="" srcset="" width="200px" height="120px">
                        </div>

                        <div class="mb-3">
                               <input type="submit" class="btn btn-info" value="UPDATE">
                        </div>

                    </form>
                </div>
                <div class="card-footer">

                </div>
            </div>
        </div>
    </div>
@endsection
