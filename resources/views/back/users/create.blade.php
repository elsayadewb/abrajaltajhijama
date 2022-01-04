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
                                    {!! Form::open(['url'=>aurl('users'),'files'=>true]) !!}
                                    <div class="form-group">
                                        {!! Form::label('name',trans('admin.name')) !!}
                                        {!! Form::text('name',old('name'),['class'=>'form-control','class'=>'form-control' ]) !!}
                                    </div><!-- /.form-group name -->
                                    <div class="form-group">
                                        {!! Form::label('email',trans('admin.email')) !!}
                                        {!! Form::text('email',old('email'),['class'=>'form-control' ]) !!}
                                    </div><!-- /.form-group name -->
                                    <div class="form-group">
                                        {!! Form::label('password',trans('admin.password')) !!}
                                        {!! Form::password('password',['class'=>'form-control' ]) !!}
                                    </div><!-- /.form-group name -->
                                    <!----------------start  photo-->
                                    <div class="input-group ">
                                        <div class="custom-file">
                                            {!! Form::label('photo',trans('admin.photo_user'),['class'=>'custom-file-label']) !!}
                                             <input type="file" name="photo" accept="image/*" onchange="showMyImage(this)" class="custom-file-input" id="inputGroupFile02" />

                                        </div>
                                    </div>
                                    <div>
                                    <img id="thumbnil" style="width:20%; margin-top:10px;" src="{{url('')}}/default/user.png" alt="image"/>
                                    <!----------------End photo-->
                                    <div class="form-group">
                                    {!! Form::label('level',trans('admin.level')) !!}
                                    {!! Form::select('level',[
                                    'user'        =>trans('admin.user'),
                                    'vendor'      =>trans('admin.vendor'),
                                    'company'     =>trans('admin.company'),
                                    'labor_Office'=>trans('admin.labor_Office'),
                                    'corporation' =>trans('admin.corporation'),
                                    'store'       =>trans('admin.store')
                                    ],old('level'),['class'=>'form-control','placeholder'=>'........................']) !!}

                                    </div><!-- /.form-group name -->
                                        <div class="form-group">
                                            <input type="file" accept="image/*" onchange="showMyImage(this)" />

                                        </div><!-- /.form-group name -->
                                    {!! Form::submit(trans('admin.create_admin'),['class'=>'btn btn-info']) !!}
                                    {!! Form::close() !!}
                                </div><!-- box-body-->
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


     <input type="file" accept="image/*" onchange="showMyImage(this)" style="width:20%; margin-top:10px;"  />
    <br/>
    <img id="thumbnil" style="width:20%; margin-top:10px;" src="" alt="image"/>
    <script>
        function showMyImage(fileInput) {
            var files = fileInput.files;
            for (var i = 0; i < files.length; i++) {
                var file = files[i];
                var imageType = /image.*/;
                if (!file.type.match(imageType)) {
                    continue;
                }
                var img=document.getElementById("thumbnil");
                img.file = file;
                var reader = new FileReader();
                reader.onload = (function(aImg) {
                    return function(e) {
                        aImg.src = e.target.result;
                    };
                })(img);
                reader.readAsDataURL(file);
            }
        }
    </script>

@endsection