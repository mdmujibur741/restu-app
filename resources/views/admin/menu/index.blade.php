@extends('admin.master')
@section('content')
<style>
   td{
             height: 10px !important;
   }
</style>

             <div class="row">
                   <div class="col-12">
                       <div class="card mt-4">
                             <div class="card-header">
                                  <h4>Menu list</h4>
                             </div>
                             <div class="card-body">
                                   <div class="table-responsive">
                                    <table class="table table-sm">
                                        <thead>
                                          <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">First</th>
                                            <th scope="col">Last</th>
                                            <th scope="col">Handle</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                          </tr>
                                       
                                        </tbody>
                                      </table>
                                   </div>
                             </div>
                       </div>
                   </div>
             </div>
@endsection