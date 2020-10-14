<!DOCTYPE html>
<html lang="en">

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
    

    {{-- my included Style sheet  --}}

    {{-- for check box icon --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
    {{-- for refresh icon --}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    {{-- Montserrat front adding --}}
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>

    
    
    <!------------------ include summernote css/js-------------------------------->

    {{-- my own sheet --}}
    <link href="/css/mystyle.css" rel=" stylesheet">
    <style>

    </style>
    
</head>

<body class="hold-transition sidebar-mini layout-fixed">

    <div class=" wrapper">

        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">


            </ul>
            <!-- SEARCH FORM -->
            {{-- @include('home.navbar')  --}}
            <form class="form-inline ml-0 navform " style="margin-left: 18px!important;">
                <div class="input-group input-group-sm">

                    <input class="form-control form-control-navbar" type="search" placeholder="Search Emails" aria-label="Search" style="width: 107%;">
                </div>
            </form>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <div class="text_white" style="font-size: 20px;">
                        &nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
                    </div>
                </li>
                <li class="nav-item">
                    <img src="../img/Group 99.svg" alt="Avatar" id="profile_img" style="width:40px" class="float-right" />
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4" style="width:190px;">


            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class=" mt-3 pb-3 mb-3 d-flex">

                    <div class="info">
                        <a href="#" class="d-block">LOGO</a>
                    </div>
                </div>
                <div id="center">
                    <a class="btn btn-info" id="mypopupBtn" data-toggle="modal" data-target="#compose_popup_content" href="javascript:;" style="border-radius:0px !important;color: white !important;background-color: #4195D1;">
                        Compose
                    </a>

                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2" id="nav">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

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
                                <li class="nav-item">
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
<!-------------------------- Modal content ------------------------------------------------->
<div  class   = " " id=" compose_popup">
                                <div class="modal fade" id="compose_popup_content" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" role="dialog">
                                    <div class="modal-dialog modal-lg right-zero" role="document" style="    width: 52%;">
                                        <div class="modal-content">
                                            <div class="modal_header">
                                                <div class="modal_header_left">
                                                    <h5>New message</h5>
                                                </div>
                                                <div class="modal_header_right" style="">
                                                    <i class="far fa-times-circle fa-lg" data-dismiss="modal" aria-label="Close"></i>

                                                </div>
                                            </div>
                                            <div class="modal-body">
                                                <input type="text" class="form-control" id="from" placeholder="From">

                                                <input type="text" class="form-control" id="to" placeholder="To">

                                                <input type="text" class="form-control" id="subject" placeholder="Subject">

                                                <textarea class="popup_summernote" id="summernote" name="editordata" style="width:20%;" placeholder="Details"></textarea>
                                                <button type="button" class=" form-control btn btn-primary" style="background-color: #4195D1;width: 20%;color: white;float: right;">Send </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

            </div>







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
    <!------------------ my js file link ----------------------------------------->
    <script src="{{url('assets/js/custom.js')}}"></script>
    <script src="/js/myjs.js"></script>
    
    <!------------ include summernote bootstrap3/js------------------------------------->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-------------- include summernote css/js ------------>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(window).on('load', function() {
            $('.popup_summernote').summernote({
                dialogsInBody: true
                , height: 100
            });
        });

    </script>

</body>

</html>
