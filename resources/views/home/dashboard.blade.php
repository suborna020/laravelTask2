@extends('layouts.app')
@section('title','Clients Customer Web App')
{{-- @include('home.navbar') --}}

@section('content')
<div class="content-wrapper" id="content" style="background: white;">
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
                        <div class="row msg_box unread_msg">
                            <div class=" col-sm-1" style="max-width: 5.333333% !important;">
                                <img src="../img/Group 99.svg" alt="Avatar" style="width:40px;border-radius: 30%;" />
                            </div>
                            <div class="col-sm-9" style="">

                                <h5><b>Mr.robin</b></h5>
                                <p class="msg_subjct bold float-left">Lorem ipsum dolor :</p>
                                <p class="float-left"> Hello. How are you today?Hello. How are you today?ss</p>
                            </div>
                            <div class="col-sm-2 right_align" style="">
                                just now
                            </div>
                        </div>
                        <hr style="">
                        <div class="row msg_box unread_msg">
                            <div class=" col-sm-1" style="max-width: 5.333333% !important;">
                                <img src="../img/Group 99.svg" alt="Avatar" style="width:40px;border-radius: 30%;" />
                            </div>
                            <div class="col-sm-9" style="">

                                <h5><b>Mr.robin</b></h5>
                                <p class="msg_subjct bold float-left">Lorem ipsum dolor :</p>
                                <p class="float-left"> Hello. How are you today?Hello. How are you today?ss</p>
                            </div>
                            <div class="col-sm-2 right_align" style="">
                                just now
                            </div>
                        </div>
                        <hr style="">
                        <div class="cart-body inbox ">
                            <div class="row msg_box ">
                                <div class=" col-sm-1" style="max-width: 5.333333% !important;">
                                    <img src="../img/Group 99.svg" alt="Avatar" style="width:40px;border-radius: 30%;" />
                                </div>
                                <div class="col-sm-9" style="">

                                    <h5><b>Mr.robin</b></h5>
                                    <p class="msg_subjct bold float-left">Lorem ipsum dolor :</p>
                                    <p class="float-left"> Hello. How are you today?Hello. How are you today?ss</p>
                                </div>
                                <div class="col-sm-2 right_align" style="">
                                    11.10
                                </div>
                            </div>
                        </div>
                        <hr style="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>

@endsection
