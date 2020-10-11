@extends('layouts.app')
@section('title','Mail System')
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

                <div class="card" style="padding: 246px;padding-top: 30px;">
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
                            <div class="input-group mb-2">

                                <label for="staticEmail" class="col-sm-11 col-form-label mb-2 left_align">
                                    <h2>Personal Details</h2>
                                </label>
                                <i class="fas fa-edit fa-edit mb-2"></i>


                            </div>
                            <div class="input-group mb-2">

                                <input type="text" class="form-control" placeholder="Adam Smith">


                            </div>
                            <div class="input-group mb-2">
                                <label for="staticEmail" class="col-sm-11 col-form-label left_align mb-2">Email</label>
                                <input type="email" class="form-control" placeholder="user@email.com">
                                <div class="input-group-append">

                                </div>
                            </div>
                            <div class="input-group mb-2">
                                <label for="staticEmail" class="col-sm-11 col-form-label left_align mb-2">Change
                                    Password</label>
                                <i class="fas fa-edit fa-edit mb-2"></i>
                                <input type="password" class="form-control" placeholder="password">
                                <div class="input-group-append">

                                </div>
                            </div>
                            <div class="input-group mb-2">
                                <label for="staticEmail" class="col-sm-11 col-form-label mb-2 left_align">Enter New
                                    Password</label>

                                <input type="password" class="form-control" placeholder="Confirm password">
                                <div class="input-group-append">

                                </div>
                            </div>

                            <div class=" text-center mb-2">
                                <a href="#" class="btn btn-block btn-primary">
                                    Save
                                </a>
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