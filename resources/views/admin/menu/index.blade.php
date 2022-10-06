@extends('admin.master')
@section('content')
             <div class="row mt-3">
                   <div class="col-12">
                       <div class="card">
                             <div class="card-header">
                                  <h4>Category list</h4>
                             </div>
                             <div class="card-body ">
                                   <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                          <tr>
                                            <th scope="col"> Serial</th>
                                            <th scope="col">Name</th>
                                            <th scope="col"> price </th>
                                            <th scope="col"> Description </th>
                                            <th scope="col"> Category </th>
                                            <th scope="col"> Image </th>
                                            <th scope="col"> Action </th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                        
                                          @if($menu->count() > 0)

                                          @foreach ($menu as $key=>$item)
                                          <tr>
                                            <td> {{$key+1}} </td>
                                            <td> {{$item->name}} </td>
                                            <td> {{$item->price}} </td>
                                            <td> {{ Str::limit($item->description, 30)}} </td>
                                            <td>
                                                        @if($item->category->count() > 0)
                                                       @foreach ($item->category as $cat)
                                                       <span class="badge badge-success"> {{$cat->name}} </span>
                                                       @endforeach
                                                       @endif
                                            </td>
                                            <td> <img src="{{asset($item->image)}}" class="img-thumbnail" width="50px" alt="" srcset=""> </td>
                                            <td>
                                                 <a href="{{route('admin.menu.edit',Crypt::encryptString($item->id))}}" class="btn btn-sm btn-success"><i class="fa-solid fa-pen-to-square text-light"></i></a>
                                                 <form action="{{route('admin.menu.destroy',$item->id)}}" method="post" class="d-inline-block">
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
                             <div class="card-footer">
                                       <div class="d-flex">
                                            {{$menu->links()}}
                                       </div>
                             </div>
                       </div>
                   </div>
             </div>
@endsection