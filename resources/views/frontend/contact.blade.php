@extends('frontend.master')

@section('content')
     
<div id="#contact" class="section pb-5" style="background: linear-gradient(rgba(174, 180, 218, 0.8),rgba(143, 155, 222, 0.3)),url({{asset('frontend/img/contact.jpg')}})">

    <!-- container -->
    <div class="container">

        <!-- row -->
        <div class="row justify-content-center">
              
            <!-- reservation form -->
            <div class="col-md-6 col-md-offset-1 col-sm-10 col-sm-offset-1">
                <form action="{{route('web.contact.message')}}" method="post" class="contact_form shadow row mt-5 p-3 rounded-4 " style="background: linear-gradient(rgba(191, 124, 124, 0.9),rgba(86, 63, 200, 0.8))">
                  @csrf
                    <h3 class="text-center text-light text-uppercase mt-3">Contact To {{ $settings->restName}}</h3>
                    @include('error.error')

                  
                 
                      
                      
                      
                      <div class="col-md-12">
                        <div class="mb-3">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control rounded-pill" placeholder="Name" >
                       </div>
                      </div>
                         <div class="col-md-6">
                         <div class="mb-3">
                            <label for="mobile"> Mobile </label>
                           <input type="tel" name="mobile" id="mobile" class="form-control rounded-pill" placeholder="Mobile">
                       </div>
                    </div>
                    <div class="col-md-6">
                       <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control rounded-pill" placeholder="Email" >
                   </div>
                </div>
                   
                    <div class="col-md-12">
                       
                    <div class="mb-3">
                        <label for="message">Message</label>
                        <textarea name="message" id="message" class="form-control form-control-sm" rows="5"></textarea>
                    </div>
                       
                    </div>
                 
             
                       
                          <div class="mb-3 d-flex justify-content-center">
                            <input type="submit" value="Send" class="btn btn-light"> 
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