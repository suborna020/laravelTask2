@extends('layouts.app')
@section('title','Clients Customer Web App')

@section('content')
<div class="content-wrapper" style="background-color:white;">
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12" style="margin: auto !important ;">

                <div class="card" style="padding: 246px;padding-top: 30px;">
                    <div class="card-body ">


                        <form action=".#" method="post" class="profile_form" id="profile_form">

                            <div class="form-group" id="marginbottom">
                                <p class="" id="center">
                                    <img src="../img/Group 99.svg" alt="Avatar" style="width:80px;border-radius: 20%;" />
                                </p>
                            </div>

                            <div class="form-group" id="marginbottom">
                                <label for="staticEmail">
                                    <h5>Personal Details</h5>
                                </label>
                                <div class="col-sm-1 right_align">
                                    <i class="fas fa-edit fa-edit"></i>
                                </div>
                            </div>
                            <div class="form-group" id="marginbottom">
                                <label for="name">Name </label>
                                <input type="name" class="form-control" id="name" aria-describedby="name" placeholder="Adam Smith">
                            </div>
                            <div class="form-group" id="marginbottom">
                                <label for="email">Email </label>
                                <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="Enter email">
                            </div>
                            <div class="form-group" id="marginbottom">
                                <label for="exampleFormControlFile1">Upload Your NID</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                            <div class="form-group" id="marginbottom">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" id="address" placeholder="Full Address">
                            </div>
                            <div class="form-group" id="marginbottom">
                                <label for="number">Phone Number</label>
                                <input type="text" class="form-control" id="number" placeholder="Phone Number">
                            </div><br>
                            <div class=" text-center" id="marginbottom">
                                <a href="#" class="btn btn-block btn-primary" style="background-color: #4195D1;">
                                    Save
                                </a>
                            </div>
                        </form>



                    </div>
                    <!-- /.login-card-body -->
                </div>

            </div>
        </div>


    </section>
    <!-- /.content -->
</div>
@endsection
