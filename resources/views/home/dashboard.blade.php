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
                    <h1 class="m-0"></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">

                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Inbox</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->

    <section class="content" id="text-right">
        <div class="container-fluid">

            </>
            <input type="checkbox">
            {{-- <i class="material-icons">&#xe5d5;</i> --}}
            <span class="refresh">↻</span>
            {{-- <i class="material-icons">&#xe5d5;</i> --}}
            <div class="container-fluid inbox">
                <div class="row msg_box unread_msg">
                    <div class=" col-sm-1" style="max-width: 5.333333% !important;"><img src="/user.jpg" alt="Avatar"
                            style="width:40px;border-radius: 30%;" /></div>
                    <div class="col-sm-10" style="">
                        <h3>Mr.robin</h3>
                    </div>
                    <div class="col-sm-1 msg_time" style="">
                        11:00
                    </div>
                    <div class="" style="padding-left: 65px;">
                        Hello. How are you today?Hello. How are you today?
                    </div>

                </div>
                <hr style="background-color: #dbe2e6" ;>
                <div class="row msg_box unread_msg">
                    <div class=" col-sm-1" style="max-width: 5.333333% !important;"><img src="/user.jpg" alt="Avatar"
                            style="width:40px;border-radius: 30%;" /></div>
                    <div class="col-sm-10" style="">
                        <h3>Mr.robin</h3>
                    </div>
                    <div class="col-sm-1 msg_time" style="">
                        11:00
                    </div>
                    <div class="" style="padding-left: 65px;">
                        Hello. How are you today?Hello. How are you today?
                    </div>

                </div>
                <hr style="background-color: #dbe2e6" ;>
                <div class="row msg_box ">
                    <div class=" col-sm-1" style="max-width: 5.333333% !important;"><img src="/user.jpg" alt="Avatar"
                            style="width:40px;border-radius: 30%;" /></div>
                    <div class="col-sm-10" style="">
                        <h3>Mr.robin</h3>
                    </div>
                    <div class="col-sm-1 msg_time" style="">
                        11:00
                    </div>
                    <div class="" style="padding-left: 65px;">
                        Hello. How are you today?Hello. How are you today?
                    </div>

                </div>
                <hr style="background-color: #dbe2e6" ;>
            </div>

        </div><!-- /.container-fluid -->
    </section>

    <!-- /.content -->
</div>
@endsection