@php
    if (empty (session('lingfront')))
    {
    $lang ='ar';
    }else{
    $lang = session('lingfront');
    }
@endphp
@include('front._include.header')

<section class="page_all_product">
    <div class="jquery-script-center"> </div>










    <!-- ----------------------------------------- -->


    <section class="d_none sm_none">
        @include('front._include.section_search_top')</section>
    <br>
@include('front._include.ads')

    <section class="content_form_login_user"  > @include('auth.user_page.login_form')</section><!--content_form_login_user-->


    @include('front._include.footer')
    @include('front._include.sidbar')



</section><!---.page_all_product-->



@include('front._include.footer_links')











