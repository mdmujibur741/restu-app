@extends('admin.master')
@section('content')

    <div class="row mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4> Table Edit</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('admin.table.update',$table->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        
                        <div class="mb-3">
                            <label for="name">name</label>
                            <input type="text" name="name" class="form-control" id="name"
                                placeholder="Enter Category name" value="{{$table->name}}">
                        </div>

                        <div class="mb-3">
                            <label for="description">Guests Number</label>
                            <input type="number" name="guests" class="form-control" placeholder="Enter Guests Number" value="{{$table->guests}}">
                        </div>

                        <div class="mb-3">
                               <label for="status">Status</label>
                               <select name="status" id="status" class="form-control">
                                <option value="" selected disabled>  Choose Status </option>
                               
                                @foreach ($status as $item)
                                <option value="{{$item->id}}" @selected($table->status_id == $item->id)> {{$item->name}} </option>
                                @endforeach
                           
                               
                                   
                                    
                               </select>
                        </div>

                        <div class="mb-3">
                            <label for="location"> Location </label>
                            <select name="location" id="location" class="form-control">
                                <option value="" selected disabled>  Choose Location </option>

                                @foreach ($location as $item)
                                <option value="{{$item->id}}" @selected($item->id == $table->location_id) > {{$item->name}} </option>
                                @endforeach
                            </select>
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
