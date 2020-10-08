@extends('layouts.app')
@section('title','Mail System')
<nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-color: #213F7E;">
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

                <div class="card" style="padding: 246px;padding-top: 30px;
">
                    <div class="card-body ">


                        <form action=".#" method="post">
                            <div class="input-group mb-2">
                                <p class="" id="center">
                                    <img src="../img/Group 99.svg" alt="Avatar"
                                        style="width:80px;border-radius: 20%;" />
                                </p>


                                <div class="input-group-append">

                                </div>
                            </div>

                            <div class="input-group mb-2 ">

                                <label for="staticEmail" class="col-sm-11 col-form-label mb-2 left_align">
                                    <h2>Privacy</h2>
                                </label>
                                <label for="staticEmail" class="col-sm-11 col-form-label mb-2 left_align">Who can see
                                    your contact
                                    imformation? </label>
                            </div>

                            <div class="form-group">
                                <label for="privacy_name" class="col-sm-11 col-form-label mb-2 left_align">Name</label>
                                <select class="form-control" id="privacy_name">
                                    <option>Public</option>
                                    <option>Friends</option>
                                    <option>Only Me</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="privacy_email" class="col-sm-11 col-form-label mb-2 left_align"><label
                                        for="staticEmail"
                                        class="col-sm-11 col-form-label left_align mb-2">Email</label></label>
                                <select class="form-control" id="privacy_email">
                                    <option>Public</option>
                                    <option>Friends</option>
                                    <option>Only Me</option>
                                </select>
                            </div>
                        </form>
                    </div>
                    <!-- /.login-card-body -->
                </div>

            </div>
        </div>


</div>


</section>
<!-- /.content -->
</div>
@endsection