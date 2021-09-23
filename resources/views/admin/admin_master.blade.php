

@include('./body.header')

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->





@include('./body.navbar')
<!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
          
            @include('./body.sidebar')
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

          

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->


      @yield('admin')

    
            
        <!-- /Right-bar -->

           
        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>
<!-- {{ asset('backend/')}} -->
        <!-- Vendor js -->
        <script src=" {{ asset('/assets/js/vendor.min.js')}}"></script>

        <!-- Plugins js-->
        <script src="{{ asset('/assets/libs/flatpickr/flatpickr.min.js')}}"></script>
        <script src="{{ asset('/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <script src="{{ asset('/assets/libs/selectize/js/standalone/selectize.min.js')}}"></script>

        <!-- Dashboar 1 init js-->
        <script src="{{ asset('/assets/js/pages/dashboard-1.init.js')}}"></script>

        <!-- App js-->
        <script src="{{ asset('/assets/js/app.min.js')}}"></script>
        
    </body>
</html>