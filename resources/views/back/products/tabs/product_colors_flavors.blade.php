product_colors_flavors

{{--<div id="" class="container tab-pane active row"><br>--}}
<div id="product_colors_flavors" class="container tab-pane fade row"><br>
<aside class="content_tab_info  tab_product_colors_flavors">
    <center> <h3 class="col-md-6 ">{{ trans('admin.product_colors_flavors') }}</h3></center>
{{--    <div id="" class="message_colors_flavors form-group col-md-12 "><center><h4> {{ trans('admin.please_choose_a_section') }}</h4> <br><br><br></center> </div>--}}
  
    @php   $colors =\App\model\Color::all(); @endphp
    @foreach ($colors as $color)

    <div class="form-group d-inline-block">
                 <input  type="number"    name="key_color_qu[]"  value=""  class=" input_color d-block" >

                 <input type="hidden"       name="value_color_id[]" class="input_color  bg_input_color d-block " value="{{$color->id}}"    style="background:{{$color->color}};color: #000"   >
                 <input type="number"   disabled      class="input_color  bg_input_color d-block " value="{{$color->id}}"    style="background:{{$color->color}};color: transparent"   >
            <label form="key_color_qu"  >{{ $color->{'name_'.lang() } }}</label>
        </div><!--form-group-->

    @endforeach
    <br>
    @foreach ($products->productdetails()->get() as $p_details)

        <div class="form-group d-inline-block">
            <input  type="number"  disabled   name="key_color_qu[]"   value="{{$p_details->key_color_qu}}" class=" input_color d-block" >
{{--            <input type="hidden"       name="value_color_id[]" class="input_color  bg_input_color d-block " value="{{$p_details->value_color_id}}"     style="background:666;color: #000"   >--}}
{{--            <input type="number"   disabled      class="input_color  bg_input_color d-block "     style="{$background:{{$p_details->value_color_id}};color: transparent"   >--}}
            <label form="key_color_qu"  > </label>
        </div><!--form-group-->

    @endforeach
     <style>
        .input_color{
            width: 60px;
            font-size: 20px;
            text-align: center;
            font-weight: bold;
        }       .bg_input_color{

                /*color: transparent;*/
        }
                .input_flavor{
            width: 60px;
            font-size: 20px;
            text-align: center;
            font-weight: bold;
            
        }       .bg_input_flavor{

                    background-size: contain;
        }

    </style>
<br><br><br><br>
    <!-- ---------------------------------------------------------- -->

      @php   $flavors =\App\model\Flavor::all(); @endphp
    @foreach ($flavors as $flavor)

    <div class="form-group d-inline-block">
                 <input  type="number"    name="key_flavor_qu[]"   class=" input_flavor d-block" >
                 <input type="hidden"       name="value_flavor_id[]" class="input_flavor  bg_input_flavor d-block " value="{{$flavor->id}}"    style="background:{{$flavor->color}};color: #000"   >
                 <input type="number"   disabled      class="input_flavor  bg_input_flavor d-block " value="{{$flavor->id}}"    style="background-image:url({{url('/')}}/public/storage/{{$flavor->icon}});"   >
            <label form="key_flavor_qu"  >{{ $flavor->{'name_'.lang() } }}</label>
        </div><!--form-group-->

    @endforeach
    <br>
    @foreach ($products->flavordetails()->get() as $f_details)
        <div class="form-group d-inline-block">
                        <input  type="number"   disabled  name=""   class=" input_flavor d-block" value="{{$f_details->key_flavor_qu}}">
{{--            <span  type="number"      class=" input_flavor d-block" >{{$f_details->key_flavor_qu}}</span>--}}

        </div><!--form-group-->
    @endforeach
    <!-- ---------------------------------------------------------- -->
    <div class="form-group col-md-6">

    </div><!-- form-group col-md-6 -->
    <div id="" class="color_flavor_data hidden  ">
{{--        <h4> {{ trans('admin.color_data') }}</h4> <br><br><br>--}}
        <div class="form-group col-md-12">
            <label form="color_id"  >{{trans('admin.color_id')}}</label>
            <div class="" >
                {!! Form::select('color_id',App\Model\Color::pluck('name_'.lang(),'id'),$products->color_id,['class'=>'form-control','placeholder'=>trans('admin.color_id')])!!}
            </div>
        </div><!--form-group-->
        <div class="form-group col-md-12">
        <label form="color_id"  >{{trans('admin.flavor_id')}}</label>
        <div class="" >
            {!! Form::select('flavor_id',App\Model\Flavor::pluck('name_'.lang(),'id'),$products->flavor_id,['class'=>'form-control','placeholder'=>trans('admin.flavor_id')])!!}
        </div>
    </div><!--form-group-->

    </div>
</aside><!--content_tab_info product_size_weight-->
</div>