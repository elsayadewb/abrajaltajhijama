

{{-----------------------------------}}
@php
    $lang = session('lang');

    if (empty (session('lang')))
    {
    $lang ='ar';
    }
@endphp
{{-----------------------------------}}
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <?php
        $i = 0;
        ?>
        @foreach($slider as $slid)

            <li data-target="#carouselExampleCaptions" data-slide-to="{{$i}}">
            <?php
            $i++;
            ?>
        @endforeach
    </ol>





    <div class="carousel-inner">


    <?php
    $slide = 0 ;
    ?>
    <!---------------->
        @foreach($slider as $slid)
            <div class="carousel-item  {{ $slide == 0 ? 'active':''}}">
                <img src="public/storage/{{$slid->photo}}" class="d-block w-100" alt="images sluder " ">

            </div>
        <?php
        $slide++;
        ?>
    @endforeach
    <!---------------->


    </div>



    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>