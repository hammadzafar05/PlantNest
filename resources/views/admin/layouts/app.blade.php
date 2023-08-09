<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Admin | Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/backend/images/favicon.ico') }}">

    <!-- App css -->

    <link href="{{ asset('assets/backend/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

    <!-- icons -->
    <link href="{{ asset('assets/backend/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
       <!-- third party css -->
       <link href="{{asset('assets/backend/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" type="text/css" />
       <link href="{{asset('assets/backend/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css')}}" rel="stylesheet" type="text/css" />
       <link href="{{asset('assets/backend/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css')}}" rel="stylesheet" type="text/css" />
       <link href="{{asset('assets/backend/libs/datatables.net-select-bs5/css/select.bootstrap5.min.css')}}" rel="stylesheet" type="text/css" />
       <!-- third party css end -->

       <!-- App css -->

       <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

       <!-- icons -->
       <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
@yield('style')
</head>

<!-- body start -->

<body class="loading" data-layout-color="light" data-layout-mode="default" data-layout-size="fluid"
    data-topbar-color="light" data-leftbar-position="fixed" data-leftbar-color="light" data-leftbar-size='default'
    data-sidebar-user='true'>


    <!-- Begin page -->
    <div id="wrapper">


        @include('admin.layouts.navigate')


        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">

            <!-- Start Content-->
            <div class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
            <!-- End Content-->

            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> &copy; powered by <a href="{{url('admin')}}">MSG-ARTISAN</a>
                        </div>
                        {{-- <div class="col-md-6">
                            <div class="text-md-end footer-links d-none d-sm-block">
                                <a href="javascript:void(0);">About Us</a>
                                <a href="javascript:void(0);">Help</a>
                                <a href="javascript:void(0);">Contact Us</a>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </footer>
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->



    <!-- Vendor -->
    <script src="{{ asset('assets/backend/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/backend/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/backend/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/backend/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('assets/backend/libs/waypoints/lib/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/backend/libs/jquery.counterup/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/backend/libs/feather-icons/feather.min.js') }}"></script>

    <!-- knob plugin -->
    <script src="{{ asset('assets/backend/libs/jquery-knob/jquery.knob.min.js') }}"></script>

    <!--Morris Chart-->
    <script src="{{ asset('assets/backend/libs/morris.js06/morris.min.js') }}"></script>
    <script src="{{ asset('assets/backend/libs/raphael/raphael.min.js') }}"></script>

    <!-- Dashboar init js-->
    <script src="{{ asset('assets/backend/js/pages/dashboard.init.js') }}"></script>

    <!-- App js-->
    <script src="{{ asset('assets/backend/js/app.min.js') }}"></script>

    <script src="{{asset('assets/backend/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/backend/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js')}}"></script>
    <script src="{{asset('assets/backend/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('assets/backend/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js')}}"></script>
    <script src="{{asset('assets/backend/libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('assets/backend/libs/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js')}}"></script>
    <script src="{{asset('assets/backend/libs/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('assets/backend/libs/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
    <script src="{{asset('assets/backend/libs/datatables.net-select/js/dataTables.select.min.js')}}"></script>
    <script src="{{asset('assets/backend/js/pages/datatables.init.js')}}"></script>
    @yield('script')
</body>


</html>
