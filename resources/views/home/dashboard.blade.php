@extends('layouts.app')
@section('title','Mail System')
@section('content')
<!-- Content Wrapper. Contains page content -->


<div class="content-wrapper navbar-lightblue">
    <!-- Content Header (Page header) -->
    <section class="content">
        <div class="container-fluid">
            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <section class="col-lg-12 connectedSortable">
                    <!-- TO DO List -->
                    <div class="card">
                        <div class="msg_card_header" style="cursor: default !important;">
                            <div class="card-tools" style="float: left;">
                                <input type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;
                                {{-- <i class="material-icons">&#xe5d5;</i> --}}
                                <span class="refresh">↻</span>
                            </div>
                            <div class="card-tools" style="float: right;">
                                <ul class="pagination pagination-sm">
                                    <li class="page-item"><a href="#" class="page-link">&laquo;</a></li>
                                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                                    <li class="page-item"><a href="#" class="page-link">&raquo;</a></li>
                                </ul>
                            </div>
                        </div>


                    </div>
                    <div class="cart-body inbox">
                        <div class="row msg_box unread_msg">
                            <div class=" col-sm-1" style="max-width: 5.333333% !important;"><img src="/user.jpg"
                                    alt="Avatar" style="width:40px;border-radius: 30%;" />
                            </div>
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
                            <div class=" col-sm-1" style="max-width: 5.333333% !important;"><img src="/user.jpg"
                                    alt="Avatar" style="width:40px;border-radius: 30%;" /></div>
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
                            <div class=" col-sm-1" style="max-width: 5.333333% !important;"><img src="/user.jpg"
                                    alt="Avatar" style="width:40px;border-radius: 30%;" /></div>
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
                    <!-- /.card -->
                </section>

            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content" id="text-right">
        <div class="container-fluid">

            </>
            <input type="checkbox">

            <span class="refresh">↻</span>

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
        <div class="card">
            <div class="card-header">


                <div class="card-tools">
                    <ul class="pagination pagination-sm">
                        <li class="page-item"><a href="#" class="page-link">&laquo;</a></li>
                        <li class="page-item"><a href="#" class="page-link">1</a></li>
                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                        <li class="page-item"><a href="#" class="page-link">&raquo;</a></li>
                    </ul>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <ul class="todo-list" data-widget="todo-list">
                    <li>
                        <!-- drag handle -->
                        <span class="handle">
                            <i class="fas fa-ellipsis-v"></i>
                            <i class="fas fa-ellipsis-v"></i>
                        </span>
                        <!-- checkbox -->
                        <div class="icheck-primary d-inline ml-2">
                            <input type="checkbox" value="" name="todo1" id="todoCheck1">
                            <label for="todoCheck1"></label>
                        </div>
                        <!-- todo text -->
                        <span class="text">Design a nice theme</span>
                        <!-- Emphasis label -->
                        <small class="badge badge-danger"><i class="far fa-clock"></i> 2
                            mins</small>
                        <!-- General tools such as edit or delete-->


                    </li>

                    <li>
                        <span class="handle">
                            <i class="fas fa-ellipsis-v"></i>
                            <i class="fas fa-ellipsis-v"></i>
                        </span>
                        <div class="icheck-primary d-inline ml-2">
                            <input type="checkbox" value="" name="todo6" id="todoCheck6">
                            <label for="todoCheck6"></label>
                        </div>
                        <span class="text">Let theme shine like a star</span>
                        <small class="badge badge-secondary"><i class="far fa-clock"></i> 1
                            month</small>
                        <div class="tools">
                            <i class="fas fa-edit"></i>
                            <i class="fas fa-trash-o"></i>
                        </div>
                    </li>
                </ul>
            </div>

        </div>
    </section>

    <!-- /.content -->
</div>
@endsection