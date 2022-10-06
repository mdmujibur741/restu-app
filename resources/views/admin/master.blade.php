<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard 3</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('admin/asset/plugins/fontawesome.min.css')}}">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admin/asset/css/adminlte.min.css')}}">
  {{-- tostr --}}
  <link rel="stylesheet" href="{{asset('admin/asset/plugins/toastr/toastr.min.css')}}">
  <style>
             .bg{
                    background: #0d0258 !important;
                   
             }
  </style>
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
             @include('admin.partial.topnav')
  <!-- /.navbar -->

           @include('admin.partial.sidenav')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
                
        @yield('content')
        
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



  
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('admin/asset/plugins/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('admin/asset/plugins/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE -->
<script src="{{asset('admin/asset/js/adminlte.js')}}"></script>
<!-- fontAwesome -->
<script src="{{asset('admin/asset/plugins/fontawesome.min.js')}}"></script>

{{-- tostrs --}}
<script src="{{asset('admin/asset/plugins/toastr/toastr.min.js')}}"></script>
<script>
            @if(Session::has('success'))
                toastr.success("{{ Session::get('success') }}");
            @endif
            @if(Session::has('delete'))
                toastr.delete("{{ Session::get('delete') }}");
            @endif
</script>
</body>
</html>
