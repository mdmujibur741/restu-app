@extends('admin.master')
@section('content')
<div class="row mt-4">
    <div class="col-sm-6 col-md-3">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title"> <b>Reservation</b> (@if($reservation_count ==!null) {{$reservation_count}}@else 0 @endif ) </h5>
          <p class="card-text mt-4">Today to one Week.</p>
          <a href="#" >Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-3">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title"> <b>Message</b> (@if($message_count ==!null) {{$message_count}}@else 0 @endif ) </h5>
          <p class="card-text mt-4"> This is Message .</p>
          <a href="#" >Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"> <b>Category</b> (@if($category_count ==!null) {{$category_count}} @else 0 @endif ) </h5>
            <p class="card-text mt-4">This is Category .</p>
            <a href="#" >Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><b>Table</b> (@if($table_count ==!null) {{$table_count}} @else 0 @endif ) </h5>
            <p class="card-text"> This is Table</p>
            <a href="#" >Go somewhere</a>
          </div>
        </div>
      </div>
  </div>
  <div class="row mt-3">
    <div class="col-12">
        <div class="card">
              <div class="card-header">
                   <h4>Message list</h4> 
              </div>
              <div class="card-body ">
                    <div class="table-responsive">
                     <table class="table table-bordered">
                         <thead>
                           <tr>
                             <th scope="col"> Serial</th>
                             <th scope="col">Name</th>
                             <th scope="col">Mobile</th>
                             <th scope="col">Email</th>
                             <th scope="col">Date</th>
                             <th scope="col">Message</th>

                             <th scope="col"> Action </th>
                           </tr>
                         </thead>
                         <tbody>
                         
                           @if($contact->count() > 0)

                           @foreach ($contact as $key=>$item)
                           <tr>
                             <th scope="row"> {{$key+1}} </th>
                             <td> {{$item->name}} </td>
                             <td> {{$item->mobile}} </td>
                             <td> {{$item->email}} </td>
                             <td> {{$item->created_at->format('d-m-Y')}} </td>
                             <td> {{$item->message}} </td>
                            
                             <td>
                                
                                  <form action="{{route('dashboard.message.delete',$item->id)}}" method="post" class="d-inline-block">
                                   @csrf
                                   @method('delete')
                                       <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa-solid fa-trash text-light"></i></button>
                                  </form>
                             </td>

                           </tr>
                           @endforeach

                           @else 
                            <tr>
                                  <td colspan="7"> <h5 class="text-success">No Data Found</h5> </td>
                            </tr>
                           @endif
                        
                         </tbody>
                       </table>
                    </div>
              </div>
        </div>
    </div>
</div>
@endsection