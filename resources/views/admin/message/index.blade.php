@extends('admin.master')
@section('content')
             <div class="row mt-3">
                   <div class="col-12">
                       <div class="card">
                             <div class="card-header">
                                  <h4>Message list</h4> <a href="" class=" btn btn-success float-right">Add Status</a>
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
                                        
                                          @if($message->count() > 0)

                                          @foreach ($message as $key=>$item)
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