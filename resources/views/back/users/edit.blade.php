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
                        @include('back.message')
                        <!-- /.card-header -->
                            <div class="card-body">
{{--                            {{dd($users)}}--}}
                            <!-- /.----------------------------------------------------------------- -->
                                    {{-- {!! Form::open(['route'=>['users.update',$users->id],'method'=>'put']) !!}--}}
                                    {!! Form::open(['url'=>aurl('users/'.$users->id),'method'=>'put','files'=>true]) !!}
                                <div class="form-group">
                                    {!! Form::label('name',trans('admin.name')) !!}
                                    {!! Form::text('name',$users->name,['class'=>'form-control','class'=>'form-control' ]) !!}
                                </div><!-- /.form-group name -->
                                <div class="form-group">
                                    {!! Form::label('email',trans('admin.email')) !!}
                                    {!! Form::text('email',$users->email,['class'=>'form-control' ]) !!}
                                </div><!-- /.form-group email -->
                                <div class="form-group">
                                    {!! Form::label('password',trans('admin.password')) !!}
                                    {!! Form::password('password',['class'=>'form-control' ]) !!}
                                </div><!-- /.form-group password -->
                                <!----------------start  photo-->
                                <div class="input-group ">
                                    <div class="custom-file">
                                        {!! Form::label('photo',trans('admin.photo_users'),['class'=>'custom-file-label']) !!}
                                        {!! Form::file('photo',['class'=>'custom-file-input','id'=>'inputGroupFile02'] ) !!}
                                    </div>
                                </div>
                                @if(!empty($users->photo))
                                    <div> <img src="{{url('public/storage').Storage::url($users->photo)}}" class="img_100px fa-spin"></div>
                                @endif
                                @if(empty($users))
                                    <img src="{{url('')}}/default/user.png" class="img_120px">
                            @endif
                            <!----------------End photo-->
                                <div class="form-group">
                                    {!! Form::label('level',trans('admin.level')) !!}
                                    {!! Form::select('level'    ,[
                                    'user'        =>trans('admin.user'),
                                    'vendor'      =>trans('admin.vendor'),
                                    'company'     =>trans('admin.company'),
                                    'labor_Office'=>trans('admin.labor_Office'),
                                    'corporation' =>trans('admin.corporation'),
                                    'store'       =>trans('admin.store')
                                    ],$users->label,['class'=>'form-control','placeholder'=>'........................']) !!}
                                </div><!-- /.form-group name -->
                            {!! Form::submit(trans('admin.save'),['class'=>'btn btn-info']) !!}
                            {!! Form::close() !!}
                            <!-- /.----------------------------------------------------------------- -->
                            </div> <!-- /.card-body -->
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












