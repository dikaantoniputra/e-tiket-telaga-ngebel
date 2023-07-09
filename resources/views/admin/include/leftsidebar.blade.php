<div class="left-side-menu">

  <div class="h-100" data-simplebar>

       <!-- User box -->
      <div class="user-box text-center">


              <div class="dropdown">
                <img src="{{ asset('assets/images/logo1.png') }}" class="img-fluid" style="width: 50px">
                  <a href="#" class="user-name dropdown-toggle h5 mt-2 mb-1 d-block" data-bs-toggle="dropdown"  aria-expanded="false">Admin Desa Ngarum</a>
                  <div class="dropdown-menu user-pro-dropdown">
                      <!-- item-->
                      {{-- <a href="javascript:void(0);" class="dropdown-item notify-item">
                          <i class="fe-user me-1"></i>
                          <span>My Account</span>
                      </a>

                      <!-- item-->
                      <a href="javascript:void(0);" class="dropdown-item notify-item">
                          <i class="fe-settings me-1"></i>
                          <span>Settings</span>
                      </a>

                      <!-- item-->
                      <a href="javascript:void(0);" class="dropdown-item notify-item">
                          <i class="fe-lock me-1"></i>
                          <span>Lock Screen</span>
                      </a> --}}

                      <!-- item-->
                      <a href="javascript:void(0);" class="dropdown-item notify-item">
                          <i class="fe-log-out me-1"></i>
                          <span>Logout</span>
                      </a>

                  </div>
              </div>

      </div>

      <!--- Sidemenu -->
      <div id="sidebar-menu">

          <ul id="side-menu">
           
                <li class="menu-title">Navigation</li>
    
                <li>
                    <a href="/admin">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="badge bg-success rounded-pill float-end">9+</span>
                        <span> Dashboard </span>
                    </a>
                </li>

                <li class="menu-title mt-2">User</li>

                <li>
                    <a href="{{ url('admin/user') }}">
                        <i class="mdi mdi-calendar-blank-outline"></i>
                        <span>Data User </span>
                    </a>
                </li>

                <li class="menu-title mt-2">Data E tiket</li>

                <li>
                    <a href="{{ url('admin/layanan') }}">
                        <i class="mdi mdi-calendar-blank-outline"></i>
                        <span>Data Layanan </span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('admin/rekening') }}">
                        <i class="mdi mdi-forum-outline"></i>
                        <span>Data Rekening </span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('admin/kegiatan') }}">
                        <i class="mdi mdi-forum-outline"></i>
                        <span>Data Informasi </span>
                    </a>
                </li>
           

              <li class="menu-title mt-2">Setting Pemesanan</li>


                 <li>
                    <a href="{{ url('/admin/orderan') }}">
                        <i class="mdi mdi-forum-outline"></i>
                        <span> Orderan </span>
                    </a>
                </li>

                
                <li>
                    <a href="{{ url('/admin/susunan') }}">
                        <i class="mdi mdi-forum-outline"></i>
                        <span> Tiket </span>
                    </a>
                </li>



               

          


         

              {{-- <li class="menu-title mt-2"> Pelamar </li>

            

                <li>
                    <a href="apps-chat.html">
                        <i class="mdi mdi-forum-outline"></i>
                        <span> Lapoaran Report </span>
                    </a>
                </li> --}}
           

              
          </ul>

      </div>
      <!-- End Sidebar -->

      <div class="clearfix"></div>

  </div>
  <!-- Sidebar -left -->

</div>