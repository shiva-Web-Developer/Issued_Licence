  <!-- App favicon -->
  <link rel="shortcut icon" href="{{url('')}}/assets/images/street-light.png">
<!-- Bootstrap Css -->
<link href="{{url('')}}/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
<!-- Icons Css -->
<link href="{{url('')}}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
<!-- App Css-->
<link href="{{url('')}}/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />


<!-- DataTables -->
<link href="{{url('')}}/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="{{url('')}}/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

<!-- Responsive datatable examples -->
<link href="{{url('')}}/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />  


<!-- Sweet Alert-->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<body data-sidebar="dark" data-layout-mode="light">
        <!-- Begin page -->
        <div id="layout-wrapper">
            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box" style="background-color: #4d3319;">
                        
                            <a href="{{ route('adminpage') }}" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{url('')}}/assets/images/agreement.png" alt="" height="30">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{url('')}}/assets/images/agreement.png" alt="" height="50" width="50">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>
                    </div>

                        <div class="dropdown d-inline-block">
                                  
                        <span style="padding-right:10px;" class="d-none d-xl-inline-block ms-1" key="t-henry"><a href="{{route('logout')}}">Logout</a></span>

                        </div>

                    </div>
                </div>
            </header>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu" style="background-color: #4d3319;">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title" key="t-menu">Menu</li>

                            <li>
                                <a href="{{ route('orgpage') }}" class="waves-effect">
                                    <i class="bx bx-chat"></i>
                                    <span key="t-chat">Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('orgprofile') }}" class="waves-effect">
                                    <i class="bx bx-user"></i>
                                    <span key="t-chat">Manage Profile</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-home-circle"></i>
                                    <span key="t-dashboards">Manage Trade Type</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('tradetypeaddview') }}" key="t-default">Add Trade Type</a></li>
                                  
                            </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-home-circle"></i>
                                    <span key="t-dashboards">Manage Application</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('applicationlist') }}" key="t-default">Application List</a></li>
                                  
                            </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-home-circle"></i>
                                    <span key="t-dashboards">Manage Ward</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('addward') }}" key="t-default">Add Ward</a></li>  
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-home-circle"></i>
                                    <span key="t-dashboards">Manage Firm</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('firmtype') }}" key="t-default">Add Firm</a></li>  
                                </ul>
                            </li>


                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-home-circle"></i>
                                    <span key="t-dashboards">Manage Shop</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('shoptype') }}" key="t-default">Add Shop</a></li>  
                                </ul>
                            </li>

                           

                   
                            <li>
                                <a href="{{route('logout')}}" class="waves-effect" onclick="return confirm('Are you sure you want to delete this item?');">
                                    <i class="bx bx-log-out"></i>
                                    <span key="t-chat">Logout</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->
</body>