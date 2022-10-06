@extends('admin.master')
@section('content')
    <div class="row mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center text-success"> Reservation Create</h4>
                    @include('error.error')
                </div>
                <div class="card-body">
                    <form action="{{route('admin.reservation.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name">name</label>
                            <input type="text" name="name" class="form-control form-control-sm" id="name"
                                placeholder="Enter Category name">
                        </div>

                        <div class="mb-3">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control form-control-sm" id="email"
                                placeholder="Enter Email">
                        </div>

                        <div class="mb-3">
                            <label for="mobile">Mobile</label>
                            <input type="tel" name="mobile" class="form-control form-control-sm" id="mobile"
                                placeholder="Enter mobile">
                        </div>

                        <div class="mb-3">
                            <label for="description">Reservation Date</label>
                           <input type="datetime-local" name="resDate" class="form-control form-control-sm">
                         
                        </div>
                      

                        <div class="mb-3">
                            <label for="formFile" class="form-label">Guests Number</label>
                            <input type="number" class="form-control form-control-sm" name="guests" placeholder="Enter Guests Number">
                        </div>

                        <div class="mb-3">
                            <label for="table" class="form-label">  Table</label>
                             <select name="table_id" id="" class="form-control form-control-sm" id="table">
                                  <option value="" selected disabled> Choose Table </option>
                                  @foreach ($table as $item)
                                          <option value="{{$item->id}}"> {{$item->name}} ({{$item->guests}}) </option>
                                  @endforeach
                             </select>
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
