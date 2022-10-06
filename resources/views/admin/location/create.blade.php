@extends('admin.master')
@section('content')

    <div class="row mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4> Location Create</h4>    <a href="{{route('admin.location.index')}}" class="float-right btn btn-success"> Location List </a>
                </div>
                <div class="card-body">
                    <form action="{{route('admin.location.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name">name</label>
                            <input type="text" name="name" class="form-control" id="name"
                                placeholder="Enter Status name">
                        </div>

                        
                        <div class="mb-3">
                               <input type="submit" class="btn btn-success" value="SUBMIT">
                        </div>

                    </form>
                </div>
                <div class="card-footer">

                </div>
            </div>
        </div>
    </div>
@endsection
