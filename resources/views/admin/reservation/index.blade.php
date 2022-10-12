@extends('admin.master')
@section('content')
             <div class="row mt-3">
                   <div class="col-12">
                       <div class="card">
                             <div class="card-header">
                                  <h4>Reservation list</h4>
                                  @include('error.error')
                             </div>
                             <div class="card-body ">
                                   <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                          <tr>
                                            <th scope="col"> Serial</th>
                                            <th scope="col">Name</th>
                                            <th scope="col"> Email </th>
                                            <th scope="col"> Mobile </th>
                                            <th scope="col"> Date </th>
                                            <th scope="col"> Guest </th>
                                            <th scope="col"> Table </th>
                                            <th scope="col"> Action </th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                        
                                          @if($reservation->count() > 0)

                                          @foreach ($reservation as $key=>$item)
                                          <tr>
                                            <th scope="row"> {{$key+1}} </th>
                                            <td> {{$item->name}} </td>
                                            <td> {{$item->email}} </td>
                                            <td> {{$item->mobile}} </td>
                                            <td> {{$item->resDate}} </td>
                                            <td> {{$item->guests}} </td>
                                            <td> {{$item->table->name}} </td>
                                            <td>
                                                 <a href="{{route('admin.reservation.edit',Crypt::encryptString($item->id))}}" class="btn btn-sm btn-success" ><i class="fa-solid fa-pen-to-square text-light"></i></a>
                                                 <form action="{{route('admin.reservation.destroy',$item->id)}}" method="post" class="d-inline-block">
                                                  @csrf
                                                  @method('delete')
                                                      <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa-solid fa-trash text-light"></i></button>
                                                 </form>
                                            </td>

                                          </tr>
                                          @endforeach

                                          @else 
                                           <tr>
                                                 <td colspan="8"> <h5 class="text-success">No Data Found</h5> </td>
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