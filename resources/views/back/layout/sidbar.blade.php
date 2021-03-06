@php
   if (empty (session('lingfront')))
   {
   $lang ='ar';
   }else{
   $lang = session('lingfront');
   }
@endphp
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4 {{ setting()->d_sid_bar}}">
   <!-- Brand Logo -->
   <a href="{{aurl('')}}" class="brand-link  {{ setting()->d_img_icon_top_sidbar}}" >
{{--      <img src="{{url('public/storage').Storage::url(setting()->icon)}}"style="width: 150px;height: 150px"  alt="AdminLTE Logo" class="brand-image img-circle elevation-3"--}}
{{--           style="opacity: .8">--}}
      <span class="brand-text font-weight-light"> {{setting()->sitename_ar}}</span>
   </a>

   <!-- Sidebar -->
   <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel content_preview_img_logo mt-3 pb-3 mb-3 d-flex" style=" {{ setting()->d_logo}}"  >
         <div class="image">
            <img src="{{url('public/storage').Storage::url(setting()->logo)}}" class="img_preview_img_logo" alt="User Image" >
         </div>
         <div class="info">
            {{--            <a href="#" class="d-block">{{admin()->user()->name}}</a>--}}
         </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
         <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item {{setting()->d_btn_home_sid }}">
               <a href="{{aurl('')}}" class="nav-link active btn-default" style="">

                  <p>
                     {{trans('admin.dashboard')}}
                     <i class="right fa  fa-external-link "></i>
                  </p>
               </a>
            </li>
             <li class="nav-item    btn-danger {{setting()->d_btn_refresh_sid }} ">
               <a href="{{url('relodpage')}}" class="nav-link  active   bg-danger " >
                  <p>{{trans('admin.refresh')}} <i class="  fas fa-sync"></i>
                  </p>
               </a>
            </li>
            {{-------------------------------------------------------------------------------------------}}
            <li class="d-none--- nav-item admin has-treeview {{active_menu('frontends')[0]}}">
               <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-images"></i><p>{{trans('admin.frontends')}}<i class="fas fa-angle-left {{ setting()->d_fa_angle}} right"></i></p>
               </a>
               <ul class="nav nav-treeview" style="{{active_menu('admin')[1]}}">
                  <li class="nav-item">

                     <button   class="nav-link btn btn-info      {{ setting()->d_btn_show_modal}} btn_crete_new_row_frontends">
                        <i class="fa fa-images    nav-icon icon-btn-create-new-row"></i><p class="">{{trans('admin.frontends')}}</p>
                     </button>
                     <a href="{{aurl('frontends')}}"  class="nav-link btn btn-success btn-create-new-row  ">
                        <i class="fa fa-cogs nav-icon icon-btn-create-new-row"></i><p class="">  <i class="fa fa-scroll"></i>  {{trans('admin.page_frontends')}}</p>
                     </a>
                  </li>
               </ul>
            </li><!--nav-item frontends---------->
            <li class="nav-item admin has-treeview {{active_menu('settings')[0]}}">
               <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-cogs"></i><p>{{trans('admin.settings')}}<i class="fas fa-angle-left {{ setting()->d_fa_angle}} right"></i></p>
               </a>
               <ul class="nav nav-treeview" style="{{active_menu('admin')[1]}}">
                  <li class="nav-item">

                     <button   class="nav-link btn btn-info   {{ setting()->d_btn_show_modal}} btn_crete_new_row_settings">
                        <i class="fa fa-cog fa-spin  nav-icon icon-btn-create-new-row"></i><p class="">{{trans('admin.settings')}}</p>
                     </button>
                     <a href="{{aurl('settings')}}"  class="nav-link btn btn-success btn-create-new-row  ">
                        <i class="fa fa-cogs nav-icon icon-btn-create-new-row"></i><p class="">  <i class="fa fa-scroll"></i>  {{trans('admin.page_settings')}}</p>
                     </a>
                  </li>
               </ul>
            </li><!--nav-item settings---------->
            <li class="nav-item admin has-treeview {{active_menu('admin')[0]}}">
               <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-users-cog"></i><p>{{trans('admin.adminacount')}}<i class="fas fa-angle-left {{ setting()->d_fa_angle}} right"></i></p>
               </a>
               <ul class="nav nav-treeview" style="{{active_menu('admin')[1]}}">
                  <li class="nav-item">
                     <a href="{{aurl('admin')}}" class="nav-link">
                        <i class="fa fa-users-cog nav-icon {{ setting()->d_icon_sid}} "></i><p> <i class="fa fa-file-signature"></i> {{trans('admin.admin')}}</p>
                     </a>
                     <button   class="nav-link btn btn-info btn-create-new-row {{ setting()->d_btn_show_modal}} btn_crete_new_row_admin">
                        <i class="fa fa-user-cog nav-icon icon-btn-create-new-row"></i><p class="">{{trans('admin.create-admin')}}</p>
                     </button>
                     <a href="{{aurl('admin/create')}}"  class="nav-link btn btn-success btn-create-new-row  ">
                        <i class="fa fa-user-cog nav-icon icon-btn-create-new-row"></i><i class="fa fa-scroll"></i> <p class="">{{trans('admin.page-create-admin')}}</p>
                     </a>
                  </li>
               </ul>
            </li><!--nav-item admin---------->

            <!--start   products---------->
            <li class="nav-item admin has-treeview {{active_menu('products')[0]}}">
               <a href="#" class="nav-link">
                  <i class="fas fa-shipping-fast  nav-icon {{ setting()->d_icon_sid}} "></i><p>{{trans('admin.products')}}<i class="fas fa-angle-left {{ setting()->d_fa_angle}} right"></i></p>
               </a>
               <ul class="nav nav-treeview content_W_20px_h_20px" style="{{active_menu('products')[1]}}">

                  <li class="nav-item"> <a href="{{aurl('products')}}" class="nav-link">
                        <i class="fas fa-shipping-fast  nav-icon {{ setting()->d_icon_sid}} "></i><p> <i class="fa fa-file-signature"></i> {{trans('admin.products')}}</p>
                     </a></li>
                  <li class="nav-item">
{{--                     <button   class="nav-link btn btn-info btn-create-new-row {{ setting()->d_btn_show_modal}} btn_crete_new_row_product">--}}
{{--                        <i class="fas fa-truck-moving nav-icon icon-btn-create-new-row"></i><p class="">{{trans('admin.create_new_product')}}</p>--}}
{{--                     </button>--}}
                  </li>
                  <li class="nav-item">
                     <button   class="nav-link btn btn-success btn-create-new-row     ">
                        <a href="{{aurl('products/create')}}"  class="">
                           <i class="fas fa-shipping-fast  nav-icon  "></i><i class="fa fa-scroll"></i> <p class="">{{trans('admin.create_new_product')}}</p>
                        </a>
                     </button>
                  </li>
               </ul>
            </li>
            <!--End  products---------->

             {{-------------------------------------------------------------------------------------------}}
            <li class="nav-item admin has-treeview {{active_menu('departments')[0]}}">
               <a href="#" class="nav-link">
                  <i class="fas fa-sitemap nav-icon {{ setting()->d_icon_sid}} "></i><p>{{trans('admin.departments')}}<i class="fas fa-angle-left {{ setting()->d_fa_angle}} right"></i></p>
               </a>
               <ul class="nav nav-treeview content_W_20px_h_20px" style="{{active_menu('departments')[1]}}">

                  <li class="nav-item"> <a href="{{aurl('departments')}}" class="nav-link">
                        <i class="fas fa-sitemap nav-icon {{ setting()->d_icon_sid}} "></i><p> <i class="fa fa-file-signature"></i> {{trans('admin.departments')}}</p>
                     </a></li>
                  <li class="nav-item">
                     <button   class="nav-link btn btn-info btn-create-new-row {{ setting()->d_btn_show_modal}} btn_crete_new_row_departments">
                        <i class="fas fa-sitemap nav-icon icon-btn-create-new-row"></i><p class="">{{trans('admin.create_new_departments')}}</p>
                     </button>
                  </li>
                  <li class="nav-item">
                     <button   class="nav-link btn btn-success btn-create-new-row     ">
                        <a href="{{aurl('departments/create')}}"  class="">
                           <i class="fas fa-sitemap  nav-icon  "></i><i class="fa fa-scroll"></i> <p class="">{{trans('admin.page_create_departments')}}</p>
                        </a>
                     </button>
                  </li>
               </ul>
            </li>
            <!--End  ads---------->
                        <li class="d-none nav-item admin has-treeview {{active_menu('ads')[0]}}">
               <a href="#" class="nav-link">
                  <i class="fa fa-flag-checkered nav-icon {{ setting()->d_icon_sid}} "></i><p>{{trans('admin.ads')}}<i class="fas fa-angle-left {{ setting()->d_fa_angle}} right"></i></p>
               </a>
               <ul class="nav nav-treeview content_W_20px_h_20px" style="{{active_menu('ads')[1]}}">

                  <li class="nav-item"> <a href="{{aurl('ads')}}" class="nav-link">
                        <i class="fa fa-flag-checkered nav-icon {{ setting()->d_icon_sid}} "></i><p> <i class="fa fa-file-signature"></i> {{trans('admin.ads')}}</p>
                     </a></li>
                  <li class="nav-item">
                     <button   class="nav-link btn btn-info btn-create-new-row {{ setting()->d_btn_show_modal}} btn_crete_new_row_ads">
                        <i class="fa fa-flag-usa nav-icon icon-btn-create-new-row"></i><p class="">{{trans('admin.create_new_ads')}}</p>
                     </button>
                  </li>
                  <li class="nav-item">
                     <button   class="nav-link btn btn-success btn-create-new-row     ">
                        <a href="{{aurl('ads/create')}}"  class="">
                           <i class="fa fa-flag-usa nav-icon  "></i><i class="fa fa-scroll"></i> <p class="">{{trans('admin.page_create_ads')}}</p>
                        </a>
                     </button>
                  </li>
               </ul>
            </li>
            <!--End  ads---------->

            <!-- start news ---------->

            <li class="d-none nav-item admin has-treeview {{active_menu('news')[0]}}">
               <a href="#" class="nav-link">
                  <i class="fa fa-flag-checkered nav-icon {{ setting()->d_icon_sid}} "></i><p>{{trans('admin.news')}}<i class="fas fa-angle-left {{ setting()->d_fa_angle}} right"></i></p>
               </a>
               <ul class="nav nav-treeview content_W_20px_h_20px" style="{{active_menu('news')[1]}}">

                  <li class="nav-item"> <a href="{{aurl('news')}}" class="nav-link">
                        <i class="fa fa-flag-checkered nav-icon {{ setting()->d_icon_sid}} "></i><p> <i class="fa fa-file-signature"></i> {{trans('admin.news')}}</p>
                     </a></li>
                  <li class="nav-item">
                     <button   class="nav-link btn btn-info btn-create-new-row {{ setting()->d_btn_show_modal}} btn_crete_new_row_news">
                        <i class="fa fa-flag-usa nav-icon icon-btn-create-new-row"></i><p class="">{{trans('admin.create_new_news')}}</p>
                     </button>
                  </li>
                  <li class="nav-item">
                     <button   class="nav-link btn btn-success btn-create-new-row     ">
                        <a href="{{aurl('news/create')}}"  class="">
                           <i class="fa fa-flag-usa nav-icon  "></i><i class="fa fa-scroll"></i> <p class="">{{trans('admin.page_create_news')}}</p>
                        </a>
                     </button>
                  </li>
               </ul>
            </li>
            <!--End  news---------->
            <!-- start about ---------->

            <li class=" nav-item admin has-treeview {{active_menu('about')[0]}}">
               <a href="#" class="nav-link">
                  <i class="fa fa-users nav-icon {{ setting()->d_icon_sid}} "></i><p>{{trans('admin.about')}}<i class="fas fa-angle-left {{ setting()->d_fa_angle}} right"></i></p>
               </a>
               <ul class="nav nav-treeview content_W_20px_h_20px" style="{{active_menu('about')[1]}}">

                  <li class="nav-item"> <a href="{{aurl('about')}}" class="nav-link">
                        <i class="fa fa-users-cog nav-icon {{ setting()->d_icon_sid}} "></i><p> <i class="fa fa-file-signature"></i> {{trans('admin.about')}}</p>
                     </a></li>
                  <li class="nav-item">
                     <button   class="nav-link btn btn-info btn-create-new-row {{ setting()->d_btn_show_modal}} btn_crete_new_row_about">
                        <i class="fa fa-flag-usa nav-icon icon-btn-create-new-row"></i><p class="">{{trans('admin.create_new_about')}}</p>
                     </button>
                  </li>
                  <li class="nav-item">
                     <button   class="nav-link btn btn-success btn-create-new-row     ">
                        <a href="{{aurl('about/create')}}"  class="">
                           <i class="fa fa-flag-usa nav-icon  "></i><i class="fa fa-scroll"></i> <p class="">{{trans('admin.page_create_about')}}</p>
                        </a>
                     </button>
                  </li>
               </ul>
            </li>
            <!--End  about---------->



            <!-- start offers ---------->

            <li class=" nav-item admin has-treeview {{active_menu('offers')[0]}}">
               <a href="#" class="nav-link">
                  <i class="fa fa-business-time nav-icon {{ setting()->d_icon_sid}} "></i><p>{{trans('admin.offers')}}<i class="fas fa-angle-left {{ setting()->d_fa_angle}} right"></i></p>
               </a>
               <ul class="nav nav-treeview content_W_20px_h_20px" style="{{active_menu('offers')[1]}}">

                  <li class="nav-item"> <a href="{{aurl('offers')}}" class="nav-link">
                        <i class="fas fa-bahai nav-icon {{ setting()->d_icon_sid}} "></i><p> <i class="fa fa-file-signature"></i> {{trans('admin.offers')}}</p>
                     </a></li>
                  <li class="nav-item">
                     <button   class="nav-link btn btn-info btn-create-new-row {{ setting()->d_btn_show_modal}} btn_crete_new_row_offers">
                        <i class="fas fa-bahai nav-icon icon-btn-create-new-row"></i><p class="">{{trans('admin.create_new_offers')}}</p>
                     </button>
                  </li>
                  <li class="nav-item">
                     <button   class="nav-link btn btn-success btn-create-new-row     ">
                        <a href="{{aurl('offers/create')}}"  class="">
                           <i class="fas fa-bahai nav-icon  "></i><i class="fa fa-scroll"></i> <p class="">{{trans('admin.page_create_offers')}}</p>
                        </a>
                     </button>
                  </li>
               </ul>
            </li>
            <!--End  offers---------->
            <!-- start  ---------->

            <li class=" nav-item admin has-treeview {{active_menu('questions')[0]}}">
               <a href="#" class="nav-link">
                  <i class="fas fa-question-circle nav-icon {{ setting()->d_icon_sid}} "></i><p>{{trans('admin.questions')}}<i class="fas fa-angle-left {{ setting()->d_fa_angle}} right"></i></p>
               </a>
               <ul class="nav nav-treeview content_W_20px_h_20px" style="{{active_menu('questions')[1]}}">

                  <li class="nav-item"> <a href="{{aurl('questions')}}" class="nav-link">
                        <i class="fa fa-question nav-icon {{ setting()->d_icon_sid}} "></i><p> <i class="fa fa-file-signature"></i> {{trans('admin.questions')}}</p>
                     </a></li>
                  <li class="nav-item">
                     <button   class="nav-link btn btn-info btn-create-new-row {{ setting()->d_btn_show_modal}} btn_crete_new_row_questions">
                        <i class="fa fa-question nav-icon icon-btn-create-new-row"></i><p class="">{{trans('admin.create_new_questions')}}</p>
                     </button>
                  </li>
                  <li class="nav-item">
                     <button   class="nav-link btn btn-success btn-create-new-row     ">
                        <a href="{{aurl('questions/create')}}"  class="">
                           <i class="fa fa-question nav-icon  "></i><i class="fa fa-scroll"></i> <p class="">{{trans('admin.page_create_questions')}}</p>
                        </a>
                     </button>
                  </li>
               </ul>
            </li>
            <!--End  questions---------->
             <!-- start testimonial ---------->

            <li class="d-none nav-item admin has-treeview {{active_menu('testimonial')[0]}}">
               <a href="#" class="nav-link">
                  <i class="fa fa-flag-checkered nav-icon {{ setting()->d_icon_sid}} "></i><p>{{trans('admin.testimonial')}}<i class="fas fa-angle-left {{ setting()->d_fa_angle}} right"></i></p>
               </a>
               <ul class="nav nav-treeview content_W_20px_h_20px" style="{{active_menu('testimonial')[1]}}">

                  <li class="nav-item"> <a href="{{aurl('testimonial')}}" class="nav-link">
                        <i class="fa fa-flag-checkered nav-icon {{ setting()->d_icon_sid}} "></i><p> <i class="fa fa-file-signature"></i> {{trans('admin.testimonial')}}</p>
                     </a></li>
                  <li class="nav-item">
                     <button   class="nav-link btn btn-info btn-create-new-row {{ setting()->d_btn_show_modal}} btn_crete_new_row_testimonial">
                        <i class="fa fa-flag-usa nav-icon icon-btn-create-new-row"></i><p class="">{{trans('admin.create_new_testimonial')}}</p>
                     </button>
                  </li>
                  <li class="nav-item">
                     <button   class="nav-link btn btn-success btn-create-new-row     ">
                        <a href="{{aurl('testimonial/create')}}"  class="">
                           <i class="fa fa-flag-usa nav-icon  "></i><i class="fa fa-scroll"></i> <p class="">{{trans('admin.page_create_testimonial')}}</p>
                        </a>
                     </button>
                  </li>
               </ul>
            </li>
            <!--End  testimonial---------->
            <!-- start newsletter ---------->

            <li class="d-none nav-item admin has-treeview {{active_menu('newsletter')[0]}}">
               <a href="#" class="nav-link">
                  <i class="fa fa-flag-checkered nav-icon {{ setting()->d_icon_sid}} "></i><p>{{trans('admin.newsletter')}}<i class="fas fa-angle-left {{ setting()->d_fa_angle}} right"></i></p>
               </a>
               <ul class="nav nav-treeview content_W_20px_h_20px" style="{{active_menu('newsletter')[1]}}">

                  <li class="nav-item"> <a href="{{aurl('newsletter')}}" class="nav-link">
                        <i class="fa fa-flag-checkered nav-icon {{ setting()->d_icon_sid}} "></i><p> <i class="fa fa-file-signature"></i> {{trans('admin.newsletter')}}</p>
                     </a></li>
                  <li class="nav-item">
                     <button   class="nav-link btn btn-info btn-create-new-row {{ setting()->d_btn_show_modal}} btn_crete_new_row_newsletter">
                        <i class="fa fa-flag-usa nav-icon icon-btn-create-new-row"></i><p class="">{{trans('admin.create_new_newsletter')}}</p>
                     </button>
                  </li>
                  <li class="nav-item">
                     <button   class="nav-link btn btn-success btn-create-new-row     ">
                        <a href="{{aurl('newsletter/create')}}"  class="">
                           <i class="fa fa-flag-usa nav-icon  "></i><i class="fa fa-scroll"></i> <p class="">{{trans('admin.page_create_newsletter')}}</p>
                        </a>
                     </button>
                  </li>
               </ul>
            </li>
            <!--End  newsletter---------->
            <!-- start sliders ---------->
            <li class=" nav-item admin has-treeview {{active_menu('sliders')[0]}}">
               <a href="#" class="nav-link">
                  <i class="fas fa-photo-video nav-icon {{ setting()->d_icon_sid}} "></i><p>{{trans('admin.sliders')}}<i class="fas fa-angle-left {{ setting()->d_fa_angle}} right"></i></p>
               </a>
               <ul class="nav nav-treeview content_W_20px_h_20px" style="{{active_menu('sliders')[1]}}">

                  <li class="nav-item"> <a href="{{aurl('sliders')}}" class="nav-link">
                        <i class="fas fa-photo-video nav-icon {{ setting()->d_icon_sid}} "></i><p> <i class="fa fa-file-signature"></i> {{trans('admin.sliders')}}</p>
                     </a></li>
                  <li class="nav-item">
                     <button   class="nav-link btn btn-info btn-create-new-row {{ setting()->d_btn_show_modal}} btn_crete_new_row_sliders">
                        <i class="fas fa-photo-video nav-icon icon-btn-create-new-row"></i><p class="">{{trans('admin.create_new_sliders')}}</p>
                     </button>
                  </li>
                  <li class="nav-item">
                     <button   class="nav-link btn btn-success btn-create-new-row     ">
                        <a href="{{aurl('sliders/create')}}"  class="">
                           <i class="fas fa-photo-video nav-icon  "></i><i class="fa fa-scroll"></i> <p class="">{{trans('admin.page_create_sliders')}}</p>
                        </a>
                     </button>
                  </li>
               </ul>
            </li>
            <!--End  departments---------->
            <!-- start users ---------->
            <!-- End  users---------->
            <li class="d-none nav-item admin has-treeview {{active_menu('countreis')[0]}}">
               <a href="#" class="nav-link">
                  <i class="fa fa-flag-checkered nav-icon {{ setting()->d_icon_sid}} "></i><p>{{trans('admin.countreis')}}<i class="fas fa-angle-left {{ setting()->d_fa_angle}} right"></i></p>
               </a>
               <ul class="nav nav-treeview content_W_20px_h_20px" style="{{active_menu('countreis')[1]}}">

                  <li class="nav-item"> <a href="{{aurl('countreis')}}" class="nav-link">
                        <i class="fa fa-flag-checkered nav-icon {{ setting()->d_icon_sid}} "></i><p> <i class="fa fa-file-signature"></i> {{trans('admin.countreis')}}</p>
                     </a></li>
                  <li class="nav-item">
                     <button   class="nav-link btn btn-info btn-create-new-row {{ setting()->d_btn_show_modal}} btn_crete_new_row_countreis">
                        <i class="fa fa-flag-usa nav-icon icon-btn-create-new-row"></i><p class="">{{trans('admin.create_new_countreis')}}</p>
                     </button>
                  </li>
                  <li class="nav-item">
                     <button   class="nav-link btn btn-success btn-create-new-row     ">
                        <a href="{{aurl('countreis/create')}}"  class="">
                           <i class="fa fa-flag-usa nav-icon  "></i><i class="fa fa-scroll"></i> <p class="">{{trans('admin.page_create_countreis')}}</p>
                        </a>
                     </button>
                  </li>
               </ul>
            </li>
            <!--End  countreis---------->



{{---------------------------------------------------------------}}
{{--            <hr>--}}
            <li class="d-none nav-item admin has-treeview {{active_menu('trademarks')[0]}}">
               <a href="#" class="nav-link">
                  <i class="fa fa-flagcube nav-icon {{ setting()->d_icon_sid}} "></i><p>{{trans('admin.trademarks')}}<i class="fas fa-angle-left {{ setting()->d_fa_angle}} right"></i></p>
               </a>
               <ul class="nav nav-treeview content_W_20px_h_20px" style="{{active_menu('trademarks')[1]}}">

                  <li class="nav-item"> <a href="{{aurl('trademarks')}}" class="nav-link">
                        <i class="fa fa-cube nav-icon {{ setting()->d_icon_sid}} "></i><p> <i class="fa fa-file-signature"></i> {{trans('admin.trademarks')}}</p>
                     </a></li>
                  <li class="nav-item">
                     <button   class="nav-link btn btn-info btn-create-new-row {{ setting()->d_btn_show_modal}} btn_crete_new_row_trademarks">
                        <i class="fa fa-cube nav-icon icon-btn-create-new-row"></i><p class="">{{trans('admin.create_new_trademarks')}}</p>
                     </button>
                  </li>
                  <li class="nav-item">
                     <button   class="nav-link btn btn-success btn-create-new-row     ">
                        <a href="{{aurl('trademarks/create')}}"  class="">
                           <i class="fa fa-cube nav-icon  "></i><i class="fa fa-scroll"></i> <p class="">{{trans('admin.page_create_trademarks')}}</p>
                        </a>
                     </button>
                  </li>
               </ul>
            </li>
            <!--End  trademarks---------->

            <li class=" d-none nav-item admin has-treeview {{active_menu('manufacts')[0]}}">
               <a href="#" class="nav-link">
                  <i class="fa fa-user-cog nav-icon {{ setting()->d_icon_sid}} "></i><p>{{trans('admin.manufacts')}}<i class="fas fa-angle-left {{ setting()->d_fa_angle}} right"></i></p>
               </a>
               <ul class="nav nav-treeview content_W_20px_h_20px" style="{{active_menu('manufacts')[1]}}">

                  <li class="nav-item"> <a href="{{aurl('manufacts')}}" class="nav-link">
                        <i class="fa fa-user-cog nav-icon {{ setting()->d_icon_sid}} "></i><p> <i class="fa fa-file-signature"></i> {{trans('admin.manufacts')}}</p>
                     </a></li>
{{--                  <li class="nav-item">--}}
{{--                     <button   class="nav-link btn btn-info btn-create-new-row {{ setting()->d_btn_show_modal}} btn_crete_new_row_manufacts">--}}
{{--                        <i class="fa fa-user-cog nav-icon icon-btn-create-new-row"></i><p class="">{{trans('admin.create_new_manufacts')}}</p>--}}
{{--                     </button>--}}
{{--                  </li>--}}
                  <li class="nav-item">
                     <button   class="nav-link btn btn-success btn-create-new-row     ">
                        <a href="{{aurl('manufacts/create')}}"  class="">
                           <i class="fa fa-user-cog nav-icon  "></i><i class="fa fa-scroll"></i> <p class="">{{trans('admin.page_create_manufacts')}}</p>
                        </a>
                     </button>
                  </li>
               </ul>
            </li>
            <!--End  manufacts---------->

            <li class="d-none  nav-item admin has-treeview {{active_menu('shipping')[0]}}">
               <a href="#" class="nav-link">
                  <i class="fas fa-truck-moving nav-icon {{ setting()->d_icon_sid}} "></i><p>{{trans('admin.shipping')}}<i class="fas fa-angle-left {{ setting()->d_fa_angle}} right"></i></p>
               </a>
               <ul class="nav nav-treeview content_W_20px_h_20px" style="{{active_menu('shipping')[1]}}">

                  <li class="nav-item"> <a href="{{aurl('shipping')}}" class="nav-link">
                        <i class="fa fa-user-cog nav-icon {{ setting()->d_icon_sid}} "></i><p> <i class="fa fa-file-signature"></i> {{trans('admin.shipping')}}</p>
                     </a></li>
{{--                  <li class="nav-item">--}}
{{--                     <button   class="nav-link btn btn-info btn-create-new-row {{ setting()->d_btn_show_modal}} btn_crete_new_row_shipping">--}}
{{--                        <i class="fas fa-truck-moving nav-icon icon-btn-create-new-row"></i><p class="">{{trans('admin.create_new_shipping')}}</p>--}}
{{--                     </button>--}}
{{--                  </li>--}}
                  <li class="nav-item">
                     <button   class="nav-link btn btn-success btn-create-new-row     ">
                        <a href="{{aurl('shipping/create')}}"  class="">
                           <i class="fas fa-truck-moving nav-icon  "></i><i class="fa fa-scroll"></i> <p class="">{{trans('admin.page_create_shipping')}}</p>
                        </a>
                     </button>
                  </li>
               </ul>
            </li>
            <!--End  shipping---------->
            <li class=" d-none nav-item admin has-treeview {{active_menu('mall')[0]}}">
               <a href="#" class="nav-link">
                  <i class="fas fa-building nav-icon {{ setting()->d_icon_sid}} "></i><p>{{trans('admin.mall')}}<i class="fas fa-angle-left {{ setting()->d_fa_angle}} right"></i></p>
               </a>
               <ul class="nav nav-treeview content_W_20px_h_20px" style="{{active_menu('mall')[1]}}">

                  <li class="nav-item"> <a href="{{aurl('mall')}}" class="nav-link">
                        <i class="fas fa-building nav-icon {{ setting()->d_icon_sid}} "></i><p> <i class="fa fa-file-signature"></i> {{trans('admin.mall')}}</p>
                     </a></li>
{{--                  <li class="nav-item">--}}
{{--                     <button   class="nav-link btn btn-info btn-create-new-row {{ setting()->d_btn_show_modal}} btn_crete_new_row_mall">--}}
{{--                        <i class="fas fa-truck-moving nav-icon icon-btn-create-new-row"></i><p class="">{{trans('admin.create_new_mall')}}</p>--}}
{{--                     </button>--}}
{{--                  </li>--}}
                  <li class="nav-item">
                     <button   class="nav-link btn btn-success btn-create-new-row     ">
                        <a href="{{aurl('mall/create')}}"  class="">
                           <i class="fas fa-building nav-icon  "></i><i class="fa fa-scroll"></i> <p class="">{{trans('admin.page_create_mall')}}</p>
                        </a>
                     </button>
                  </li>
               </ul>
            </li>
            <!--End  mall---------->

            <li class="d-none nav-item admin has-treeview {{active_menu('color')[0]}}">
               <a href="#" class="nav-link">
                  <i class="fas fa-paint-brush nav-icon {{ setting()->d_icon_sid}} "></i><p>{{trans('admin.color')}}<i class="fas fa-angle-left {{ setting()->d_fa_angle}} right"></i></p>
               </a>
               <ul class="nav nav-treeview content_W_20px_h_20px" style="{{active_menu('color')[1]}}">

                  <li class="nav-item"> <a href="{{aurl('color')}}" class="nav-link">
                        <i class="fas fa-paint-brush nav-icon {{ setting()->d_icon_sid}} "></i><p> <i class="fa fa-file-signature"></i> {{trans('admin.color')}}</p>
                     </a></li>
                  <li class="nav-item">
                     <button   class="nav-link btn btn-info btn-create-new-row {{ setting()->d_btn_show_modal}} btn_crete_new_row_color">
                        <i class="fas fa-truck-moving nav-icon icon-btn-create-new-row"></i><p class="">{{trans('admin.create_new_color')}}</p>
                     </button>
                  </li>
                  <li class="nav-item">
                     <button   class="nav-link btn btn-success btn-create-new-row     ">
                        <a href="{{aurl('color/create')}}"  class="">
                           <i class="fas fa-building nav-icon  "></i><i class="fa fa-scroll"></i> <p class="">{{trans('admin.page_create_color')}}</p>
                        </a>
                     </button>
                  </li>
               </ul>
            </li>
            <!--End  color---------->
            <li class="d-none nav-item admin has-treeview {{active_menu('weights')[0]}}">
               <a href="#" class="nav-link">
                  <i class="fas fa-shipping-fast  nav-icon {{ setting()->d_icon_sid}} "></i><p>{{trans('admin.weights')}}<i class="fas fa-angle-left {{ setting()->d_fa_angle}} right"></i></p>
               </a>
               <ul class="nav nav-treeview content_W_20px_h_20px" style="{{active_menu('weights')[1]}}">

                  <li class="nav-item"> <a href="{{aurl('weights')}}" class="nav-link">
                        <i class="fas fa-shipping-fast  nav-icon {{ setting()->d_icon_sid}} "></i><p> <i class="fa fa-file-signature"></i> {{trans('admin.weight')}}</p>
                     </a></li>
                  <li class="nav-item">
                     <button   class="nav-link btn btn-info btn-create-new-row {{ setting()->d_btn_show_modal}} btn_crete_new_row_weight">
                        <i class="fas fa-truck-moving nav-icon icon-btn-create-new-row"></i><p class="">{{trans('admin.create_new_weight')}}</p>
                     </button>
                  </li>
                  <li class="nav-item">
                     <button   class="nav-link btn btn-success btn-create-new-row     ">
                        <a href="{{aurl('weights/create')}}"  class="">
                           <i class="fas fa-shipping-fast  nav-icon  "></i><i class="fa fa-scroll"></i> <p class="">{{trans('admin.page_create_weight')}}</p>
                        </a>
                     </button>
                  </li>
               </ul>
            </li>
            <!--End  weights---------->
            <li class="d-none nav-item admin has-treeview {{active_menu('sizes')[0]}}">
               <a href="#" class="nav-link">
                  <i class="fas fa-shipping-fast  nav-icon {{ setting()->d_icon_sid}} "></i><p>{{trans('admin.sizes')}}<i class="fas fa-angle-left {{ setting()->d_fa_angle}} right"></i></p>
               </a>
               <ul class="nav nav-treeview content_W_20px_h_20px" style="{{active_menu('sizes')[1]}}">

                  <li class="nav-item"> <a href="{{aurl('sizes')}}" class="nav-link">
                        <i class="fas fa-shipping-fast  nav-icon {{ setting()->d_icon_sid}} "></i><p> <i class="fa fa-file-signature"></i> {{trans('admin.sizes')}}</p>
                     </a></li>
                  <li class="nav-item">
                     <button   class="nav-link btn btn-info btn-create-new-row {{ setting()->d_btn_show_modal}} btn_crete_new_row_size">
                        <i class="fas fa-truck-moving nav-icon icon-btn-create-new-row"></i><p class="">{{trans('admin.create_new_size')}}</p>
                     </button>
                  </li>
                  <li class="nav-item">
                     <button   class="nav-link btn btn-success btn-create-new-row     ">
                        <a href="{{aurl('sizes/create')}}"  class="">
                           <i class="fas fa-shipping-fast  nav-icon  "></i><i class="fa fa-scroll"></i> <p class="">{{trans('admin.page_create_size')}}</p>
                        </a>
                     </button>
                  </li>
               </ul>
            </li>
            <!--End  sizes---------->

            <li class="d-none nav-item admin has-treeview {{active_menu('flavors')[0]}}">
               <a href="#" class="nav-link">
                  <i class="fas fa-shipping-fast  nav-icon {{ setting()->d_icon_sid}} "></i><p>{{trans('admin.flavors')}}<i class="fas fa-angle-left {{ setting()->d_fa_angle}} right"></i></p>
               </a>
               <ul class="nav nav-treeview content_W_20px_h_20px" style="{{active_menu('flavors')[1]}}">

                  <li class="nav-item"> <a href="{{aurl('flavors')}}" class="nav-link">
                        <i class="fas fa-shipping-fast  nav-icon {{ setting()->d_icon_sid}} "></i><p> <i class="fa fa-file-signature"></i> {{trans('admin.flavors')}}</p>
                     </a></li>
                  <li class="nav-item">
                     <button   class="nav-link btn btn-info btn-create-new-row {{ setting()->d_btn_show_modal}} btn_crete_new_row_flavor">
                        <i class="fas fa-truck-moving nav-icon icon-btn-create-new-row"></i><p class="">{{trans('admin.create_new_flavor')}}</p>
                     </button>
                  </li>
                  <li class="nav-item">
                     <button   class="nav-link btn btn-success btn-create-new-row     ">
                        <a href="{{aurl('flavors/create')}}"  class="">
                           <i class="fas fa-shipping-fast  nav-icon  "></i><i class="fa fa-scroll"></i> <p class="">{{trans('admin.page_create_flavor')}}</p>
                        </a>
                     </button>
                  </li>
               </ul>
            </li>
            <!--End  flavors---------->

            <li class="d-none nav-item admin has-treeview {{active_menu('orders')[0]}}">
               <a href="#" class="nav-link">
                  <i class="fas fa-shipping-fast  nav-icon {{ setting()->d_icon_sid}} "></i><p>{{trans('admin.orders')}}<i class="fas fa-angle-left {{ setting()->d_fa_angle}} right"></i></p>
               </a>
               <ul class="nav nav-treeview content_W_20px_h_20px" style="{{active_menu('orders')[1]}}">

                  <li class="nav-item"> <a href="{{aurl('orders')}}" class="nav-link">
                        <i class="fas fa-shipping-fast  nav-icon {{ setting()->d_icon_sid}} "></i><p> <i class="fa fa-file-signature"></i> {{trans('admin.orders')}}</p>
                     </a></li>
{{--                  <li class="nav-item">--}}
{{--                     <button   class="nav-link btn btn-info btn-create-new-row {{ setting()->d_btn_show_modal}} btn_crete_new_row_flavor">--}}
{{--                        <i class="fas fa-truck-moving nav-icon icon-btn-create-new-row"></i><p class="">{{trans('admin.create_new_flavor')}}</p>--}}
{{--                     </button>--}}
{{--                  </li>--}}
                  <li class="nav-item">
                     <button   class="nav-link btn btn-success btn-create-new-row     ">
                        <a href="{{aurl('orders/create')}}"  class="">
                           <i class="fas fa-shipping-fast  nav-icon  "></i><i class="fa fa-scroll"></i> <p class="">{{trans('admin.create_order')}}</p>
                        </a>
                     </button>
                  </li>
               </ul>
            </li>
            <!--End  orders---------->

            <li class="d-none nav-item admin has-treeview {{active_menu('comment')[0]}}">
               <a href="#" class="nav-link">
                  <i class="fas fa-shipping-fast  nav-icon {{ setting()->d_icon_sid}} "></i><p>{{trans('admin.comments')}}<i class="fas fa-angle-left {{ setting()->d_fa_angle}} right"></i></p>
               </a>
               <ul class="nav nav-treeview content_W_20px_h_20px" style="{{active_menu('comment')[1]}}">

                  <li class="nav-item"> <a href="{{aurl('comment')}}" class="nav-link">
                        <i class="fas fa-shipping-fast  nav-icon {{ setting()->d_icon_sid}} "></i><p> <i class="fa fa-file-signature"></i> {{trans('admin.comment')}}</p>
                     </a></li>
                  <li class="nav-item">
                     <button   class="nav-link btn btn-info btn-create-new-row {{ setting()->d_btn_show_modal}} btn_crete_new_row_comment">
                        <i class="fas fa-truck-moving nav-icon icon-btn-create-new-row"></i><p class="">{{trans('admin.create_new_comment')}}</p>
                     </button>
                  </li>
                  <li class="nav-item">
                     <button   class="nav-link btn btn-success btn-create-new-row     ">
                        <a href="{{aurl('comment/create')}}"  class="">
                           <i class="fas fa-shipping-fast  nav-icon  "></i><i class="fa fa-scroll"></i> <p class="">{{trans('admin.page_create_comment')}}</p>
                        </a>
                     </button>
                  </li>
               </ul>
            </li>
            <!--End  comment---------->            <!--End  comment---------->
{{--            <hr>--}}
            <!-- start users ---------->
            <li class=" nav-item admin has-treeview {{active_menu('users')[0]}}">
               <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-users-cog"></i><p>{{trans('admin.usersacount')}}<i class="fas fa-angle-left right"></i></p>
               </a>
               <ul class="nav nav-treeview content_W_20px_h_20px" style="{{active_menu('users')[1]}}">
                  <li class="nav-item">

                     <a href="{{aurl('users')}}"  class="nav-link btn  btn-create-new-row  ">
                        <i class="fa fa-user-cog nav-icon icon-btn-create-new-row"></i><i class="fa fa-scroll"></i> <p class="">{{trans('admin.users')}}</p>
                     </a>
                     <button   class="nav-link btn btn-info btn-create-new-row  btn_crete_new_row_users">
                        <i class="fa fa-user-plus nav-icon icon-btn-create-new-row"></i><p class="">{{trans('admin.create_user')}}</p>
                     </button>
                  </li>
                  <li class="nav-item">
                     <button   class="nav-link btn btn-success btn-create-new-row     ">
                        <a href="{{aurl('users/create')}}"  class="">
                           <i class="fa fa-user-cog nav-icon icon-btn-create-new-row"></i><i class="fa fa-file-alt"></i> <p class="">{{trans('admin.page_create_users')}}</p>
                        </a>
                     </button>
                  </li>
                  <aside class="{{setting()->d_type_user_sid}}">

                     <li class="nav-item"> <a href="{{aurl('users')}}" class="nav-link"><i class="fas btn-secondary fa-users nav-icon"></i><p> <i class="fa fa-file-signature"></i> {{trans('admin.usersacount')}}</p></a></li>
                     <li class="nav-item"> <a href="{{aurl('users')}}?level=user" class="nav-link"><i class="  btn-dark fas fa-user-tie nav-icon"></i><p>{{trans('admin.user')}}</p></a></li>
                     <li class="nav-item"> <a href="{{aurl('users')}}?level=vendor" class="nav-link"><i class="  btn-success fas fa-project-diagram nav-icon"></i><p>{{trans('admin.vendor')}}</p></a></li>
                     <li class="nav-item"> <a href="{{aurl('users')}}?level=company" class="nav-link"><i class="   btn-primary  fas icon_company fa-place-of-worship nav-icon"></i><p>{{trans('admin.company')}}</p></a></li>
                     <li class="nav-item"> <a href="{{aurl('users')}}?level=labor_Office" class="nav-link"><i class="  btn-warning fas fa-building nav-icon"></i><p>{{trans('admin.labor_Office')}}</p></a></li>
                     <li class="nav-item"> <a href="{{aurl('users')}}?level=corporation" class="nav-link"><i class="  btn-danger fas fa-archway nav-icon"></i><p>{{trans('admin.corporation')}}</p></a></li>
                     <li class="nav-item"> <a href="{{aurl('users')}}?level=store" class="nav-link"><i class="   btn-info fas fa-shopping-cart nav-icon"></i><p>{{trans('admin.store')}}</p></a></li>
                  </aside> {{-- {{setting()->d_type_user_sid}} --}}
               </ul>
            </li>
            <!-- End  users---------->

{{---------------------------------------------------------------}}


            {{-------------------------------------------------------------------------------------------}}
            {{---------------------start emoji------------------------------------------}}
            <li class="d-none  nav-item admin has-treeview {{active_menu('my_tools')[0]}}  {{ setting()->d_my_tools}} ">
               <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-users-cog"></i><p>{{trans('admin.my_tools')}}<i class="fas fa-angle-left {{ setting()->d_fa_angle}} right"></i></p>
               </a>
               <ul class="nav nav-treeview" style="{{active_menu('my_tools')[1]}}">
                  <li class="nav-item my_tools has-treeview {{active_menu('my_tools')[0]}}">
                  {{--*****************************--}}

                  <li class="nav-item my_tools has-treeview {{active_menu('my_tools')[0]}}">
                     <a href="#" class="nav-link">
                        <i class=" ">???? </i><p> ??????? ?????????????????????????   ?????????? ???? ???? ???? ???????<i class="fas fa-angle-left {{ setting()->d_fa_angle}} right"></i></p>
                     </a>
                     <ul class="nav nav-treeview" style="{{active_menu('my_tools')[1]}}">
                        <li class="nav-item my_tools has-treeview {{active_menu('my_tools')[0]}}">
                        {{--*****************************--}}
                        <li class="nav-item">
                           <a href="https://getemoji.com/"  class="nav-link btn    btn_hover  " target="_blank">
                              <i class=" nav-icon icon-btn-create-new-row"> ???? </i><p class="">  getemoji.com </p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="https://coolsymbol.com/emojis/emoji-for-copy-and-paste.html" target="_blank" class="nav-link btn    btn_hover  ">
                              <i class=" nav-icon icon-btn-create-new-row"> ????  2</i><p class="">  emoji-copy-and-paste </p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="https://textfac.es/" target="_blank" class="nav-link btn    btn_hover  ">
                              <i class=" nav-icon icon-btn-create-new-row"> </i><p class="">  textfac.es ??? ??? ???? ???? ???? ??????</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="https://www.lennyfaces.net/" target="_blank" class="nav-link btn    btn_hover  ">
                              <i class=" nav-icon icon-btn-create-new-row"></i><p class=""> lennyfaces.net( ?? ???? ??)</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="https://xn--i-7iq.ws/#page-top"  target="_blank" class="nav-link btn    btn_hover  ">
                              <i class=" nav-icon icon-btn-create-new-row"> ???? </i><p class=""> xn--i-7iq.ws</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="https://xn--i-7iq.ws/emojidomain/%E2%98%BA%F0%9F%98%81%F0%9F%98%82%F0%9F%98%83%F0%9F%98%84%F0%9F%98%85%F0%9F%98%86%F0%9F%98%89%F0%9F%98%8A%F0%9F%98%8B%F0%9F%98%8E%F0%9F%98%8D%F0%9F%98%98%F0%9F%92%A4%F0%9F%98%99%F0%9F%98%9A%E2%98%BA%F0%9F%99%82%F0%9F%A4%97%F0%9F%90%B9%F0%9F%A4%94%F0%9F%98%90%F0%9F%98%A4%F0%9F%98%B6%F0%9F%99%84%F0%9F%98%8F%F0%9F%98%A3%F0%9F%98%A5%F0%9F%98%AE%F0%9F%98%82"  target="_blank" class="nav-link btn    btn_hover  ">
                              <i class=" nav-icon icon-btn-create-new-row"> ???? </i><p class=""> xn--i-7iq.ws</p>
                           </a>
                        </li>
                        {{--*****************************--}}
                        </li>
                     </ul>
                  </li><!--nav-item emoji---------->
                  <!--start fontawesome---------->
                  <li class="nav-item my_tools has-treeview {{active_menu('my_tools')[0]}}">
                     <a href="#" class="nav-link">
                        <p>
                           <i class=" fas fa-cogs "></i>
                           <i class=" fas fa-laptop-code"></i>
                           <i class=" fab fa-fort-awesome "></i>
                           <i class=" fas fa-comment-dots"></i>
                           <i class=" fas fa-toilet-paper "></i>
                           <i class=" fas fa-road "></i>
                           <i class=" fas fa-images "></i>
                           <i class=" fas fa-map-marked-alt "></i>
                           <i class=" fas fa-spinner fa-spin "></i>
                        </p>
                     </a>
                     <ul class="nav nav-treeview" style="{{active_menu('my_tools')[1]}}">
                        <li class="nav-item my_tools has-treeview {{active_menu('my_tools')[0]}}">
                        {{--*****************************--}}
                        <li class="nav-item">
                           <a href="https://fontawesome.com/icons?d=gallery&m=free" class="nav-link btn btn_hover" target="_blank">
                              <i class=" fas fa-id-card nav-icon icon-btn-create-new-row"></i><p class=" fas fa-chart-line"> fontawesome.com </p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="https://themes-pixeden.com/font-demos/7-stroke/" class="nav-link btn btn_hover" target="_blank">
                              <i class="  pe-7s-car nav-icon icon-btn-create-new-row"></i><p class="pe-7s-film"> themes-pixeden.com </p>
                           </a>
                        </li>
                        {{--*****************************--}}
                        </li>
                     </ul>
                  </li><!-- End nav-item fontawesome---------->
                  {{--*****************************--}}
                  {{--*****************************--}}
                  <li class="nav-item my_tools has-treeview {{active_menu('my_tools_programing')[0]}}">
                     <a href="#" class="nav-link">
                        <i class="fas fa-laptop-code ">  </i><p> {{trans('admin.my_tools_programing')}}
                           ???????
                           <i class="fas fa-keyboard">  </i>
                           <i class="fas fa-file-code">  </i>
                           {{--                           <i class="fab fa-free-code-camp">  </i>--}}
                           <i class="fas fa-angle-left {{ setting()->d_fa_angle}} right"></i></p>
                     </a>
                     <ul class="nav nav-treeview" style="{{active_menu('my_tools')[1]}}">
                        <li class="nav-item my_tools has-treeview {{active_menu('my_tools')[0]}}">
                        {{--*****************************--}}
                        <li class="nav-item">
                           <a href="{{url('view')}}"  class="nav-link btn    btn_hover  " target="_blank">
                              <i class=" fas fa-code nav-icon icon-btn-create-new-row">   </i> <p class=""> {{trans('admin.clear_view')}}</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="{{url('cache')}}"  class="nav-link btn    btn_hover  " target="_blank">
                              <i class="  fas fa-server nav-icon icon-btn-create-new-row"> </i><p class=""> {{trans('admin.clear_cache')}}</p>
                           </a>
                        </li>

                        {{--*****************************--}}
                        </li>
                     </ul>
                  </li><!--nav-item emoji---------->
                  {{--*****************************--}}
                  </li>
               </ul>
            </li><!--nav-item my_tools---------->
            {{---------------------End   my tols------------------------------------------}}
             <li class=" d-none nav-item has-treeview">
               <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                     Layout Options
                     <i class="fas fa-angle-left {{ setting()->d_fa_angle}} right"></i>
                     <span class="badge badge-info right">6</span>
                  </p>
               </a>
               <ul class="nav nav-treeview">

                  {{-- ----------------------- mu tools --}}
                  <li class="nav-item">
                     <a href="https://www.google.com/search?q=hgljv%5Bl&oq=hgljv%5Bl&aqs=chrome..69i57j0l7.3188j1j9&sourceid=chrome&ie=UTF-8" target="_blank" class="nav-link">
                        <i class="far fa-circle nav-icon {{ setting()->d_icon_sid}} "></i>
                        <p>google transl.com</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="http://localhost/phpmyadmin/db_structure.php?server=1&db=cracky" target="_blank" class="nav-link">
                        <i class="far fa-circle nav-icon {{ setting()->d_icon_sid}} "></i>
                        <p>php my admin</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="https://www.youtube.com/watch?v=4vwlDuqrUm4" target="_blank" class="nav-link">
                        <i class="far fa-circle nav-icon {{ setting()->d_icon_sid}} "></i>
                        <p>youtube ???????? ????????????</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="http://localhost/pixel-eg/badry2020/last/laravel-last-badry2019/public/admin" target="_blank" class="nav-link">
                        <i class="far fa-circle nav-icon {{ setting()->d_icon_sid}} "></i>
                        <p>badry2020</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="https://mailtrap.io/inboxes/519360/messages/1600394067" target="_blank" class="nav-link">
                        <i class="far fa-circle nav-icon {{ setting()->d_icon_sid}} "></i>
                        <p> mailtrap.io <img src="https://mailtrap.io/assets/favicon-15d3458e7eba645015c84931d94c127fee554ac9214f5d11d112a7536d071412.ico"> </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="https://fontawesome.com/icons?d=gallery" target="_blank" class="nav-link">
                        <i class="far fa-circle nav-icon {{ setting()->d_icon_sid}} "></i>
                        <p>fontawesome.com/</p>
                     </a>
                  </li>

                  <li class="d-none nav-item">
                     <a href="https://getbootstrap.com/docs/4.0/components/alerts/" target="_blank" class="nav-link">
                        <i class="far fa-circle nav-icon {{ setting()->d_icon_sid}} "></i>
                        <p>bootstrap.com</p>
                     </a>
                  </li>
                  {{-- ----------------------- mu tools --}}









                  <li class="nav-item">
                     <a href="pages/layout/top-nav.html" class="nav-link">
                        <i class="far fa-circle nav-icon {{ setting()->d_icon_sid}} "></i>
                        <p>Top Navigation</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                        <i class="far fa-circle nav-icon {{ setting()->d_icon_sid}} "></i>
                        <p>Top Navigation + Sidebar</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="pages/layout/boxed.html" class="nav-link">
                        <i class="far fa-circle nav-icon {{ setting()->d_icon_sid}} "></i>
                        <p>Boxed</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                        <i class="far fa-circle nav-icon {{ setting()->d_icon_sid}} "></i>
                        <p>Fixed Sidebar</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="pages/layout/fixed-topnav.html" class="nav-link">
                        <i class="far fa-circle nav-icon {{ setting()->d_icon_sid}} "></i>
                        <p>Fixed Navbar</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="pages/layout/fixed-footer.html" class="nav-link">
                        <i class="far fa-circle nav-icon {{ setting()->d_icon_sid}} "></i>
                        <p>Fixed Footer</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="pages/layout/collapsed-sidebar.html" class="nav-link">
                        <i class="far fa-circle nav-icon {{ setting()->d_icon_sid}} "></i>
                        <p>Collapsed Sidebar</p>
                     </a>
                  </li>

                  {{------------------------------------------------------------}}
                  <li class="nav-item  ">
                  <li class="nav-item has-treeview">
                     <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                           Charts
                           <i class="right fas fa-angle-left {{ setting()->d_fa_angle}}"></i>
                        </p>
                     </a>
                     <ul class="nav nav-treeview">
                        <li class="nav-item">
                           <a href="pages/charts/chartjs.html" class="nav-link">
                              <i class="far fa-circle nav-icon {{ setting()->d_icon_sid}} "></i>
                              <p>ChartJS</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="pages/charts/flot.html" class="nav-link">
                              <i class="far fa-circle nav-icon {{ setting()->d_icon_sid}} "></i>
                              <p>Flot</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="pages/charts/inline.html" class="nav-link">
                              <i class="far fa-circle nav-icon {{ setting()->d_icon_sid}} "></i>
                              <p>Inline</p>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class="nav-item has-treeview">
                     <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tree"></i>
                        <p>
                           UI Elements
                           <i class="fas fa-angle-left {{ setting()->d_fa_angle}} right"></i>
                        </p>
                     </a>
                     <ul class="nav nav-treeview">
                        <li class="nav-item">
                           <a href="pages/UI/general.html" class="nav-link">
                              <i class="far fa-circle nav-icon {{ setting()->d_icon_sid}} "></i>
                              <p>General</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="pages/UI/icons.html" class="nav-link">
                              <i class="far fa-circle nav-icon {{ setting()->d_icon_sid}} "></i>
                              <p>Icons</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="pages/UI/buttons.html" class="nav-link">
                              <i class="far fa-circle nav-icon {{ setting()->d_icon_sid}} "></i>
                              <p>Buttons</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="pages/UI/sliders.html" class="nav-link">
                              <i class="far fa-circle nav-icon {{ setting()->d_icon_sid}} "></i>
                              <p>Sliders</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="pages/UI/modals.html" class="nav-link">
                              <i class="far fa-circle nav-icon {{ setting()->d_icon_sid}} "></i>
                              <p>Modals & Alerts</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="pages/UI/navbar.html" class="nav-link">
                              <i class="far fa-circle nav-icon {{ setting()->d_icon_sid}} "></i>
                              <p>Navbar & Tabs</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="pages/UI/timeline.html" class="nav-link">
                              <i class="far fa-circle nav-icon {{ setting()->d_icon_sid}} "></i>
                              <p>Timeline</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="pages/UI/ribbons.html" class="nav-link">
                              <i class="far fa-circle nav-icon {{ setting()->d_icon_sid}} "></i>
                              <p>Ribbons</p>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class="nav-item has-treeview">
                     <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                           Forms
                           <i class="fas fa-angle-left {{ setting()->d_fa_angle}} right"></i>
                        </p>
                     </a>
                     <ul class="nav nav-treeview">
                        <li class="nav-item">
                           <a href="pages/forms/general.html" class="nav-link">
                              <i class="far fa-circle nav-icon {{ setting()->d_icon_sid}} "></i>
                              <p>General Elements</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="pages/forms/advanced.html" class="nav-link">
                              <i class="far fa-circle nav-icon {{ setting()->d_icon_sid}} "></i>
                              <p>Advanced Elements</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="pages/forms/editors.html" class="nav-link">
                              <i class="far fa-circle nav-icon {{ setting()->d_icon_sid}} "></i>
                              <p>Editors</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="pages/forms/validation.html" class="nav-link">
                              <i class="far fa-circle nav-icon {{ setting()->d_icon_sid}} "></i>
                              <p>Validation</p>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class="nav-item has-treeview">
                     <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                           Tables
                           <i class="fas fa-angle-left {{ setting()->d_fa_angle}} right"></i>
                        </p>
                     </a>
                     <ul class="nav nav-treeview">
                        <li class="nav-item">
                           <a href="pages/tables/simple.html" class="nav-link">
                              <i class="far fa-circle nav-icon {{ setting()->d_icon_sid}} "></i>
                              <p>Simple Tables</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="pages/tables/data.html" class="nav-link">
                              <i class="far fa-circle nav-icon {{ setting()->d_icon_sid}} "></i>
                              <p>DataTables</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="pages/tables/jsgrid.html" class="nav-link">
                              <i class="far fa-circle nav-icon {{ setting()->d_icon_sid}} "></i>
                              <p>jsGrid</p>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class="nav-header">EXAMPLES</li>
                  <li class="nav-item">
                     <a href="pages/calendar.html" class="nav-link">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                           Calendar
                           <span class="badge badge-info right">2</span>
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="pages/gallery.html" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                           Gallery
                        </p>
                     </a>
                  </li>
                  <li class="nav-item has-treeview">
                     <a href="#" class="nav-link">
                        <i class="nav-icon far fa-envelope"></i>
                        <p>
                           Mailbox
                           <i class="fas fa-angle-left {{ setting()->d_fa_angle}} right"></i>
                        </p>
                     </a>
                     <ul class="nav nav-treeview">
                        <li class="nav-item">
                           <a href="pages/mailbox/mailbox.html" class="nav-link">
                              <i class="far fa-circle nav-icon {{ setting()->d_icon_sid}} "></i>
                              <p>Inbox</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="pages/mailbox/compose.html" class="nav-link">
                              <i class="far fa-circle nav-icon {{ setting()->d_icon_sid}} "></i>
                              <p>Compose</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="pages/mailbox/read-mail.html" class="nav-link">
                              <i class="far fa-circle nav-icon {{ setting()->d_icon_sid}} "></i>
                              <p>Read</p>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class="nav-item has-treeview">
                     <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                           Pages
                           <i class="fas fa-angle-left {{ setting()->d_fa_angle}} right"></i>
                        </p>
                     </a>
                     <ul class="nav nav-treeview">
                        <li class="nav-item">
                           <a href="pages/examples/invoice.html" class="nav-link">
                              <i class="far fa-circle nav-icon {{ setting()->d_icon_sid}} "></i>
                              <p>Invoice</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="pages/examples/profile.html" class="nav-link">
                              <i class="far fa-circle nav-icon {{ setting()->d_icon_sid}} "></i>
                              <p>Profile</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="pages/examples/e-commerce.html" class="nav-link">
                              <i class="far fa-circle nav-icon {{ setting()->d_icon_sid}} "></i>
                              <p>E-commerce</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="pages/examples/projects.html" class="nav-link">
                              <i class="far fa-circle nav-icon {{ setting()->d_icon_sid}} "></i>
                              <p>Projects</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="pages/examples/project-add.html" class="nav-link">
                              <i class="far fa-circle nav-icon {{ setting()->d_icon_sid}} "></i>
                              <p>Project Add</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="pages/examples/project-edit.html" class="nav-link">
                              <i class="far fa-circle nav-icon {{ setting()->d_icon_sid}} "></i>
                              <p>Project Edit</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="pages/examples/project-detail.html" class="nav-link">
                              <i class="far fa-circle nav-icon {{ setting()->d_icon_sid}} "></i>
                              <p>Project Detail</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="pages/examples/contacts.html" class="nav-link">
                              <i class="far fa-circle nav-icon {{ setting()->d_icon_sid}} "></i>
                              <p>Contacts</p>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class="nav-item has-treeview">
                     <a href="#" class="nav-link">
                        <i class="nav-icon far fa-plus-square"></i>
                        <p>
                           Extras
                           <i class="fas fa-angle-left {{ setting()->d_fa_angle}} right"></i>
                        </p>
                     </a>
                     <ul class="nav nav-treeview">
                        <li class="nav-item">
                           <a href="pages/examples/login.html" class="nav-link">
                              <i class="far fa-circle nav-icon {{ setting()->d_icon_sid}} "></i>
                              <p>Login</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="pages/examples/register.html" class="nav-link">
                              <i class="far fa-circle nav-icon {{ setting()->d_icon_sid}} "></i>
                              <p>Register</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="pages/examples/forgot-password.html" class="nav-link">
                              <i class="far fa-circle nav-icon {{ setting()->d_icon_sid}} "></i>
                              <p>Forgot Password</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="pages/examples/recover-password.html" class="nav-link">
                              <i class="far fa-circle nav-icon {{ setting()->d_icon_sid}} "></i>
                              <p>Recover Password</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="pages/examples/lockscreen.html" class="nav-link">
                              <i class="far fa-circle nav-icon {{ setting()->d_icon_sid}} "></i>
                              <p>Lockscreen</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="pages/examples/legacy-user-menu.html" class="nav-link">
                              <i class="far fa-circle nav-icon {{ setting()->d_icon_sid}} "></i>
                              <p>Legacy User Menu</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="pages/examples/language-menu.html" class="nav-link">
                              <i class="far fa-circle nav-icon {{ setting()->d_icon_sid}} "></i>
                              <p>Language Menu</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="pages/examples/404.html" class="nav-link">
                              <i class="far fa-circle nav-icon {{ setting()->d_icon_sid}} "></i>
                              <p>Error 404</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="pages/examples/500.html" class="nav-link">
                              <i class="far fa-circle nav-icon {{ setting()->d_icon_sid}} "></i>
                              <p>Error 500</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="pages/examples/pace.html" class="nav-link">
                              <i class="far fa-circle nav-icon {{ setting()->d_icon_sid}} "></i>
                              <p>Pace</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="pages/examples/blank.html" class="nav-link">
                              <i class="far fa-circle nav-icon {{ setting()->d_icon_sid}} "></i>
                              <p>Blank Page</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="starter.html" class="nav-link">
                              <i class="far fa-circle nav-icon {{ setting()->d_icon_sid}} "></i>
                              <p>Starter Page</p>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class="nav-header">MISCELLANEOUS</li>
                  <li class="nav-item">
                     <a href="https://adminlte.io/docs/3.0" class="nav-link">
                        <i class="nav-icon fas fa-file"></i>
                        <p>Documentation</p>
                     </a>
                  </li>
                  <li class="nav-header">MULTI LEVEL EXAMPLE</li>
                  <li class="nav-item">
                     <a href="#" class="nav-link">
                        <i class="fas fa-circle nav-icon {{ setting()->d_icon_sid}} "></i>
                        <p>Level 1</p>
                     </a>
                  </li>
                  <li class="nav-item has-treeview">
                     <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                           Level 1
                           <i class="right fas fa-angle-left {{ setting()->d_fa_angle}}"></i>
                        </p>
                     </a>
                     <ul class="nav nav-treeview">
                        <li class="nav-item">
                           <a href="#" class="nav-link">
                              <i class="far fa-circle nav-icon {{ setting()->d_icon_sid}} "></i>
                              <p>Level 2</p>
                           </a>
                        </li>
                        <li class="nav-item has-treeview">
                           <a href="#" class="nav-link">
                              <i class="far fa-circle nav-icon {{ setting()->d_icon_sid}} "></i>
                              <p>
                                 Level 2
                                 <i class="right fas fa-angle-left {{ setting()->d_fa_angle}}"></i>
                              </p>
                           </a>
                           <ul class="nav nav-treeview">
                              <li class="nav-item">
                                 <a href="#" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon {{ setting()->d_icon_sid}} "></i>
                                    <p>Level 3</p>
                                 </a>
                              </li>
                              <li class="nav-item">
                                 <a href="#" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon {{ setting()->d_icon_sid}} "></i>
                                    <p>Level 3</p>
                                 </a>
                              </li>
                              <li class="nav-item">
                                 <a href="#" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon {{ setting()->d_icon_sid}} "></i>
                                    <p>Level 3</p>
                                 </a>
                              </li>
                           </ul>
                        </li>
                        <li class="nav-item">
                           <a href="#" class="nav-link">
                              <i class="far fa-circle nav-icon {{ setting()->d_icon_sid}} "></i>
                              <p>Level 2</p>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class="nav-item">
                     <a href="#" class="nav-link">
                        <i class="fas fa-circle nav-icon {{ setting()->d_icon_sid}} "></i>
                        <p>Level 1</p>
                     </a>
                  </li>
                  <li class="nav-header">LABELS</li>
                  <li class="nav-item">
                     <a href="#" class="nav-link">
                        <i class="nav-icon far fa-circle text-danger"></i>
                        <p class="text">Important</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="#" class="nav-link">
                        <i class="nav-icon far fa-circle text-warning"></i>
                        <p>Warning</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="#" class="nav-link">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Informational</p>
                     </a>
                   </li><!-- /.nav-item-->
                  {{------------------------------------------------------------}}

               </ul>
            </li>


         </ul>
      </nav>
      <!-- /.sidebar-menu -->
   </div>
   <!-- /.sidebar -->
</aside>


  @if (session('lang') == 'ar')

  <style type="text/css">
   .nav-sidebar .nav-link>.right, .nav-sidebar .nav-link>p>.right {
    position: absolute;
    right: 90%!important;
    top: .7rem;
    left: 10% !important;
 </style>
  @endif
  @if (session('lang') == 'en')

  <style type="text/css">
 /*<!--  -->*/
.icon_count_table {
    font-size: 57px;
    margin-top: -67px;
    color: #fffimportant;
    /* float: right; */
    position: absolute;
    right: -70%;
}
.small-box {

    max-height: 160px;
    }




.inner{
    margin-left: 10px;
}


@media(max-width: 992px)
{
   .icon_count_table {
    font-size: 53px;
    margin-top: 0;
    color: #fffimportant;
    /* float: right; */
    position: relative;
    right: 0;
}
}
 </style>
  @endif
<style type="text/css">
   .small-box p {
    font-size: 19px;
    /* font-weight: bold; */
    font-family: cursive;
}
 .nav-sidebar>.nav-item {
    margin-bottom: 0;
    font-size: 14px;
}

 .nav-sidebar>.nav-item .nav-icon {
    font-size: 1.2rem;
    margin-right: 0!important;
    text-align: center;
    width: auto;
    padding: 0;
    margin-left: 3px!important;
}
[class*=sidebar-dark-] .nav-sidebar>.nav-item>.nav-link.active {
    color: #fff;
    box-shadow: 0 1px 3px rgba(0,0,0,.12), 0 1px 2px rgba(0,0,0,.24);
    font-size: 14px;
    height: 34px;
    /* line-height: 1; */
    letter-spacing: .4px;
}

.user-panel.content_preview_img_logo {
    padding: 0;
    margin: 0;
    height: 119px;
    padding: 0px 0px 0px;
}
.user-panel .image {
    /* display: inline-block; */
    /* padding-left: 0px; */
    position: absolute;
    width: 100%;
    height: 100%;
    padding: 0;
    margin: 0;
}
.icon_count_table {
    font-size: 65px;
    margin-top: 24px;
    color: #fff !important;
}
[class*=sidebar-dark-] .nav-treeview>.nav-item>.nav-link.btn-create-new-row {
    color: #fff;
    /* padding: 0; */
    /* padding-right: 18px; */
    padding-bottom: 0;
    padding-top: 0;
}



</style>