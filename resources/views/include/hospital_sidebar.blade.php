 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light">Admin</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
      <img src="/storage/profileimage/{{Auth::user()->image}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        {{-- <a href="/hospital-index" class="d-block">JUTH</a> --}}
        <a href="/hospital-index" class="d-block">{{$result['displayHospital']}}</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->

        <li class="nav-item">
          <a href="/hospital-index" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/setup" class="nav-link">
            <i class="fas fa-blog"></i>
            <p>
              Department
            </p>
          </a>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="fas fa-users"></i>
            <p>
              Users
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a href="/personel" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add personel</p>
                  </a>
                </li>
            <li class="nav-item">
              <a href="/patient-hospital" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Patient</p>
              </a>
            </li>
          </ul>
        </li>
        {{-- <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fas fa-id-card-alt"></i>
            <p>
              Contact Us
            </p>
          </a>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="fas fa-money-bill-alt"></i>
            <p>
              Accounting
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a href="/donor-payment" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Donors</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/sponsor-payment" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Sponsors</p>
                  </a>
                </li>
            <li class="nav-item">
              <a href="/view-payment" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Payment</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/view-deposite" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Pending deposite</p>
              </a>
            </li>
          </ul>
        </li> --}}
        <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
               <i class="fas fa-sign-out-alt"></i>
             {{ __('Logout') }}
         </a>
  
         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
             @csrf
         </form>
          </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
