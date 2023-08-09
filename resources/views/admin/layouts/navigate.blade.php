 <!-- Topbar Start -->
 <div class="navbar-custom">
     <ul class="list-unstyled topnav-menu float-end mb-0">

         <li class="d-none d-lg-block">
             <form class="app-search">
                 <div class="app-search-box">
                     <div class="input-group">
                     </div>
                     <div class="dropdown-menu dropdown-lg" id="search-dropdown">
                         <!-- item-->
                         <div class="dropdown-header noti-title">
                             <h5 class="text-overflow mb-2">Found 22 results</h5>
                         </div>

                         <!-- item-->
                         <a href="javascript:void(0);" class="dropdown-item notify-item">
                             <i class="fe-home me-1"></i>
                             <span>Analytics Report</span>
                         </a>

                         <!-- item-->
                         <a href="javascript:void(0);" class="dropdown-item notify-item">
                             <i class="fe-aperture me-1"></i>
                             <span>How can I help you?</span>
                         </a>

                         <!-- item-->
                         <a href="javascript:void(0);" class="dropdown-item notify-item">
                             <i class="fe-settings me-1"></i>
                             <span>User profile settings</span>
                         </a>

                         <!-- item-->
                         <div class="dropdown-header noti-title">
                             <h6 class="text-overflow mb-2 text-uppercase">Users</h6>
                         </div>

                         <div class="notification-list">
                             <!-- item-->
                             <a href="javascript:void(0);" class="dropdown-item notify-item">
                                 <div class="d-flex align-items-start">
                                     <img class="d-flex me-2 rounded-circle"
                                         src="{{ asset('assets/backend/images/users/user-2.jpg') }}"
                                         alt="Generic placeholder image" height="32">
                                     <div class="w-100">
                                         <h5 class="m-0 font-14">Erwin E. Brown</h5>
                                         <span class="font-12 mb-0">UI Designer</span>
                                     </div>
                                 </div>
                             </a>

                             <!-- item-->
                             <a href="javascript:void(0);" class="dropdown-item notify-item">
                                 <div class="d-flex align-items-start">
                                     <img class="d-flex me-2 rounded-circle" src="assets/images/users/user-5.jpg"
                                         alt="Generic placeholder image" height="32">
                                     <div class="w-100">
                                         <h5 class="m-0 font-14">Jacob Deo</h5>
                                         <span class="font-12 mb-0">Developer</span>
                                     </div>
                                 </div>
                             </a>
                         </div>

                     </div>
                 </div>
             </form>
         </li>

         <li class="dropdown notification-list topbar-dropdown">
             <div class="dropdown-menu dropdown-menu-end dropdown-lg">

                 <!-- item-->
                 <div class="dropdown-item noti-title">
                     <h5 class="m-0">
                         <span class="float-end">
                             <a href="#" class="text-dark">
                                 <small>Clear All</small>
                             </a>
                         </span>Notification
                     </h5>
                 </div>

                 <div class="noti-scroll" data-simplebar>

                     <!-- item-->
                     <a href="javascript:void(0);" class="dropdown-item notify-item active">
                         <div class="notify-icon">
                             <img src="assets/images/users/user-1.jpg" class="img-fluid rounded-circle"
                                 alt="" />
                         </div>
                         <p class="notify-details">Cristina Pride</p>
                         <p class="text-muted mb-0 user-msg">
                             <small>Hi, How are you? What about our next meeting</small>
                         </p>
                     </a>

                     <!-- item-->
                     <a href="javascript:void(0);" class="dropdown-item notify-item">
                         <div class="notify-icon bg-primary">
                             <i class="mdi mdi-comment-account-outline"></i>
                         </div>
                         <p class="notify-details">Caleb Flakelar commented on Admin
                             <small class="text-muted">1 min ago</small>
                         </p>
                     </a>

                     <!-- item-->
                     <a href="javascript:void(0);" class="dropdown-item notify-item">
                         <div class="notify-icon">
                             <img src="assets/images/users/user-4.jpg" class="img-fluid rounded-circle"
                                 alt="" />
                         </div>
                         <p class="notify-details">Karen Robinson</p>
                         <p class="text-muted mb-0 user-msg">
                             <small>Wow ! this admin looks good and awesome design</small>
                         </p>
                     </a>

                     <!-- item-->
                     <a href="javascript:void(0);" class="dropdown-item notify-item">
                         <div class="notify-icon bg-warning">
                             <i class="mdi mdi-account-plus"></i>
                         </div>
                         <p class="notify-details">New user registered.
                             <small class="text-muted">5 hours ago</small>
                         </p>
                     </a>

                     <!-- item-->
                     <a href="javascript:void(0);" class="dropdown-item notify-item">
                         <div class="notify-icon bg-info">
                             <i class="mdi mdi-comment-account-outline"></i>
                         </div>
                         <p class="notify-details">Caleb Flakelar commented on Admin
                             <small class="text-muted">4 days ago</small>
                         </p>
                     </a>

                     <!-- item-->
                     <a href="javascript:void(0);" class="dropdown-item notify-item">
                         <div class="notify-icon bg-secondary">
                             <i class="mdi mdi-heart"></i>
                         </div>
                         <p class="notify-details">Carlos Crouch liked
                             <b>Admin</b>
                             <small class="text-muted">13 days ago</small>
                         </p>
                     </a>
                 </div>

                 <!-- All-->
                 <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                     View all
                     <i class="fe-arrow-right"></i>
                 </a>

             </div>
         </li>

         <li class="dropdown notification-list topbar-dropdown">
             <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown"
                 href="#" role="button" aria-haspopup="false" aria-expanded="false">
                 <img src="{{ asset('assets/backend/images/users/user-1.jpg') }}" alt="user-image"
                     class="rounded-circle">
                 <span class="pro-user-name ms-1">
                     Hammad Zafar
                     {{-- {{Auth::user()->name}} --}}
                     <i class="mdi mdi-chevron-down"></i>
                 </span>
             </a>
             <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                 <!-- item-->
                 <div class="dropdown-header noti-title">
                     <h6 class="text-overflow m-0">Welcome !</h6>
                 </div>

                 <!-- item-->
                 <a href="contacts-profile.html" class="dropdown-item notify-item">
                     <i class="fe-user"></i>
                     <span>My Account</span>
                 </a>

                 <div class="dropdown-divider"></div>

                 <!-- item-->
                 <a href="auth-logout.html" class="dropdown-item notify-item">
                     <i class="fe-log-out"></i>
                     <span>Logout</span>
                 </a>

             </div>
         </li>

     </ul>

     <!-- LOGO -->
     <div class="logo-box">
         <a href="index.html" class="logo logo-light text-center">
             <span class="logo-sm">
                 <img src="assets/images/logo-sm.png" alt="" height="22">
             </span>
             <span class="logo-lg">
                 <img src="assets/images/logo-light.png" alt="" height="16">
             </span>
         </a>
         <a href="index.html" class="logo logo-dark text-center">
             <span class="logo-sm">
                 <img src="assets/images/logo-sm.png" alt="" height="22">
             </span>
             <span class="logo-lg">
                 <img src="assets/images/logo-dark.png" alt="" height="16">
             </span>
         </a>
     </div>

     <ul class="list-unstyled topnav-menu topnav-menu-left mb-0">
         <li>
             <button class="button-menu-mobile disable-btn waves-effect">
                 <i class="fe-menu"></i>
             </button>
         </li>

     </ul>
     <ul class="list-unstyled topnav-menu topnav-menu-left mb-0">
         <li>
             <button class="button-menu-mobile disable-btn waves-effect">
                 <i class="fe-menu"></i>
             </button>
         </li>

         <li>
             <h4 class="page-title-main">@yield('title')</h4>
         </li>

     </ul>

     <div class="clearfix"></div>

 </div>
 <!-- end Topbar -->

 <!-- ========== Left Sidebar Start ========== -->
 <div class="left-side-menu">

     <div class="h-100" data-simplebar>

         <!-- User box -->
         <div class="user-box text-center">

             <img src="{{ asset('assets/backend/images/users/user-1.jpg') }}" alt="user-img" title="Mat Helme"
                 class="rounded-circle img-thumbnail avatar-md">
             <div class="dropdown">
                 <a href="#" class="user-name dropdown-toggle h5 mt-2 mb-1 d-block" data-bs-toggle="dropdown"
                     aria-expanded="false">
                     Hamad Zafar
                     {{-- {{Auth::user()->name}} --}}
                 </a>
                 <div class="dropdown-menu user-pro-dropdown">

                     <!-- item-->
                     <a href="javascript:void(0);" class="dropdown-item notify-item">
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
                     </a>

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
                 <li>
                     <a href="{{ url('admin/dashboard') }}">
                         <i class="mdi mdi-view-dashboard-outline"></i>
                         <span> Dashboard </span>
                     </a>
                 </li>
                 <li>
                     <a href="{{ url('admin/users') }}">
                         <i class="mdi mdi-account-outline"></i>
                         <span> Users </span>
                     </a>
                 </li>


                 <li>
                     <a href="#sidebarExpages" data-bs-toggle="collapse">
                         <i class="mdi mdi-file-multiple-outline"></i>
                         <span> Extra </span>
                         <span class="menu-arrow"></span>
                     </a>

                     <div class="collapse" id="sidebarExpages">
                         <ul class="nav-second-level">
                             <li>
                                 <a href="pages-starter.html">Extra 1</a>
                             </li>
                             <li>
                                 <a href="pages-starter.html">Extra 2</a>
                             </li>
                             <li>
                                 <a href="pages-starter.html">Extra 3</a>
                             </li>
                         </ul>
                     </div>
                 </li>

                 <li>
                     <a href="#sidebarMultilevel3" data-bs-toggle="collapse">
                         Third Level <span class="menu-arrow"></span>
                     </a>
                     <div class="collapse" id="sidebarMultilevel3">
                         <ul class="nav-second-level">
                             <li>
                                 <a href="javascript: void(0);">Item 1</a>
                             </li>
                             <li>
                                 <a href="#sidebarMultilevel4" data-bs-toggle="collapse">
                                     Item 2 <span class="menu-arrow"></span>
                                 </a>
                                 <div class="collapse" id="sidebarMultilevel4">
                                     <ul class="nav-second-level">
                                         <li>
                                             <a href="javascript: void(0);">Item 1</a>
                                         </li>
                                         <li>
                                             <a href="javascript: void(0);">Item 2</a>
                                         </li>
                                     </ul>
                                 </div>
                             </li>
                         </ul>
                     </div>
                 </li>
             </ul>
         </div>
         </li>
         </ul>

     </div>
     <!-- End Sidebar -->

     <div class="clearfix"></div>

 </div>
 <!-- Sidebar -left -->

 </div>
 <!-- Left Sidebar End -->
