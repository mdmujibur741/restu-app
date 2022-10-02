@extends('admin.master')
@section('content')
             <div class="row">
                   <div class="col-12">
                       <div class="card mt-4">
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
                                            <th scope="col"> Description </th>
                                            <th scope="col"> Image </th>
                                            <th scope="col"> Action </th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                        
                                          @if($category->count() > 0)

                                          @foreach ($category as $key=>$item)
                                          <tr>
                                            <th scope="row"> {{$key+1}} </th>
                                            <td> {{$item->name}} </td>
                                            <td> {{$item->description}} </td>
                                            <td> <img src="{{asset($item->image)}}" width="50px" alt="" srcset=""> </td>
                                            <td>
                                                 <a href="" class="btn btn-sm btn-success">Edit</a>
                                                 <a href="" class="btn btn-sm btn-success">Edit</a>
                                            </td>

                                          </tr>
                                          @endforeach


                                          @endif
                                       
                                        </tbody>
                                      </table>
                                   </div>
                             </div>
                       </div>
                   </div>
             </div>
@endsection