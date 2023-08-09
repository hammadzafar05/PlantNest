<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<base href="/">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('admin_title','Thrift | Dashboard')</title>

    <link rel="shortcut icon" href="{{asset('assets/backend/images/logo-light.png')}}">
    <!-- Bootstrap Css -->
    <link href="{{asset('assets/backend/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <!-- <link href="{{asset('assets/backend/css/icons.min.css')}}" rel="stylesheet" type="text/css" /> -->
    <!-- App Css-->
    <link href="{{asset('assets/backend/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
     <!-- select2 css -->
    <link href="{{asset('assets/backend/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- dropzone css -->
    <link href="{{asset('assets/backend/libs/dropzone/min/dropzone.min.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

  <!-- Begin page -->
  <div id="layout-wrapper">


<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="{{url('admin')}}" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{asset('assets/backend/images/logo-dark.png')}}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{asset('assets/backend/images/logo-dark.png')}}" alt="" height="20">
                    </span>
                </a>

                <a href="{{url('admin')}}" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{asset('assets/backend/images/logo-dark.png')}}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{asset('assets/backend/images/logo-dark.png')}}" alt="" height="20">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>

            <!-- App Search-->

        </div>

        <div class="d-flex">

            <div class="dropdown d-inline-block d-lg-none ms-2">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="uil-search"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                    aria-labelledby="page-header-search-dropdown">


                </div>
            </div>
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="{{asset('assets/backend/images/users/avatar-4.png')}}"
                    alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ms-1 fw-medium font-size-15">{{Auth::user()->name}}</span>
                    <i class="uil-angle-down d-none d-xl-inline-block font-size-15"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="{{url('/user')}}"><i class="uil uil-user-circle font-size-18 align-middle text-muted me-1"></i> <span class="align-middle">View Profile</span></a>
                    <a class="dropdown-item" href="{{url('/')}}"><i class="uil uil-sign-in-alt font-size-18 align-middle text-muted me-1"></i> <span class="align-middle">Go to Website</span></a>
                    {{-- <a class="dropdown-item" href="#"><i class="uil uil-wallet font-size-18 align-middle me-1 text-muted"></i> <span class="align-middle">My Wallet</span></a>
                    <a class="dropdown-item d-block" href="#"><i class="uil uil-cog font-size-18 align-middle me-1 text-muted"></i> <span class="align-middle">Settings</span> <span class="badge bg-soft-success rounded-pill mt-1 ms-2">03</span></a>
                    <a class="dropdown-item" href="#"><i class="uil uil-lock-alt font-size-18 align-middle me-1 text-muted"></i> <span class="align-middle">Lock screen</span></a> --}}
                    <a class="dropdown-item" href="{{url('logout')}}"><i class="uil uil-sign-out-alt font-size-18 align-middle me-1 text-muted"></i> <span class="align-middle">Sign out</span></a>
                </div>
            </div>

            <div class="dropdown d-inline-block">

            </div>

        </div>
    </div>
</header>
<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="{{url('admin')}}" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{asset('assets/backend/logo/logo-light.png')}}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{asset('assets/backend/logo/logo.png')}}" alt="" height="40" class="w-70">
            </span>
        </a>

    </div>

    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
        <i class="fa fa-fw fa-bars"></i>
    </button>

    <div data-simplebar class="sidebar-menu-scroll">
        @include('admin.layouts.navigate')
    </div>
</div>
<!-- Left Sidebar End -->



<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
            @yield('content')
            </div>



            <!-- end main content-->
       </div>
 </div>
<!-- END layout-wrapper -->


         <!-- JAVASCRIPT -->
         <script src="{{asset('assets/backend/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('assets/backend/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/backend/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{asset('assets/backend/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('assets/backend/libs/node-waves/waves.min.js')}}"></script>
        <script src="{{asset('assets/backend/libs/waypoints/lib/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('assets/backend/libs/jquery.counterup/jquery.counterup.min.js')}}"></script>

        <!-- apexcharts -->
        {{-- <script src="{{asset('assets/backend/libs/apexcharts/apexcharts.min.js')}}"></script> --}}

        {{-- <script src="{{asset('assets/backend/js/pages/dashboard.init.js')}}"></script> --}}

        <script src="{{asset('assets/backend/js/app.js')}}"></script>
           <!-- select 2 plugin -->
           <script src="{{asset('assets/backend/libs/select2/js/select2.min.js')}}"></script>

        <!-- dropzone plugin -->
        <script src="{{asset('assets/backend/libs/dropzone/min/dropzone.min.js')}}"></script>

        <!-- init js -->
        <script src="{{asset('assets/backend/js/pages/ecommerce-add-product.init.js')}}"></script>
        {{-- <script src="{{asset('assets/backend/js/admin.js')}}"></script> --}}
        <script>
              $(function() {
        $(document).ready(function () {
            $('#category-dropdown').on('change', function () {
                var idCategory = this.value;
                $("#subcategory-dropdown").html('');
                $.ajax({
                    url: "{{url('/api/fetch-subcategory')}}",
                    type: "POST",
                    data: {
                        category_id: idCategory,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) {
                        $('#subcategory-dropdown').html('<option selected disabled>Select SubCategory</option>');
                        $.each(result.subcategories, function (key, value) {
                            $("#subcategory-dropdown").append('<option value="' + value
                            .id + '">' + value.subcategory_name + '</option>');
                            console.log(result.subcategories)
                        });
                    }
                });
            });
            });

                    // Multiple images preview with JavaScript
                    var previewImages = function(input, imgPreviewPlaceholder) {
                        if (input.files) {
                            var filesAmount = input.files.length;
                            for (i = 0; i < filesAmount; i++) {
                                var reader = new FileReader();
                                reader.onload = function(event) {
                                    $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(
                                        imgPreviewPlaceholder);
                                }
                                reader.readAsDataURL(input.files[i]);
                            }
                        }
                    };
                    $('#image').on('change', function() {
                        previewImages(this, 'div.images-preview-div');
                    });
                });
        </script>
</body>
</html>
