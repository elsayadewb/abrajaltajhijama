@extends('back.index')
@section('content')
    @push('js')
    <script>
        $(document).ready(function () {
            $('#jstree').jstree({
                'core' : {
                    'data' : {!! load_dep(old('parent')) !!},
                    "themes": {
                        "name": "default-dark",
                        "dots": true,
                        "variant": "large",
                        "icons": true,
                        "multiple" : true,
                        "animation" : 1000,
                    }
                },
                "checkbox" : {
                    "keep_selected_style" : false
                },
                "plugins" : [  "wholerow","radio","/*checkbox*/" ]
            });//#jstree
        });//document
        //-----------------------get id
            $('#jstree').on('changed.jstree',function(e,data){
                var  i , j , r =[];//=  var  i[]; var  j[];var  r[];
                for(i=0,j = data.selected.length;i < j;i++ )
              {
                r.push(data.instance.get_node(data.selected[i]).id);
              }//for
                $('.parent_id').val(r.join(','));
                //1,2,3,4,5,6
            });/*changed*/
    </script>
    @endpush
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
                                    {!! Form::open(['url'=>aurl('departments'),'files'=>true]) !!}
                                    <div class="form-group">
                                        {!! Form::label('dep_name_ar',trans('admin.dep_name_ar')) !!}
                                        {!! Form::text('dep_name_ar',old('dep_name_ar'),['class'=>'form-control' ]) !!}
                                    </div><!-- /.form-group dep_name_ar -->
                                    <div class="form-group">
                                        {!! Form::label('dep_name_en',trans('admin.dep_name_en')) !!}
                                        {!! Form::text('dep_name_en','dep_name_en',['class'=>'form-control  ' ]) !!}
                                    </div><!-- /.form-group dep_name_en -->
                                    <!--  start js tree ----------------------------------- -->
                                    <div class="clearfix"></div>
                                    <div id="jstree"></div>
                                    <input type="hidden" name="parent" class="parent_id" value="{{old('parent')}}">
                                    <div class="form-group">
                                        {!! Form::label('select_dep',trans('admin.select_dep')) !!}
                                        <div class="clearfix"></div>
                                    </div><!-- /.form-group select_dep -->
                                    <!--  start js tree ----------------------------------- -->
                                    <div class="form-group">
                                        {!! Form::label('description_ar',trans('admin.description_ar')) !!}
                                        {!! Form::textarea('description_ar',old('description_ar'),['class'=>'form-control' ]) !!}
                                    </div><!-- /.form-group description_ar -->
                                              <div class="form-group">
                                        {!! Form::label('description_en',trans('admin.description_en')) !!}
                                        {!! Form::textarea('description_en',old('description_en'),['class'=>'form-control' ]) !!}
                                    </div><!-- /.form-group description_ar -->

                                       <div class="form-group">
                                        {!! Form::label('link',trans('admin.link')) !!}
                                        {!! Form::text('link',old('link'),['class'=>'form-control' ]) !!}
                                    </div><!-- /.form-group description_ar -->

                                     <!----------------start  icon-->
                                    <div class="input-group ">
                                        <div class="custom-file">
                                            {!! Form::label('icon',trans('admin.icon_departments'),['class'=>'custom-file-label']) !!}
                                            {!! Form::file('icon',['class'=>'custom-file-input','id'=>'inputGroupFile02'] ) !!}
                                        </div>
                                    </div>
                                    <div>  <img   src="{{url('default')}}/dep.png" class="img_100px"></div>

                                <!----------------End icon-->

                                    {{ Form::button('<i class="fa fa-location-arrow ">'
                                        . trans('admin.create_new_departments').'
                                        </i> <i class="fas fa-th"> </i> ' ,
                                        ['type' => 'submit', 'class' => 'form-control btn btn-info btn-lg'] )
                                    }}
                                    {!! Form::close() !!}
                                </div><!-- box-body-->
                                <!-- /.----------------------------------------------------------------- -->
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-12">
                        <input type="hidden" name="department_id" class="department_id" value="{{ old('department_id') }}">
                        <div id="jstree"></div>
                        <div class="d-none  form-group">
                            {!! Form::label('is_public',trans('admin.is_public')) !!}
                            {!! Form::select('is_public',['yes'=>trans('admin.yes'),'no'=>trans('admin.no')],old('is_public'),['class'=>'form-control']) !!}
                        </div>
                    </div><!--col-md-12 -->

                </div>   <!-- /.row -->

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
@endsection