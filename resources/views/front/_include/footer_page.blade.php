
@php
    if (empty (session('lingfront')))
    {
    $lang ='ar';
    }else{
    $lang = session('lingfront');
    }
@endphp
<aside class="footer_page font_f_b">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                                <a   href ="https://wa.me/+01147201321">

                <a class="btn btn-block btn-inText text-white btn-outline-danger-- fs-24 zahra" href="https://wa.me/{{frontend()->section_footer_phone}}"><span class="whatsapp_bar"> {{trans('admin.whatsapp')}} </span>


<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/WhatsApp_logo-color-vertical.svg/1200px-WhatsApp_logo-color-vertical.svg.png" class="img_icon_wahtsapp" >
                 </a>
</a>
            </div>
            <div class="col-md-9">
                <h1 class="str_p">

                      {{frontend()['section_footer_about_'.$lang]}}
                </h1>

            </div>

        </div>
    </div>
</aside>