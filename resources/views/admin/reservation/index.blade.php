@extends('admin.master')
@section('content')
          
            <div class="row">
                <div class="col-12">
                    <div class="card mt-4">
                          <div class="card-header">
                               <h4>Reservation list</h4>
                          </div>
                          <div class="card-body">
                                <div class="table-responsive">
                                 <table class="table">
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
                                         <th scope="row">1</th>
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