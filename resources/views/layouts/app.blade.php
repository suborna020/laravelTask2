<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
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

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA==" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.ui.widget@1.10.3/jquery.ui.widget.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>

    {{-- my included Style sheet  --}}


    {{-- for check box icon --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
    {{-- for refresh icon --}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    {{-- Montserrat front adding --}}
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>


    {{-- my own sheet --}}
    <link href="/css/mystyle.css" rel=" stylesheet">
    <style>

    </style>

</head>

<body class="hold-transition sidebar-mini layout-fixed">

    <div class=" wrapper">

        
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
                    <a class="btn btn-info" id="mypopupBtn" data-toggle="modal" data-target="#compose_popup_content" href="javascript:;" style="border-radius:0px !important;color: white !important;background-color: #4195D1;width: 125px;height: 35px;">
                        Compose
                    </a>

                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2" id="aside_nav">
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

                        <li class=" has-treeview menu-open">
                            <a href="#" class="nav-link ">

                                <p>
                                    Settings

                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ url('home/profile')}}" class="nav-link">
                                        &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<p>Profile</p>
                                    </a>
                                </li>
                                <li class=" nav-item">
                                    <a href="{{ url('home/privacy')}}" class="nav-link">
                                        &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<p>Privacy</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('home/upload')}}" class="nav-link">
                                        &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<p>Upload</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('home/logout')}}" class=" nav-link" ">
                              <p>Logout</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        @yield('content')
        <!--------------- Modal content ------------------------------------------------->
      <div class=" " id=" compose_popup">
                                <div class="modal fade" id="compose_popup_content" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" role="dialog">
                                    <div class="modal-dialog modal-lg right-zero" role="document" style="width: 54%;">
                                        <div class="modal-content" style="background-color: unset;">
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

                                                <div class="input form-control" id="to">To 
                                                <a href="#" value="cc_Hide" class="right_align text_black" id="text_cc">&nbsp;&nbsp;cc</a>

                                                <a href="#"  value="bcc_Hide" class="right_align text_black" id="text_bcc"> bcc</a></div>

                                                <input type="text" class="form-control " id="cc" placeholder="cc">
                                                <input type="text" class="form-control " id="bcc" placeholder="bcc">

                                                <input type="text" class="form-control" id="subject" placeholder="Subject">

                                                <textarea class="popup_summernote" id="summernote" name="editordata" style="width:20%;" placeholder="Details"></textarea>
                                                <button type="button" class=" form-control btn btn-primary" style="background-color: #4195D1;width: 20%;color: white;float: right;">Send </button>
                                            </div>
                                        </div>
                                    </div>

                                </div>

            </div>
            <!-- /.content-wrapper -->

    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    {{--  <script src="../plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="../plugins/jquery-ui/jquery-ui.min.js"></script>  --}}
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
    <script src="../plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    {{--  <script src="dist/js/pages/dashboard.js"></script>  --}}
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!------------------ my js file link ----------------------------------------->
    <script src="{{url('assets/js/custom.js')}}"></script>
    {{--  <script src="{{url('js/myjs.js')}}"></script>  --}}

    <!------------ include summernote bootstrap3/js------------------------------------->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

    <script>
        $(window).on('load', function() {
            $('.popup_summernote').summernote({
                placeholder: 'Hello stand alone ui'
                , tabsize: 2
                , height: 120
                , toolbar: [
                    ['style', ['style']]
                    , ['font', ['bold', 'underline', 'clear']]
                    , ['color', ['color']]
                    , ['para', ['ul', 'ol', 'paragraph']]
                    , ['table', ['table']]
                    , ['insert', ['link', 'picture', 'video']]
                    , ['view', ['fullscreen', 'codeview', 'help']]
                ]
            });
        });

    </script>

</body>

</html>
