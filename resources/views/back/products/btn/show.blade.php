{{--<a href="{{ aurl('products/'.$id.'/edit') }}" class="btn btn-info"><i class="fa fa-edit"></i></a>--}}
<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#show_products{{ $id }}"><i class="fa fa-eye"></i></button>
<!-- Modal -->
<div id="show_products{{ $id }}" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
             <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{trans('admin.show')}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {!! Form::open(['route'=>['products.destroy',$id],'method'=>'delete']) !!}
            <div class="modal-body">
               
            <!-- /.----------------------------------------------------------------- -->
                 {!! Form::open(['route'=>['products.update',$id],'method'=>'put','class'=>'form_save_in_modal','files'=>true]) !!} 
                <!-- ------------------------------------------------------------ -->
                          <div class="row">
                                  
                                   <div class="col-md-12 content_form_ar" >
                                    <div class="form-group">
                                        {!! Form::label('product_name_ar',trans('admin.product_name_ar')) !!}
                                        {!! Form::text('product_name_ar',$product_name_ar,['class'=>'form-control','disabled'=>'disabled' ]) !!}
                                    </div><!-- /.form-group product_name_en -->

                                     <div class="form-group">
                                        {!! Form::label('description_ar',trans('admin.description_ar')) !!}
                                        {!! Form::textarea('description_ar',$description_ar,['class'=>'form-control','disabled'=>'disabled' ]) !!}
                                    </div><!-- /.form-group description_ar -->
                                    <!----------------start  photo-->
                                    <div class="input-group ">
                                            {!! Form::label('photo',trans('admin.photo_products'),['class'=>'']) !!}
                                       </div><!--input-group-->
                                         @if(!empty($photo))
                                         <div class="text-center"> <img src="{{url('public/storage').Storage::url($photo)}}" class="img_100px fa-spin"></div>
                                         @else
                                         <div class="text-center">  <img   src="{{url('default')}}/product.png" class="img_100px"></div>
                                         @endif
                                      <!----------------End photo-->                                   <!----------------End photo-->

                                   </div><!--col-md-6 content_form_ar-->
                                   <div class="col-md-12 content_form_en" >




                                   </div><!--col-md-6 content_form_en-->
                                </div><!--row-->
                                <!-- ------------------------------------------------------------ -->

                                      <a href="{{ aurl('products/'.$id.'/edit') }}" class="btn btn-success "><i class="fa fa-edit"></i> {{trans('admin.edit_page')}}</a>
                                       <span>
                                         {!! Form::open(['route'=>['products.destroy',$id],'method'=>'delete' ,'class'=>'d-inline-block']) !!}
                                         {{  Form::button(' <i class="fa fa-trash">  </i>'.trans('admin.delete_fast').'<img src="'.asset('/default/alert.gif').'" class="w_h_20px">', ['type' => 'submit', 'class' => 'btn btn-danger   btn_alert_delete_htis  '] )  }}
                                         {!! Form::close() !!}
                                       </span>
                                    <button type="button" class="btn btn-warning" data-dismiss="modal">{{ trans('admin.close') }}  <i class="fas fa-times"> </i></button>
                               <!-- /.----------------------------------------------------------------- -->
             </div><!--modal-body--> 
          </div><!--modal-content-->
       </div><!--modal-dialog-->
   </div><!--modal fade-->
 