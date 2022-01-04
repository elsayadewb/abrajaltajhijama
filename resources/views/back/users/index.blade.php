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

                        <div class="card">
                            <div class="card-header">
   <!-- ---------------------- -->
                <div class="row {{setting()->d_type_user}}">

                     <div class="box-header">
                         <span class="box-title color_000">{{ $title }}</span>
                    <a href="users?level=user" class="btn btn-dark"> <i class="fas pe-fw fa-users"></i> {{ trans('admin.users') }}</a>
                    <a href="users?level=vendor" class="btn btn-success"> <i class="fas pe-fw fa-project-diagram"></i> {{ trans('admin.vendor') }}</a>
                    <a href="users?level=company" class="btn btn-primary">  <i class=" icon_company fas pe-fw fa-place-of-worship"></i> {{ trans('admin.company') }}</a>
                    <a href="users?level=labor_Office" class="btn btn-warning">  <i class="fas pe-fw fa-building"></i> {{ trans('admin.labor_Office') }}</a>
                    <a href="users?level=corporation" class="btn btn-danger">  <i class=" fas pe-fw fa-archway"></i> {{ trans('admin.corporation') }}</a>
                    <a href="users?level=store" class="btn btn-info">  <i class="fas pe-fw fa-shopping-cart"></i> {{ trans('admin.store') }}</a>
                    <a href="users" class="btn btn-secondary ">  <i class=" fas pe-fw fa-border-all"></i> {{ trans('admin.show_all') }}</a>


                    </div>

                </div>











 <i class=""></i>

                    <!-- ---------------------- -->
                             </div>
<section class="page_index_message ">@include('back.message')</section>

                        <!-- /.card-header -->
                            <div class="card-body">
                                {!! Form::open(['id'=>'form_data','url'=>aurl('users/destroy/all'),'method'=>'delete']) !!}
                                <!-- /.----------------------------------------------------------------- -->
                         {!! $dataTable->table([
                            'class'=>'table table-bordered table-striped dataTable',
                            'id'=>'example2',
                            'role'=>'grid',
                            'aria-describedby'=>'example2_info'

                            ],true) !!}
                          {!! Form::close() !!}

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



    <!-- start  Modal--------------- -->


    <div class="modal fade" id="mutlipleDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="alert btn-danger ">
                    <div class="empty_record hidden"> <h5>{{ trans('admin.please_check_some_records') }} !</h5></div> <!--empty_record-->
                    <div class="not_empty_record hidden">  <h5>{{ trans('admin.ask_delete_item') }} ? <span class="record_count"></span></h5></div> <!--not_empty_record-->
                   </div>
                </div> <!--alert btn-danger   -->
                <div class="modal-footer">
                    <div class="not_empty_record hidden">
                        <input type="submit" name="del_all" value="{{trans('admin.no')}}" class="btn btn-info   p_l_r_20px">
                        <input type="submit" name="del_all" value="{{trans('admin.yes')}}" class="btn btn-danger del_all">
                    </div> <!--not_empty_record-->
                    <div class="empty_record hidden">  <input type="submit" name="del_all" value="{{trans('admin.close')}}" class="btn btn-danger  "></div> <!--empty_record-->
                </div>
            </div>
        </div>
    </div>
    <!-- End  Modal--------------- -->



@include('back.users.modal.create')


    @push('js')
        <script>
            delete_all()();
        </script>
        {!! $dataTable->scripts() !!}

    @endpush

@endsection