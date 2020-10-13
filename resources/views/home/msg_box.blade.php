@extends('layouts.app')
@section('title','Clients Customer Web App')
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
    </ul>
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
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12" style="margin: auto !important ;">
                <div class="card " style="width: 100%;    padding: 100% 37px; padding-top: 0;">
                    <div class="msg_card_header">

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


                        <div class="row msg_box">
                            <div class=" col-sm-1 " style="max-width: 5.333333% !important;">
                                <img src="../img/Group 99.svg" alt="Avatar" style="width:40px;border-radius: 30%;" />
                            </div>
                            <div class="col-sm-10 msg_content" style="">

                                <h3 class=""><b>Mr.robin</b></h3>
                                <div class="mail" style="">
                                    marie@mail.com
                                </div>
                                <div class="msg_status msg" style="">
                                    quick reply
                                </div>
                                <div class="msg_body msg" style=" ">
                                    Hello. How are you today?Hello. How are you today?
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum
                                </div>
                                <div class="div_box msg">
                                </div>
                                <div class="msg_footer msg">
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                                </div>
                                <a class="btn btn-info msg_button msg" id="" href="javascript:;" >
                                    REPLY
                                </a>
                            </div>
                            <div class="col-sm-1 msg_time" style="">
                                11:00
                            </div>




                        </div>

                    </div>

                </div>

            </div>
        </div>


</div>


</section>
<!-- /.content -->
</div>
@endsection
