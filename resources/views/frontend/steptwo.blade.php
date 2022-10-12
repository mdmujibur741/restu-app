@extends('frontend.master')

@section('content')
     
<div id="" class="section pb-5" style="background: linear-gradient(rgba(124, 138, 228, 0.8),rgba(84, 102, 204, 0.3)),url({{asset('frontend/img/background01.jpg')}}); min-height:90vh">

    <!-- container -->
    <div class="container">

        <!-- row -->
        <div class="row justify-content-center">

            <!-- reservation form -->
            <div class="col-md-6 col-md-offset-1 col-sm-10 col-sm-offset-1">
                <form action="{{route('web.stepTwo.store')}}" method="post" class="reserve-form shadow row mt-5">
                    @csrf
                              <h3 class="text-center text-light">Reservation </h3>

                         
                                <div class="progress my-3">
                                    <div class="progress-bar progress-bar-striped bg-success" role="progressbar" aria-label="Success striped example" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Step Two</div>
                                  </div>
                            
                              

                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="table"> Table</label>
                            <select name="table_id" class="form-control rounded-pill" id="table">
                                   <option value="" disabled selected > Choose Table </option>
                                    @foreach ($table as $key=>$item)
                                    <option value="{{$item->id}}"> {{$item->name}} </option>
                                    @endforeach
                            </select>
                        </div>

                      <div class="mb-3 text-center">
                          <input type="submit" value="SUBMIT" class="btn btn-light">
                      </div>
                      <a href="{{route('web.stepOne')}}" class="btn btn-success float-left"> Previus</a>
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