
<!DOCTYPE html>
<html lang="en">
    <head>
      @stack('before-style')
      @include('admin.include.head')
      @stack('after-style')
    </head>

    <!-- body start -->
    <body class="loading" data-layout-color="light"  data-layout-mode="default" data-layout-size="fluid" data-topbar-color="light" data-leftbar-position="fixed" data-leftbar-color="light" data-leftbar-size='default' data-sidebar-user='true'>

        <!-- Begin page -->
        <div id="wrapper">


            <!-- Topbar Start -->
              @include('admin.include.navbar')
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
              @include('admin.include.leftsidebar')
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->
         
            <div class="content-page">
                <div class="content">

                  @yield('content')

                </div> <!-- content -->

                <!-- Footer Start -->
                @include('admin.include.footer')
                <!-- end Footer -->

            </div>
            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->
          @include('admin.include.rightsidebar')
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor -->
        
        @stack('before-script')
          @include('admin.include.script')
        @stack('after-script')
      
    </body>
</html>