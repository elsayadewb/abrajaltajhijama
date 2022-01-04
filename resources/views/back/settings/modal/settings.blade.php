<!-- start  Modal lg  Modal lg Create New record--------------- -->
<div class="modal fade bd-example-modal-lg" id="createNewSettings" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- start  Modal lg------------------>
            <div class="modal-body">
                <div class="container-fluid">
                    {{-- -----------------------------------------------------------------------------}}
                    <div class="box">
                        <div class="box-header">
                            <center class="box-title"><h3 class="head_title">{{ trans('admin.settings') }}</h3></center>
                        </div>
                        <section class="modal_massage">@include('back.message_error')</section>
                        <!--/.box-header ,'required'=>'required' -->
                        <!-- /.----------------------------------------------------------------- -->

                        <!-- /.----------------------------------------------------------------- -->
                        <div class="box-body">
                            {!! Form::open(['url'=>aurl('settings'),'files'=>true]) !!}
                            {!! Form::submit(trans('admin.save'),['class'=>'btn btn-primary btn-lg form-control']) !!}
                            @include('back.settings.modal.form')
                            {!! Form::submit(trans('admin.save'),['class'=>'btn btn-primary btn-lg form-control']) !!}

                             {!! Form::close() !!}
                        </div> <!-- /.box-body -->
                        <!-- /.----------------------------------------------------------------- -->
                        <!-- /.----------------------------------------------------------------- -->
                     </div><!-- /.box -->
                    {{-- -----------------------------------------------------------------------------}}
                </div><!-- /.container-fluid -->
            </div><!-- /.modal-body -->
            <!--  End   Modal  lg---------------- -->
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog modal-lg -->
</div><!-- /.modal fade bd-example-modal-lg -->
<!-- End  Modal lg Create New record  ---------------- -->
