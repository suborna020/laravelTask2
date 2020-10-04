@extends('layouts.app')
@section('title','Mail System')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper navbar-lightblue">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Sent</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Sent </li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content" id="text-right">
        <div class="container-fluid">
            </>
            <div class="inbox">
                <hr style="background-color: #dbe2e6" ;>
                <div class="msg_box">
                    <img src="/user.jpg" alt="Avatar" style="width:40px" />
                    <p>Hello. How are you today?</p>
                    <p id="msg_time">11:00</p>

                </div>
                <hr style="background-color: #dbe2e6" ;>
                <div class="msg_box">
                    <img src="/user.jpg" alt="Avatar" style="width:40px" />
                    <p>what is this....................?</p>
                    <p id="msg_time">11:00</p>
                </div>
                <div class="msg_box">
                    <img src="/user.jpg" alt="Avatar" style="width:40px" />
                    <p>what is this....................?</p>
                    <p id="msg_time">11:00</p>
                </div>
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
</div>

@endsection