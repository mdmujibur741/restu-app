@extends('admin.master')
@section('content')
    <div class="row mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center text-success"> Reservation Update</h4>
                    @include('error.error')
                </div>
                <div class="card-body">
                    <form action="{{route('admin.reservation.update',$reservation->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')

                        <div class="mb-3">
                            <label for="name">name</label>
                            <input type="text" name="name" class="form-control form-control-sm" id="name"
                                placeholder="Enter name" value="{{ $reservation->name}}">
                        </div>

                        <div class="mb-3">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control form-control-sm" id="email"
                                placeholder="Enter Email" value="{{ $reservation->email}}">
                        </div>

                        <div class="mb-3">
                            <label for="mobile">Mobile</label>
                            <input type="tel" name="mobile" class="form-control form-control-sm" id="mobile"
                                placeholder="Enter mobile" value="{{ $reservation->mobile}}">
                        </div>

                        <div class="mb-3">
                            <label for="description">Reservation Date</label>
                           <input type="datetime-local" name="resDate" class="form-control form-control-sm" value="{{ $reservation->resDate}}">
                         
                        </div>
                      

                        <div class="mb-3">
                            <label for="formFile" class="form-label">Guests Number</label>
                            <input type="number" class="form-control form-control-sm" name="guests" placeholder="Enter Guests Number" value="{{ $reservation->guests}}">
                        </div>

                        <div class="mb-3">
                            <label for="table" class="form-label">  Table</label>
                             <select name="table_id" id="" class="form-control form-control-sm" id="table">
                                  <option value="" selected disabled> Choose Table </option>
                                  @foreach ($table as $item)
                                          <option value="{{$item->id}}" @selected($item->id == $reservation->table_id) > {{$item->name}} ({{$item->guests}}) </option>
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
