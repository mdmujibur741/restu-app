@extends('admin.master')
@section('content')
    <div class="row mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center text-success"> Special Event Create</h4>
                    @include('error.error')
                </div>
                <div class="card-body">
                    <form action="{{route('admin.special.update',$special->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control form-control-sm" id="title" placeholder="Enter Title" value="{{$special->title}}">
                        </div>

                        <div class="mb-3">
                            <label for="subtitle">Subtitle</label>
                            <input type="text" name="subtitle" class="form-control form-control-sm" id="subtitle" placeholder="Enter subtitle" value="{{$special->subtitle}}">
                        </div>

                        <div class="mb-3">
                            <label for="description">Description</label>
                             <textarea name="description" id="description" class="form-control" rows="4" placeholder="Enter Description" > {{$special->description}} </textarea>
                        </div>

                        <div class="mb-3">
                            <label for="StartDateTime ">Event Start Date & Time</label>
                           <input type="datetime-local" name="StartDateTime" class="form-control form-control-sm" value="{{$special->StartDateTime}}">
                         
                        </div>
                      

                        <div class="mb-3">
                            <label for="EndTime" class="form-label">Event End Time</label>
                            <input type="time" name="EndTime" class="form-control form-control-sm" value="{{$special->EndTime}}">
                        </div>

                      

                        <div class="mb-3">
                               <input type="submit" class="btn btn-info" value="Update">
                        </div>

                    </form>
                </div>
                <div class="card-footer">

                </div>
            </div>
        </div>
    </div>
@endsection
