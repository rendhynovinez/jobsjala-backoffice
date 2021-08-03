<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('img/backoffice.png')}}" alt="Backoffice Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">JOBSJALA ADMIN</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('img/users.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="{{url("home")}}" class="nav-link {{ Request::segment(1) === 'home' ? 'active' : null }}">
              <i class="nav-icon fas fa-home"></i>
                <p>
                 Home
               </p>
            </a>
          </li>
         @if(Auth::user()->permission == 1 ||Auth::user()->permission == 2)
          <li class="nav-item">
                <a href="{{url("customers-list")}}" class="nav-link {{ Request::segment(1) === 'customers-list' ? 'active' : null }}|">
                  <i class="fas fa-users nav-icon"></i>
                  <p>Users Apply</p>
                </a>
          </li>
          <li class="nav-item">
            <a href="{{url("list-job")}}" class="nav-link {{ Request::segment(1) === 'list-job' ? 'active' : null }}">
              <i class="nav-icon fas fa-list-alt"></i>
                <p>
                  Job
               </p>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a href="{{url("list-order")}}" class="nav-link {{ Request::segment(1) === 'list-order' ? 'active' : null }}">
              <i class="nav-icon fas fa-list-alt"></i>
                <p>
                 List Order
               </p>
            </a>
          </li> -->
          @endif
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link {{ Request::segment(1) === 'users-list' ? 'active' : null }}">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Setting
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            @if(Auth::user()->permission == 1)
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url("users-list")}}" class="nav-link {{ Request::segment(1) === 'users-list' ? 'active' : null }}">
                  <i class="fas fa-users nav-icon"></i>
                  <p>Management Adminstrator</p>
                </a>
              </li>
            </ul>
            @endif
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
