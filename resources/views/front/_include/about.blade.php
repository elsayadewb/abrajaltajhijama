
@php
    if (empty (session('lingfront')))
    {
    $lang ='ar';
    }else{
    $lang = session('lingfront');
    }
@endphp

<aside class="content_about_larg font_f_b">
    <div class="container">
        <div class="row">
            @foreach($abouts as $about)


                <div class="col-md-12">
                    <div class="content_about">
                        <div class="info_about">
                 <h3 class="title_about_com">
                     {{$about['title_'.$lang]}}
                   </h3><!--/.title_about_com-->
                 <p class="info_about_company">

                            {{$about['content_'.$lang]}}

                      </p><!--/.info_about_company-->
                      </div><!--./info_about-->
                      <div class="content_img_about">        


                               <img class="img_about_larg" src="public/storage/{{$about->photo}}">
                          

                           </div><!--/.content_img_about-->

             </div><!--/.content_about-->  
             </div><!--/.col-md-12-->

            @endforeach

        </div><!--/.row-->
    </div><!--/.container-->
</aside>