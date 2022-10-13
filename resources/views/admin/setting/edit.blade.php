@extends('admin.master')
@section('content')

    <div class="row mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4> Table Edit</h4>
                    @include('error.error')
                </div>
                <div class="card-body">
                    <form action="@if($setting ==null){{route('admin.setting.store')}}@else{{route('admin.setting.update',$setting->id)}}@endif" method="post">
                        @csrf
                       @if($setting ==!null) @method('put') @endif
                        
                        <div class="mb-3">
                            <label for="restName">Resturant Name</label>
                            <input type="text" name="restName" class="form-control form-control-sm" id="restName" @if($setting ==!null) value="{{$setting->restName}}" @endif placeholder="Enter Resturant Name" >
                        </div>

                        <div class="mb-3">
                            <label for="homeTitle">Home Title</label>
                            <input type="text" name="homeTitle" class="form-control form-control-sm" id="homeTitle" @if($setting ==!null) value="{{$setting->homeTitle}}" @endif placeholder="Enter Home Title" >
                        </div>


                        <div class="mb-3">
                            <label for="homeSubtitle">Home Subtitle</label>
                            <input type="text" name="homeSubtitle" class="form-control form-control-sm" id="homeSubtitle" @if($setting ==!null) value="{{$setting->homeSubtitle}}" @endif placeholder="Enter Home Subtitle " >
                        </div>


                        <div class="mb-3">
                            <label for="menuTitle">Menu Title</label>
                            <input type="text" name="menuTitle" class="form-control form-control-sm" id="menuTitle" @if($setting ==!null) value="{{$setting->menuTitle}}" @endif placeholder="Enter Menu Title" >
                        </div>

                        <div class="mb-3">
                            <label for="menuDescription">Menu Description</label>
                            <input type="text" name="menuDescription" class="form-control form-control-sm" id="menuDescription" @if($setting ==!null) value="{{$setting->menuDescription}}" @endif placeholder="Enter Menu Description" >
                        </div>

                        <div class="mb-3">
                            <label for="eventName">Event Name</label>
                            <input type="text" name="eventName" class="form-control form-control-sm" id="eventName" @if($setting ==!null) value="{{$setting->eventName}}" @endif placeholder="Enter Event Name" >
                        </div>

                        <div class="mb-3">
                            <label for="facebook">Facebook url </label>
                            <input type="url" name="facebook" class="form-control form-control-sm" id="facebook" @if($setting ==!null) value="{{$setting->facebook}}" @endif placeholder="Enter facebook url" >
                        </div>
                        <div class="mb-3">
                            <label for="twitter">Twitter url</label>
                            <input type="url" name="twitter" class="form-control form-control-sm" id="twitter" @if($setting ==!null) value="{{$setting->twitter}}" @endif placeholder="Enter Twitter url" >
                        </div>

                        <div class="mb-3">
                            <label for="pinterest">Pinterest url</label>
                            <input type="url" name="pinterest" class="form-control form-control-sm" id="pinterest" @if($setting ==!null) value="{{$setting->pinterest}}" @endif placeholder="Enter Pinterest url" >
                        </div>

                        <div class="mb-3">
                            <label for="linkedin">Linkedin url</label>
                            <input type="url" name="linkedin" class="form-control form-control-sm" id="linkedin" @if($setting ==!null) value="{{$setting->linkedin}}" @endif placeholder="Enter Linkedin url" >
                        </div>

                        <div class="mb-3">
                            <label for="instagram">Instagram url</label>
                            <input type="url" name="instagram" class="form-control form-control-sm" id="instagram" @if($setting ==!null) value="{{$setting->instagram}}" @endif placeholder="Enter Instagram url" >
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
