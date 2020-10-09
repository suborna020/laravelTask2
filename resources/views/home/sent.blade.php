@extends('layouts.app')
@section('title','Mail System')
{{-- @include('home.navbar') --}}
<nav class="main-header navbar navbar-expand navbar-white navbar-light" ">
    <!-- Left navbar links -->
    <ul class=" navbar-nav">


    </ul>
    <!-- SEARCH FORM -->
    @include('home.navbar')

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
            <img src="../img/Group 99.svg" alt="Avatar" id="profile_img" style="width:40px" class="float-right" />
        </li>
    </ul>
</nav>
@section('content')
<div class="content-wrapper" style="background-color:white;">
    <!-- Content Header (Page header) -->
    {{-- <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>  --}}
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12" style="padding: 0 !important;">

                <div class="card " style="width: 100%;padding: 20px;padding-top: 0;">
                    <div class="msg_card_header">
                        <div class="card-tools" style="float: left;">
                            <input type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;
                            {{-- <i class="material-icons">&#xe5d5;</i> --}}
                            <span class="refresh">↻</span>
                        </div>
                        <div class="card-tools" style="float: right;">
                            <div class="pagination">
                                <a href="#" class="active">1</a>
                                <a href="#">of</a>
                                <a href="#">3</a>
                            </div>

                            <div class="pagination">
                                <a href="#">❮</a>
                                <a href="#">❯</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="cart-body inbox ">
                        <div class="row msg_box unread_msg">
                            <div class=" col-sm-1" style="max-width: 5.333333% !important;">
                                <img src="../img/Group 99.svg" alt="Avatar" style="width:40px;border-radius: 30%;" />
                            </div>
                            <div class="col-sm-10" style="">

                                <h3><b>Mr.robin</b></h3>
                            </div>
                            <div class="col-sm-1 msg_time" style="">
                                11:00
                            </div>
                            <div class="" style="padding-left: 65px;">
                                Hello. How are you today?Hello. How are you today?
                            </div>

                        </div>
                        <hr style=""">
                       <div class=" row msg_box unread_msg">
                        <div class=" col-sm-1" style="max-width: 5.333333% !important;"><img src="../img/Group 99.svg"
                                alt="Avatar" style="width:40px;border-radius: 30%;" />
                        </div>
                        <div class="col-sm-10" style="">

                            <h3><b>Mr.robin</b></h3>
                        </div>
                        <div class="col-sm-1 msg_time" style="">
                            11:00
                        </div>
                        <div class="" style="padding-left: 65px;">
                            Hello. How are you today?Hello. How are you today?
                        </div>

                    </div>
                    <hr style=""">
                    <div class=" row msg_box ">
                    <div class=" col-sm-1" style="max-width: 5.333333% !important;"><img src="../img/Group 99.svg"
                        alt="Avatar" style="width:40px;border-radius: 30%;" />
                </div>
                <div class="col-sm-10" style="">

                    <h3><b>Mr.robin</b></h3>
                </div>
                <div class="col-sm-1 msg_time" style="">
                    11:00
                </div>
                <div class="" style="padding-left: 65px;">
                    Hello. How are you today?Hello. How are you today?
                </div>

            </div>
            <hr style=""">
                </div>

                </div>
            </div>


        </div>


    </section>
    <!-- /.content -->
</div>
@endsection