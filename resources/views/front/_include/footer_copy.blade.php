@php
    if (empty (session('lingfront')))
    {
    $lang ='ar';
    }else{
    $lang = session('lingfront');
    }
@endphp
<aside class="copyright_new  ">
    <div class="container container_footer_page">
        <div class="row">
            <div class="col-md-12">
 <center>
 <p class="info_footer "  style="font-size:25px">
<span>
{{frontend()['section_footer_contact_us_title_'.$lang]}}
</span>

  <span>
 
<span style="font-size:25px">
    
</span  class=" ">

                       {{frontend()->section_footer_contact_us_content_en}}
  <span>
      <i class="fa fa-phone icon_phone" ></i>

</span class=" ">

                       {{frontend()->section_footer_contact_us_content_ar}}

  <span>



</span>
</span>
 </p>
 </center>
            </div>

        </div>
    </div>
</aside>
 