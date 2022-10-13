  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4 bg">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      {{-- <img src="" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span> --}}
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        {{-- <div class="image">
          <img src="" class="img-circle elevation-2" alt="User Image">
        </div> --}}
        <div class="info">
           <h3 class="text-light mx-3"><b>{{Auth::user()->name}}</b></h3> 
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item ">
            <a href="{{route('dashboard')}}" class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
          
              </p>
            </a>
          
          </li>
        

          <li class="nav-item">
            <a href="#" class="nav-link {{ request()->is('admin/category') || request()->is('admin/category/create')? 'active' : '' }}">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Category
                <i class="fas fa-angle-left right"></i>
              
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href=" {{route('admin.category.index')}} " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Index</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.category.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create</p>
                </a>
              </li>
             
         
            </ul>
          </li>
        
          <li class="nav-item">
            <a href="#" class="nav-link {{ request()->is('admin/menu') || request()->is('admin/menu/create')? 'active' : '' }}">
              <i class="nav-icon fa-solid fa-menorah"></i>
              <p>
              Menu
                <i class="fas fa-angle-left right"></i>
              
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href=" {{route('admin.menu.index')}} " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Index</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.menu.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create</p>
                </a>
              </li>
             
         
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link {{ request()->is('admin/table') || request()->is('admin/table/create')? 'active' : '' }}">
              <i class="nav-icon fa-solid fa-table"></i>
              <p>
                Table
                <i class="fas fa-angle-left right"></i>
              
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href=" {{route('admin.table.index')}} " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Index</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.table.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create</p>
                </a>
              </li>
             
         
            </ul>
          </li>
       
          <li class="nav-item">
            <a href="#" class="nav-link {{ request()->is('admin/reservation') || request()->is('admin/reservation/create')? 'active' : '' }}">
              <i class="nav-icon fa-solid fa-utensils"></i>
              <p>
                Reservation
                <i class="fas fa-angle-left right"></i>
             
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href=" {{route('admin.reservation.index')}} " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Index</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.reservation.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create</p>
                </a>
              </li>
             
         
            </ul>
          </li>

          
          <li class="nav-item">
            <a href="{{route('admin.special.index')}}" class="nav-link {{ request()->is('admin/special') || request()->is('admin/special/create')? 'active' : '' }}">
              <i class="nav-icon fa-solid fa-calendar-check"></i>
              <p>
                Special Event
             
              </p>
            </a>
          </li>

            
          <li class="nav-item">
            <a href="{{route('dashboard.message')}}" class="nav-link {{ request()->is('message')? 'active' : '' }}">
              <i class="nav-icon fa-solid fa-envelope-open-text"></i>
              <p>
                Message
             
              </p>
            </a>
          </li>

          

          <li class="nav-item">
            <a href="{{route('admin.status.index')}}" class="nav-link {{ request()->is('admin/status') || request()->is('admin/status/create')? 'active' : '' }}">
              <i class="nav-icon fa-solid fa-signal"></i>
              <p>
                 Status
              
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="{{route('admin.location.index')}}" class="nav-link {{ request()->is('admin/location') || request()->is('admin/location/create')? 'active' : '' }}">
              <i class="nav-icon fa-solid fa-location-dot"></i>
              <p>
               Location
             
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="{{route('admin.setting.create')}}" class="nav-link {{ request()->is('admin/setting/create')? 'active' : '' }}">
              <i class="nav-icon fa-solid fa-screwdriver-wrench"></i>
              <p>
                Setting
             
              </p>
            </a>
          </li>

          
          <li class="nav-item">
            <form method="POST" action="{{ route('logout') }}">
              @csrf

              <a href="route('logout')" class="nav-link" onclick="event.preventDefault(); this.closest('form').submit();">
                <i class="nav-icon fa-solid fa-right-from-bracket"></i>
                <p>Logout</p>
            </a>
          </form>
          </li>

   
       
    
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>