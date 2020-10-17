@extends('layouts.app')
@section('title','Clients Customer Web App')

@section('content')
<div class="content-wrapper" style="background-color:white;">
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <form class="form-inline ml-0 navform ">
                <div class="input-group input-group-sm">

                    <input class="form-control form-control-navbar" type="search" placeholder="Search Emails" aria-label="Search" style="height: 35px;border-radius: 5px !important;">
                </div>
            </form>

        </ul>

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

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12" style="padding: 0 !important;">

                <div class="card dashboard_msg_list" style="width: 100%;padding: 20px;padding-top: 0;">
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
                        <div class="row msg_box unread_msg" onclick="window.location.href='/home/msg_box'>
                            <div class=" col-sm-1" style="max-width: 5.333333% !important;">
                            <img src="../img/Group 99.svg" alt="Avatar" style="width:40px;border-radius: 30%;" />
                        </div>
                        <div class="col-sm-9" style="">

                            <h5><b>Mr.robin</b></h5>
                            <p class="msg_email" style="font-size: 10px;">marie@mail.com</p>
                            <p class="msg_subjct bold float-left">Lorem ipsum dolor :</p>
                            <p class="float-left"> Hello. How are you today?Hello. How are you today?ss</p>
                        </div>
                        <div class="col-sm-2 right_align" style="">
                            just now
                        </div>
                    </div>
                    <hr style="">
                    <div class="row msg_box unread_msg" onclick="window.location.href='/home/msg_box'>
                            <div class=" col-sm-1" style="max-width: 5.333333% !important;">
                        <img src="../img/Group 99.svg" alt="Avatar" style="width:40px;border-radius: 30%;" />
                    </div>
                    <div class="col-sm-9" style="">

                        <h5><b>Mr.robin</b></h5>
                        <p class="msg_email" style="font-size: 10px;">marie@mail.com</p>
                        <p class="msg_subjct bold float-left">Lorem ipsum dolor :</p>
                        <p class="float-left"> Hello. How are you today?Hello. How are you today?ss</p>
                    </div>
                    <div class="col-sm-2 right_align" style="">
                        just now
                    </div>
                </div>
                <hr style="">

                <div class="row msg_box " onclick="window.location.href='/home/msg_box'>
                                <div class=" col-sm-1" style="max-width: 5.333333% !important;">
                    <img src="../img/Group 99.svg" alt="Avatar" style="width:40px;border-radius: 30%;" />
                </div>
                <div class="col-sm-9" style="">

                    <h5><b>Mr.robin</b></h5>
                    <p class="msg_email" style="font-size: 10px;">marie@mail.com</p>
                    <p class="msg_subjct bold float-left">Lorem ipsum dolor :</p>
                    <p class="float-left"> Hello. How are you today?Hello. How are you today?ss</p>
                </div>
                <div class="col-sm-2 right_align" style="">
                    11.10
                </div>
            </div>

            <hr style="">
        </div>
</div>
</div>
</div>
</section>
</div>

@endsection
