@extends('frontend.master')

@section('content')
     
<div id="" class="reservation section pb-5" style="background: linear-gradient(rgba(174, 180, 218, 0.8),rgba(143, 155, 222, 0.3)),url({{asset('frontend/img/background03.jpg')}})">

    <!-- container -->
    <div class="container">

        <!-- row -->
        <div class="row justify-content-center">
              
            <!-- reservation form -->
            <div class="col-md-6 col-md-offset-1 col-sm-10 col-sm-offset-1">
                <form action="{{route('web.stepOne.store')}}" method="post" class="reserve-form shadow row mt-5">
                  @csrf
                    <h3 class="text-center text-light">Make Reservation</h3>
                    @include('error.error')

                  
                    <div class="progress my-3">
                        <div class="progress-bar progress-bar-striped bg-success" role="progressbar" aria-label="Success striped example" style="width: 44%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Step One</div>
                      </div>
                      
                      
                      
                      <div class="col-md-12">
                        <div class="mb-3">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" value="{{$reservation->name ?? ''}}" class="form-control rounded-pill" placeholder="Name" >
                       </div>
                      </div>
                         <div class="col-md-6">
                         <div class="mb-3">
                            <label for="mobile"> Mobile </label>
                           <input type="tel" name="mobile" id="mobile" value="{{$reservation->mobile ?? ''}}" class="form-control rounded-pill" placeholder="Mobile">
                       </div>
                       <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="text" name="email" value="{{$reservation->email ?? ''}}" class="form-control rounded-pill" placeholder="Email" >
                   </div>
                    </div>
                    <div class="col-md-6">
                       
                        <div class="mb-3">
                             <label for="dateTime">Date & Time</label>
                             <input type="datetime-local" name="resDate" value="{{$reservation->resDate ?? ''}}" min="{{$minDate->format('Y-m-d\TH:i:s')}}" max="{{$maxDate->format('Y-m-d\TH:i:s')}}" id="dateTime" class="form-control rounded-pill">
                        </div>
                        <div class="mb-3">
                            <label for="guests">Guests</label>
                            <input type="number" name="guests" id="guests" value="{{$reservation->guests ?? ''}}" class="form-control rounded-pill" placeholder="Guests">
                        </div>
                    </div>
                 
             
                       
                          <div class="mb-3 d-flex justify-content-end">
                            <input type="submit" value="Next" class="btn btn-light"> 
                          </div>
                             
                       
                </form>
            </div>
            <!-- /reservation form -->

            

        </div>
        <!-- /row -->

    </div>
    <!-- /container -->
</div>

@endsection