<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info d-flex">
        <a href="#" class="d-block">Saim</a>
        <a><form method="POST" action="{{ route('logout') }}">
          @csrf
          <button class="btn btn-danger mx-3" type="submit">Logout</button>
      </form></a>
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
        <li class="nav-item">
          <a href="{{route('employees')}}" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Employees
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('application')}}" class="nav-link">
            <i class="nav-icon fas fa-file"></i>
            <p>
              Loan Application
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('application1')}}" class="nav-link">
            <i class="nav-icon fas fa-check"></i>
            <p>
              Loan Approval
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-money-bill"></i>
            <p>
              Repayment
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('application3')}}" class="nav-link">
            <i class="nav-icon fas fa-money-check-alt"></i>
            <p>
              Contact
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
