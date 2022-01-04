<div id="department" class="container   tab-pane active "><br>
    <div id="product_info" class="container "><br>
        <center>  <h3>{{ trans('admin.link_just') }}</h3></center>
        <aside class="content_tab_info  tab_product_info">
            <div class="row">
                <div class="col-md-12 content_form_ar" >
                    <div class="form-group">
                        {!! Form::label('product_name_ar',trans('admin.product_name_ar')) !!}
                        {!! Form::text('product_name_ar',$products->product_name_ar,['class'=>'form-control']) !!}
                    </div><!-- /.form-group product_name_en -->

                          <div class="form-group">
                        {!! Form::label('product_name_en',trans('admin.product_name_en')) !!}
                        {!! Form::text('product_name_en',$products->product_name_en,['class'=>'form-control']) !!}
                    </div><!-- /.form-group product_name_en -->
                    <div class="form-group">
                        {!! Form::label('description_ar',trans('admin.description_ar')) !!}
                        {!! Form::text('description_ar',$products->description_ar,['class'=>'form-control' ]) !!}
                    </div><!-- /.form-group description_ar -->

                    <div class="form-group ">
                        {!! Form::label('description_en',trans('admin.description_en')) !!}
                        {!! Form::text('description_en',$products->description_en,['class'=>'form-control' ]) !!}
                    </div><!-- /.form-group description_en -->
                </div><!--col-md-6 content_form_ar-->
                <div class="col-md-12 content_form_en" >
                </div><!--col-md-6 content_form_en-->
            </div><!--row-->
        </aside><!--content_tab_info product_info-->                                                  </div>
    <aside class="content_tab_info  tab_department">
        <!-- --------------------------------------------------------------------------------------------------- -->
        @push('js')
            <script>
                $(document).ready(function () {
                    $('#jstree').jstree({
                        'core' : {
                            'data' : {!! load_dep($products->department_id) !!},
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
                            "keep_selected_style" : true
                        },
                        "plugins" : [  "wholerow","radio","/*checkbox*/" ]
                    });//.jstree
                });//document

                //-----------------------get id
                $('#jstree').on('changed.jstree',function(e,data){
                    var  i , j , r =[];//===  var  i[]; var  j[];var  r[];
                    var name =[];
                    var icon =[];
                    for(i=0,j = data.selected.length;i < j;i++ )
                    {
                        r.push(data.instance.get_node(data.selected[i]).id);
                        icon.push(data.instance.get_node(data.selected[i]).icon);
                    }//for
                    //$('#dep_icon').attr('src','{{url('storage')}}/'+icon.join(', '));//get src   dpe
                    //
                    var department = r.join(', ')
                    $('.department_id').val(department);
                    $.ajax({
                        url:"{{ aurl('load/wight/size') }}",
                        dataType:'html',
                        type:'post',
                        data:{_token:'{{ csrf_token() }}',dep_id:department,product_id:'{{$products->id}}'},
                        success: function(data)
                        {
                            $('.size_weight').html(data);
                            $('.color_flavor_data').removeClass('hidden');
                            $('.message_colors_flavors').addClass('hidden');
                        }

                    });

                });/*changed*/
            </script>
    @endpush
    <!-- --------------------------------------------------------------------------------------------------- -->
        <!-- /.-------------------------------------------- start  HTML JS Tree--------------------- -->
        <div class="content_departments card_dark">
            <!--  start js tree ----------------------------------- -->
            <br>
            <a class="btn btn-danger    hidden showbtn_control delete_dpe"  data-toggle="modal" data-target="#delete_bootstrap_modal"> <i class="fas fa-trash"></i> {{trans('admin.delete')}}</a>
            <a class="btn btn-success   hidden showbtn_control edit_dpe"> <i class="fas fa-edit"></i>{{trans('admin.edit')}}</a>
            <a class="btn btn-primary   hidden showbtn_control add_new_product_in_dpe"> <i class="fas fa-plus"></i>{{trans('admin.add_product_in_th_dep')}}</a>
            <div class="clearfix"></div>
            <div id="jstree"></div>
            <input type="hidden" name="department_id" class="department_id" value="{{old('department_id')}}"   >
            <input type="text" name="بلح" class="department_id form-control  btn-dark" value="{{old('department_id')}}"  disabled  >
            <div class="clearfix"></div>
            <br>

            <!--  start js tree ----------------------------------- -->
        </div><!--content_departments-->
        <!-- /.--------------------------------------------- ُEnd HTML JS Tree-------------------- -->
    </aside><!--content_tab_info department-->
    {{-- start media link----------------------------------------------------------------------}}
    {{--<div id="product_media" class="container container  tab-pane fade"><br>--}}

    @push('js')
        <script>
            $(document).ready(function(){
                $('.dropzone .dz-preview .dz-remove ').addClass('btn btn-danger');

            });
        </script>
    @endpush
    {{--  End  media link ----------------------------------------------------------------------}}
</div>
