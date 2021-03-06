@extends('back.index')
@section('content')
    <div class="wrapper">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper content_wrapper_datatable">
            <!-- Content Header (Page header) -->
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="card card_dark">
                            <div class="card-header">
                                <h3 class="card-title">{{$title}}</h3>
                            </div>
                            <section class="page_create_message">@include('back.message')</section>
                            <!-- /.card-header -->
                            <div class="card-body form_dark">
                                <!-- /.----------------------------------------------------------------- -->
                                <div class="box-body">
                                    {!! Form::open(['url'=>aurl('settings'),'files'=>true]) !!}
                                    {!! Form::submit(trans('admin.save'),['class'=>'btn btn-primary btn-lg form-control']) !!}<br><br>




                                        @include('back.settings.modal.form')


                                    {{--                                    {!! Form::submit(trans('admin.save'),['class'=>'btn btn-primary']) !!}--}}
                                    {!! Form::submit(trans('admin.save'),['class'=>'btn btn-primary btn-lg form-control']) !!}<br><br>

                                    {!! Form::close() !!}
                                </div> <!-- /.box-body -->
                                <!-- /.----------------------------------------------------------------- -->
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->



@endsection