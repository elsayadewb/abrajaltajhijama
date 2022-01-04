@php
    if (empty (session('lingfront')))
    {
    $lang ='ar';
    }else{
    $lang = session('lingfront');
    }
@endphp
<!-- start  model_accordion--------------- -->
<div class="modal fade   question_repeat " tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- start model content -->
            <div class="container">
              <div class="modal-header content_header_modal">
                     <div class="content_modal_title">
                     <h5 class="modal-title">

                         <h3 class="heading-primary"> <i class="fa fa-question-circle fa-lg icon_model_title       ">   </i> <span class="title_heade_word">  
                         {{trans('admin.fAQs')}}
 </span> </h3>
                    </h5>
                    </div> <!--./content_modal-->
                    <button type="button" class="close  " data-dismiss="modal" aria-label="Close">
                        <span class="og-close"></span>
                    </button>
                </div>

 
                 
                 <!-------------------------------------------------------->
                 <!-------------------------------------------------------->
                 <!-------------------------------------------------------->
                 
                 
           <div class="container">
  <div class="accordion-option">
     
  </div>
  <div class="clearfix"></div>
  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
   
    
     
    
    <!------------------------------------------->
    <!------------------------------------------->
    
            @foreach($questions as $question)

                        <dt>
                            <a href="#accordion1" aria-expanded="false" aria-controls="accordion1" class="accordion-title accordionTitle js-accordionTrigger">  {{$question['title_'.$lang]}} ؟</a>
                        </dt>
                      
                        
                         <p class="p_questions_content">
                                {{$question['content_'.$lang]}}

                            </p>
                        <img src="public/storage/{{$question->photo}}" class="img_questions">
                        
                         
                            @endforeach
    <!------------------------------------------->
    <!------------------------------------------->
    
    
  </div>
</div>

 

 
               
                 <!-------------------------------------------------------->
                 <!-------------------------------------------------------->
                 
            </div>
            <!-- partial -->
            <!-- End   model content -->
                        @include('front._include.footer_mod')

        </div>
    </div>

</div>
<!-- End    model_accordion--------------- -->
<!-- start  model_location--------------- -->
<div class="modal fade   model_location " tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- start model content -->
            <div class="container">
            <div class="content_header_modal"   >
                <div class="modal-header content_header_modal">
                     <div class="content_modal_title">
                     <h5 class="modal-title">

                         <h3 class="heading-primary"> <i class="fa fa-map-marker fa-lg icon_model_title    ">   </i> <span class="title_heade_word">فروعنا </span> </h3>
                    </h5>
                    </div> <!--./content_modal-->
                    <button type="button" class="close  " data-dismiss="modal" aria-label="Close">
                        <span class="og-close"></span>
                    </button>
                </div>
            </div><!--./content_header_modal-->
                <div class="location" >
                    <section class="branches">
                        <div class="container">
                            <div class="row content_row_location firest_row">
                                <div class="right col-sm-6 content_wordes_col">
                                    <h3>فرع  الاحساء </h3>

<p><i class="fa fa-map-marker"></i>

مركز  ابراج التاج  للحجامه 

</p> الظهران - بجوار مكتبة جرير - برج  <p>
</p>   -شارع العليو -الدور الرابع  <p>
{{frontend()->section_footer_phone}}   
 
 
 
  
 

                                </div>
                                <div class="left col-sm-6">
                               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3602.714940779575!2d49.56615161501461!3d25.447792083780218!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjXCsDI2JzUyLjEiTiA0OcKwMzQnMDYuMCJF!5e0!3m2!1sen!2seg!4v1607361575449!5m2!1sen!2seg" width="100%" height="220" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

                                </div>
                        </div> <!-- ./  row content_row_location-->
                        
                                <div class="d-none  row content_row_location">
                                <div class="right col-sm-6 content_wordes_col">
                                    <h3>فرع تبوك  </h3>
                                    <p><i class="fa fa-map-marker"></i> الشركة المتحدة للإستقدام </p>
                                    <p> طريق الملك عبدالله بن عبدالعزيز،، المروج، تبوك 47312 </p>
                                    <p> &rlm;&#8234;9200 08818&rlm; </p>

                                </div>
                                <div class="left col-sm-6">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3508.8632276371613!2d36.574821384922124!3d28.42338358250077!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15a9b2823c9e9bdb%3A0x2259e4b129c65365!2z2KfZhNmF2KrYrdiv2Kkg2YTZhNil2LPYqtmC2K_Yp9mF!5e0!3m2!1sar!2ssa!4v1595406110184!5m2!1sar!2ssa" height="220" style="border:0;width:100%" allowfullscreen=""></iframe>

                                </div>
                                </div> <!-- ./  row content_row_location-->
                                    <div class="d-none row content_row_location  last_row">
                                <div class="right col-sm-6 content_wordes_col ">
                                    <h3>فرع الخبر  </h3>
                                    <p><i class="fa fa-map-marker"></i> الشركة المتحدة للإستقدام فرع الدمام </p>
                                    <p> طريق الملك عبدالعزيز،، مدينة العمال، الدمام 32253 </p>
                                    <p> &rlm;&#8234;9200 08818&rlm;</p>

                                </div>
                                <div class="left col-sm-6">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3576.76267471621!2d50.21128908496789!3d26.301792583394537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e49fb7b0ea7b86b%3A0x5c4a38e6bce5c962!2z2KfZhNi02LHZg9ipINin2YTZhdiq2K3Yr9ipINmE2YTYpdiz2KrZgtiv2KfZhSAtINmB2LHYuSDYp9mE2K_Zhdin2YUgQWxNdXRhaGlkYWggUmVjdXJpdG1lbnQ!5e0!3m2!1sar!2ssa!4v1595405821476!5m2!1sar!2ssa" height="220" style="border:0;width:100%" allowfullscreen=""></iframe>

                                </div>
                                    </div> <!-- ./  row content_row_location-->


                        </div>
                    </section>
               </div><!-- location -->
            @include('front._include.footer_mod')

            <!-- End   model content -->
        </div>
    </div>
</div>
</div>
<!-- End    model_location--------------- -->
 <!-- End    model_our_offers--------------- -->
<div class="modal fade   bg_fff model_our_offers" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header content_header_modal">
                <h5 class="modal-title">
                    <h3 class="heading-primary"> <i class="fa fa-handshake-o fa-lg icon_model_title    ">   </i>  عروضنا   </h3>
                </h5>
                <button type="button" class="close  " data-dismiss="modal" aria-label="Close">
                    <span class="og-close"></span>
                </button>
            </div>
            <!-- start model content -->

             @include('front._include.activities_offers')

            @include('front._include.footer_mod')
           

              <section>
                
   
    
            </section> <!-- timeline--->
            <!-- ---------------------------------------- -->
            <!-- ---------------------------------------- -->
            <!-- ---------------------------------------- -->
        </div>
    </div>
</div>
<!-- End    model_our_offers--------------- -->
<!-- start  model_location--------------- -->
<div class="modal fade   model_about " tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- start model content -->
            <div class="container">
            <div class="content_header_modal"   >
                <div class="modal-header content_header_modal">
                     <div class="content_modal_title">
                     <h5 class="modal-title">

                         <h3 class="heading-primary"> <i class="fa fa-users fa-lg icon_model_title    ">   </i> <span class="title_heade_word"> {{trans('admin.about')}} </span> </h3>
                    </h5>
                    </div> <!--./content_modal-->
                    <button type="button" class="close  " data-dismiss="modal" aria-label="Close">
                        <span class="og-close"></span>
                    </button>
                </div>
            </div><!--./content_header_modal-->
                <div class="content_about_model" >
                   @include('front._include.about')

               </div><!-- content_about_model -->

            <!-- End   model content -->
                        @include('front._include.footer_mod')

        </div>
    </div>
</div>
</div>
<!-- End    model_about--------------- -->