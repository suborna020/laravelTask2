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
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">

                            <div class="card-tools">
                                <a class="btn btn-info btn-sm" href="javascript:;" data-toggle="modal"
                                    data-target="#myModal">Add New</a>
                            </div>
                        </div>
                        <div class="card-body">

                        </div>
                        <!-- /.card-body -->

                        <!-- /.card-footer-->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
</div>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add New Question</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="{{ url('admin/exm_new_question') }}" class="database_operation">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">

                                <label for="exam_id">Choose a Subject:</label>

                                <select name="exam_id" id="exam_id" required>
                                    <option></option>
                                    <option value="1">General knowledge</option>
                                    <option value="2">History</option>
                                    <option value="3">Bangla</option>
                                    <option value="4">English</option>
                                </select>

                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                {{-- <input type="hidden" name="exam_id" value="{{ Request::segment(3) }}">
                                segment(3)=url er main project name er por 3no attribute like (/admin/exm_question/3)
                                --}}
                                <input type="text" required="required" name="question" placeholder="Enter Question"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Enter Option 1</label>
                                <input type="text" required="required" name="option1" placeholder="Enter Option 1"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Enter Option 2</label>
                                <input type="text" required="required" name="option2" placeholder="Enter Option 2"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Enter Option 3</label>
                                <input type="text" required="required" name="option3" placeholder="Enter Option 3"
                                    class="form-control">
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Enter Right Ans</label>
                                <input type="text" required="required" name="ans" placeholder="Enter Right Ans"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <button class="btn btn-primary">Add</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection