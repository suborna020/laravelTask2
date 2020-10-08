<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    {{-- myStyle sheet  --}}

    {{-- for check box icon --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
    {{-- for refresh icon --}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    {{-- Montserrat front adding --}}
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    {{-- table design link  --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    {{-- my own sheet --}}
    <link href="/css/mystyle.css" rel=" stylesheet">
    <style>
        .row {}
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">

    <div class="wrapper">



        <!-- Navbar -->{{-- @include('home.navbar') --}}
        {{-- <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-color: #213F7E;">
            <!-- Left navbar links -->
            <ul class="navbar-nav">


            </ul>
            <!-- SEARCH FORM -->
            <form class="form-inline ml-0 navform " style="margin-left: 18px!important;">
                <div class="input-group input-group-sm">

                    <input class="form-control form-control-navbar" type="search" placeholder="Search Emails"
                        aria-label="Search" style="width: 107%;">

                </div>
            </form>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->

                <!-- Notifications Dropdown Menu -->
                <li class="nav-item">

                    <div class="text_white" style="font-size: 20px;">
                        &nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
                    </div>
                </li>
                <li class="nav-item">
                    <img src="/user.jpg" alt="Avatar" id="profile_img" style="width:40px" class="float-right" />
                </li>
            </ul>
        </nav> --}}
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4" style="width: 190px;background-color: #213F7E;">


            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class=" mt-3 pb-3 mb-3 d-flex">

                    <div class="info">
                        <a href="#" class="d-block">LOGO</a>
                    </div>
                </div>
                <div id="center">
                    <a class="btn btn-info " href="javascript:;" data-toggle="modal" data-target="#composeModal"
                        style="border-radius:0px !important;color: white !important;">
                        Compose
                    </a>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">

                        <li class="nav-item">
                            <a href="{{ url('home')}}" class="nav-link">
                                <p>
                                    Inbox
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('home/outbox')}}" class="nav-link">
                                <p>
                                    Outbox
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('home/sent')}}" class="nav-link">
                                <p>
                                    Sent
                                </p>
                            </a>
                        </li>

                        <li class="nav-item has-treeview menu-off">
                            <a href="{{ url('home/settings')}}" class="nav-link">

                                <p>
                                    Settings
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ url('home/profile')}}" class="nav-link" ">
                                        &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<p>Profile</p>
                                    </a>
                                </li>
                                <li class=" nav-item">
                                        <a href="{{ url('home/privacy')}}" class="nav-link">
                                            &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<p>Privacy</p>
                                        </a>
                                </li>
                                <li class=" nav-item">
                                    <a href="{{ url('home/upload')}}" class="nav-link">
                                        &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<p>Upload</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('home/logout')}}" class=" nav-link" ">
                            Logout
                            </a>
                        </li>
                    </ul>
                    
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        
            
            @yield('content')
            
                                    <!-- /.content-wrapper -->
                                <footer class=" main-footer">

                                </footer>
                                <!-- Control Sidebar -->
                                <aside class="control-sidebar control-sidebar-dark">

                                    <!-- Control sidebar content goes here -->
                                </aside>
                                <!-- /.control-sidebar -->
            </div>
            <!-- ./wrapper -->

            <!-- jQuery -->
            <script src="../plugins/jquery/jquery.min.js"></script>
            <!-- jQuery UI 1.11.4 -->
            <script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
            <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
            <script>
                $.widget.bridge('uibutton', $.ui.button)
            </script>
            <!-- Bootstrap 4 -->
            <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
            <!-- ChartJS -->
            <script src="../plugins/chart.js/Chart.min.js"></script>
            <!-- Sparkline -->
            <script src="../plugins/sparklines/sparkline.js"></script>
            <!-- JQVMap -->
            <script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
            <script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
            <!-- jQuery Knob Chart -->
            <script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
            <!-- daterangepicker -->
            <script src="../plugins/moment/moment.min.js"></script>
            <script src="../plugins/daterangepicker/daterangepicker.js"></script>
            <!-- Tempusdominus Bootstrap 4 -->
            <script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
            <!-- Summernote -->
            <script ssrc="../plugins/summernote/summernote-bs4.min.js"></script>
            <!-- overlayScrollbars -->
            <script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
            <!-- AdminLTE App -->
            <script src="../dist/js/adminlte.js"></script>
            <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
            <script src="../dist/js/pages/dashboard.js"></script>
            <!-- AdminLTE for demo purposes -->
            <script src="../dist/js/demo.js"></script>

            <!-- my js file link -->
            <script src="{{url('assets/js/custom.js')}}"></script>
            <script src="/js/myjs.js"></script>
            {{-- table design link --}}
            <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js">
            </script>
            <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
            <script type="text/javascript">
                $(document).ready(function(){
            $('.datatable').dataTable();
          });
            </script>
            {{-- table design end --}}
            {{-- /////////////js backup if downloaded plugin dont work//////// --}}
            {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
         </script> --}}
            {{-- ///////////// end /////////--}}
</body>

</html>