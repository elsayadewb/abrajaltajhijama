
@php
    if (empty (session('lingfront')))
    {
    $lang ='ar';
    }else{
    $lang = session('lingfront');
    }
@endphp



{{--------------------------------------------------}}
{{--------------------------------------------------}}
{{--------------------------------------------------}}
{{--------------------------------------------------}}



<section class="content_banner m_b_20 ">
    <div class=" container_owl_carousel container-fluid">
        <div class="row">
            <!-- ------------------------------>
            <div class="owl-carousel owl-theme owl_carousel_images">

                @foreach($products_paginate as $product_pagin)
                    <div class="item">
                        <div class="card card_banner" >
                            <img class="card-img-top" src="{{url('public/storage').Storage::url($product_pagin->photo)}}" alt="Card image cap">
{{--                            <div class="card-body"><a href="#"><h5 class="card-title">{{$product_pagin['product_name_'.$lang]}}</h5></a></div>--}}
{{--                            <div class="card-body"><a href="#"><h5 class="card-title">{{$product_pagin['description_'.$lang]}}</h5></a></div>--}}
                        </div> <!-- card_banner -->
                    </div><!--/. item-->
                @endforeach

                @foreach($files as $file)
                    <div class="item">
                        <div class="card card_banner" >
                            <img class="card-img-top" src="{{url('public/storage').Storage::url($file->full_file)}}" alt="Card image cap">
                         </div> <!-- card_banner -->
                    </div><!--/. item-->
                @endforeach
            </div><!--owl-carousel owl_carousel_banner-->
            <!-- --------------------------------------------------------------- -->
        </div><!--row-->
    </div><!--container-->
    <!-- -------------------------------------------------------------------------- -->
</section><!--content-banner-->
{{--------------------------------------------------}}
<div class=" d-none item">
    <figure class="snip1361"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample99.jpg" alt="sample99" />
        <figcaption>
            <h3>Desmond Eagle</h3>
            <p>The only skills I have the patience to learn are those that have no real application in life. </p>
        </figcaption>
        <a href="#"></a>
    </figure>
</div><!--/. item-->
 <br>
<script type="text/javascript">
    $('.owl_carousel_images').owlCarousel({
        loop: true,
        margin: 30,
        nav: true,
        navText: [
            '<i class="fa fa-angle-left"></i>',
            '<i class="fa fa-angle-right"></i>'
        ],
        dots: true,
        autoWidth: false,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        smartSpeed:3000,
        autoplay: true,
        responsive: {
            0: {
                items: 1,
                autoWidth: false
            },
            568: {
                items: 1,
                autoWidth: false
            },
            667: {
                items: 2,
                autoWidth: false
            },
            768: {
                items: 2,
                autoWidth: false
            },
            1000: {
                items: 3,
                autoWidth: false
            },
            1200: {
                items:6,
                autoWidth: false
            }
        }
    });
    {{----End  section videos --}}
</script>