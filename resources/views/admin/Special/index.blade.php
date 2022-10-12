@extends('admin.master')
@section('content')
             <div class="row mt-3">
                   <div class="col-12">
                       <div class="card">
                             <div class="card-header">
                                  <h4>Special Event list</h4>
                                  <a href="{{route('admin.special.create')}}" class="btn btn-success float-right">ADD CREATE</a>
                                  @include('error.error')
                             </div>
                             <div class="card-body ">
                                   <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                          <tr>
                                            <th scope="col"> Serial</th>
                                            <th scope="col">Title</th>
                                            <th scope="col"> Subtitle </th>
                                            <th scope="col"> Description </th>
                                            <th scope="col"> Start Date && Time </th>
                                            <th scope="col"> End Time </th>
                                            <th scope="col"> Status </th>
                                            <th scope="col"> Action </th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                        
                                          @if($special->count() > 0)

                                          @foreach ($special as $key=>$item)
                                          <tr>
                                            <th scope="row"> {{$key+1}} </th>
                                            <td> {{$item->title}} </td>
                                            <td> {{$item->subtitle}} </td>
                                            <td> {{Str::limit($item->description,30)}} </td>
                                            <td> {{$item->StartDateTime}} </td>
                                            <td> {{$item->EndTime}} </td>
                                            <td> 
                                                    @if($item->status == 1)
                                                      <a href="{{route('admin.special.show',$item->id)}}" class="btn btn-sm btn-success">Active</a>
                                                    @else
                                                        <a href="{{route('admin.special.show', $item->id)}}" class="btn btn-sm btn-danger">Deactive</a>
                                                    @endif
                                            </td>
                                            <td class="">
                                                 <div class="d-flex">
                                                  <a href="{{route('admin.special.edit',Crypt::encryptString($item->id))}}" class="btn btn-sm btn-success mr-2" ><i class="fa-solid fa-pen-to-square text-light"></i></a>
                                                  <form action="{{route('admin.special.destroy',$item->id)}}" method="post" class="d-inline-block">
                                                   @csrf
                                                   @method('delete')
                                                       <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa-solid fa-trash text-light"></i></button>
                                                  </form>
                                                 </div>
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