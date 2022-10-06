@extends('admin.master')
@section('content')
             <div class="row mt-3">
                   <div class="col-12">
                       <div class="card">
                             <div class="card-header">
                                  <h4>Location list</h4> <a href="{{route('admin.location.create')}}" class=" btn btn-success float-right">Add Location</a>
                             </div>
                             <div class="card-body ">
                                   <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                          <tr>
                                            <th scope="col"> Serial</th>
                                            <th scope="col">Name</th>
        
                                            <th scope="col"> Action </th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                        
                                          @if($location->count() > 0)

                                          @foreach ($location as $key=>$item)
                                          <tr>
                                            <th scope="row"> {{$key+1}} </th>
                                            <td> {{$item->name}} </td>
                                           
                                            <td>
                                                 <a href="{{route('admin.location.edit',Crypt::encryptString($item->id))}}" class="btn btn-sm btn-success"><i class="fa-solid fa-pen-to-square text-light"></i></a>
                                                 <form action="{{route('admin.location.destroy',$item->id)}}" method="post" class="d-inline-block">
                                                  @csrf
                                                  @method('delete')
                                                      <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa-solid fa-trash text-light"></i></button>
                                                 </form>
                                            </td>

                                          </tr>
                                          @endforeach

                                          @else 
                                           <tr>
                                                 <td colspan="3"> <h5 class="text-success">No Data Found</h5> </td>
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