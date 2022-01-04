
@php
    if (empty (session('lingfront')))
    {
    $lang ='ar';
    }else{
    $lang = session('lingfront');
    }
@endphp

<!-- <div class="content_lodeng">
<div class="content_lodeng_insid">
    <div class="ring droid_arabic-- font_f_ge ">
        LOADING
        <span></span>
    </div>
</div>
</div>
<style>
   /* body{
        margin:0;
        padding:0;
        background-color:#262626;
        overflow: hidden;
        position: relative;
    }*/
    .content_lodeng_insid{
        margin: auto;
         position: absolute;
        top: 48%;
        left: 50%;
    }
    .content_lodeng{
        z-index: 99999999 !important;
        position: absolute;
        width: 100%;
        height: 100%;
        left: 0;
        right: 0;
        background: #000;
    }
    .ring{

        transform:translate(-50%,-50%);
        width:150px;
        height:150px;
        background: transparent;
        border: 3px solid #3c3c3c;
        border-radius:50%;
        text-align:center;
        line-height:150px;
        font-family: sans-serif;
        font-size:20px;
        color:#fff;
        letter-spacing:4px;
        text-transform:uppercase;
        text-shadow:0 0 10px #fff;
        box-shadow:0 0 20px rgba(0,0,0,.5);
    }
    .ring:before
    {
        content: '';
        position:absolute;
        top:-3px;
        left:-3px;
        width:100%;
        height:100%;
        border:3px solid transparent;
        border-top:3px solid #fff;
        border-right:3px solid #fff;
        border-radius:50%;
        animation: animateCircle 2s linear infinite;
    }
    .ring span
    {
        display:block;
        position:absolute;
        top: calc(50% - 2px);
        left: 50%;
        width: 50%;
        height: 4px;
        background: transparent;
        transform-origin: left;
        animation: animate 2s linear infinite;
    }
    .ring span:before
    {
        content: '';
        position: absolute;
        width: 16px;
        height:16px;
        border-radius: 50%;
        background: #fff;
        top: -6px;
        right: -8px;
        box-shadow: 0 0 20px #fff;
    }
    @keyframes animateCircle
    {
        0%
        {
            transform: rotate(0deg);
        }
        100%
        {
            transform: rotate(360deg);
        }
    }
    @keyframes animate
    {
        0%
        {
            transform: rotate(45deg);
        }
        100%
        {
            transform: rotate(405deg);
        }
    }

</style>
<script>
    $(window).load(function () {
    $('.content_lodeng ,.content_lodeng_insid,.ring').fadeOut(100);
    $('.content_lodeng').fadeOut(100);
    $('body').css('overflow','auto');
     });
</script> -->
<!--  <script async src="https://platform-api.sharethis.com/js/sharethis.js#property=5e7d3a6c92f54300123e5998&product=sticky-share-buttons"></script>
-->

<!--<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5e7d3c9b10594cb9"></script>-->
