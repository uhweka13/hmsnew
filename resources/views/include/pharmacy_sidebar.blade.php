 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Pharmacy
    </a>
  
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          {{-- <a href="/hospital-index" class="d-block">JUTH</a> --}}
          <a href="/clerk-index" class="d-block">{{Auth::user()->fName}}</a>
        </div>
      </div>
  
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
  
          <li class="nav-item">
            <a href="/pharmacy-index" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/pharmacy-drugs" class="nav-link">
              <i class="fas fa-blog"></i>
              <p>
                Drugs
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/pharmacy-dispense" class="nav-link">
              <i class="fas fa-blog"></i>
              <p>
                Dispense Drugs
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/pharmacy-records" class="nav-link">
              <i class="fas fa-id-card-alt"></i>
              <p>
                Records
              </p>
            </a>
          </li>
          
          </li>
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
  