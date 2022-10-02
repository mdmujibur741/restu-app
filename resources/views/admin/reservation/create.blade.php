@extends('admin.master')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4> Reservation Create</h4>
                </div>
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name">name</label>
                            <input type="text" name="name" class="form-control" id="name"
                                placeholder="Enter Category name">
                        </div>

                        <div class="mb-3">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control" id="email"
                                placeholder="Enter Email">
                        </div>

                        <div class="mb-3">
                            <label for="mobile">Mobile</label>
                            <input type="tel" name="mobile" class="form-control" id="mobile"
                                placeholder="Enter mobile">
                        </div>

                        <div class="mb-3">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" class="form-control" rows="4"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="formFile" class="form-label">Default file input example</label>
                            <input class="form-control" type="file" id="formFile">
                        </div>

                        <div class="mb-3">
                               <input type="submit" class="btn btn-info" value="SUBMIT">
                        </div>

                    </form>
                </div>
                <div class="card-footer">

                </div>
            </div>
        </div>
    </div>
@endsection
