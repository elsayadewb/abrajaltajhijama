<section class="row">
<style>
{{--.input_theme{background:{{setting()->theme}} }--}}
{{--.input_color{color:{{setting()->color}}!important; }--}}
{{--.input_color{color:{{setting()->color_three_dark}}!important;}--}}


</style>
<div class="form-group col-md-6">
    {!! Form::label('sitename_ar',trans('admin.sitename_ar')) !!}
    {!! Form::text('sitename_ar',setting()->sitename_ar,['class'=>'form-control']) !!}
</div>
<div class="form-group col-md-6">
    {!! Form::label('sitename_en',trans('admin.sitename_en')) !!}
    {!! Form::text('sitename_en',setting()->sitename_en,['class'=>'form-control']) !!}
</div>
</section>
<div class="form-group">
    {!! Form::label('email',trans('admin.email')) !!}
    {!! Form::email('email',setting()->email,['class'=>'form-control']) !!}
</div>

<!------------------------>
<!--************************************-->
<section class="row">

    <aside class="col-md-6" >
        <div class="input-group ">
            <div class="custom-file">
                {!! Form::label('icon',trans('admin.custom_icon'),['class'=>'custom-file-label']) !!}
                {!! Form::file('icon',['class'=>'custom-file-input','id'=>'inputGroupFile02'] ) !!}
            </div>
        </div>
        @if(!empty(setting()->icon))
            <img   src="{{url('public/storage').Storage::url(setting()->icon)}}" class="img_100px">
        @else
            <div>  <img   src="{{url('default')}}/icon.png" class="img_100px"></div>
        @endif
    <!------------------------>
        <!------------------------>
        <div class="input-group ">
            <div class="custom-file">
                {!! Form::label('logo',trans('admin.custom_logo'),['class'=>'custom-file-label']) !!}
                {!! Form::file('logo',['class'=>'custom-file-input','id'=>'inputGroupFile02'] ) !!}
            </div>
        </div>
        @if(!empty(setting()->logo))
            <img   src="{{url('public/storage').Storage::url(setting()->logo)}}" class="img_100px">
        @else
            <div>  <img   src="{{url('default')}}/logo.png" class="img_100px"></div>
    @endif
    <!------------------------></aside>
    <aside class="col-md-6" >
        <!------------------------>
        <div class="input-group ">
            <div class="custom-file">
                {!! Form::label('img_maintenance',trans('admin.custom_img_maintenance'),['class'=>'custom-file-label']) !!}
                {!! Form::file('img_maintenance',['class'=>'custom-file-input','id'=>'inputGroupFile02'] ) !!}
            </div>
        </div>
        @if(!empty(setting()->img_maintenance))
            <img   src="{{url('public/storage').Storage::url(setting()->img_maintenance)}}" class="img_100px">
        @else
            <div>  <img   src="{{url('default')}}/img_maintenance.png" class="img_100px"></div>
        @endif
    <!------------------------>
        <!------------------------>

        <div class="input-group ">
            <div class="custom-file">
                {!! Form::label('bg_maintenance',trans('admin.custom_bg_maintenance'),['class'=>'custom-file-label']) !!}
                {!! Form::file('bg_maintenance',['class'=>'custom-file-input','id'=>'inputGroupFile02'] ) !!}
            </div>
        </div>
        @if(!empty(setting()->bg_maintenance))
            <img   src="{{url('public/storage').Storage::url(setting()->bg_maintenance)}}" class="img_100px">
        @else
            <div>  <img   src="{{url('default')}}/bg_maintenance.png" class="img_100px"></div>
    @endif
    <!------------------------>
    </aside>
</section>
<!--************************************-->


<section class="row">
    <div class="form-group col-md-6">
        {!! Form::label('description',trans('admin.description')) !!}
        {!! Form::textarea('description',setting()->description,['class'=>'form-control']) !!}
    </div>

    <div class="form-group col-md-6">
        {!! Form::label('keywords',trans('admin.keywords')) !!}
        {!! Form::textarea('keywords',setting()->keywords,['class'=>'form-control']) !!}
    </div>


    <div class="form-group col-md-6">
        {!! Form::label('main_lang',trans('admin.main_lang')) !!}
        {!! Form::select('main_lang',['ar'=>trans('admin.ar'),'en'=>trans('admin.en')],setting()->main_lang,['class'=>'form-control']) !!}
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('status',trans('admin.status')) !!}
        {!! Form::select('status',['open'=>trans('admin.open'),'close'=>trans('admin.close')],setting()->status,['class'=>'form-control']) !!}
    </div>
    <br><br><br>

    <div class="form-group col-md-12">
        {!! Form::label('theme',trans('admin.theme')) !!}
        {!! Form::select('theme',['dark'=>trans('admin.dark'),'light'=>trans('admin.light')],setting()->theme,['class'=>'form-control']) !!}
    </div>

<br><br><br><br>
    <h1 class="title_dash col-md-12   ">{{trans('admin.start_light_dark')}}</h1>

    <div class="form-group col-md-4">
        {!! Form::label('bg_main_dark',trans('admin.bg_main_dark')) !!}
        {!! Form::color('bg_main_dark',setting()->bg_main_dark,['class'=>'form-control input_bg_main_dark']) !!}
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('bg_two_dark',trans('admin.bg_two_dark')) !!}
        {!! Form::color('bg_two_dark',setting()->bg_two_dark,['class'=>'form-control input_bg_two_dark']) !!}
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('color_three_dark',trans('admin.color_three_dark')) !!}
        {!! Form::color('color_three_dark',setting()->color_three_dark,['class'=>'form-control input_color_three_dark']) !!}
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('color_main_dark',trans('admin.color_main_dark')) !!}
        {!! Form::color('color_main_dark',setting()->color_main_dark,['class'=>'form-control input_color_main_dark']) !!}
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('color_two_dark',trans('admin.color_two_dark')) !!}
        {!! Form::color('color_two_dark',setting()->color_two_dark,['class'=>'form-control input_color_two_dark']) !!}
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('color_three_dark',trans('admin.color_three_dark')) !!}
        {!! Form::color('color_three_dark',setting()->color_three_dark,['class'=>'form-control input_color_three_dark']) !!}
    </div>


    <h1 class="col-md-12   ">{{trans('admin.start_light_theme')}}</h1>
    <div class="form-group col-md-4">
        {!! Form::label('bg_main_light',trans('admin.bg_main_light')) !!}
        {!! Form::color('bg_main_light',setting()->bg_main_light,['class'=>'form-control input_bg_main_light']) !!}
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('bg_two_light',trans('admin.bg_two_light')) !!}
        {!! Form::color('bg_two_light',setting()->bg_two_light,['class'=>'form-control input_bg_two_light']) !!}
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('bg_three_light',trans('admin.bg_three_light')) !!}
        {!! Form::color('bg_three_light',setting()->bg_three_light,['class'=>'form-control input_bg_three_light']) !!}
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('color_main_light',trans('admin.color_main_light')) !!}
        {!! Form::color('color_main_light',setting()->color_main_light,['class'=>'form-control input_color_main_light']) !!}
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('color_two_light',trans('admin.color_two_light')) !!}
        {!! Form::color('color_two_light',setting()->color_two_light,['class'=>'form-control input_color_two_light']) !!}
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('color_three_light',trans('admin.color_three_light')) !!}
        {!! Form::color('color_three_light',setting()->color_three_light,['class'=>'form-control input_color_three_light']) !!}
    </div>


    <h1 class="title_dash col-md-12   ">{{trans('admin.start_fonts')}}</h1>

    <div class="form-group col-md-4">
        {!! Form::label('font_main',trans('admin.font_main')) !!}
        {!! Form::number('font_main',setting()->font_main,['class'=>'form-control input_font_main']) !!}
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('font_two',trans('admin.font_two')) !!}
        {!! Form::number('font_two',setting()->font_two,['class'=>'form-control input_font_two']) !!}
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('font_three',trans('admin.font_three')) !!}
        {!! Form::number('font_three',setting()->font_three,['class'=>'form-control input_font_three']) !!}
    </div>

{{--    <div class="form-group col-md-6">--}}
{{--        {!! Form::label('color',trans('admin.color')) !!}--}}
{{--        {!! Form::color('color',setting()->color,['class'=>'form-control input_color']) !!}--}}
{{--    </div>--}}
    <h1 class="col-md-12   ">{{trans('admin.d_show_hidden')}}</h1>

    <div class="form-group col-md-3">
        {!! Form::label('d_none',trans('admin.none')) !!}
        {!! Form::select('d_none',['d-block'=>trans('admin.d_none'),'d-none'=>trans('admin.d_block')],setting()->d_none,['class'=>'form-control']) !!}
    </div>
    <div class="form-group col-md-3">
        {!! Form::label('d_block',trans('admin.d_block')) !!}
        {!! Form::select('d_block',['d-block'=>trans('admin.d_block'),'d-none'=>trans('admin.d_block')],setting()->d_block,['class'=>'form-control']) !!}
    </div>
    <div class="form-group col-md-3">
        {!! Form::label('d_btn_show_modal',trans('admin.d_btn_show_modal')) !!}
        {!! Form::select('d_btn_show_modal',['d-block'=>trans('admin.d_block'),'d-none'=>trans('admin.d_none')],setting()->d_btn_show_modal,['class'=>'form-control']) !!}
    </div>
    <div class="form-group col-md-3">
        {!! Form::label('d_footer',trans('admin.footer')) !!}
        {!! Form::select('d_footer',['d-block'=>trans('admin.d_block'),'d-none'=>trans('admin.d_none')],setting()->d_footer,['class'=>'form-control']) !!}
    </div>
    <div class="form-group col-md-3">
        {!! Form::label('d_sid_prent',trans('admin.d_sid_prent')) !!}
        {!! Form::select('d_sid_prent',['d-block'=>trans('admin.d_block'),'d-none'=>trans('admin.d_none')],setting()->d_sid_prent,['class'=>'form-control']) !!}
    </div>
    <div class="form-group col-md-3">
        {!! Form::label('d_sid_bar',trans('admin.d_sid_bar')) !!}
        {!! Form::select('d_sid_bar',['d-block'=>trans('admin.d_block'),'d-none'=>trans('admin.d_none')],setting()->d_sid_bar,['class'=>'form-control']) !!}
    </div>
    <div class="form-group col-md-3">
        {!! Form::label('d_nav',trans('admin.d_nav')) !!}
        {!! Form::select('d_nav',['d-block'=>trans('admin.d_block'),'d-none'=>trans('admin.d_none')],setting()->d_nav,['class'=>'form-control']) !!}
    </div>

    <div class="form-group col-md-3">
        {!! Form::label('d_small_box',trans('admin.d_small_box')) !!}
        {!! Form::select('d_small_box',['d-block'=>trans('admin.d_block'),'d-none'=>trans('admin.d_none')],setting()->d_small_box,['class'=>'form-control']) !!}
    </div>
    <div class="form-group col-md-3">
        {!! Form::label('d_stat',trans('admin.d_stat')) !!}
        {!! Form::select('d_stat',['d-block'=>trans('admin.d_block'),'d-none'=>trans('admin.d_none')],setting()->d_stat,['class'=>'form-control']) !!}
    </div>
    <div class="form-group col-md-3">
        {!! Form::label('d_title_home',trans('admin.d_title_home')) !!}
        {!! Form::select('d_title_home',['d-block'=>trans('admin.d_block'),'d-none'=>trans('admin.d_none')],setting()->d_title_home,['class'=>'form-control']) !!}
    </div>

    <div class="form-group col-md-3">
        {!! Form::label('d_logo',trans('admin.d_logo')) !!}
        {!! Form::select('d_logo',['display:block!important'=>trans('admin.d_block'),'display:none!important'=>trans('admin.d_none')],setting()->d_logo,['class'=>'form-control']) !!}
    </div>

    <div class="form-group col-md-3">
        {!! Form::label('d_fa_angle',trans('admin.d_fa_angle')) !!}
        {!! Form::select('d_fa_angle',['d-block'=>trans('admin.d_block'),'d-none'=>trans('admin.d_none')],setting()->d_fa_angle,['class'=>'form-control']) !!}
    </div>

    <div class="form-group col-md-3">
        {!! Form::label('d_icon_sid',trans('admin.d_icon_sid')) !!}
        {!! Form::select('d_icon_sid',['   '=>trans('admin.d_block'),'d-none'=>trans('admin.d_none')],setting()->d_icon_sid,['class'=>'form-control']) !!}
    </div>
    <div class="form-group col-md-3">
        {!! Form::label('d_img_maintenance',trans('admin.d_img_maintenance')) !!}
        {!! Form::select('d_img_maintenance',['d-block'=>trans('admin.d_block'),'d-none'=>trans('admin.d_none')],setting()->d_img_maintenance,['class'=>'form-control']) !!}
    </div>
    <div class="form-group col-md-3">
        {!! Form::label('d_bg_maintenance',trans('admin.d_bg_maintenance')) !!}
        {!! Form::select('d_bg_maintenance',['d-block'=>trans('admin.d_block'),'d-none'=>trans('admin.d_none')],setting()->d_bg_maintenance,['class'=>'form-control']) !!}
    </div>
    <div class="form-group col-md-3">
        {!! Form::label('d_message_maintenance',trans('admin.d_message_maintenance')) !!}
        {!! Form::select('d_message_maintenance',['d-block'=>trans('admin.d_block'),'d-none'=>trans('admin.d_none')],setting()->d_message_maintenance,['class'=>'form-control']) !!}
    </div>
    <div class="form-group col-md-3">
        {!! Form::label('d_type_user_sid',trans('admin.d_type_user_sid')) !!}
        {!! Form::select('d_type_user_sid',['d-block'=>trans('admin.d_block'),'d-none'=>trans('admin.d_none')],setting()->d_type_user_sid,['class'=>'form-control']) !!}
    </div>

    {{-- {{ setting()->d_type_d_pep}}  --}}
    <div class="form-group col-md-3">
        {!! Form::label('d_type_user',trans('admin.d_type_user')) !!}
        {!! Form::select('d_type_user',['d-block'=>trans('admin.d_block'),'d-none'=>trans('admin.d_none')],setting()->d_type_user,['class'=>'form-control']) !!}
    </div>

    <div class="form-group col-md-3">
        {!! Form::label('d_type_d_pep',trans('admin.d_type_d_pep')) !!}
        {!! Form::select('d_type_d_pep',['d-block'=>trans('admin.d_block'),'d-none'=>trans('admin.d_none'),'d-none'=>trans('admin.d_none'),'show_tow'=>trans('admin.show_all')],setting()->d_type_d_pep,['class'=>'form-control']) !!}
    </div>

    <div class="form-group col-md-3">
        {!! Form::label('d_img_icon_top_sidbar',trans('admin.d_img_icon_top_sidbar')) !!}
        {!! Form::select('d_img_icon_top_sidbar',['d-block'=>trans('admin.d_block'),'d-none'=>trans('admin.d_none')],setting()->d_img_icon_top_sidbar,['class'=>'form-control']) !!}
    </div>
    <div class="form-group col-md-3">
        {!! Form::label('d_type_product_sid',trans('admin.d_type_product_sid')) !!}
        {!! Form::select('d_type_product_sid',['d-block'=>trans('admin.d_block'),'d-none'=>trans('admin.d_none')],setting()->d_type_product_sid,['class'=>'form-control']) !!}
    </div>

    {{-- {{ setting()->d_my_tools}}  --}}
    <div class="form-group col-md-3">
        {!! Form::label('d_type_product',trans('admin.d_type_product')) !!}
        {!! Form::select('d_type_product',['d-block'=>trans('admin.d_block'),'d-none'=>trans('admin.d_none')],setting()->d_type_product,['class'=>'form-control']) !!}
    </div>

    <div class="form-group col-md-3">
        {!! Form::label('d_btn_refresh_sid',trans('admin.d_btn_refresh_sid')) !!}
        {!! Form::select('d_btn_refresh_sid',['d-block'=>trans('admin.d_block'),'d-none'=>trans('admin.d_none'),'d-none'=>trans('admin.d_none')],setting()->d_btn_refresh_sid,['class'=>'form-control']) !!}
    </div>
    <div class="form-group col-md-3">
        {!! Form::label('d_btn_home_sid',trans('admin.d_btn_home_sid')) !!}
        {!! Form::select('d_btn_home_sid',['d-block'=>trans('admin.d_block'),'d-none'=>trans('admin.d_none'),'d-none'=>trans('admin.d_none')],setting()->d_btn_home_sid,['class'=>'form-control']) !!}
    </div>

    <div class="form-group col-md-4">
        {!! Form::label('d_my_tools',trans('admin.d_my_tools')) !!}
        {!! Form::select('d_my_tools',['d-block'=>trans('admin.d_block'),'d-none'=>trans('admin.d_none')],setting()->d_my_tools,['class'=>'form-control']) !!}
    </div>

    <div class="form-group col-md-4">
        {!! Form::label('alert_success',trans('admin.alert_success')) !!}
        {!! Form::select('alert_success',['modal'=>trans('admin.modal'),'alert'=>trans('admin.alert')],setting()->alert_success,['class'=>'form-control']) !!}
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('alert_error',trans('admin.alert_error')) !!}
        {!! Form::select('alert_error',['alert'=>trans('admin.alert'),'modal'=>trans('admin.modal')],setting()->alert_error,['class'=>'form-control']) !!}
    </div>

    <div class="form-group col-md-4">
        {!! Form::label('color_icon_dark',trans('admin.color_icon_dark')) !!}
        {!! Form::color('color_icon_dark',setting()->color_icon_dark,['class'=>'form-control input_color_icon_dark']) !!}
    </div>

    <div class="form-group col-md-4">
        {!! Form::label('color_icon_light',trans('admin.color_icon_light')) !!}
        {!! Form::color('color_icon_light',setting()->color_icon_light,['class'=>'form-control input_color_icon_light']) !!}
    </div>

    <br><br><br>
</section> {{-- /. row--}}
<div class="form-group">
    {!! Form::label('message_maintenance',trans('admin.d_message maintenance')) !!}
    {!! Form::textarea('message_maintenance',setting()->message_maintenance,['class'=>'form-control']) !!}
</div>
