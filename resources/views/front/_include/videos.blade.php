@php
    if (empty (session('lingfront')))
    {
    $lang ='ar';
    }else{
    $lang = session('lingfront');
    }
@endphp
<aside class="activities ">
    <div class="container conta_activities">
        <div class="row">
              <div class="col-md-12 d-none- title_activities"><center><h1 class=" "> {{trans('admin.title_section_videos')}}
  </h1></center> </div><!--col-md-12-->
            <div class="col-md-12 content_larg ">
                                                        <p class=" d-none">
                                                        من هذا المنطلق يمكن اعتبار الشركة  دانامن الشركات التي تمتاز بمستوى مهني عالي في مجال توفير عمالة مؤهلة تأهيلا مناسبا ومدربة بشكل جيد. وتقوم الشركة بتوفير العمالة من خلال "التوسط" أي استقدام العمالة يمكن اعتبار الشركة  دانامن الشركات التي تمتاز بمستوى مهني عالي في مجال توفير عمالة مؤهلة تأهيلا مناسبا ومدربة بشكل جيد. وتقوم الشركة بتوفير العمالة من خلال "التوسط" أي استقدام العمالة
                                                        </p>
                                                        <div class="row">
                                                        @foreach($departments_paginate as $department)
                                                            <!---------- start  div ----------- -->
                                                                  <div class="col-md-4 content_all_info"  >
                                                                      <a  class="video-icon" href=
                                                                      "{{$department->link}}"
                                                                         data-lity="">
                                                                          <div class="content_img_activ">
{{--                                                                              <div class="overlay"><i class="fa fa-hand-o-right"></i> </div>--}}
                                                                              <span class="words">
{{--                                                                                  <i class="fa fa-edit"></i>--}}
{{--                                                                              <i class="fa fa-play-circle-o" aria-hidden="true"></i>--}}
                                                                                  <img src="{{url('front')}}/imges/youtube.gif" class="icon_youtube">
                                                                              </span>
                                                                              <div class="content_img_activ">
                                                                                  <img class="img_active img_larg" src="public/storage/{{$department->icon}}">
                                                                              </div><!--content_img_activ-->
                                                                          </div><!--content_larg-->
                                                                      </a>
                                                          </div><!--col-md-4 content_all_info-->
                                                         <!---------- End    div ----------- -->
                                                            @endforeach
                                                        </div><!--row-->
                                                <div class="row">
                                                         <!---------- start  div ----------- -->
                                          <div class="col-md-4 content_all_info  d-none"></div>
                                                                  <div class="col-md-4  d-none content_all_info one_active" data-toggle="modal" data-target=".model_show_serves_2 ">
                                                                <div class="content_img_activ">
                                                                    <div class="overlay"><i class="fa fa-hand-o-right"></i> </div>
                                                                     <span class="words"> نشاط مميز واحد </span>
                                                                     <div class="content_img_activ">
                                                                     <img class="img_active" src="{{url('front')}}/images/activ/7.jpg">
                                                               </div><!--content_img_activ-->
                                                            </div><!--content_larg-->
                                                          </div><!--col-md-4 content_all_info-->
                                                         <!---------- End    div ----------- -->
                                                    <div class="col-md-4 content_all_info  d-none "></div>
                                                       </div>
                                             </div><!--content_larg-->
                                      </div><!--row-->
                              </div><!--container-->
                          </aside>
<!-- ------------End   gallery ------------- -->