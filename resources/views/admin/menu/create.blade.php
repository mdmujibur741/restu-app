@extends('admin.master')
@section('content')
    <div class="row mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4> Menu Create</h4>
                    @include('error.error')
                </div>
                <div class="card-body">
                    <form action="{{route('admin.menu.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name">name</label>
                            <input type="text" name="name" class="form-control" id="name"
                                placeholder="Enter Menu name">
                        </div>

                        <div class="mb-3">
                            <label for="price">Price</label>
                            <input type="number" name="price" class="form-control" id="price"
                                placeholder="Enter Price">
                        </div>

                        <div class="mb-3">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" class="form-control" rows="4"></textarea>
                        </div>

                       
                            
                    
                       <div class="d-flex mb-3">
                        @if($category->count() > 0)
                        @foreach ($category as $item)
                        <div class="form-check mr-3 ">
                            <input class="form-check-input" type="checkbox" id="check{{$item->id}}" value="{{$item->id}}" name="category[]">
                            <label class="form-check-label" for="check{{$item->id}}"> {{$item->name}} </label>
                          </div>

                          @endforeach
                          @endif
                       </div>
                    
                          

                        <div class="mb-3">
                            <label for="formFile" class="form-label"> Image </label>
                            <input class="form-control" type="file" name="image" id="formFile">
                        </div>

                        <div class="mb-3">
                               <input type="submit" class="btn btn-info" value="SUBMIT">
                        </div>

                    </form>
                </div>
                <div class="card-footer">

                </div>
            </div>
        </div>
    </div>
@endsection
